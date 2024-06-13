<?PHP 
// Config File //
session_cache_limiter('private_no_expire');
session_start();
if(isset($_POST['theme'])) { $_SESSION['theme'] = substr($_POST['theme'],6); }
$app_title = "SimChecklists";
$app_version = "1.0.3";
require_once('inc/_class.checklist.php');
require_once('inc/_class.theme.php');
$theme = new theme();
?>