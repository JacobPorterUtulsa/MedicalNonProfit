<?php
require_once('app_config.php');
$landingPage= WEB_ROOT.APP_FOLDER_NAME.'/Scripts/landingPage.php';
echo $landingPage;
header("location:$landingPage");
?>