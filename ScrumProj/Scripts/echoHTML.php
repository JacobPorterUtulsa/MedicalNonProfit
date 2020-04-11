<?php

function echoHead($jsFile, $cssFile) {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <Title id="Title">Patient Registration</title>
        <link rel="stylesheet" type"text/css" href="'.$cssFile.'">
        <script src="'.$jsFile.'"></script>
    </head>
    ';
}//echoHead
function echoHeader($cssFile) {
    require_once('../app_config.php');
    echo '
    <body>
        <main style="background-color: white;">
            <header>
                <h1>Patient Registration</h1>
            </header>
        <br>
        <div class="dropdown">
        <button class="dropbtn">Home</button>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
                <a href="#">Login</a>
                <a href="'.WEB_ROOT.APP_FOLDER_NAME.'/Scripts/landingPage.php'.'">Register</a>
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Email</button>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Log Out</button>
        </div>
        <br>
    ';
}//echoHeader
function echoFooter() {
    $currYear = date('Y');
    echo '
    <footer>
        &copy Medicl Non-Profit, 2020.
    </footer>  
    </main>
    <br>
    </body>
    ';
}




?>