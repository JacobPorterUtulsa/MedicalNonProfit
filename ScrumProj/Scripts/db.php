<?php
function getDB($dsn, $userName, $passwrd) {
    require_once ('../app_config.php');
    require_once (APP_ROOT.APP_FOLDER_NAME.'/scripts/errorDisplay.php');
    try {
        $db = new PDO ($dsn, $userName, $passwrd);
        echo 'Successful connection to database';
        return $db;
    } catch (Exception $e) {
        echoError ($e -> getMessage());
        exit(1);
    }//catch
}//getDB
?>