<?php include_once("./php/homeback.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی</title>
    <link type="text/css" href="./css/home.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>

    <div class="mynav sticky-top">
        <a class="navbar-brand" href="home.php">
            <img src="./css/nasir_divar.png" alt="دیوار" loading="lazy">
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item" id="submit-ads">

                <a class="nav-link active" aria-current="page" href="#" onclick="submitAdsPage(<?php echo (isset($_COOKIE['username'])); ?>)">ثبت آگهی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contactus">تماس با ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">درباره ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="register()">ثبت نام</a>
            </li>
            <li class="nav-item">
                <?php
                // echo "ssalm" ;
                // var_dump($_COOKIE);
                if (!isset($_COOKIE["username"])) {
                    echo ' <a class="nav-link" href="#" onclick="login()">ورود</a>';
                } else {
                    echo '<a class="nav-link" href="logout.php">خروج</a>';
                    echo '<li class="username nav-item"><a class="nav-link">خوش آمدی    ' . $_COOKIE['username'] . '</a></li>';
                }
                ?>

            </li>
        </ul>
    </div>
    
    <div class="AboutUs" id="AboutUs">
        <div class="aboutus pt-5">
            <div class="container">

                <div class="row">
                    <div class="col-sm-6 AboutUs-info pr-5">

                        <h1 class="title ">درباره دیوار نصیر</h1>
                        <p id="description">
                            در دیوار نصیر  به آسانی می‌توانید نیازمندی‌هایتان را بیابید اگر به دنبال خدمت یا کالایی با کیفیت به صرفه و امن هستید اصلا جای خوبی نیامدید
                            این پروژه صرفا برای گرفتن نمره زده شده است و باگ از در و دیوار آن میریزد.</p>


                    </div>

                    <div class="AboutUs-logo col-sm-6 ">
                        <img class=" mx-auto d-block pt-5" src="./css/nasir_divar.png" alt="Logo ">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr class="rounded">
    <div class="main-ads">
        <div class="ads container-fluid ">

            <div class="row mx-3">
                <?php foreach ($ads as $value) : ?>
                    <div class="col-md-4">
                        <div class="ads-card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary" title="نوع"><?= $value['type']; ?></strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href=<?php echo $baseUrl . "showAd?id=" . $value['id'] ?> title="نام"><?= $value['name']; ?></a>
                                </h3>
                                <div class="mb-1 text-muted" title="شهر"><?= $value['city']; ?></div>
                                <p class="card-text mb-auto" title="توضیحات"><?= $value['description']; ?></p>
                                <a id="cost" title="قیمت"><?= convertEnglishNumbersToPersian($value['cost']); ?> تومان</a>
                                <a href="#" class="btn btn-primary">مشاهده شماره تماس</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" src=<?php echo "upload/" . $value['image']; ?> alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php
        // var_dump($_SERVER);
        ?>
    </div>


    <!-- // pagination -->
    <div class="pagination d-flex justify-content-center">
        <?php
        for ($i = 1; $i <= $total_pages; $i++) {

            echo '<a id="page" href=?pageno='. $i . '>' . $i . '</a>';
        }?>
    </div>



    <footer class="page-footer font-small blue-grey lighten-5 " id="contactus">



        <!-- Footer Links -->
        <div class="footer-links container text-center text-md-left ">

            <!-- Grid row -->
            <div class="row mt-3 dark-grey-text ">

                <div class="col-md-3 col-lg-4 col-xl-3 mb-4 ">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold text-md-center pb-3">
                        <img src="./css/nasir_divar.png" alt="logo " width="130 ">

                    </h6>

                </div>

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4 ">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold text-center pb-3">
                        <span>چارسوق</span>
                    </h6>
                    <p style="text-align: center;">
                        پروژه درس مهندسی اینترنت
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="contact-us col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-center ">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold pb-3">تماس با ما</h6>
                    <p>
                        <i class="fa fa-home "></i> ایران( تهران - بیرجند)
                    </p>
                    <p>
                        <i class="fa fa-envelope "></i> info@charsough.com
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->


        <!-- Copyright -->
        <div class="footer-copyright text-center py-1 font-weight-bold ">تمام حقوق مادی و معنوی این وبسایت متعلق به چارسوق است
            <br>
            <p style="color: #37474F; "> © Copyright 2021</p>
        </div>
        <!-- Copyright -->

    </footer>

    <script type="text/javascript" src="./js/home.js"></script>
</body>

</html>