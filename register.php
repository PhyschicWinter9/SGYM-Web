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
  $error_message = "อีเมล์นี้ได้ถูกใช้งานไปแล้ว";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- logo -->
  <link rel="shortcut icon" href="img/S Gym Logo.svg" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- jquery -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
    $(function() {
      $("#birthday").datepicker({
        dateFormat: "dd/mm/yy",
        autoclose: true,
        todayHighlight: true
      });
    });
  </script>




  <!-- CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <!-- my-css -->
  <link rel="stylesheet" href="style.css">
  <title>สมัครสมาชิก - S Gym</title>
</head>

<body>

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
            <a style="color: black;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

          <a href="login.php"> <button class="btn " style="background-color: rgb(245, 133, 41);color: #000; ">Login</button></a>
        </div>
      </div>
    </div>
  </nav>

  <div class="d1">
    <form method="POST" action="php/addmember.php">
      <div class="card">
        <div class="text-center">
          <h3>Create an account</h3> <span class="abt">Already have an account? <a href="login.php">Sign In</a></span>
        </div>


        <div class="mb-1">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" aria-label="email" aria-describedby="name" id="name" name="name" placeholder="Name" required>
        </div>


        <div class="mb-1 inputbox">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-select" aria-label="Gender" id="gender" name="gender">
            <option value="None">Choose Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="mb-1">
          <label for="birthday" class="form-label">BirthDay</label>
          <input id="birthday" class="form-control" type="text" name="birthday" placeholder="Choose Birthday" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input id="age" placeholder="อายุ" class="form-control" maxlength="2" type="text" name="age" required>
        </div>

        <div class="mb-1 input-group">
          <span class="input-group-text">Weight</span>
          <input type="text" aria-label="weight" class="form-control" id="weight" name="weight" maxlength="3" required>
          <span class="input-group-text">Height</span>
          <input type="text" aria-label="height" class="form-control" id="height" name="height" maxlength="3" required>
        </div>


        <div class="mb-1">
          <label for="Email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="Email" placeholder="name@example.com" name="email" required>
        </div>

        <div class="mb-1">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="************" name="password" required>
        </div>

        <p class="errormsg mt-2" style="color: red; font-weight: bold;"><?php echo $error_message; ?></p>
        <div class="text-center">
          <!-- <a href="pay.html"><button type="submit" class="btn btn-outline-success" id="submit" value="submit"><i class="bi bi-check-lg"></i>&nbsp;Confirm with Payment</button></a> -->
          <button type="button" class="btn btn-outline-success" id="submit" value="submit" data-bs-toggle="modal" data-bs-target="#alert"><i class="bi bi-check-lg"></i>&nbsp;Confirm</button>

          <button type="reset" class="btn btn-outline-danger" id="reset" value="reset"><i class="bi bi-x-lg"></i>&nbsp;Reset</button>


        </div>


        <div class="modal fade" id="alert" tabindex="-1" aria-labelledby="alert" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="alert">คุณแน่ใจหรือไม่ ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ตรวจสอบข้อมูลของคุณให้ถูกต้อง หากตรวจสอบแล้วกดปุ่ม Submit.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </div>
        </div>




      </div>
    </form>




  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>