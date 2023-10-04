function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;
  
    if (email.trim() === "") {
      alert("Please fill in the email field.");
      return false;
    }
  
    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }
  
    if (!passwordPattern.test(password)) {
      alert("Password must have at least 1 uppercase letter, 1 lowercase letter, 1 number, 1 special character, and have a minimum length of 6 characters.");
      return false;
    }

    return true;
  }