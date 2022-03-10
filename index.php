<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

 <!-- Bootstrap -->
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
        <!-- Icons -->
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
        <!-- Custom styles -->
        <link rel="stylesheet" href="assets/css/styles.css">
        <!-- favicons -->
        <link rel="icon" type="image/png" href="favicon.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Phramacy</title>

    <style>
body {
  font-family: "Lato", sans-serif;
  background-color:#fff;

}
.head1{

  background-color:#2C3E50;
}



.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #2C3E50;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #FFF;
  display:block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #F1948A;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

footer{

  background-color:#2C3E50;
  color:#fff;
}
.container2
{
background-color:#111;

}
.widget-title1
{
 margin-left:25px;

}
.follow-me-icons{
  margin-left:25px;
}
.container1{
  margin-top:20px;
  padding:20px;

}
.widget-body2
{
margin-left:50%;
  
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
      

    <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    </script>

    
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <form class="form-inline" style="padding:25px;">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  </form>
  <a href="#">Home</a>
  <a href="signup.php">Sign Up</a>
  <a href="contact.php">Contact</a>
</div>



<div  class="head1">
  <span style="font-size:50px;color:#fff; cursor:pointer; margin-left: 30px;" onclick="openNav()">&#9776;</span>
<img src=img/LogoMPhar.png style="padding:30px; margin-left:25%;width:35%;">
<a class="signup" href="login.php" style="margin-left:180px;color:#fff;font-size:24px;"><b><i style='font-size:24px' class='fas'>&#xf1c0;</i>Login</b></a>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<!---------------------------------------------------------Nav var end----------------------------------------------------------->
<div class="container" style="margin-left:280px; margin-top:20px;">
<div class="row">
<?php
  include 'connection.php';

$sql = "SELECT * FROM medicine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

       echo'<div class="column" style="width: 25%; margin-right: 20px;">';
       echo '<a href="#"> <img src=img/'.$row["image"].' style="width:250px; height:250px;"></a>';

       echo '<div id="heading">';
       echo '<h2  style="margin-top: 10px;">'.$row["name"].'</h2>';
       echo '</div>';
       echo '<h5> <b>Details: </b>'.$row["details"].'</h5>';
       echo '<div id="type">';
       echo '<h5> <b>Type: </b> '.$row["type"].'</h5>';
       echo '</div>';
       echo '<div id="company">';
       echo '<h5><b>Company: </b>'.$row["company"].'</h5>';
       echo '</div>';
        echo '<div id="Price">';
       echo '<h5><b>Price: </b>'.$row["price"].'</h5>';
       echo '</div>'; 
       echo'<div>';
       echo '<button style="background-color:#7DCEA0;color:#fff;">BUY</button>';
       echo'</div>';
       echo '</div>';
    
    }
} else {
    echo "0 results";
}
$conn->close();

?>

  </div>
</div>
   
  </body>

  <div>   
         <footer id="footer">
            <div class="container1">
                <div class="row">
        
        <div class="col-md-3 widget">
                        <h3 class="widget-title1">Follow</h3>
                        <div class="widget-body0">
                            <h3 class="follow-me-icons">
                              <a href="https://www.facebook.com/profile.php?id=100006997214124" target="_blank"><i class="fa fa-facebook fa-2"></i></a>
                              <a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin fa-2"></i></a>
                              <a href="https://twitter.com/RifatNaser" target="_blank"><i class="fa fa-twitter fa-2"></i></a>
                              <a href="https://github.com/Naser-Rifat" target="_blank"><i class="fa fa-github fa-3"></i></a>

                            </h3>
                        </div>
                    </div>
        
                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-body1">
                            <p> Daffodil Tower <br>
                             4/2, Sobhanbag, Mirpur Road, Dhanmondi, Dhaka-1207 <br>
                             Phone: +88 48111639, 48111670, 9128705, 9132634 <br>
                             Fax: 88-02-9131947 </p> <br>
                        </div>
                    </div>

                    



                </div> <!-- /row of widgets -->
            </div>
        </footer>

        <footer id="underfooter">
            <div class="container2">
                <div class="row">

                  <div class="col-md-6 widget">
                        <div class="widget-body2">
                            <p> Abu Naser Rifat Copyright &copy; 2019 Abu naser. All Rights Reserved. <br></p>
                        </div>
                    </div>

                   

                </div> <!-- /row of widgets -->
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
       </div>
    </div>
</html>