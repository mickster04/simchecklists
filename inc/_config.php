<?PHP 
// Config File //

$app_title = "SimChecklists";
$app_version = "1.0";
require_once('inc/_class.checklist.php');
require_once('inc/_class.theme.php');
$theme_file = "default.thm";
$theme = new theme($theme_file);
?>