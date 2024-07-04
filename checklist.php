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
	if($check->validateChecklist("file")) { 
		$list = $_FILES["file"]["tmp_name"]; 
		$user = 1;
	} else { die("Only .txt (text/plain) files allowed!"); }
}
$items = array();
$items = $check->loadChecklist($list, $user);

?>

<!doctype html>
<html lang="en">
	<?PHP require('inc/_head.php'); ?>
	<body>
		
		<?PHP require('icao.php'); ?>
		
		<?PHP require('scratch.php'); ?>

		<?PHP require('writer.php'); ?>
		
		<div class="main-container">
			<?PHP require('icons.php'); ?>
			
			<div class="content">
				<?PHP $check->displayList($items); ?>
			</div>	
			
			<div class="spacer"></div>
			
			<?PHP require('icons.php'); ?>
			
			<div class="spacer"></div>
			
			<?PHP require('inc/_footer.php'); ?>
		</div>
	</body>
	
	<script src="assets/checks.js?v=<?PHP echo time(); ?>"></script>
	<script src="assets/icao.js?v=<?PHP echo time(); ?>"></script>
	<script src="assets/scratchpad.js?v=<?PHP echo time(); ?>"></script>
	<script src="assets/typepad.js?v=<?PHP echo time(); ?>"></script>
	<script src="assets/wakelock.js?v=<?PHP echo time(); ?>"></script>

</html>