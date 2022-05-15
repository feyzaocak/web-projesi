<!DOCTYPE html>
<html lang="etr">
<head>
    <meta charset="UTF-8">
     <title>Galata</title>
     <link rel="stylesheet" href="css/stylee.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
     <div class ="navbar">
         <nav class = "navbar navbar-dark bg-dark w-100 navbar-expand-sm" style="margin-top:-8px;" >
<div class="container">
    <ul class="navbar-nav">
         <li class="nav-item"><a href="anasayfa.html" class="btn btn-outline-light btn-sm ms-1">Anasayfa</a></li>
        <li class="nav-item"><a href="ozgecmis.html" class="btn btn-outline-light btn-sm ms-1">Özgeçmiş</a></li>
        <li class="nav-item"><a href="sehrim.html" class="btn btn-outline-light btn-sm ms-1">Şehrim</a></li>
        <li class="nav-item"><a href="mirasimiz.html" class="btn btn-outline-light btn-sm ms-1">Mirasımız</a></li>
        <li class="nav-item"><a href="ilgialanlarim.html" class="btn btn-outline-light btn-sm ms-1">İlgi Alanlarım</a></li>
      
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item">
            <div class="input-group">
                <input type="text" placeholder ="Arama" class ="form-control form-cotrol-sm">
                <a href= "#" class="btn btn-outline-white btn-sm">Ara</a>
            </div>
        </li>
        <li class="nav-item">
            <div class="btn-group ms-1">
                <a href="login.html" class="btn btn-outline-light btn-sm">Login</a>
                <a href="iletisim.html" class="btn btn-outline-light btn-sm">İletişim</a>
            </div>


        </li>
    </ul>
</div>
        </nav>
     </div>
     <main>

		<div class="container">
			
			<?php 

				include("kullanicilar.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "!!!TEKRAR DENEYİN!!!";
			            header("Refresh: 1; url=login.php");
			    }
			
			?>
			
		</div>

	</main>

    
    <footer class="py-5 bg-dark text-white text-center">
		Web-Teknolojileri-Projesi © FEYZA OCAK
	</footer>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>