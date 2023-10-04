function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }
    
    if (email.trim() === "" || password.trim() === "") {
      alert("Please fill in all the given fields.");
      return false;
    }
    return true;
  }  