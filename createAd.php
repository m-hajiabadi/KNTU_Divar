<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to Finance Portal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="signup-form">
    <form action="./php/createAdBack.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">آخه تو کی باشی که آگهی ثبت کنی</p>
		<div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="name" placeholder="نام"  required="required"></div>
			</div>        	
        </div>

        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="cost" placeholder="قیمت"  required="required"></div>
			</div>        	
        </div>

        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="city" placeholder="شهر"  required="required"></div>
			</div>        	
        </div>

        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="type" placeholder="نوع"  required="required"></div>
			</div>        	
        </div>

        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="desc" placeholder="توضیحات"  required="required"></div>
			</div>        	      

		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">ثبت کن این آگهی بی صاحاب رو </button>
        </div>
    </form>
	
</div>
</body>
</html>