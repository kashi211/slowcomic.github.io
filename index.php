

<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="css/style.css">
    <title>Offside11</title>
</head>
        <body >



                        <div class="navbar"  >
                            <ul id="lis">
                            <li><a href="hot">HOT</a> </li>
                            <li><a href="trending">TRENDING</a> </li>
                            <li><a href="new">FRESH</a> </li>





































                        <li style="float: right; padding-right: 504px;"><div style="display: inline-block; width: 97px; background: #e5e6ee;"><button id="signupbtn" style="background: white; width: 110px; height: 50px;">Sign Up</button></div></li>








































                        </ul>

                    </div>


                        <style>
                    /* The Modal (background) */
                    .modalsignup {
                        display: none; /* Hidden by default */
                        position: fixed; /* Stay in place */
                        z-index: 1; /* Sit on top */
                        padding-top: 100px; /* Location of the box */
                        left: 0;
                        top: 0;
                        width: 100%; /* Full width */
                        height: 100%; /* Full height */
                        overflow: auto; /* Enable scroll if needed */
                        background-color: rgb(0,0,0); /* Fallback color */
                        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                    }

                    /* Modal Content */
                    .modalsignup-content {
                        background-color: #fefefe;
                        margin: auto;
                        padding: 20px;
                        border: 1px solid #888;
                        width: 80%;
                    }

                    /* The Close Button */
                    .closesignup {
                        color: #aaaaaa;
                        float: right;
                        font-size: 28px;
                        font-weight: bold;
                    }

                    .closesignup:hover,
                    .closesignup:focus {
                        color: #000;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    </style>







<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
                    <!-- The Modal -->
                    <div id="myModalsignup" class="modalsignup">
                    <style type="text/css">@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
  outline: none;
}
</style>

                      <!-- Modal content -->
                      <div class="modalsignup-content" style="margin: 0;padding: 0;
  background: #DDD;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  margin-left: 200px;">
                        <span  class="closesignup">&times;</span>
                            <div style="position: relative;
  margin: 5% auto;
  width: 600px;
  height: 400px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);" id="login-box">
  <div style="  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;" class="left">
    <h1 style="margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;">Sign up</h1>
   
    <input style="  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;" type="text" name="username" placeholder="Username" />
    <input style="  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;" type="text" name="email" placeholder="E-mail" />
    <input style="  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;" type="password" name="password" placeholder="Password" />
    <input style="  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;" type="password" name="password2" placeholder="Retype password" />
   
    <input style="margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;" type="submit" name="signup_submit" value="Sign me up" />
  </div>
 
  <div style=" position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  background: url('https://goo.gl/YbktSj');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;" class="right">
    <span style="display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;" class="loginwith">Sign in with<br />social network</span>
   
    <button style=" background: #32508E; margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;" class="social-signin facebook">Log in with facebook</button>
    <button style="background: #55ACEE; margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;" class="social-signin twitter">Log in with Twitter</button>
    <button style=" background: #DD4B39; margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;" class="social-signin google">Log in with Google+</button>
  </div>
  <div style="position: absolute;
  top: 180px;
  left: 280px;
  width: 40px;
  height: 40px;
  background: #DDD;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  line-height: 40px;
  text-align: center;" class="or">OR</div>
</div>
                      </div>

                    </div>

<?php

if(isset($_POST['signupbtn']))
{
                $title = $_POST['title'];
               
                $img_name = $_FILES['imglink']['name'];
                $img_tmp =$_FILES['imglink']['tmp_name'];

                $directory = 'imgs/';
                $target_file = $directory.$img_name;


                move_uploaded_file($img_tmp,$target_file);    
                $query= "insert into allmedia values('','$title','$target_file','','','')";
                $query_run = mysqli_query($con,$query);


}
 ?>



                    <script>
                    // Get the modal
                   var modalsignup = document.getElementById("myModalsignup");
                    // Get the button that opens the modal
                    var btnsignup = document.getElementById("signupbtn");

                    // Get the <span> element that closes the modal
                    var spansignup = document.getElementsByClassName("closesignup")[0];

                    // When the user clicks the button, open the modal
                    btnsignup.onclick = function() {
                        modalsignup.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    spansignup.onclick = function() {
                        modalsignup.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modalsignup) {
                            modalsignup.style.display = "none";
                        }
                    }
                    </script>


































                    <div style="display: inline-block; float: right; width: 97px; margin-right: 505px; background: #e5e6ee;"><button id="myBtn" style="background: grey; width: 110px; height: 50px;">+UPLOAD</button></div>

                    <style>
                    /* The Modal (background) */
                    .modalupload {
                        display: none; /* Hidden by default */
                        position: fixed; /* Stay in place */
                        z-index: 1; /* Sit on top */
                        padding-top: 100px; /* Location of the box */
                        left: 0;
                        top: 0;
                        width: 100%; /* Full width */
                        height: 100%; /* Full height */
                        overflow: auto; /* Enable scroll if needed */
                        background-color: rgb(0,0,0); /* Fallback color */
                        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                    }

                    /* Modal Content */
                    .modalupload-content {
                        background-color: #fefefe;
                        margin: auto;
                        padding: 20px;
                        border: 1px solid #888;
                        width: 80%;
                    }

                    /* The Close Button */
                    .closeupload {
                        color: #aaaaaa;
                        float: right;
                        font-size: 28px;
                        font-weight: bold;
                    }

                    .closeupload:hover,
                    .closeupload:focus {
                        color: #000;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    </style>







<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
                    <!-- The Modal -->
                    <div id="myModalupload" class="modalupload">

                      <!-- Modal content -->
                      <div class="modalupload-content" style="background: green;">
                        <span class="closeupload">&times;</span>
                                       <form class="myform" action="index.php" method="post" enctype="multipart/form-data" >
                                       <center>
                                    <h2>UPLOAD A MEME</h2>
                                    <label><b>Add a Title:</b></label><br>
                                    <input name="title" type="text" class="inputvalues" placeholder="Add a Title" required/><br>
                                    <img id="uploadPreview" src="imgs/avatar.png" style="border-radius: 40px;" class="avatar"/><br>
                                    <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/> <br /><br /><br />
                                    <input name="uploadbtn" type="submit" id="uploadbtn" value="UPLOAD"/>
                                    </center>
                      </div>

                    </div>

<?php

if(isset($_POST['uploadbtn']))
{
                $title = $_POST['title'];
               
                $img_name = $_FILES['imglink']['name'];
                $img_tmp =$_FILES['imglink']['tmp_name'];

                $directory = 'imgs/';
                $target_file = $directory.$img_name;


                move_uploaded_file($img_tmp,$target_file);    
                $query= "insert into allmedia values('','$title','$target_file','','','')";
                $query_run = mysqli_query($con,$query);


}
 ?>



                    <script>
                    // Get the modal
                    var modalupload = document.getElementById('myModalupload');

                    // Get the button that opens the modal
                    var btnupload = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var spanupload = document.getElementsByClassName("closeupload")[0];

                    // When the user clicks the button, open the modal
                    btnupload.onclick = function() {
                        modalupload.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    spanupload.onclick = function() {
                        modalupload.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modalupload) {
                            modalupload.style.display = "none";
                        }
                    }
                    </script>




























<div style="float: right; margin-left: 900px; margin-right: 230px; margin-top: 40px; clear: right; background: #e5e6ee;

    color: red;
    font-family: Arial;
    font-size: 12px;">
<style type="text/css">@import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);</style>
    <div style="
    -webkit-filter: blur(5px);
    " class="body"></div>
        <div class="grad"></div>
        <div class="header">
            <div style="float: left; margin-left: 30px;
    color: red;
    font-family: 'Exo', sans-serif;
    font-size: 35px;
    font-weight: 200;">Offside<span style="    color: #5379fa !important;">11</span></div>
        </div>
        <br>
        <div style="top: calc(50% - 75px);
    left: calc(50% - 50px);
    height: 150px;
   
    padding: 10px;" class="login">
                <input style="    background: transparent;
    border: 1px solid black;
    border-radius: 2px;
    color: black;
    font-family: 'Exo', sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 4px;" type="text" placeholder="username" name="user"><br>
                <input style="background: transparent;
    border: 1px solid black;
    border-radius: 2px;
    color: black;
    font-family: 'Exo', sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 4px;
    margin-top: 10px;" type="password" placeholder="password" name="password"><br>
                <center><input style="background: #fff;
    border: 1px solid #fff;
    cursor: pointer;
    border-radius: 2px;
    color: #a18d6c;
    font-family: 'Exo', sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 6px;
    margin-top: 10px;" type="button" value="Login">
        </center></div>
         <div style="position: absolute;
 margin-left: 115px;
  background: #DDD;
 
  line-height: 30px;
  text-align: center;" class="or">OR</div> <br />
  <br /><br /><br />
         
    <button style=" background: #32508E; margin-bottom: 20px;
  width: 220px;
  margin-left: 20px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;" class="social-signin facebook">Log in with facebook</button>
  <div><button style="background: #55ACEE; margin-bottom: 20px;
  margin-left: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;" class="social-signin twitter">Log in with Twitter</button>
  </div>
    <div><button style=" background: #DD4B39; margin-bottom: 20px;
    margin-left: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;" class="social-signin google">Log in with Google+</button>
   
  </div>
 

</div>





















































                    <div id="maindiv" style="width: 500px; background: white; margin-left:670px; border: 23px;   ">
                       
                    </div>













                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
                    <script src='ajaxx.js' type="text/javascript"></script>



 
</body>


</html>    
