<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>title</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--jquery and popper.js for bootstrap 4-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css" type="text/css">

  </head>
  <body>
  	<br>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<form method = "POST">
					<label for="user" class="label">Username</label>
					<input name = "login"  type="text" class="input" id="username" value="" onchange='check_pass();'>
					<span id="message" style="color:  #CC4646;;"></span>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
				<input name="pass" type="password" class="input" data-type="password" id="password" value="" onchange='check_p();'>
					<span id="messages" style="color:  #CC4646;;"></span>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" name="button" value="Sign In"  id="submit" disabled>
				</div>
					</form>
				<!-- <div>
					<input type="submit" name="button" value="">
				</div> -->
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#Forgot">Forgot Password?</a>
				</div>
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
<?php
if($_POST)
{
login = $_POST['login'];
pass = $_POST['pass'];
}

if(login=="admin" && pass = "admin")
{
<script>
window.location.href = "thinkspeak.html";
</script>
}



