      function UserLogin() {
          var name = $("#Username").val();
          var pass = $("#UserPassword").val();
          if (name == "") {
              $("#Username").css("border-color", "red");
              // alert("Please Enter Username");
              swal({
                  title: "Enter Username!",
                  //text: "Something went wrong!",
                  icon: "warning",
              });
              return false;
          } else if (pass == "") {
              $("#UserPassword").css("border-color", "red");
              //  alert("Please Enter Password");
              swal({
                  title: "Enter Password!",
                  //  text: "Something went wrong!",
                  icon: "warning",
              });
              return false;
          }
          if (!name == "") {
              $("#Username").css("border-color", "red");
          }
          if (!pass == "") {
              $("#UserPassword").css("border-color", "red");
          }
          return true;

      }

      function UserLogin1() {
          var name = $("#email").val();
          var pass = $("#password").val();
          if (name == "") {
              $("#email").css("border-color", "red");
              // alert("Please Enter Username");
              swal({
                  title: "Enter Username!",
                  //text: "Something went wrong!",
                  icon: "warning",
              });
              return false;
          } else if (pass == "") {
              $("#password").css("border-color", "red");
              //  alert("Please Enter Password");
              swal({
                  title: "Enter Password!",
                  //text: "Something went wrong!",
                  icon: "warning",
              });
              return false;
          }
          if (!name == "") {
              $("#email").css("border-color", "red");
          }
          if (!pass == "") {
              $("#password").css("border-color", "red");
          }
          return true;

      }

      function signup1() {
          var fname = $("#cname").val();
          // var lname =$("#lname").val(); 
          var pno = $("#cphone").val();
          // var select = $("#select").val();
          // var dob = $("#dob").val();
          // var age = $("#age").val();
          var email = $("#cemail").val();
          // var aadhar =$("#aadhar").val();
          //  var username =$("#username").val();
          var pass = $("#pass").val();
          var cpass = $("#cpass").val();

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

          /* if (age <= 0) {
               alert("Please enter valid age");
               return false;
           }*/



          if (pass.length <= 8) {
              alert("Password must be at least 7 charcters");
              return false;
          }

          if (pass != cpass) {
              alert("Password mismatched");
              return false;
          }





      }
	  
	  
	  
	  
	       function signup() {
          var fname = $("#ename").val();
          // var lname =$("#lname").val(); 
          var pno = $("#ephone").val();
          // var select = $("#select").val();
          // var dob = $("#dob").val();
          // var age = $("#age").val();
          var email = $("#email").val();
          // var aadhar =$("#aadhar").val();
          //  var username =$("#username").val();
          var pass = $("#pass").val();
          var cpass = $("#cpass").val();

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

          /* if (age <= 0) {
               alert("Please enter valid age");
               return false;
           }*/



          if (pass.length <= 8) {
              alert("Password must be at least 7 charcters");
              return false;
          }

          if (pass != cpass) {
              alert("Password mismatched");
              return false;
          }





      }