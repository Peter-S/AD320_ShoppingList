window.onload =function() {

function validateForm() {
  var x = document.forms["Form"]["item"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}