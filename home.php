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
    <!-- <nav class="navbar navbar-light bg-light">
      <form class="form-inline">
        <button class="btn btn-outline-success" id="submitAds" type="button" onclick="submitAdsPage()">ثبت آگهی</button>
        <button class="btn btn-sm btn-outline-secondary" type="button" onclick="reginster()">ثبت نام</button>
 
      </form>
    </nav> -->

    <div class="mynav sticky-top">
        <a class="navbar-brand" href="home.php">
            <img src="./css/divar.png" alt="دیوار" loading="lazy">
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item" id="submit-ads">
                <a class="nav-link active" aria-current="page" href="#" onclick="submitAdsPage()">ثبت آگهی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">تماس با ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">درباره ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="reginster()">ثبت نام</a>
            </li>
            <li class="nav-item">
                <?php
                // echo "ssalm" ;
                // var_dump($_COOKIE);
                if (!isset($_COOKIE["username"])) {
                    echo ' <a class="nav-link" href="#" onclick="login()">ورود</a>';
                } else {
                    echo '<a class="nav-link" href="logout.php">خروج</a>';
                    echo $_COOKIE['username'];
                }
                ?>

            </li>

        </ul>

    </div>

    <!-- <div class="container">
        <div class="row">
            <?php foreach ($ads as $value) : ?>
            <div class="advertising col-md-4">
                <div class="row">
                    <div class="info col-md-4">
                        <div class="name row">
                            <?php
                            // echo($temp['name']);
                            ?>
                            <?= $value['city']; ?>
                            <?= $value['cost']; ?>
                            <?= $value['name']; ?>
                        </div>
                        <div class="cost row">
                            <?php
                            // echo($temp['cost']);
                            ?>
                        </div>
                    </div>
                    <div class="advertising-image col-md-8">
                        <img src=<?php echo "upload/" . $value['image']; ?> alt="تصویر خدمت یا کالا">
                    </div>
                </div>  
                
            </div>
            <?php endforeach; ?> 
    </div> -->

    <div class="latest">
        <div class="latest-lyrics container-fluid ">

            <div class="row mx-3">
                <?php foreach ($ads as $value) : ?>
                    <div class="col-md-4">

                        <div class="latest-card pt-4">
                            <a href="`/showpoem/id=${beyt[2]}`">
                                <div class="poem p-2 mt-5">
                                    <?= $value['name']; ?><br>
                                    <?= $value['cost']; ?>
                                </div>
                                <div class="poem p-2 mt-5">
                                    <img src=<?php echo "upload/" . $value['image']; ?> alt="تصویر خدمت یا کالا">
                                </div>
                            </a>

                            <div class="info mt-5">

                                <div class="user-info ">

                                    <a :href="`/showprofile/id=${beyt[5]}`">
                                        <div class="user-avatar ml-2 ">
                                            <img src="./css/defaultpic.png" alt="user avatar ">
                                        </div>
                                        <div class="user-username ">
                                            <span class="text-center "><?= $value['city']; ?></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="post-meta ">

                                    <span>
                                        <i class="far fa-clock ml-1"></i>3دی
                                    </span>
                                </div>
                            </div>

                        </div>

                    </div>



                <?php endforeach; ?>
            </div>
        </div>
        <?php 
        // var_dump($_COOKIE);
        ?>
    </div>

    <script type="text/javascript" src="./js/home.js"></script>
</body>

</html>