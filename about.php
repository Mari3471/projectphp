<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Cheap Filaments</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
      <div>
    <div class="container">
      <div class="navbar">
        <a href=""
          ><img src="images/3d-printing-filament.png" class="logo" alt="logo"
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
        
        <img src="images/menu.png" class="menu-icon" alt="Menu" onclick="togglemenu()" />
      </div>
      <h4 class="copyright" >©Page created by Marian Wantulok Spse havirov 2022</h4>
      <h4 class="copyright"> ©Images of Filaments belong to<a href="https://www.3djake.cz/"> 3dJake</a> </h4>
      <h4 class="copyright"> ©Images of 3d printers belong to<a href="https://www.creality.com/"> creality</a> </h4>
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