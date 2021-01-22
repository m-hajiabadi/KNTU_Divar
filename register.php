 <?php include("./php/registerBack.php") ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <link rel="stylesheet" type="text/css" href="./css/register.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 </head>

 <body>
     <!-- <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="./php/registerBack.php" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" name="save">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>حساب کاربری ندارید؟ <a href="login.php">وارد شوید</a>.</p>
        </form>
    </div> -->

     <div class="main">
         <div class="signup-form">

             <form action="./php/registerBack.php" method="post">

                 <img src="./css/divar.png" alt="website logo">

                 <h2>ثبت نام در دیوار</h2>


                 <div class="or-seperator">
                 </div>



                 <div class="form-group <?php isset($_SESSION['username_err']) ? 'has-error' : ''; ?>">
                     <input type="text" class="form-control input-lg" name="username" placeholder=" نام کاربری " required="required" value="<?php echo $username; ?>">
                     <span class="help-block"><?php echo isset($_SESSION['username_err']) ? $_SESSION['username_err'] : ''; ?></span>
                 </div>

                 <div class="form-group <?php echo  isset($_SESSION['password_err']) ? 'has-error' : ''; ?>">
                     <input type="password" class="form-control input-sm" name="password" placeholder=" گذرواژه " required="required" value="<?php echo $password; ?>">
                     <span class="help-block"><?php echo isset($_SESSION['password_err']) ? $_SESSION['password_err'] : ''; ?></span>
                 </div>

                 <div class="form-group <?php echo isset($_SESSION['confirm_password_err']) ? 'has-error' : ''; ?>">
                     <input type="password" class="form-control input-lg" name="confirm_password" placeholder=" تایید گذرواژه " required="required" value="<?php echo $confirm_password; ?>">
                     <span class="help-block"><?php echo isset($_SESSION['confirm_password_err']) ? $_SESSION['confirm_password_err'] : ''; ?></span>
                 </div>

                 <div class="or-seperator"></div>


                 <div class="form-group">
                     <button type="submit" class="btn btn-success btn-lg btn-block signup-btn"> ثبت نام </button>
                     <input type="reset" class="btn btn-default" value="Reset">
                 </div>

                 <div class="text-center"> حساب کاربری دارید ؟ <a href="login.php">ورود به دیوار</a></div>
                 <div class="back-home text-center"><a class="homepage" href="home.php">صفحه اصلی</a></div>
                 <?php
                    session_destroy();
                    ?>
             </form>


         </div>

     </div>
 </body>

 </html>