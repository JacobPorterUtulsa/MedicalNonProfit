<?php
    require_once('../app_config.php');
    require_once(APP_ROOT.APP_FOLDER_NAME.'/Scripts/echoHTML.php');
    require_once(APP_ROOT.APP_FOLDER_NAME.'/Scripts/errorDisplay.php');
    echoHEAD(APP_FOLDER_NAME.'/Client_Scripts/patientRegistration.js', APP_FOLDER_NAME.'/Styles/main.css');
    echoHEADER(APP_FOLDER_NAME.'/Styles/main.css');
    echo '
        <form id="registration" action="'.WEB_ROOT.APP_FOLDER_NAME.'/scripts/patientRegistration.php" onsubmit="return validatePassword()"  method="post">
            <div id="data"><br>
                <fieldset>
                <legend>General Patient Information</legend>
            
                    <label>First Name:</label>
                    <input type="text" id = "first_name" name="first_name" min="1" required><br>
                    
                    <label>Last Name:</label>
                    <input type="text" id = "last_name" name="last_name" min="1" required><br>
                    
                    <label>Gender:</label>
                    <input type="text" id = "gender" name="gender" min="1" required><br>
                    
                    <label>Birthdate:</label>
                    <input type="date" id = "dob" name="dob" required><br>
                    
                    <label>Genetics:</label>
                    <input type="text" id = "genetics" name="genetics" min="1" required><br>
                    
                    <label>Diabetes:</label><br>
                    
                    <label>Other Conditions:</label>
                    <input type="text" id = "other_conditions" name="other_conditions"><br>

                </fieldset>
';
/* Commented out for testing reasons
    echo '
                <fieldset>
                <legend>Member Information</legend>
                    <label>First Name:</label>
                    <input type="text" id = "fName" name="fName"><br>

                    <label for="state_code">State:</label>
                    <input type="text" placeholder="2-character code" id="state_code" name="state_code" pattern="[A-Za-z]{2}" title="Two letter state code"><br>

                    <label>ZIP Code:</label>
                    <input type="text" placeholder="Zip Code" title="Please enter a Zip Code" pattern="^\s*?\d{5}(?:[-\s]\d{4})?\s*?$" id = "ZIP" name="ZIP"><br>

                    <label>Phone Number:</label>
                    <input type="text" placeholder="(999)999-9999" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" id = "PhNum" name="PhNum"><br>

                </fieldset>
                <fieldset>
                <legend>Membership Information</legend>
                    <label>Membership Type:</label>
                    <select id="memType" name="memType">
                        <option value="Gold">Gold</option>
                        <option value="Silver">Silver</option>
                        <option value="Bronze">Bronze</option>
                    </select><br>

                    <label>Starting Date:</label>
                    <input placeholder="YYY-MM-DD" type="date" id = "StDate" name="StDate"><br>

                </fieldset>
            </div>

        <fieldset>
    ';
*/
    echo '
        <legend>Submit Your Membership</legend>
            <div style="text-align: center;" id="buttons" class="pageButtons">
                <label>&nbsp;</label>
                <input type="submit" value="Submit">
                <input type="button" onclick="formReset()" value="Reset Form"><br>
            </div>
        </fieldset>
        </form>  
    ';
    echoFOOTER();
?>