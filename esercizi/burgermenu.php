<html>
  <head>
    <title>
      CSS Hamburger Menu
    </title>
    <link href="theme.css" rel="stylesheet">
    <style type="text/css">
    #page-nav {
  width: 100%;
  background: #000;
  /* If you want the navigation bar to stick on top
  position: sticky;
  top: 0;
  */
}

/* Hide Hamburger */
#page-nav label, #hamburger {
  display: none;
}

/* Menu Items */
#page-nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0; 
}
#page-nav ul li {
  display: inline-block;
  padding: 10px;
  box-sizing: border-box;
}
#page-nav ul li a {
  color: #fff;
  text-decoration: none;
}

/* [ON SMALL SCREENS] */
@media screen and (max-width: 768px){
  /* Show Hamburger */
  #page-nav label {
    display: inline-block;
    color: #fff;
    background: #a02620;
    font-style: normal;
    font-size: 1.2em;
    padding: 10px;
  }

  /* Break down menu items into vertical */
  #page-nav ul li {
    display: block;
  }
  #page-nav ul li {
    border-top: 1px solid #333;
  }

  /* Toggle show/hide menu on checkbox click */
  #page-nav ul {
    display: none;
  }
  #page-nav input:checked ~ ul {
    display: block;
  }
}

/* [DOES NOT MATTER] */
html, body {
  padding: 0;
  margin: 0;
  font-family: arial, sans-serif;
}
    </style>
  </head>
  <body>
    <!-- [NAVIGATION BAR] -->
    <nav id="page-nav">
      <!-- [THE HAMBURGER] -->
      <label for="hamburger">&#9776;</label>
      <input type="checkbox" id="hamburger"/>

      <!-- [MENU ITEMS] -->
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="tech.html">Tech</a></li>
        <li><a href="games.html">Games</a></li>
        <li><a href="reviews.html">Reviews</a></li>
      </ul>
    </nav>

    <!-- [REST OF YOUR PAGE] -->
    <div id="page-contents" style="padding: 10px;">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Fusce vitae malesuada ipsum. Duis sit amet leo metus. 
        Vivamus sed libero eleifend, auctor leo non, dignissim tortor. 
        Maecenas quam enim, interdum vitae massa non, tincidunt maximus nisi. 
      </p>
      <p>
        Donec ac elit massa. In sed bibendum risus. 
        Ut condimentum est nec urna volutpat, quis vehicula elit elementum. 
        Quisque molestie auctor ante eu fermentum. 
        In hac habitasse platea dictumst. 
      </p>
      <p>
        Suspendisse vehicula dui sed tempor interdum. 
        Vestibulum pharetra dolor at felis auctor hendrerit. 
        In vel risus dictum, condimentum leo et, tempus magna.
        Ut pretium semper mauris, nec mattis eros consequat quis. 
      </p>
    </div>
  </body>
</html>