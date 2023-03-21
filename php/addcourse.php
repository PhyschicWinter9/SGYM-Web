


<?php

include 'connectDB.php';

$name = $_POST['course_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$img = $_POST['img'];


echo $name;
echo $description;
echo $price;
echo $img;



$sql = "insert into course (course_name,course_desc,course_price,course_pic) values (?,?,?,?)";


$statement = $con->prepare($sql);
$statement->bind_param('ssis', $name, $description, $price, $img);






// i: integer, s:string, d:double, b:blob




if ($statement->execute()) {
    header("location:../complete.php") .  $con->insert_id;
    echo $statement->affected_rows;
} else {

    header("location:../course_cp.php?error=1");
    //die('Error : ' . $con->error);
}

$statement->close();
$con->close();

    //ถ้าต้องการ เข้ารหัส password ให้ดูตัวอย่างที่นี่ https://code-boxx.com/password-encrypt-decrypt-php/
?>
