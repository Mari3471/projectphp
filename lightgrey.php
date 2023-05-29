<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Light-Grey</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
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
      <div class="row">
        <div class="col-1">
          <h2>PLA<br />Filament</h2>
          <h3>LightGrey</h3>
          <p>(food safe, no heated bed required)</p>
          <h4>€19.90</h4>
          <button class="buy" type="button">
            <a
              href="https://www.3djake.cz/3djake/ecopla-light-grey"
              style="text-decoration: none; color: white"
              target="blank"
            >
              Buy Now
            </a>
            <img src="images/arrow.png" alt="arrow" />
          </button>
        </div>

        <div class="col-2">
          <img src="filaments/lightgrey.jpg" class="filament" alt="lightgrey" />
        </div>
      </div>
      <p class="txtchoose">Choose collor:</p>
      <a href="white.php"><img src="images/white.jpg" class="choose" /></a>
      <a href="grey.php"><img src="images/grey.jpg" class="choose" /></a>
      <a href="neon.php"><img src="images/neon.jpg" class="choose" /></a>
      <a href="yellow.php"><img src="images/yellow.jpg" class="choose" /></a>
      <a href="violet.php"><img src="images/violet.jpg" class="choose" /></a>
      <a href="black.php"><img src="images/black.jpg" class="choose" /></a>
      <a href="silver.php"><img src="images/silver.jpg" class="choose" /></a>
      <a href="pink.php"><img src="images/pink.jpg" class="choose" /></a>
      <a href="green.php"><img src="images/green.jpg" class="choose" /></a>
    </div>

    <div class="social-links">
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
