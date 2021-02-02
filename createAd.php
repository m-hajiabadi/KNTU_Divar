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
	<div class="main">

        <div class="create-ad-form">

            <form action="./php/createAdBack.php" method="post" enctype="multipart/form-data">

                <img src="./css/nasir_divar.png" alt="website logo">

                <h2> ثبت آگهی</h2>
                <div class="or-seperator"></div>

                <div class="form-group">
					<input 
					type="text" 
					class="form-control input-lg " 
					name="name" 
					placeholder="نام" 
					required="required"
					oninvalid="this.setCustomValidity('این قسمت باید حتما پر شود')"
              		oninput="this.setCustomValidity('')">
                </div>
				<div class="form-group">
					<input 
					type="text" 
					class="form-control input-lg " 
					name="city" 
					placeholder="شهر" 
					required="required"
					oninvalid="this.setCustomValidity('این قسمت باید حتما پر شود')"
              		oninput="this.setCustomValidity('')">
                </div>
				<div class="form-group">
					<select name="type" class="type form-control" required="required" oninvalid="this.setCustomValidity('این قسمت باید حتما پر شود')" oninput="this.setCustomValidity('')">>
                	    <option value="0" selected disabled>نوع</option>
						<option value="خودرو" >خودرو</option>
                	    <option value="دیجیتال" >دیجیتال</option>
						<option value="مراقبت از حیوانات" >مراقبت از حیوانات</option>
						<option value="شستشوی خودرو" >شستشوی خودرو</option>
                	</select>
				</div>
				<div class="form-group">
					<input 
					type="text" 
					class="form-control input-lg " 
					name="cost" 
					placeholder="قیمت" 
					required="required"
					oninvalid="this.setCustomValidity('این قسمت باید حتما پر شود')"
              		oninput="this.setCustomValidity('')">
				</div>
				<div class="form-group">
					<input 
					type="text" 
					class="form-control input-lg " 
					name="phone" 
					placeholder="شماره تماس" 
					required="required"
					oninvalid="this.setCustomValidity('این قسمت باید حتما پر شود')"
              		oninput="this.setCustomValidity('')">
				</div>
				
				<div class="form-group">
					<input type='file' name='file'/>
					<label>تصویر</label>
                </div>

				<div class="form-group">
					<textarea 
					type="text" 
					id="desc" 
					name="desc" 
					maxlength="100" 
					placeholder="توضیحات"
					required="required"
					oninvalid="this.setCustomValidity('این قسمت باید حتما پر شود')"
              		oninput="this.setCustomValidity('')"></textarea>
				</div>

                <div class="or-seperator"></div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block create-ad-btn" name="save" id="submit">ثبت</button>
                </div>

				<div class="back-home text-center"><a class="homepage" href="home.php">صفحه اصلی</a></div>
            </form>
        </div>
    </div>
</body>

</html>