<?PHP 
// SimChecklists - Interactive Checklist for Flight Sims //
// code @ github.com/jflores82/checklists/ //

require_once('inc/_config.php');
$check = new checklist();
$title = array();
$title = $check->getTitles();
?>

<!doctype html>
<html lang="en">
	<?PHP require('inc/_head.php'); ?>
	
	<body>
		<div class="main-container">
			
			<div class="content">
				<h2><?PHP echo $app_title; ?> - Interactive Checklists:</h2>
				Choose your aircraft:<br>
				<?PHP $check->displayTitles($title); ?>
			</div>	
			
			<br><br>
			
			Or upload your own file (the files aren't saved on my server):
			
			<br><br>
			
			<form action="checklist.php" method="post" enctype="multipart/form-data">
				<input type="file" name="file" id="file" />
				<input type="hidden" name="post_check" value="true">
				<input type="submit" name="submit" value="Send" />
			</form>
			
			<br><br>
			
			<?PHP require('inc/_footer.php'); ?>
		</div>
	</body>
</html>