<?php
include "config.php";

/**
 * this class will connect to Database
 */
class Database
{

  private $db_name = DB_NAME;
  private $db_host = DB_HOST;
  private $db_pass = DB_PASS;
  private $db_user = DB_USER;


  private $link;

  function __construct()
  {
    $this->connect();
  }

  private function connect()
  {
    $this->link = new Mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
    $this->link->query('SET NAMES utf8');
  }


  public function get_all_table($table)
  {
    $this->link->real_escape_string($table);
    $res = $this->link->query("SELECT * FROM $table");
    if ($res->num_rows > 0) {
      return $res;
    }
    return FALSE;
  }

  /**
  * Insert into Database Student Table
  */
  public function register_st($fname,$code)
  {
    $var = array($fname,$code);
    $escape = $this->escape($var);
    $insert_in_student = $this->link->query("INSERT INTO student(fname,code) VALUES('$escape[0]','$escape[1]')");
    if ($insert_in_student) {
      session_start();
      $_SESSION['registered_st'] = $var;
      return TRUE;
    }
    else{
      die("the connection has ben dead");
    }
  }

  /**
  * Insert into ostad tb
  */
  public function register_os($fname,$personalcode)
  {
    $var = array($fname,$personalcode);
    $escape = $this->escape($var);
    $insert_in_teacher = $this->link->query("INSERT INTO student(fname,personalcode) VALUES('$escape[0]','$escape[1]')");
    if ($insert_in_teacher) {
      return TRUE;
    }
    else{
      die("the connection has ben dead");
    }
  }

  /**
  * Select lessen for ostad
  */
  public function select_lessen($id,$lessen)
  {
    $ar = array($id,$lessen);
    $escaped = $this->escape($ar);
    $res = $this->link->query("UPDATE ostad SET lessencode='$escaped[1]' WHERE id='$escaped[0]'");
    if ($res) {
      return $res;
    }
    else{return FALSE;}
  }

  public function add_lessen($st_id,$lessens)
  {
    $escaped_lessens = $this->escape($lessens);
    $escaped_st_id = $st_id;
    // $lessens = $escaped[0].",".$escaped[1].",".$escaped[2].",".$escaped[3];
    foreach ($escaped_lessens as $key => $value) {
      $result = $this->link->query("INSERT INTO selected_lessen(for_st,lessen) VALUES('$st_id',".$value.")");
    }
    if ($result) {
      return false;
    }
    else{
      return TRUE;
    }

  }

  public function add_score($id,$lessen_id)
  {
    
  }

  /**
  * Escape values
  */
  private function escape($var)
  {
    if (is_array($var)) {
      $result = array();
      $ar = array("<br>mehdi" , "<br>ali");
      foreach ($var as $key => $value) {
      $escape = $this->link->real_escape_string($value);
      $result[$key] = $escape;
      }
    }
    else{
      $result = $this->link->real_escape_string($var);
    }
    return $result;
  }


}




$mehdi = new Database;
$st_id = 5;
$lessens = array(4,5,3,4);
$addls = $mehdi->add_lessen($st_id,$lessens);























 ?>