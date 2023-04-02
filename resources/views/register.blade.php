<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="/CSS/register-page.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-logo" href="landing-page.html">
          <img src="/Assets/logo.png" alt="FAVEBOOK" width="209" height="30" />
        </a>
        <div class="navbar-text">
          <a class="navbar-signIn" href="/sign_in">Sign in</a>
          <a class="navbar-getStarted" href="register-page.html"> Get Started </a>
        </div>
      </div>
    </nav>

    <div id="modal">
      <img src="/Assets/logo.png" alt="" style="width: 150px" />
      <div class="content" style="justify-content: center">
        <h4 id="register-text">Register your account</h4>
        <hr style="padding-bottom: 12px" />
        <form action="/create" id="form1" method = "POST">
            @csrf
          <div class="form content-item">
            <input
              id="inputUsername"
              class="form-input"
              type="text"
              class="form-control"
              placeholder="Username"
              name = "Username"
              value = "{{old('Username')}}"
            />
          </div>
          <div class="register-full-name content-item">
            <div>
              <input
                id="inputFirstname"
                class="fullName-input"
                type="text"
                placeholder="First name"
                name = "firstname"
                value = "{{old('firstname')}}"
              />
            </div>
            <div>
              <input
                id="inputLastname"
                class="fullName-input"
                type="text"
                placeholder="Last name"
                name = "lastname"
                value = "{{old('lastname')}}"
              />
            </div>
          </div>
          <div class="register-email content-item">
            <input
              id="inputEmail"
              class="form-input"
              type="text"
              placeholder="Email address"
              name = "Email"
              value = "{{old('Email')}}"
            />
          </div>
          <div class="register-mobileNumber content-item">
            <input
              id="inputMobileNumber"
              class="form-input"
              type="text"
              placeholder="Mobile number"
              name = "phonenumber"
              value = "{{old('phonenumber')}}"
            />
          </div>
          <div class="register-dateOfBirth content-item">
            <label for="dateOfBirth" style="font-size: 14px"
              >Date of birth</label
            >
            <input id="dateOfBirth" class="form-input" type="date" name = "DOB" value = "{{old('DOB')}}" />
          </div>

          <div class="register-gender content-item">
            <div class="register-gender-detail">
              <label for="gender-female" style="color: #898989">Female</label>
              <input
              id="gender-female"
              name="gender"
              class="gender-input"
              type="radio"
              value="female" @if (old('gender') == "female") checked @endif
              />
            </div>
            <div class="register-gender-detail">
              <label for="gender-male" style="color: #898989">Male</label>
              <input
                id="gender-male"
                name="gender"
                class="gender-input"
                type="radio"
                value="male" @if (old('gender') == "male") checked @endif
             
              />
            </div>
          </div>
          <div class="form content-item">
            <input
              id="inputPassword"
              class="form-input"
              type="password"
              class="form-control"
              placeholder="New password"
              name = "password"
              
            />
          </div>

          <div class="form content-item">
            <input
              id="inputConfirmPassword"
              class="form-input"
              type="password"
              class="form-control"
              placeholder="Confirm new password"
              name = "password_confirmation"
            />
          </div>

          <div class="registerBtn">
            <button
              id="registerBtn"
              type="submit"
              onclick = "readData()"
              style="font-weight: bolder; padding: 10px 0; font-size: 24px"
            >
              Register
            </button>
          </div>
        </form>
        <a href="/sign_in" id="haveAcc-link" style="color: #596276">
          Already have an account?
        </a>
      </div>
    </div>

    <script src="/JS/register-page.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
