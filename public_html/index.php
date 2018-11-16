<?php 
session_start();
if($_POST)
{
$_SESSION['login'] = $_POST['users'];
$_SESSION['pass'] = $_POST['password'];
echo $login;
}
if($_SESSION['login']=="admin" && $_SESSION['pass'] = "admin")
{
  // echo "wowww";
  header("Location: dashboard.php");
}
?>


 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>login: energy optimizzation by internet of things</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--jquery and popper.js for bootstrap 4-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" type="text/css" href="style.css" type="text/css">
 -->
<style type="text/css">
	body{
	margin:0;
	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;

}
/**,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}*/
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	margin-left: 30px;
	max-width:525px;
	min-height:590px;
	position:absolute;
	background:url( ) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html/* .sign-in-htm,*/
.login-html /*.sign-up-htm*/{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
/*	transform:rotateY(180deg);*/
	backface-visibility:hidden;
/*	transition:all .4s linear;*/
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
.text{

	width: 300px;
	margin-left: 670px;
	margin-top: 50px;

}
.energy{
	 color: #38476f;
	font-size: 55px;
	letter-spacing:  3px;
}
.sec{
	font-size: 59px;
	letter-spacing: 3px;
}
.thic{
	font-size: 55px;
	letter-spacing: 1px;
	color: #919dbc;

;

;
}
.four{
	font-size: 70px;
	letter-spacing: 2px;
	margin-left: 20px;
}
.fif{
	font-size: 50px;
  color: #38476f;
}
</style>

<!-- <script type="text/javascript">
        function check_pass() {
       if (document.getElementById('username').value == "mujadmin"){
          document.getElementById('submit').disabled = true;

     } else {
         document.getElementById('submit').disabled = false;
         document.getElementById("message").innerHTML="Please enter the correct username!";
       }
   }
   function check_p() {
       if (document.getElementById('password').value == "inspired"){
          document.getElementById('submit').disabled = true;
     } else {
         document.getElementById('submit').disabled = false;
         document.getElementById("messages").innerHTML="Please fill the correct password!";
       }
   }
</script> -->
  </head>
  <body>
    <br>
  <div class="login-wrap">
    <div class="login-html">
      <form action="index.php" method="POST">
              <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <!--   space btw sign-in and input field -->
              <br>
              <br>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input  type="text" class="input" id="username" name="users">
                    <span id="message" style="color:  #CC4646;;"></span>
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                <input  type="password" class="input" data-type="password" id="password" value="" name="password">
                    <span id="messages" style="color:  #CC4646;;"></span>
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                  <!--   <input type="submit" class="button" name="button" value="Sign In"  id="submit" > -->
                    <input type="submit" class="button" value="sign-in" id="submit">
                </div>
                <!-- <div>
                    <input type="submit" name="button" value="">
                </div> -->
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#Forgot">Forgot Password?</a>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- energy optimization using internet of things -->
<div class="text">
    <br>
    <br>
    <h1 class="energy"><strong>Energy</strong></h1>
    <h1 class="sec"><b>optimization</b></h1>
        <h1 class="thic"><b>By Internet</b></h1>
        <h1 class="four"><b>of</b></h1>
        <h1 class="fif"><b>Things</b></h1>
</div>
  </body>
</html>


