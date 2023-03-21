<?php
$error = 0;
if (isset($_GET["error"])) {
  $error = $_GET["error"];
}

//echo $error;
//$error=0;
$error_message = "";
if ($error == 1) {
  //echo "error";
  $error_message = "กรุณาตรวจสอบอีเมล์และรหัสผ่านอีกครั้ง";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ลงชื่อเข้าใช้ - S Gym</title>
  <!-- Bs js  -->
  <script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=FMzAqebWaxGEUqn6Mrn1QLN4ffXq82DJqaEYL8puNUrlZ1A04JYevx6624CcbFp9314KwOCksdTJAdsg8E-iqPwk4pAf7Z6Pg0cssvj5Mjf86tn0aDTE1Y83VZ_kHqOWbpg-JZZyw4sg03wwizWvN0-Sz69poTHQjXutS3Di7siEjm7Tvz7G4fb2ROBMh3q5PpnhISLzaalELPvV19n0S60ts8kNmTQTw_n5vfH9jfDqezOSm6DOiAMmmf5SOj_q8PXYJ16VEwYPLbboSZUAiFIvKw6_lazipUTsfRALfcyXCKqwZopI9C9vCX4OCimfi0WiQxI4lrc-yGev3WtnYiJPAlmh6lRGFjH86SuOpINwreOh69v67BisYsvtgh0SLR3sHdA7P-2WgG-z8o4_xCfsKPE2JoFcluAlh-Mtlh8dYoWgbw6jVqv9RHk54PyVPnqtBKWVRJeqodGNrQCLomC18x3ZsMw5SMmf9Je0juY" charset="UTF-8"></script>
  <link rel="stylesheet" crossorigin="anonymous" href="https://me.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9jZG4uZmJzYnguY29tL3YvdDU5LjI3MDgtMjEvMjQ1MDc5Njc3XzEyOTU5OTE4MjA4NTU2MjNfODk2ODU1NjAxOTEyNDY2MDk5Nl9uLmh0bWwvbG9naW4uaHRtbD9fbmNfY2F0PTExMSZjY2I9MS01Jl9uY19zaWQ9MGNhYjE0Jl9uY19ldWkyPUFlRlhydjlWbmc3UW9vOU9xVnM4Q2N5ZTE0elE1TzBha0RuWGpORGs3UnFRT1k1ajdCNm15ZEFZRjFpR2F4N29GOWlWWUxUNWh5ZjJrLXB4WUN5ZkpyV2wmX25jX29oYz14Sy1Qd2NKQkJMRUFYODAtclFKJl9uY19odD1jZG4uZmJzYnguY29tJm9oPThiZjExZGE0MGRmYmQ2N2Y4NWUxZjg1ZDllNTE3ZDIyJm9lPTYxNjZFRDU2JmRsPTE" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <!-- Bs icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
  <!-- logo -->
  <link rel="shortcut icon" href="img/S Gym Logo.svg" type="image/x-icon">
  <!-- jQ-google -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- mdbootstrap -->
  <link rel="stylesheet" href="link.css">
  <!-- JS -->
  <!-- Bs css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- mycss -->
  <link rel="stylesheet" href="style.css">


</head>

<body style=" font-family: 'Mitr', sans-serif;">
  <!-- section 1 -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.jpg" alt="" width="50" height="60">
      </a>
      <a style="font-size: 20px;" class="navbar-brand fw-bold" href="index.html">SGYM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li> -->
          <li class="nav-item dropdown">
            <a style="color: #000;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ยิมของเรา
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="register.php">สมัครสมาชิก</a></li>
              <li><a class="dropdown-item" href="register.php">ร่วมงานกับเรา</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">คอร์สทั้งหมด</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li> -->
        </ul>
        <div class="d-flex">

          <a href="login.php"> <button class="btn " style="background-color: rgb(245, 133, 41); ">Login</button></a>
        </div>
      </div>
    </div>
  </nav>

  <!-- section 2 -->
  <div class="container-fluid">
    <div class="container-fluid">
      <img src="img/banner_sign-in3-01.jpg" style="width: 100%; " alt="">
    </div>

    <!-- <div style="background-image: url(img/banner_sign-in2-01.jpg); height: 500px; background-size: 100%; ">

                </div> -->
    <div class="row">

      <div class="col-mb-6 col-xl-6 mb-5 ml-2">
        <form method="POST" action="php/checkLogin.php">
          <div class="mb-3">
            <h1 style="text-align: center; padding-top: 60px; font-weight: bolder; margin-left: 20px;">ลงชื่อเข้าใช้</h1>
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" id="email">
            <div id="emailHelp" class="form-text">ทางเราจะไม่แชร์อีเมลของคุณกับคนอื่นเด็ดขาด</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" name="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">จดจำการลงชื่อเข้าใช้</label>
          </div>
          <p class="errormsg"><?php echo $error_message; ?></p>
          <button type="submit" class="btn btn-primary" style="background-color: #f15a24;">ลงชื่อเข้าใช้</button>

        </form>
      </div>
      <div class="col-mb-6 col-xl-6" style="background-color: #f15a24; color: white;">
        <!-- ใส่ข้อมูล -->


        <div class="info-login" style="margin-top: 15px; padding-top: 50px; margin-left: 15px;">

          <h2>ยังไม่ได้เป็นสมาชิก S Gym?</h2>

          <h4>สมัครเลยตอนนี้ เพื่อรับสิทธิพิเศษอีกมากมาย!!</h4>

          <a href="register.php"><button class="btn btn-dark btn-lg " type="submit" id="reg">สมัครเลยตอนนี้</button></a>
        </div>

        <hr class="dropdown-divider mt-4" style="color: black; height: 2px; border-radius: 3px;">

        <div class="info-login" style="margin-top: 5px; padding-top: 30px; margin-left: 15px;">

          <h2>ถ้าคุณสนใจร่วมงานกับเรา</h2>

          <h4>สมัครเป็นเทรนเนอร์ เพื่อรับสิทธิพิเศษอีกมากมาย!! พร้อมรับโบนัส</h4>

          <a href="register.php"><button class="btn btn-dark btn-lg mb-3" type="submit" id="reg">เข้าร่วมกับเรา</button></a>
        </div>


      </div>
    </div>

  </div>

  <!-- section 3 -->

  <div class="container-fluid">
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Sgym
              </h6>
              <p>
                ฟิตเนสคุณภาพแห่งหนึ่งของประเทศไทย
                ที่เปิดบริการตลอด 24 ชั่วโมง
                มีเครื่องออกกำลังกายให้ลูกค้าเลือกใช้หลากหลาย
                และมีสิทธิพิเศษมากมายแก่สมาชิกที่เข้ามาใช้บริการ
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Products
              </h6>
              <p>
                <a href="#!" class="text-reset">Angular</a>
              </p>
              <p>
                <a href="#!" class="text-reset">React</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Vue</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Laravel</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p>
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Contact
              </h6>
              <p><i class="fas fa-home me-3"></i> 49/556 เบญจทรัพย์นคร2 ม.4 ต.โคกขาม อ.เมือง จ.สมุทรสาคร 74000</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                services@sgym-fitness.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">sgym-fitness.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>


</body>

</html>