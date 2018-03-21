function validation() {

}

function cgpaValidation() {
  var cgpa = document.getElementById("cgpa").value;
  if (isNaN(cgpa)||cgpa<0||cgpa>10) {
    alert("Not a valid cgpa value");
  }

}

function emailValidation() {
  var email = document.getElementById("email").value;
      var atpos = email.indexOf("@");
      var dotpos = email.lastIndexOf(".");
      if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
          alert("Not a valid e-mail address");
          return false;
      }
}

function nameValidation() {
  var name = document.getElementById("name").value;
  // console.log(name);
  var regexp1=new RegExp("[^a-z A-Z,.]");
  if(regexp1.test(name)) {
    alert("Enter proper name");
  }
}

function rollNoValidation() {
  var rollno=document.getElementById("rollno").value;

  if(rollno.length!=8)
  {
    alert("Invalid roll no");
  }

}

function registrationNoValidation() {

}
