<!DOCTYPE html>

<html>
<head>
<title>Homeowners</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +436889600112</li>
        <li><i class="fa fa-envelope-o"></i>admin@admin.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">Hauses</a></li>
        <li><a href="#">Owners</a></li>
        <li><a href="#">Renters</a></li>
        <li><a href="#">Admins</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>
    
  </div>
</div>
<div class="bgded overlay" style="background-image:url('images/image1.jpg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Homeowners</a></h1>
        <p></p>
      </div>
      </header>
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p class="heading">WellCome</p>
      <h2 class="heading">To Our WebPage</h2>
      <p>Please LogIn And If You Are New Please SignUp Now</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="Login.php">LogIn</a></li>
          <li><a class="btn inverse" href="register.php">SignUp</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>
</div>

 

<fieldset>

    <legend>Hauses table</legend>

 

    <form style="color:black;" action="actions/a_create.php" method="post">

        <table class="table" style="border-width: 5px;border-color: black;border-style: solid;" cellspacing="0" cellpadding="0">

            <tr>
                <th>ID</th>
                <td><input class="form-control" type="text" name="hause_id" placeholder="hause_id" /></td>
            </tr>     
            <tr>
                <th>address</th>
                <td><input class="form-control" type="text" name="address" placeholder="address" /></td>
            </tr>
            <tr>
                <th>hausnumber</th>
                <td><input class="form-control" type="text" name="hausnumber" placeholder="hausnumber" /></td>
            </tr>  
            <tr>
                <th>size</th>
                <td><input class="form-control" type="text" name="size" placeholder="size" /></td>
            </tr>
            <tr>
                <th>image</th>
                <td><input class="form-control" type="text" name="image" placeholder="image" /></td>
            </tr> 
            
            <tr>
                <td><button class="btn-success" type="submit">Insert Table</button></td>
                <td><a  href="home.php"><button class="btn-danger" type="button">Back</button></a></td>

            </tr>


        </table>

    </form>

 

</fieldset>

</body>

</html>