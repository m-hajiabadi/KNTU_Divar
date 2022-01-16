<?php include("./php/showAdBack.php") ?>
<?php include_once("./php/homeback.php") ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/showAd.css">
</head>

<body>


    <div class="card">
        <img src=<?php echo "upload/" . $ad['image']; ?> alt="">
        <h1 title="نام آگهی"><?php echo $ad['name']; ?></h1>
        <p class="title" title="نوع آگهی"><?php echo $ad['type']; ?></p>
        <p title="شهر"><?php echo $ad['city']; ?></p>
        <p title="قیمت"><?php echo ToPersian($ad['cost']); ?> تومان</p>
        <p title="توضیحات"><?php echo $ad['description']; ?></p>

        <p><button onclick="showPhoneNumber(<?php echo $ad['phone']; ?>)">تماس با فروشنده</button></p>
    </div>
    <div class="homepage container">
        <a  href="home.php">صفحه اصلی</a>
    </div>

    
    <script type="text/javascript" src="./js/showAd.js"></script>
</body>

</html>