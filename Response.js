function CONTACTME(){
    var fName = document.forms["contactForm"]["firstName"];
    var lName = document.forms["contactForm"]["lastName"];
    var rank = document.forms["contactForm"]["title"];
    var Email = document.forms["contactForm"]["email"];
    var Message = document.forms["contactForm"]["message"];

    if (fName.value==""){
        window.alert("please enter your first name");
        fName.focus();
        return false;
    }
    if (fName.length < 4){
            window.alert("first name should be at least four alphabets.");
            fName.focus();
            return false;
        }
    if (lName.value == ""){
        window.alert("please enter your last name");
        lName.focus();
        return false;
    }
    if (lName.length < 4){
            window.alert("last name should be at least four alphabets.");
            lName.focus();
            return false;
        }
    if (rank.value == "") {
        window.alert("please enter your title.");
        rank.focus();
        return false;
    }
    
    if (rank.length < 2){
            window.alert("please enter a valid title.");
            rank.focus();
            return false;
        }
    if (Email.value == ""){
        window.alert("please enter your email.");
        Email.focus();
        return false;
    }
    if (Email.value.indexOf("@", 0) < 0){
        window.alert("please enter a valid email address.");
        Email.focus();
        return false;
    }
    if (Email.value.indexOf(".", 0) < 0){
        window.alert("please enter a valid email address.");
        Email.focus();
        return false;
    }
    if (Message.length < 20){
        window.alert("Please enter at least twenty alphabets");
        Message.focus();
        return false;
    }

    alert("Submission Successful! Thank you for reaching out");
    return true;
}
