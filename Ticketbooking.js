function bookticket() {
  var name = document.getElementById("Name").value;
  var dateofbirth = document.getElementById("Date_of_birth").value;
  var passportnumber = document.getElementById("Passport_number").value;
  var city = document.getElementById("City").value;
  var flyingfrom = document.getElementById("Flying_from").value;
  var flyingto = document.getElementById("Flying_to").value;
  var departingdate = document.getElementById("Departing_date").value;

  if (name == "") {
    alert("your details required");
    return false
  } else if (dateofbirth == "") {
    alert("you did not entered data of birth");
    return false

  } else if (passportnumber == "") {
    alert("passport number required");
    return false
  } else if (city == "") {
    alert("your city name required");
    return false

  } else if (flyingfrom == "") {
    alert("source  required");
    return false

  } else if (flyingto == "") {
    alert("destination required");
    return false
  } else if (departingdate == "") {
    alert("departing date required");
    return false
  }


}
