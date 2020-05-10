<!doctype html>
<html lang="tr">
  <head>
    <link rel=“stylesheet” href=“style.css”> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <title>Tarık Bükücü</title>
  </head>
  <body>
  
  <!---Menü Çubuğu--->
  <header class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img arc ="images/user.jpg" alt =" Tarık Bükücü" title ="Tarık Bükücü"  width ="50px" height="50px" class="img-circle">
    </a>
    <span class="logo-yani-yazisi text info"
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="hakkinda.html">Hakkında <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="misarimiz.html">Mirasımız</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="iletisim.html">İletişim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="anasayfa.html">Anasayfa</a>
          </li>
        
          </div>
        </li>
        
      </ul>
      
    </div>  
  </header>
  <?php                $usermail=$_POST["mail"];
$userpass=$_POST["pass"];
$kayitlimail="g191210048@sakarya.edu.tr";
$kayitlipass="123";



if($usermail==$kayitlimail||$mail==$kayitlipass)
{
    echo"Hoşgeldiniz ";
}
else
{
    echo"Hatalı kullanıcı";
};
                 ?>
 

  
    </body>
</html>