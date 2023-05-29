<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cheap Filaments</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
      <div>
    <div class="container">
      <div class="navbar">
        <a href=""
          ><img src="images/3d-printing-filament.png" class="logo"
        /></a>
        <p class="logo-text">Cheap Filaments</p>
        <nav>
          <ul id="menuList">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="white.php">Filaments</a></li>
            <li><a href="3dprinters.php">3D Printers</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </nav>
        
        <img src="images/menu.png" class="menu-icon" onclick="togglemenu()" />
      </div>
      <div class="men">
        <a href="white.php">
          <img src="images/filaments.jpeg" alt="Filaments" >
        </a>
        <div class="desc">Filaments</div>
      </div>
      
      <div class="men">
        <a href="3dprinters.php">
          <img src="images/creality logo.jpg" alt="Logo creality">
        </a>
        <div class="desc">3D Printers</div>
      </div>
      
      <div class="men">
        <a target="_blank" href="https://www.3djake.cz/">
          <img src="images/3djakelogo.png" alt="Logo 3D jake">
        </a>
        <div class="desc">Accesories</div>
      </div>

    <div class="sl">
      <a href="https://www.instagram.com/maja4ever/" target="blank"
        ><img src="images/ig.png" alt=""
      /></a>
      <a
        href="https://www.facebook.com/profile.php?id=100017534024646"
        target="blank"
        ><img src="images/fb.png" alt=""
      /></a>
      <a href="https://twitter.com/Marian09526595" target="blank"
        ><img src="images/tw.png" alt=""
      /></a>
    </div>
</div>
    <script>
      var menuList = document.getElementById("menuList");

      menuList.style.maxHeight = "0px";

      function togglemenu() {
        if (menuList.style.maxHeight == "0px") {
          menuList.style.maxHeight = "140px";
        } else {
          menuList.style.maxHeight = "0px";
        }
      }
    </script>
  </body>
</html>
