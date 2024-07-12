function validateForm() {
       var fName = document.forms["myForm"]["fName"].value;
       var lName = document.forms["myForm"]["lName"].value;
       var email = document.forms["myForm"]["email"].value;
       var phone = document.forms["myForm"]["phone"].value;
       var questions = document.forms["myForm"]["questions"].value;
       if (fName == "") {
                alert("First Name must be filled out");
                return false;
       }

       if (lName == "") {
              alert("Last Name must be filled out");
              return false;
       }

       if (email == "") {
                alert("Email must be filled out");
                return false;
       }

       if (phone == "") {
              alert("Phone Number must be filled out");
              return false;
     }

     if (questions == "") {
       alert("Your Order Details Must be fill ");
       return false;
}

}


// Hamburger menu function
function hamburger() {
       var menu = document.getElementById("menu-links");
       var logo = document.getElementById("ffc-logo");
       if (menu.style.display === "block" && logo.style.display === "none") {
       menu.style.display = "none";
       logo.style.display = "block";
       } else {
       menu.style.display = "block";
       logo.style.display = "none";
       }
       }