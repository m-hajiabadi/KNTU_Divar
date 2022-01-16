<?php include("./php/loginBack.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>ورود به دیوار</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link type="text/css" href="./css/login.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- <div class="wrapper">
        <h2>ورود</h2>
        <form action="./php/loginBack.php" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>نام کاربری</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>گذرواژه</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>   -->

    <div class="main">

        <div class="signin-form">

            <form action=" ./php/loginBack.php" method="post">

                <img src="./css/nasir_divar.png" alt="website logo">

                <h2> ورود به دیوار نصیر</h2>
                <div class="or-seperator"></div>

                <div class="form-group <?php echo (isset($_SESSION['username_err'])) ? 'has-error' : ''; ?>">
                    <input type="text" class="form-control input-lg " name="username" placeholder="نام کاربری" required="required" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo (isset($_SESSION['username_err']))  ? $_SESSION['username_err'] : '';; ?></span>
                </div>

                <div class="form-group <?php echo (isset($_SESSION['password_err'])) ? 'has-error' : ''; ?>">
                    <input type="password" class="form-control input-lg" name="password" placeholder="گذرواژه" required="required">
                    <span class="help-block"><?php echo (isset($_SESSION['password_err'])) ? $_SESSION['password_err'] : ''; ?></span>
                </div>


                <div class="or-seperator"></div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block signin-btn" name="login" value="Login" id="login">ورود</button>
                </div>

                <div class="text-center"> هنوز ثبت نام نکر دید؟ <a href="./register.php"> عضویت  در دیوار نصیر</a></div>
                <div class="back-home text-center"><a class="homepage" href="home.php">صفحه اصلی</a></div>

                <?php
                session_destroy();
                ?>
            </form>


        </div>



    </div>
</body>

</html>