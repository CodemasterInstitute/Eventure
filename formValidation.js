function validateForm() {
    var x = document.forms["createEventForm"]["eventName"].value;
    if (x == "") {
      alert("Event name must be filled out");
      return false;
    }
  }