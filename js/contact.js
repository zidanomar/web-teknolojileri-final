function validate(){
  var name = document.getElementById("name").value;
  var subject = document.getElementById("subject").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  
  error_message.style.padding = "10px";
  error_message.innerHTML ="";
  var text;
  if(name.length < 2){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 10){
    text = "Please Enter Correct Subject";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  if( !( email.match(mailformat) ) ) {
    if(email.length < 1 ) {
      text = email + "Please Enter valid Email";
      error_message.innerHTML = "";
      error_message.innerHTML = text;
    } else {
      text = email + " is not a valid Email";
      error_message.innerHTML = "";
      error_message.innerHTML = text;
    } 
      return false;
  }
  if(message.length <= 80){
    text = "Please Enter More Than 80 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}