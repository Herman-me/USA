<?php include "includes/header.php";

    echo
    '<div class="container">
      <div class="row">
        <div class="col-sm-12 whole">
          <div class="row">
            <div class="col-sm-6 student box" id="Mehdi">
                <img src="ass/img/student.png"><br>
              <div class="text">
                <p>
                  اگر دانش آموز هستید از اینجا وارد شوید <br>
                  شما باید همه ی <a href="">قوانین</a> استفاده از وبسایت را مطالعه کنید
                </p><br>
                <a href="student"><button>ورود به بخش دانشجویی <i class="fas fa-sign-in-alt"></i> </button></a>
                <a href="signupst.php"><button> <i class="fas fa-user-plus"></i>  ثبت نام</button></a>
              </div>
            </div>
            <div class="col-sm-6 ostad box">
              <img src="ass/img/teacher.png"><br>
              <div class="text">
                <p>
                  اگر استاد هستید از اینجا وارد شوید <br>
                  <br>
                </p><br>
                <a href="ostad"><button>ورود به بخش استاد</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
include "includes/footer.php";?>
