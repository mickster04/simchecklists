<?PHP 
// SimChecklists - Interactive Checklist for Flight Sims //
// code @ github.com/jflores82/checklists/ //

require_once("inc/_config.php");
$check = new checklist();

$list = "c172.txt"; // Just a default for easy error handling //
if(isset($_GET['l'])) { 
	$list = $_GET['l'];  
	$user = 0;
}
if(isset($_POST['post_check'])) { 
	$list = $_FILES["file"]["tmp_name"]; 
	$user = 1;
}
$items = array();
$items = $check->loadChecklist($list, $user);

?>

<!doctype html>
<html lang="en">
	<?PHP require('inc/_head.php'); ?>
	
	<body>
		<div class="main-container">
			
			<div class="content">
				<?PHP $check->displayList($items); ?>
			</div>	
			
			<br><br>
			
			<?PHP require('inc/_footer.php'); ?>
		</div>
	</body>
	
	<script src="assets/checks.js"></script>

</html>