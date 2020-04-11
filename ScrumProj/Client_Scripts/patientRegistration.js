var $ = function(id) {
    return document.getElementById(id);
};

function validatePassword() {
    var pswd1 = $("pswd1").value;
    var pswd2 = $("pswd2").value;
    //DEBUG alert(pswd1);
    //DEBUG alert(pswd2);
    if (pswd1 != pswd2) {
        alert ("Passwords do not match.");
        return false;
    }//if
    return true;
}//validate password
function formReset() {
    document.getElementById("registration").reset();
  }//formReset