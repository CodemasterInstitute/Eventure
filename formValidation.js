function validateForm() {
    var x = document.forms["createEventForm"]["eventName"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }