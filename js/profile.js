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


}

function registrationNoValidation() {

}
