function validation() {
  
}

function emailValidation() {

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
