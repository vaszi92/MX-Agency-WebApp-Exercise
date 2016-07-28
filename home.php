<?php
ob_start();
session_start();
include_once("includes/dbconnect.php");
include_once("includes/functions.php");

if(!isset($_SESSION['user'])){
	redirect_to("index.php");
}

$query = 'SELECT * FROM web_app_ex_users WHERE id = '.$_SESSION['user'];
$result = mysqli_query($connection, $query);
$userRow = mysqli_fetch_array($result);
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
</head>

<body>
<div class="row">
	<div class="col-sm-12">
		<div id="header" class="text-center clearfix">
			<h1>Web App Exercise</h1>
		</div>
	</div>
</div><!--Header ends here-->
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
			<div id="identification" class="text-center">
				<h1 class="homeheadline">Welcome to "Web App Exercise",<br /><b><?php echo $userRow['username']; ?></b>! <a href="includes/logout.php?logout"><br /><span class="smaller">(Log Out)</span></a></h1>

		
				<div class="notes text-center">
					<?php
					$notes_set = find_notes_by_id($userRow['id']);
					if(empty($notes_set)){
						echo "No notes have been posted for this user yet.";
					} else {
						echo "<div class=\"notelist text-left\">";
						foreach($notes_set as $note){
							echo "<div class=\"note text-left\">";
							echo "● ";
							echo htmlentities($note['content']);
							echo "<br />";
							echo "</div>";
						}
						echo "</div>";
					}
					?>
				</div><br />
		
				<div class="submit_notes text-center">
					<p class="sessionmess"><?php echo($_SESSION["message"]);?></p>
					<form action="create_note.php" method="post">
						<textarea name="new_note" rows="3" cols="30" placeholder="Submit a new note here..."></textarea>
						<div class="button col-sm-12 text-center">
							<input class="regbutton" type="submit" name="btn-submit" value="Submit"/>
						</div>
					</form>
				</div>
				
			</div><!--identification-->
		</div>
	</div><!--row-->
	<div id="footer">
		<div class="footertext">
			<span ="copyright">©Laszlo Vaszi <?php echo date("Y"); ?></span>
		</div>
	</div>	
</body>

</html>