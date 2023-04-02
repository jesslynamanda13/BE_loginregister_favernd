document.getElementById("form1").addEventListener("submit", function (e) {
  e.preventDefault();

  let inputUsernameValue = document.getElementById("inputUsername").value;
  if (inputUsernameValue.length == 0) {
    alert("Username must be filled");
    return false;
  }

  let inputEmailValue = document.getElementById("inputEmail").value;
  if (inputEmailValue.length == 0) {
    alert("Email must filled");
    return false;
  } else if (
    !inputEmailValue.includes("@") ||
    !inputEmailValue.includes(".com")
  ) {
    alert("Invalid email format");
    return false;
  }
  let inputMobileNumberValue = document.getElementById("inputMobileNumber").value;
  let phoneNumberPattern = /^\+62\d{9,}$/; // regular expression pattern
  if (inputMobileNumberValue.length == 0) {
    alert("Mobile number must be filled");
    return false;
  } else if (!phoneNumberPattern.test(inputMobileNumberValue)) {
    alert(
      "Mobile number must start with \"+62\""
    );
    return false;
  }

  let inputPasswordValue = document.getElementById("inputPassword").value;

  if (inputPasswordValue.length == 0) {
    alert("Password must be filled");
    return false;
  } else if (
    inputPasswordValue.length < 8 ||
    !/[a-z]/.test(inputPasswordValue) ||
    !/[A-Z]/.test(inputPasswordValue) ||
    !/[0-9]/.test(inputPasswordValue) ||
    !/[^a-zA-Z0-9]/.test(inputPasswordValue)
  ) {
    alert(
      "Password must contain at least 8 characters, including uppercase and lowercase letters, numbers, and special characters"
    );
    return false;
  }

  let inputConfirmPasswordValue = document.getElementById(
    "inputConfirmPassword"
  ).value;
  if (inputConfirmPasswordValue.length == 0) {
    alert("Confirm password must be filled");
    return false;
  } else if (inputPasswordValue !== inputConfirmPasswordValue) {
    alert("Confirm password must match the password");
    return false;
  }

  let radioButtons = document.getElementsByName("gender");
  let isRadioButtonSelected = false;

  for (let i = 0; i < radioButtons.length; i++) {
    if (radioButtons[i].checked) {
      isRadioButtonSelected = true;
      break;
    }
  }

  if (!isRadioButtonSelected) {
    alert("Please select a gender");
    return false;
  }

  let inputAllValue = document.querySelectorAll("input");
  for (let i = 0; i < inputAllValue.length; i++) {
    if (inputAllValue[i].value.length == 0) {
      alert("All input must be filled");
      return false;
    }
  }

  document.getElementById("form1").submit();
});
