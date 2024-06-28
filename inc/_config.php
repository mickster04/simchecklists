<?PHP 
// Config File //
session_cache_limiter('private_no_expire');
session_start();

header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

if(isset($_POST['theme'])) { $_SESSION['theme'] = substr($_POST['theme'],6); }
$app_title = "SimChecklists";
$app_version = "1.1.3";
require_once('inc/_class.checklist.php');
require_once('inc/_class.theme.php');
$theme = new theme();
?>

