<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">ISAP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="#">ADMINISTRATION PORTAL</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span><button id="sign" onclick="document.getElementById('id01').style.display='block'">SIGN UP</button></a></li>
        <?php include("signup2.php");?>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span><button id="sign" onclick="document.getElementById('id02').style.display='block'">LOGIN</button></a></li>
        <?php include("login2.php");?>
      </ul>
    </div>
  </div>
</nav>