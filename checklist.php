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
		<div class="main-container">
			
			<div class="icons">
				<div><a href="index.php"><?PHP $theme->theme_icon('back'); ?></a></div>
				<div onclick="location.reload(true);"><?PHP $theme->theme_icon('refresh'); ?></div>
			</div>
			
			<div class="content">
				<?PHP $check->displayList($items); ?>
			</div>	
			
			<div class="spacer"></div>
			
			<div class="icons">
				<div><a href="index.php"><?PHP $theme->theme_icon('back'); ?></a></div>
				<div><?PHP $theme->theme_icon('refresh'); ?></div>
			</div>
			
			<div class="spacer"></div>
			
			<?PHP require('inc/_footer.php'); ?>
		</div>
	</body>
	
	<script src="assets/checks.js"></script>

</html>