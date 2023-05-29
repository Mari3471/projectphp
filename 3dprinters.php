<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
      <p class="text">3d printers from creality</p>
      <div class="carousel"data-flickity='{ "watchCSS": true }'>
        <div class="cell"><a href="https://www.creality3dshop.eu/collections/cr-series-3d-printer/products/creality-cr-10-3d-printer-prusa-i3-diy-kit-aluminum-large-print-size-300x300x400mm" target="_blank"><img src="images/CR-10.jpg" alt="CR-10"></a></div>
        <div class="cell"><a href="https://store.creality.com/products/cr-6-se-3d-printer?spm=..product_6ea13aeb-1a63-4116-84ab-05b4d2f2c3a5.header_1.1&spm_prev=..product_1efb3966-56a8-49af-82e6-5ba5fcd76369.header_1.1"target="_blank"><img src="images/CR-6SE.jpg" alt="CR-6SE"></a></div>
        <div class="cell"><a href="https://store.creality.com/products/ender-3-s1-pro-3d-printer?spm=..product_5e45abfb-4541-4c92-ba93-cfba9a1e3ea4.nav_link_store_1.1&spm_prev=..product_56136125-14b3-4c89-8721-d87357cb1862.header_1.1"target="_blank"><img src="images/Ender-3S1pro.jpg" alt="Ender-3S1pro"></a></div>
        <div class="cell"><a href="https://store.creality.com/products/halot-sky-resin-3d-printer?spm=..product_f5e8cc96-3061-4873-a826-24ebd089e586.header_1.1&spm_prev=..product_5e45abfb-4541-4c92-ba93-cfba9a1e3ea4.nav_link_store_1.1"target="_blank"><img src="images/Halot-SKY.jpg" alt="Halot-SKY"></a></div>
        <div class="cell"><a href="https://store.creality.com/products/cr-10-smart-pro-3d-printer?spm=..product_1efb3966-56a8-49af-82e6-5ba5fcd76369.header_1.1&spm_prev=..product_f5e8cc96-3061-4873-a826-24ebd089e586.header_1.1"target="_blank"><img src="images/CR-10SmartPro.jpg" alt="CR-10SmartPro"></a></div>
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
</div>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>$('.carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  wrapAround: true
  
});</script>
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
