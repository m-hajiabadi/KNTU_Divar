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
    

</head>
<body>
    <!-- <nav class="navbar navbar-light bg-light">
      <form class="form-inline">
        <button class="btn btn-outline-success" id="submitAds" type="button" onclick="submitAdsPage()">ثبت آگهی</button>
        <button class="btn btn-sm btn-outline-secondary" type="button" onclick="reginster()">ثبت نام</button>
        <?php 
        if (!isset($_COOKIE['username'])) {
            echo '<button class="btn btn-sm btn-outline-secondary" type="button" onclick="login()">ورود</button>';
        }
        ?>
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
          
        </ul>
        
    </div>
  
    <div class="container">
        <div class="row">
            <?php foreach($ads as $value): ?>
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
                        <img src=<?php echo "upload/".$value['image'];?> alt="تصویر خدمت یا کالا">
                    </div>
                </div>  
                
            </div>
            <?php endforeach; ?>

            
    </div>


    <script type="text/javascript" src="./js/home.js"></script>
</body>
</html>


