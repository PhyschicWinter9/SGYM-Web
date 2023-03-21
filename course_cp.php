<?php
include 'php/connectDB.php';
//3.Write SQL Statement
$sql = "SELECT * FROM course";

//limit number of items "select * from products limit 3";
//Manage pagination 
//echo $sql;

//4. Send sql to MySQl, get result back
$result = $con->query($sql);


//5. Count result
$count_row = mysqli_num_rows($result);


//Check ERROR
$error = 0;
if (isset($_GET["error"])) {
    $error = $_GET["error"];
}

//echo $error;
//$error=0;
$error_message = "";
if ($error == 1) {
    //echo "error";
    $error_message = "ไม่สามารถเพิ่มคอร์สได้";
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มคอร์ส - S Gym</title>
    <!-- Bs js  -->
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
    <link rel="stylesheet" href="style.css">
    <!-- Bs css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- my-css -->
    <!-- <link rel="stylesheet" href="Successful.css"> -->
    <!-- JS -->
    <script src="js/upload.js"></script>



    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/course_cp.css">
</head>

<body style=" font-family: 'Mitr', sans-serif;">
    <!-- section 1 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.jpg" alt="" width="50" height="60">
            </a>
            <a style="font-size: 20px;" class="navbar-brand fw-bold" href="index.php">SGYM</a>
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

                    <a href="login.php"> <button class="btn " style="background-color: rgb(245, 133, 41);color: #000; ">Login</button></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- section 2 -->

    <div class="container mx-auto">
        <div class="row add border border-dark rounded rounded-3 border-2">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="topic">เพิ่มคอร์ส</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form method="POST" action="php/addcourse.php"">
                                <div class=" form-group mb-3">
                                <label for="course_name">ชื่อคอร์ส</label>
                                <input id="course_name" name="course_name" type="text" class="form-control validate" required />
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">รายละเอียด</label>
                            <textarea class="form-control validate" rows="3" name="description" required></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3">
                                <label for="price">ราคา
                                </label>
                                <input id="price" name="price" type="text" class="form-control" required data-large-mode="true" />
                            </div>

                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4 file-upload ">
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' name="fileToUpload" id="fileToUpload" onchange="readURL(this);" accept="course/*" />
                            <div class="drag-text">
                                <i class="bi bi-cloud-upload" style="font-size: 100px;"></i>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="errormsg mt-2" style="color: red; font-weight: bold;"><?php echo $error_message; ?></p>
                        <button type="button" class="btn btn-upload btn-block text-uppercase" data-bs-toggle="modal" data-bs-target="#alert_addcourse">เพิ่มคอร์ส</button>
                    </div>


                    <div class="modal fade" id="alert_addcourse" tabindex="-1" aria-labelledby="alert_addcourse" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="alert_addcourse">เพิ่มรายการคอร์ส</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    คุณต้องการเพิ่มคอร์สหรือไม่ ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>



</body>

</html>