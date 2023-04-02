document.getElementById("myForm").addEventListener("submit", function (e) {
    e.preventDefault();

    let usernameInput = document.getElementById("inputUsername");
    let usernameValue = usernameInput.value.trim();
    let passwordInput = document.getElementById("inputPassword");
    let passwordValue = passwordInput.value.trim();
  
    if (usernameValue === "") {
      alert("Username must be filled");
      return false;
    }
  
    if (passwordValue === "") {
      alert("Password must be filled");
      return false;
    }
  
    // Check if the email has been registered
    const isUsernameRegistered = checkUsernameRegistration(usernameValue);
    if (!isUsernameRegistered) {
      alert("Username has not been registered");
      return false;
    }
    document.getElementById("myForm").submit();
});

function checkUsernameRegistration(username) {
    return true;
}