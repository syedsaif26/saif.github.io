var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}


function addplanefunction() {
  var flightnumber = document.getElementById("Flightnumber").value;
  var flightcompany = document.getElementById("Flightcompany").value;
  var departingTime = document.getElementById("DepartingTime").value;
  var arrivalTime = document.getElementById("ArrivalTime").value;
  var source = document.getElementById("source").value;
  var destination = document.getElementById("Destination").value;
  var noofSeats = document.getElementById("NoofSeats").value;


  if (flightnumber == "") {
    alert("Flight number required");
    return false

  }
  //check empty password field
  else if (flightcompany == "") {
    alert("flight company required");
    return false

  } else if (departingTime == "") {
    alert("departing Time required");
    return false

  } else if (arrivalTime == "") {
    alert("arrival Time required");
    return false

  } else if (source == "") {
    alert("source required");
    return false

  } else if (destination == "") {
    alert("destination required");
    return false
  } else if (noofSeats == "") {
    alert("no of Seats required");
    return false
  }

}


function removeplanefunction() {
  var flightnumber = document.getElementById("remove_Flightnumber").value;
  if (flightnumber == "") {
    alert("Flight number required");
    return false
  }
}



function addemployeefunction() {
  var employeeID = document.getElementById("EmployeeID").value;
  var employeename = document.getElementById("Employeename").value;
  var job = document.getElementById("Job").value;
  var salary = document.getElementById("salary").value;
  var salary1 = document.getElementById("Fruit").value;

  if (employeeID == "") {
    alert("employee ID required");
    return false;
  } else if (employeename == "") {
    alert("Employee name required");
    return false;
  } else if (job == "") {
    alert("job required");
    return false;
  } else if (salary == "") {
    alert("salary required");
    return false;
  } else if (salary1 == "") {
    alert("salary required");
    return false;
  }

}


function removeemployeefunction() {
  var employeeID = document.getElementById("remove_EmployeeID").value;
  if (employeeID == "") {
    alert("employee ID required");
    return false;
  }
}
