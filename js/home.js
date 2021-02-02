function submitAdsPage(isLogin){
    if(isLogin){
        window.location.href = "./createAd.php";
    }else{
        alert("برای ثبت آگهی ابتدا باید وارد شوید");
        window.location.href = "./login.php";
    }
}

function register(){
   
    window.location.href = "./register.php";
}

function login(){
    window.location.href = "./login.php";
}

function showPhone(phone){
    alert('0'+phone);
}



