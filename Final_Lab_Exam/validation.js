function validateForm() {
    var name = document.forms["registerForm"]["name"].value;
    var company_name = document.forms["registerForm"]["company_name"].value;
    var contact_no = document.forms["registerForm"]["contact_no"].value;
    var username = document.forms["registerForm"]["username"].value;
    var password = document.forms["registerForm"]["password"].value;

    if (name == "" ||company_name=="" || contact_no == "" || username == "" || password == "") {
        alert("All fields must be filled out");
        return false;
    }
    return true;
}