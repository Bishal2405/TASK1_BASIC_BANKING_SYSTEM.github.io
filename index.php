<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
<!--
.style1 {
	color: #00ffff;
	font-family: raleway;
}
.style2 {
  text-align: center;
	font-family: raleway;
	font-weight: bold;
	font-size: 36px;
	font-style: italic;
}
.style3 {
	font-family: raleway;
	font-weight: bold;
	font-style: italic;
	font-size: 18px;
}
.style4 {color: #00d0ff; font-family: raleway; font-size: 24px; }
-->
body{
  background-image: url("webpg1.png");
  background-color: #cccccc;
    ##background-color: hsla(89, 43%, 51%, 0.3);
    ##background-image:url('money_trans.png');
    background-repeat:no-repeat;
    background-size:cover;
}

@media only screen and (max-width:300px){
    .text{
        font-size:11px;
    }
}
.center{
  float: center;
}

.btn{
  background: linear-gradient(45deg, #87adfe, #ff77cd);
  border-radius: 6px;
  padding: 10px 20px;
  box-sizing: border-box;
  text-decoration: none;
  color: #fff;
box-shadow: 3px 8px 22px rgba(94, 28, 68, 0.15);
}

    </style>
</head>

  <body>
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid">
          <h3 style="color:white" class="style2">Bright Horizon Bank Services</h3>
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3 class="style4">&nbsp;</h3>
                  <h3 class="style1"></h3>
                  <h1 class="style1"></h1>
                  <p align="center">&nbsp;</p>
                </div>
              </div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div>

      <!-- Activity section -->
            <div style="margin-left:-700px" class="column activity text-center">
                  <div class="col-md act"><img src="adduser.svg" width="160" height="144" class="img-fluid"><br>
                    <a class="btn" href="createuser.php">Create a User</a>
              </div> <p>&nbsp;</p>
                  <div class="col-md act"><img src="transfer.svg" width="162" height="145" class="img-fluid"><br>
                    <a  class="btn" href="transfermoney.php">Transfer Now</a>
              </div>
            </div>
      </div>
      <footer style="color:white" class="text-center mt-5 py-2">
      <br>
      <br>
      <br>
      <br>
        <br>
          <br>
           <br>
      <p>&copy JUNE2021. Made by <b>BISHAL SAHA</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
