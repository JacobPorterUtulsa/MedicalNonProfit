<?php
    require_once('../app_config.php');
    require_once(APP_ROOT.APP_FOLDER_NAME.'/scripts/echoHTML.php');
    require_once(APP_ROOT.APP_FOLDER_NAME.'/scripts/errorDisplay.php');
    require_once(APP_ROOT.APP_FOLDER_NAME.'/scripts/utilities.php');
    $myJSFile = APP_FOLDER_NAME.'/client_Scripts/patientRegistration.js';
    $myCSSFile = APP_FOLDER_NAME.'/Styles/main.css';
// might be able to use something similar for radio buttons    $memType = filter_input(INPUT_POST, 'memType');
    
    $first_name = cleanIO($_POST['first_name']);
    $last_name = cleanIO($_POST['last_name']);
    $gender = cleanIO($_POST['gender']);
    $dob = cleanIO($_POST['dob']);
    $genetics = cleanIO($_POST['genetics']);
    $other_conditions = cleanIO($_POST['other_conditions']);
 
 /*this is old code. not sure if I should delete it
  *   
    $pswd1 = cleanIO($_POST['pswd1']);
    $fName = cleanIO($_POST['fName']);
    $stCode = cleanIO($_POST['state_code']);
    $ZIP = cleanIO($_POST['ZIP']);
    $phNum = cleanIO($_POST['PhNum']);
    //$memType = cleanIO($_POST['memType']);
    $stDate = cleanIO($_POST['StDate']);
    
*/
    //function cleanInput($data) {
        //$data = trim($data);
        //$data = stripslashes($data);
        //$data = htmlspecialchars($data);
        //return $data;    
    //};//cleanInput
        

        require_once (APP_ROOT . APP_FOLDER_NAME . '/Scripts/Database.php');
        //require_once (APP_ROOT . APP_FOLDER_NAME . '/scripts/db.php');
        $myDataBase = new Database(DSN1, USER1, PASSWD1);
        $myDB = $myDataBase -> getDB();
        $insertStmt = "INSERT into patients (first_name, last_name, gender, dob, genetics, other_conditions) VALUES (:em, :cp, :cn, :cs, :cz, :cf)";
        try {
            $stmt = $myDB -> prepare($insertStmt);
            $stmt -> bindValue(':em', $first_name);
            $stmt -> bindValue(':cp', $last_name);
            $stmt -> bindValue(':cn', $gender);
            $stmt -> bindValue(':cs', $dob);
            $stmt -> bindValue(':cz', $genetics);
            $stmt -> bindValue(':cf', $other_conditions);
            $stmt -> execute();
            $stmt -> closeCursor();
        } catch (Exception $e) {
            echoError($e -> getMessage());
            exit(1);
        }//catch

        //get the userID
/*
        try {
            $selectID = "SELECT custId FROM customers WHERE custEmail = :custEmailB";
            $statement = $myDB -> prepare($selectID);
            $statement -> bindValue(':custEmailB', $email);
            $statement -> execute();
            $fetchedData = $statement -> fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $error_message = $e -> getMessage();
            echoError($error_message);
            exit(1);
        }



        //Aplication specific checks
    echoHEAD(APP_FOLDER_NAME.'/Client_Scripts/customerRegistration.js', APP_FOLDER_NAME.'/Styles/customerRegistration.css');
    echoHEADER(APP_FOLDER_NAME.'/Styles/customerRegistration.css');
echo '

<div id="data"><br>
    <fieldset>
    <legend>Registration Information</legend>
        <label>Email:</label>
        <span>'.htmlspecialchars($email).'</span><br>

        <label>First Name:</label>
        <span>'.htmlspecialchars($fName).'</span><br>

        <label>State Code:</label>
        <span>'.htmlspecialchars($stCode).'</span><br>

        <label>ZIP Code:</label>
        <span>'.htmlspecialchars($ZIP).'</span><br>

        <label>Phone Number:</label>
        <span>'.htmlspecialchars($phNum).'</span><br>

        <label>Membership Type:</label>
        <span>'.htmlspecialchars($memType).'</span><br>

        <label>Starting Date:</label>
        <span>'.htmlspecialchars($stDate).'</span><br>
    </fieldset>
</div>
';

*/
?>
