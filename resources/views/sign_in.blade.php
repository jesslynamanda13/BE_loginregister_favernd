<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/CSS/login-page.css">
  <link rel="stylesheet" href="/CSS/navbar-unregister.css">
</head>
<body>
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-logo" href="landing-page.html">
        <img src="/Assets/logo.png" alt="FAVEBOOK" width="209" height="30" />
      </a>
      <div class="navbar-text">
        <a class="navbar-signIn" href=""
          >Sign in</a>
          <a class="navbar-getStarted" href="">
           Get Started
          </a>
      </div>
    </div>
  </nav>
  <!--  -->
  <div id="halaman">
    <img src="Assets/logo.png" alt="" style="width: 150px;">
    <div class="content" style="justify-content: center;">
      <h4 id="login-text"> Log in to your account</h4>
      <hr>
      <form action="/loginData" id="myForm" method = "POST">
        @csrf
        <div class="form">
          <input class="form-input"  value = "{{ Session::get('Username') }}" name = "Username" id="inputUsername" type="text" class="form-control" placeholder="Username">
        </div>
        <div class="form">
          <input class="form-input"  name = "password" id="inputPassword" type="password" class="form-control" placeholder="Password">
        </div>
        <div class="remember-me">
          <input type="checkbox" name="remember" id="remember-input">
          <label id="remember-me-label" for="remember" class="form-check-label">Remember Me</label>
        </div>
        <div class="submitBtn">
          <button id="loginBtn" type="submit" onclick=""><b>Log in</b></button>
        </div>
      </form>
      <a href="" id="forgot-link">
        Forgot Password?
      </a>
      <hr>
      <div class="submitBtn">
        <a id="registerBtn" href="/register"><b>Register</b></a>
      </div>
    </div>
  </div>

  <!-- Footer -->

  <script src="/JS/login-page.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>