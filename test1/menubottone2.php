<?php echo "
html {
  background: white;
}

.box {
  margin: 0; 
  padding: 0;
  
}

#menuToggle {
  overflow: hidden;
  position: absolute;
  width: 20%;
  height: auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  float: right;
}

#menuToggle input {
  display: flex;
  width: 50px;
  height: 60px;
  position: absolute;
  cursor: pointer;
  opacity: 0; /* hide input */
  z-index: 1; /* top of the menu */
}

#menuToggle span{
  width: 55px;
  height: 8px;
  margin-bottom: 10px;
  background: red;
  border-radius: 15px;
  -webkit-transition: all .5s cubic-bezier(.08,.81,.87,.71);
  -moz-transition: all .5s cubic-bezier(.08,.81,.87,.71);
  -ms-transition: all .5s cubic-bezier(.08,.81,.87,.71);
  -o-transition: all .5s cubic-bezier(.08,.81,.87,.71);
  transition: all .5s cubic-bezier(.08,.81,.87,.71);
}

#span1 {
  transform-origin: 4px 0px;
}

#span3 {
  transform-origin: bottom right;
}

#menuToggle input:checked ~ #span1 {
  background-color:#CE5937;
  transform: rotate(45deg) translate(8px);
}
#menuToggle input:checked ~ #span2 {
  background-color: #CE5937;
  transform: rotate(495deg) translate(4px);   
}
#menuToggle input:checked ~ #span3 {
  background-color: yellow;
  transform: rotate(45deg);
  opacity: 0;
}";
?>
