
        <?php
         ob_start();
         session_start();

         require_once 'db_connect.php';

         // if session is not set this will redirect to login page
         if( !isset($_SESSION['user']) ) {
          header("Location: index.php");
          exit;
         }

         // select logged-in users detail
         $res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
         $userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
        ?>
            
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
      <p class="heading">WellCome <?php echo $userRow['userName']; ?></p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn btn-primary btn-md" href="logout.php?logout">Sign Out</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>
</div>
<section id="owners" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(owners.jpeg) fixed center center;
  background-size: cover;
  padding: 80px 0;">
<div class="container wow fadeInUp" >
<div class="row">
<div class="col-md-12">
<?php 

  require_once 'actions/db_connect.php';


            $sql = "SELECT *FROM owners";
            $result = $connect->query($sql);

 
            echo "<div class='row'>";    
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "
                    
                        <div class='col-md-12' '>
                          <div  class='thumbnail'>
                            <a href='detail.php?id=".$row['id']."'>
                              <img src='".$row['image']."' style='border-radius:50%;width:200px;height:200px;border-radius:10%;'>
                              <div class='caption' class='text-center'>
                                <p>Name:".$row['name']."</p>
                                <p>LastNAme:".$row['lastname']."</p>
                                <p>Date Of Birt:".$row['birthdate']."</p>
                               <span><i class='fa fa-phone'></i> ".$row['phone']."</span><br>
                              </div>
                            
                          </div>
                        </div>
";

                }

            }
            echo "</div>";

            ?>
          </div>
        </div>
</div>
</section>
<section id="renters" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(renters.jpg) fixed center center;
  background-size: cover;
  padding: 80px 0;">
<div class="container wow fadeInUp" >
<div class="row">
<div class="col-md-12">
<?php 

  require_once 'actions/db_connect.php';


            $sql = "SELECT *FROM renters";
            $result = $connect->query($sql);

 
            echo "<div class='row'>";    
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "
                    
                        <div class='col-md-12' '>
                          <div  class='thumbnail'>
                            <a href='detail.php?id=".$row['userId']."'>
                              <img src='".$row['image']."' style='border-radius:50%;width:200px;height:200px;border-radius:10%;'>
                              <div class='caption' class='text-center'>
                                <p>Name:".$row['name']."</p>
                                <p>LastNAme:".$row['lastname']."</p>
                                <p>Date Of Birt:".$row['birthdate']."</p>
                               <span><i class='fa fa-phone'></i> ".$row['phone']."</span><br>
                              </div>
                            
                          </div>
                        </div>
";

                }

            }
            echo "</div>";

            ?>
          </div>
        </div>
</div>
</section>
  <section id="admins" style="background: linear-gradient(rgba(66, 55, 0, 0.6), rgba(0, 0, 0, 0.6)), url(admin.jpeg) fixed center center;
  background-size: cover;
  padding: 80px 0;"">
<div class="container wow fadeInUp">
<div class="row">
<div class="col-md-12">
<?php 

  require_once 'actions/db_connect.php';


            $sql = "SELECT * FROM users where usertype='1'";

            $result = $connect->query($sql);

 
            echo "<div class='row'>";    
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "
                    <center>
                        <div class='col-md-3' >
                          <div  class='thumbnail' style='width:200px;'>
                            <a href='detail.php?id=".$row['id']."'>
                              <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2zoedwtMsKsr6aKKFIP9Xm2bOsTLPyVb_JvtlHdoNcfQKc4JQ' style='border-radius:25%;width:200px;height:200px;'>
                              <div class='caption' >
                                <p >Name:".$row['userName']."</p>
                                <span>Email:<i class='fa fa-envelope'></i>".$row['userEmail']."</span><br></div></a>
                        </div></center>
";

                }

            }
            echo "</div>";

            ?>
          </div>
        </div>
</div>
</section>
<section id="about">

</section>

   


  
  
</body>
</html>

<?php ob_end_flush(); ?>

