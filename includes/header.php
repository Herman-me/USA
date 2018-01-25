<?php  session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>مهدی _ رحیمی</title>

    <!-- Bootstrap css style -->
    <link rel="stylesheet" href="ass/css/bootstrap.css">
    <link rel="stylesheet" href="ass/css/bootstrap-rtl.css">

    <!-- Fontawesome style adding -->
    <!-- <link rel="stylesheet" href="ass/css/font-awesome.min.css"> -->

    <!-- Adding animate css Style -->
    <link rel="stylesheet" href="ass/css/animate.css">

    <!-- Adding custum style  -->
    <link rel="stylesheet" href="ass/css/style.css">

    <!-- Font awesome new -->
    <script defer src="ass/js/fontawesome-all.js"></script>

    
      <!-- JQuery -->
      <script type="text/javascript" src="ass/js/jquery.js"></script>
      <!-- Main js -->
      <script type="text/javascript" src="ass/js/main.js"></script>



  </head>
  <body>
<?php if (isset($_GET['error'])): ?>
    <?php 
        $error = htmlentities($_GET['error']);
    ?>

    <div class="error">
        <h4><i class="fas fa-times" id="close"></i>  <?php echo $error; ?></h4>
    </div>
<?php endif ?>