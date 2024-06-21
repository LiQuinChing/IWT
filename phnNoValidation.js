function validatePhoneNumber() {
    var phnNumber = document.getElementById("phone").value;
    var phnRegex = /^0[0-9]{9}$/; // Regex pattern for validation

    if (phnRegex.test(phnNumber)) {
      return true;
    } else {
      alert("Invalid phone number. Please enter a valid phone number.");
    }
  }