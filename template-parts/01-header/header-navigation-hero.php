<header class="header-navigation-hero">

  <head>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <?php
  wp_nav_menu(
    [
      'theme_location' => 'header-main-menu',
      'menu_class' => 'menu',
      'menu_id' => 'menu'
    ]
  );
  ?>

  <div class="contact-container">
    <ul id="contactmenu" class="contact showMenu"><li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item menu-item-38"><a href="http://localhost:10038/shop/" aria-current="page">Shop</a></li>
<li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="http://localhost:10038/collection/">Collection</a></li>
<li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="http://localhost:10038/savoir-faire/">Savoir-Faire</a></li>
<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="http://localhost:10038/about/">About</a></li>
</ul>

  </div>

  <?php
  wp_nav_menu(
    [
      'theme_location' => 'footer-main-menu',
      'menu_class' => 'footermenu',
      'menu_id' => ' footermenu'
    ]
  );
  ?>




  <button class="hamburger">
    <i class="menuIcon material-icons">menu</i>
    <i class="closeIcon material-icons">close</i>
  </button>



</header>

<main class="main">
  <div class="logodiv"></div>