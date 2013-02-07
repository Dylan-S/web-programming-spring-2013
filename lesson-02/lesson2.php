<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Lesson 2</title>
</head><body>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' ) { ?>

<?php 
function age($birthdate) {
	return (strtotime('now') - strtotime($birthdate))/(60*60*24*365);
}	

$age =  age($_POST['birthdate']);

if ($age > 18) {
	?>
    
    <h2 style="color:#06C">You are <?php echo intval($age) ?>, you may continue into the site.</h2>
    
    <?php
} else {
	?>
    <h2 style="color:#F00">Sorry, you are <?php echo intval($age) ?>, you may not enter the site.</h2>
    
	<?php
}
} else {
	?>
    
    <h3 style="color:#C30;"><em>You must be 18 years or older to enter this site.</em> Please enter your birthday. Format should be yyyy-mm-dd.</h3>
	<form action="" method="post">
	<input name="birthdate" type="date">
    <input name="" type="submit">
	</form>
	
	<?php
}
?>
</body>
</html>