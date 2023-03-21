<?php
session_start();
//1. Connect Database
include '../php/connectDB.php';

//3.Write SQL Statement
$sql = "select * from course";

//limit number of items "select * from products limit 3";
//Manage pagination 
//echo $sql;

//4. Send sql to MySQl, get result back
$result = $con->query($sql);


//5. Count result
$count_row = mysqli_num_rows($result);

/*echo $count_row;
echo $count_id;
echo $course_name;
echo $course_desc;
echo $course_price;
echo $course_pic;*/

$con->close();
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
  <!-- Icon Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
  <!-- jquery -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


  <!-- CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <!-- my-css -->
  <link rel="stylesheet" href="courselist.css">
  <title>Course - S Gym</title>
</head>

<body style=" font-family: 'Mitr', sans-serif;">

  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="../home-login.php">
        <img src="../img/S Gym Logo.svg" alt="" width="50" height="60">
      </a>
      <a style="font-size: 20px;" class="navbar-brand fw-bold" href="../home-login.php">SGYM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin.php">Admin CP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">ข้อมูลส่วนตัว</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="all_course.php">คอร์สทั้งหมด</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">คอร์สของฉัน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">ร่วมงานกับเรา</a>
          </li>
        </ul>
        <div class="d-flex">

          <a href="../login.php"> <button class="btn " style="background-color: rgb(245, 133, 41);color: #000; ">Login</button></a>
        </div>
      </div>
    </div>
  </nav>


  <div class="container">
    <h2 class="text-center heading2">คอร์สทั้งหมด</h2>
    <div class="row g-3">

      <?php
      //6.Work with data
      if ($count_row != 0) {
        while ($rs = $result->fetch_assoc()) {
          echo "
                <div class='col-md-4'>
                    <div class='card shadow-sm'>
                        <img src='../img/course/" . $rs['course_pic'] . "' class='card-img-top productThumnail' alt='...'>
                        <div class='card-body'>
                            
                            <div class='d-flex justify-content-between'>
                                <h5 class='card-title'>คอร์ส" . $rs['course_name'] . "</h5>
                                <h5 class='card-title'>ราคา:  " . $rs['course_price'] . "</h5>
                            </div>
                            <p class='card-text'>" . $rs['course_desc'] . "</p>
                            
                            <div class='d-flex justify-content-between'>
                            <button type='button' class='btn btn-primary btn-block text-uppercase' data-bs-toggle='modal' data-bs-target='#alert_update'>แก้ไข</button>

                                                         
                            <button type='button' class='btn btn-danger btn-block text-uppercase' data-bs-toggle='modal' data-bs-target='#alert_delete'>ลบ</button>

                            <!-- Modal Delete -->
                            <div class='modal fade' id='alert_delete' tabindex='-1' aria-labelledby='alert_delete' aria-hidden='true'>
                              <div class='modal-dialog'>
                                <div class='modal-content'>
                                  <div class='modal-header'>
                                    <h5 class='modal-title' id='alert_delete'>ลบ</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                  </div>
                                  <div class='modal-body'>
                                    คุณต้องการลบคอร์สหรือไม่ ?
                                  </div>
                                  <div class='modal-footer'>
                                    <a href=../php/delete_course.php?course_id=" . $rs['course_id'] . "'><button type='submit' class='btn btn-danger'>ใช่</button></a>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>ไม่ใช่</button>

                                  </div>
                                </div>
                              </div>
                            </div>

                            </div>

                        </div>
                    </div>
                </div>";
        }
      }

      ?>


      <form>

        <!-- Modal update -->
        <div class='modal fade' id='alert_update' tabindex='-1' aria-labelledby='alert_update' aria-hidden="true">
          <div class='modal-dialog modal-dialog-scrollable'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='alert_update'>รายละเอียดคอร์ส</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label="Close"></button>
              </div>
              <div class='modal-body'>
                <p></p>
                <label for="name">ชื่อคอร์ส</label>
                <input class="form-control" type="text" aria-label="name" id="ืname" name="name" value="1234">
                <label for="name">รายละเอียด</label>
                <input class="form-control" type="text" aria-label="ืdescription" id="ืdescription" name="description" value='<?php echo $rs['course_desc'] ?>'>
                <label for="name">ราคา</label>
                <input class="form-control" type="text" aria-label="ืdescription" id="price" name="price" value='sda'>
              </div>
              <div class='modal-footer'>
                <button type='submit' class='btn btn-primary'>แก้ไข</button>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>ยกเลิก</button>

              </div>
            </div>
          </div>
        </div>



      </form>


    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
-->
</body>

</html>