<?php
include_once("includes/dbconnect.php");
include_once("includes/login.php");
include_once("includes/functions.php");

if(isset($_SESSION['user'])!=""){
    redirect_to("home.php");
}
if(empty($_SESSION['message'])) {
	$_SESSION['message'] = "";
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/ico" href="#">
	<meta charset="utf-8">
	<title>MX Agency Web App Exercise</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="includes/style.css">
	<link rel="stylesheet" type="text/css" href="includes/bootstrap.min.css">
	<link href="http://fonts.googleapis.com/css?family=Roboto:100,400,300,700,400italic,500%7CMontserrat:400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic" rel="stylesheet" type="text/css">
</head>

<body style="background-color: #e6e5e5;">
	<div class="row">
		<div class="col-sm-12">
			<div id="header" class="text-center clearfix">
				<h1>Web App Exercise</h1>
			</div>
		</div>
	</div><!--Header ends here-->
	<div class="row"><!--Content starts here-->
		<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
			<div id="identification" class="text-center">
				<h1>Welcome!</h1><br />
				<h3>Please log in or <a href="registration.php">register here</a> to access the full website!</h3>
				<p class="sessionmess"><?php echo $_SESSION['message']; ?><br /></p>
				<form method="POST">
					<input type="text" name="username" placeholder="Your username" size="30" maxlength="50"/>
					<input type="password" name="password" placeholder="Your password" size="30" maxlength="30"/><br />
					<button class="regbutton" type="submit" name="btn-login">Log In</button>
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
		<span>©Laszlo Vaszi <?php echo date("Y"); ?></span>
	</div>	
</body>

</html>
<?php $_SESSION['message']=NULL;?>