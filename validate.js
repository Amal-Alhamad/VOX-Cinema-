


function validate() {
  //varibles 
  var firstName = document.forms["form"]["first"].value;
  var lastName = document.forms["form"]["last"].value;
  var email = document.forms["form"]["email"].value;
  var phone = document.forms["form"]["phone"].value;
  var cnum = document.forms["form"]["cnum"].value;
  var code = document.forms["form"]["code"].value;
  var ex = document.forms["form"]["ex"].value;

  //check if the input is empty

  if ( firstName == "" || lastName == "")
    document.getElementById("error").innerHTML = alert(" name required");
  else if (email == "")
    document.getElementById("error").innerHTML = alert("email required");
  else if (phone == "")
    document.getElementById("error").innerHTML = alert("Phone Number required");
  else if (cnum == "")
    document.getElementById("error").innerHTML = alert("Credit Card Number required");
  else if (code == "")
    document.getElementById("error").innerHTML = alert("Code required");
  else if (ex == "")
    document.getElementById("error").innerHTML = alert("Expiration Date required");

}

//check the input name with special format 
function validatenames(){

  var firstName = document.forms["form"]["first"].value;
  var lastName = document.forms["form"]["last"].value;

  if( !/^[A-Za-z\s]+$/.test(firstName)) {
    document.getElementById("error").innerHTML = alert("invalid first name try again!");
  }

  if(!/^[A-Za-z\s]+$/.test(lastName)) {
    document.getElementById("error").innerHTML = alert("invalid last name try again!")
}
}

//check the input phone Number with special format 
function validateFormPhone(){
  var phone = document.forms["form"]["phone"].value;
  if( !/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/.test(phone)) {
    document.getElementById("error").innerHTML = alert("invalid phone number");
  }
}


//check the input email with special format 
function ValidateEmail()  
{ 
  var email = document.forms["form"]["email"].value;
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) 
  { 
    return (true) 
  } 
    alert("invalid email address") 
    return (false) 
}


//check the input cvv with special format 
function validate_cvv(){

  var code = document.forms["form"]["code"].value;

  if(!/^[0-9]{3}$/.test(code))
   {
     alert("Invalid cvv number"); //invalid cvv number
     return false;
  }else{
      return true;  //valid cvv number
     }

  }

  ////check the input expiration date with special format 
  function expiration(){

    var ex = document.forms["form"]["ex"].value;
    
    if(!/^(0[1-9]|1[0-2])\/?([0-9]{4})$/.test(ex))
    {
      alert("Invalid expiration date"); 
      return false;
   }else{
       return true; 
      }
  }
//check the input card number with special format 
  function cardNumber(){
    var cnum = document.forms["form"]["cnum"].value;
    
    if(!/^4[0-9]{12}(?:[0-9]{3})?$/.test(cnum))
    {
      alert("Invalid card Number"); 
      return false;
   }else{
       return true; 
      }
    }

    




  