<!DOCTYPE html>
<html  lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Welcome to Finance Portal</title>
	<link type="text/css" href="./css/createAd.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assests/css/style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
	<!-- <div class="container">
		<div class="col-md-4">
			<div class="signup-form">
				<form action="./php/createAdBack.php" method="post" enctype="multipart/form-data">
					<h2>Register</h2>
					<p class="hint-text">ثبت آگهی</p>
					<div class="form-group">
						<div class="row">
							<div class="col"><input type="text" class="form-control" name="name" placeholder="نام" required="required"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col"><input type="text" class="form-control" name="cost" placeholder="قیمت" required="required"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col"><input type="text" class="form-control" name="city" placeholder="شهر" required="required"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col"><input type="text" class="form-control" name="type" placeholder="نوع" required="required"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col"><input type="text" class="form-control" name="desc" placeholder="توضیحات" required="required"></div>
						</div>

						<div class="row">
							<p>تصویر کالا :  </p>
							<input type='file' name='file' required="required" />
						</div>

						<div class="form-group">
							<button type="submit" name="save" class="btn btn-success btn-lg btn-block">ثبت کن این آگهی بی صاحاب رو </button>
						</div>



				</form>

			</div>
		</div>
		<div class="col-md">
		</div>

	</div> -->

	<div class="main">

        <div class="create-ad-form">

            <form action="./php/createAdBack.php" method="post" enctype="multipart/form-data">

                <img src="./css/divar.png" alt="website logo">

                <h2> ثبت آگهی</h2>
                <div class="or-seperator"></div>

                <div class="form-group">
                    <input type="text" class="form-control input-lg " name="name" placeholder="نام" required="required">
                </div>
				<div class="form-group">
                    <input type="text" class="form-control input-lg " name="city" placeholder="شهر" required="required">
                </div>
				<div class="form-group">
					<select name="type" class="type" required="required">
                	    <option value="0" selected disabled>نوع</option>
						<option value="خودرو" >خودرو</option>
                	    <option value="دیجیتال" >دیجیتال</option>
						<option value="مراقبت از حیوانات" >مراقبت از حیوانات</option>
						<option value="شستشوی خودرو" >شستشوی خودرو</option>
                	</select>
				</div>
				<div class="form-group">
                    <input type="text" class="form-control input-lg " name="cost" placeholder="قیمت" required="required">
				</div>
				
				<label>تصویر</label>
				<div class="form-group">
					<input type='file' name='file' required="required"/>
                </div>

				<div class="form-group">
					<textarea type="text" id="desc" name="desc" maxlength="100" placeholder="توضیحات"></textarea>
				</div>

                <div class="or-seperator"></div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block create-ad-btn" name="save">ثبت</button>
                </div>

				<div class="back-home text-center"><a class="homepage" href="home.php">صفحه اصلی</a></div>
				<?php var_dump(get_defined_vars())?>
            </form>
        </div>
    </div>
</body>

</html>