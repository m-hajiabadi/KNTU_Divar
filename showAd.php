<?php include("./php/showAdBack.php") ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/showAd.css">
</head>

<body>

    <h2 style="text-align:center">آگهی تبلیغات</h2>

    <div class="card">
        <img src=<?php echo "upload/" . $ad['image']; ?> alt="تصویر خدمت یا کالا" style="width:100%">
        <h1><?php echo $ad['name']; ?></h1>
        <p class="title"><?php echo $ad['type']; ?></p>
        <p><?php echo $ad['city']; ?></p>
        <p><?php echo $ad['cost']; ?></p>
        <p><?php echo $ad['description']; ?></p>

        <p><button>تماس با فروشنده</button></p>
    </div>

</body>

</html>