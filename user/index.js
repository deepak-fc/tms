function signup() {
    var fname = $("#t_name").val();
    // var lname =$("#lname").val(); 
    var pno = $("#t_phone").val();
    // var select = $("#select").val();
    var dob = $("#dob").val();
    // var age = $("#age").val();
    //var email = $("#email").val();
    var aadhar = $("#aadhar_no").val();
    //  var username =$("#username").val();
    //var pass = $("#pass").val();
    //var cpass = $("#cpass").val();

    var letters = /^[A-Za-z]+$/;
    if (!fname.match(letters)) {
        alert("First Name should be alphabet characters only");
        return false;
    }

    /* if(!lname.match(letters))
     {
     alert("Last Name should be  alphabet characters only");
     return false;
     }*/

    if (pno.length != 10) {
        alert("Mobile number should be of 10 digits");
        return false;
    }

    if (addhar.lenth > 12) {
        alert("Addhar number should be of 12 digit");
        return false;
    }

    /* if (age <= 0) {
         alert("Please enter valid age");
         return false;
     }*/



    /* if (pass.length <= 8) {
         alert("Password must be at least 7 charcters");
         return false;
     }

     if (pass != cpass) {
         alert("Password mismatched");
         return false;
     }*/





}