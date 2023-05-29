<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cheap Filaments</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <a href=""><img src="images/3d-printing-filament.png" class="logo" /></a>
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
      <label class="lbl">ORDER</label>
      <div class="form-container">
        <form class="form" action="your-action-url" method="post">
          <label for="name">*Name:</label>                                  <label class="req">required field:*</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required />

          <label for="surname">*Surname:</label>
          <input type="text" id="surname" name="surname" placeholder="Enter your surname" required />

          <label for="email">*Email:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required />
          <label for="product">*Product:</label>
        <select id="product" name="product" required>
          <option value="Filament A">Filament A</option>
          <option value="Filament B">Filament B</option>
          <option value="Filament C">Filament C</option>
        </select>
          
          <div class="subm-container">
              <button class="subm" type="submit">
           <span>Submit</span>
          </button>
        </div>

        </form>
      </div>

      <div class="sl">
        <a href="https://www.instagram.com/maja4ever/" target="_blank"
          ><img src="images/ig.png" alt=""
        /></a>
        <a href="https://www.facebook.com/profile.php?id=100017534024646" target="_blank"
          ><img src="images/fb.png" alt=""
        /></a>
        <a href="https://twitter.com/Marian09526595" target="_blank"
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
    </div>
  </body>
</html>
