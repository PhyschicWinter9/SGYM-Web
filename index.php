<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าเเรก - S Gym</title>
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
  <!-- Bs css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- my-css -->
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="style.css">
  link

</head>

<body style=" font-family: 'Mitr', sans-serif;">
  <!-- section 1 -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
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
          <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li> -->
          <li class="nav-item dropdown ">
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

  <!-- section 2 -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="object-fit: cover;">
        <img src="img/ตัวแบบ.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/ตัวแบบ2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/ตัวแบบ3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- section 3 -->

  <div class="container ">
    <div class="text-center mt-5 mb-5">
      <h1> ฟิตเนสในสไตล์ที่คุณต้องการ</h1>
    </div>

    <div class="row ms-5">
      <div class="col-mb-6 col-xl-6">
        <div class="row justify-content-center">
          <div class="col-mb-1 col-xl-1">
            <div>
              <i class="bi bi-alarm icon-size"></i>
            </div>
          </div>
          <div class="col-mb-11 col-xl-11 benefit  ">
            <h4 style="margin-bottom: 15px ;">เปิด 24 ชั่วโมง คุณสามารถมาเวลาไหนก็ได้</h4>
            <p>เรารู้ว่าการใช้ชีวิตในเมืองในแต่ละวันนั้นมีแต่เรื่องเครียด
              จนบางทีคุณอาจไม่มีแม้กระทั่งเวลาให้คุณได้ดูแลสุขภาพ และนี่คือเหตุผลที่ทำให้ฟิตเนส24เซเว่นต้องเปิด 24
              ชั่วโมง เพื่อให้คุณได้มีเวลามาออกกำลังกายกับเราเวลาไหนก็ได้ที่คุณสะดวก ทุกวันตลอด24ชั่วโมง</p>
          </div>
        </div>
      </div>



      <div class="col-mb-6 col-xl-6">
        <div class="row justify-content-center ">
          <div class="col-mb-1 col-xl-1">
            <div>
              <i class="bi bi-wallet icon-size "></i>
            </div>
          </div>
          <div class="col-mb-11 col-xl-11  benefit ">
            <h4 style="margin-bottom: 15px ;">ราคาสมเหตุสมผล</h4>
            <p>เราเชื่อว่าการออกกำลังกายที่ฟิตเนสเป็นสิ่งหนึ่งที่ทุกคนควรทำ เพราะไม่เพียงแต่จะได้สุขภาพที่ดี
              ยังถือได้ว่าเป็นอีกหนึ่งวิธีพักผ่อนของคนเมืองอีกด้วย
              ด้วยเหตุผลนี้ฟิตเนสของเราจำเป็นต้องมีราคาที่สมเหตุสมผลและเข้าถึงได้ทุกเพศทุกวัย
              บริการครบครันในราคาเริ่มต้นเพียงเดือนละ 899 บาท</p>
          </div>
        </div>
      </div>
    </div>
    <!-- 1 ท่อน -->
    <div class="row mt-5 ms-5">
      <div class="col-mb-6 col-xl-6">
        <div class="row justify-content-center ">
          <div class="col-mb-1 col-xl-1">
            <div>
              <i class="bi bi-credit-card-2-front icon-size "></i>
            </div>
          </div>
          <div class="col-mb-11 col-xl-11 benefit ">
            <h4 style="margin-bottom: 15px ;">เป็นสมาชิกกับเราสามารถเล่นได้ทุกสาขา
            </h4>
            <p>เราคิดว่าสถานที่ไม่ควรเป็นข้อจำกัดของการออกกำลังกาย ดังนั้นไม่ว่าคุณจะอยู่ที่ไหน ถ้าคุณเป็นสมาชิกกับเรา
              บัตรสมาชิกของคุณจะได้รับสามารถเข้าใช้บริการยิมของฟิตเนส24เซเว่นได้ฟรีในทุกสาขาทั่วโลกทั้งในประเทศไทย
              สวีเดน ฟินแลนด์ นอร์เวย์ และโคลอมเบีย</p>
          </div>
        </div>
      </div>

      <div class="col-mb-6 col-xl-6">
        <div class="row justify-content-center">
          <div class="col-mb-1 col-xl-1">
            <div>
              <i class="bi bi-person-fill icon-size "></i>
            </div>
          </div>
          <div class="col-mb-11 col-xl-11 benefit ">
            <h4 id="d1" style="margin-bottom: 15px ;">โซนยิมสำหรับผู้หญิง</h4>
            <p>การที่ยิมของเรามียิมโซนพิเศษสำหรับผู้หญิง เป็นอีกสิ่งหนึ่งที่ทำให้เราประสบความสำเร็จมาโดยตลอด
              ยิมของเรามีโซนพิเศษนี้เพื่อต้อนรับลูกค้าสุภาพสตรีทุกท่านที่ต้องการความเป็นส่วนตัว
              ซึ่งในโซนนี้เราเตรียมเครื่องออกกำลังทุกประภทที่เรามี
              มาให้บริการท่านสุภาพสตรีให้ได้ออกกำลังกายกันอย่างเต็มประสิทธิภาพ</p>
          </div>
        </div>
      </div>
    </div>
    <!-- section 4 -->

    <div class="container mt-5">

      <div class="row">
        <div class="col-mb-6 col-xl-6">
          <img id="img2" src="img/ข้างDropdown.jpg " style="width: 100% ; " alt="">
        </div>
        <div class="col-mb-6 col-xl-6">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <strong>ยิมของเรา</strong>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>เรากำลังขยายสาขาอย่างต่อเนื่อง</strong> โดยหาสถานที่ใหม่ๆที่เดินทางสะดวก
                  เหมาะสมกับการออกกำลังกาย และราคาที่เหมาะสม ขณะนี้เรามีมากกว่า 200 สาขาใน 5 ประเทศทั่วโลก
                  พวกเรามีความมุ่งมั่นที่จะเปิดสาขาใหม่ๆเพื่อต้อนรับสมาขิกของเราอยู่เสมอ
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="d1">
                <button id="d1" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <strong>อุปกรณและการให้บริการ</strong>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>เรามีเครื่องเล่นและเครื่องมือออกกำลังกายที่หลากหลาย</strong>
                  เรามีเครื่องเล่นและอุปกรณ์ที่หลากหลายที่จะคอยช่วยคุณในการออกกำลังกายให้ง่ายและมีประสิทธิภาพยิ่งขึ้น
                  <br>
                  <li class="list">คาร์ดิโอ & พื้นที่สำหรับเครื่องออกกำลังกาย</li>
                  <li class="list">ฟรีเวท & พื้นที่สำหรับการออกกำลังกาย</li>
                  <li class="list">พื้นที่และเครื่องสำหรับยืดกล้ามเนื้อ</li>
                  <li class="list">ยิมสำหรับผู้หญิง – แยกเป็นโซนพิเศษสำหรับผู้หญิงเท่านั้น</li>
                  <li class="list">ออกกำลังกายเป็นกุล่ม</li>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <strong>การสมัครสมาชิก</strong>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>ราคาที่สมเหตุสมผลและสามารถเข้าได้ทุกสาขา</strong>
                  คุณสามารถออกกำลังกายในแบบที่คุณต้องการได้เลย ค่าบริการรายเดือนของเราเริ่มต้นที่ 899 บาทต่อเดือน
                  และสำหรับใครที่ต้องการจ่ายเป็นแบบระยะยาว เรายังมีแพคเกจแบบ 6 เดือนและ 12 เดือนอีกด้วย
                  <li class="list">เปิดให้บริการทุกวัน</li>
                  <li class="list">มีการออกกำลังกายแบบกลุ่มให้เลือกมากมาย</li>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
<!-- section 5 -->

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