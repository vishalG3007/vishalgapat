var emailfrom = document.getElementById("exampleFormControlInput2").value;
var check = emailfrom.indexOf("@");


function validate() {
    if (check>0) {
        return(true);
    }
        document.querySelector('#message').style.color = "red";
        document.querySelector('#message').textContent = "Please check your Email-ID and enter again...";
        return(false);
}
