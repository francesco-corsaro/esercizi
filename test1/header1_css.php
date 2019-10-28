<?php echo "
a{
    font-size=10vw;
    color: #CE5937;
}
/* header */

.header {
  background-color: #fff;
  box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
  position: fixed;
  width: 100%;
  z-index: 3;
}

.header ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
  background-color: #fff;
}

.header li a {
  display: block;
  padding: 20px 20px;
  border-right: 1px solid #f4f4f;
  text-decoration: none;
}

.header li a:hover,
.header .menu-btn:hover {
  background-color: rgba(254,203,34,0.22);
}

.header .logo {
  display: block;
  float: left;
  font-size: 10vw;
  padding: 10px 20px;
  text-decoration: none;
  color: #CE5937;
}

/* menu */

.header .menu {
  clear: both;
  max-height: 0;
  transition: max-height .2s ease-out;
}

/* menu icon */

.header .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 28px 20px;
  position: relative;
  user-select: none;
}

.header .menu-icon {
  background: #333;
  display: block;
  height: 2px;
  position: relative;
  transition: background .2s ease-out;
  width: 18px;
}

.header .menu-icon :before,
.header .menu-icon :after {
  background: #333;
  content: '';
  display: block;
  height: 100%;
  position: absolute;
  transition: all .2s ease-out;
  width: 100%;
}

.header .menu-icon :before {
  top: 5px;
}

.header .menu-icon :after {
  top: -5px;
}

/* menu btn */

.header .menu-btn {
  display: none;
}

.header .menu-btn:checked ~ .menu {
  max-height: 240px;
}

.header .menu-btn:checked ~ .menu-icon {
  background: transparent;
}

.header .menu-btn:checked ~ .menu-icon :before {
  transform: rotate(-45deg);
}

.header .menu-btn:checked ~ .menu-icon :after {
  transform: rotate(45deg);
}

.header .menu-btn:checked ~ .menu-icon:not(.steps) :before,
.header .menu-btn:checked ~ .menu-icon:not(.steps) :after {
  top: 0;
}

/* 48em = 768px */

@media (max-width: 48em) {
  .header li {
    float: left;
  }
  .header li a {
    padding: 20px 30px;
    font-size: 2vw;
  }
  .header .menu {
    clear: none;
    float: right;
    max-height: none;
  }
  #menuToggle  {
    display: none;
  }
}";
?>

