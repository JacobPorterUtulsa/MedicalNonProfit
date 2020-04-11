<?php
class Database {
    private $db;

    public function __construct($dsn, $userName, $passwd) {
        require_once ('../app_config.php');
        require_once (APP_ROOT.APP_FOLDER_NAME.'/scripts/errorDisplay.php');
        //creates PDO object
        try {
            $this -> db = new PDO ($dsn, $userName, $passwd);
        } catch (Exception $e) {
            echoError($e -> getMessage());
            exit(1);
        }//catch
    }//constructor

    public function getDB() {
        return ($this -> db);
    }

}//class

?>