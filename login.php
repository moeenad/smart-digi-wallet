<?php
session_start(); 
  if(isset( $_SESSION['fullname'])) {
  unset($_SESSION['fullname']);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Red+Hat+Display:300,400,600,700&amp;lang=en"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="smart.js" async></script>
    <title></title>
  </head>

  <body onload="pageLoader()" style="margin: 0">
    <section class="vh-100" style="background-color: #efefef">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 3px">
              <div class="card-body p-5 text-center">
                <img
                  src="images/smart-logo-01.png"
                  width="120px"
                  alt="Smart Logo"
                />
                <br /><br />
                <?php
                  if(isset($_SESSION['create'])){
                ?>
                <div class="alert alert-success italic">
                <?php 
                  echo $_SESSION['create'];
                ?>
                </div>
                <?php
                unset($_SESSION['create']);
                }
                ?>
                <form id="myForm" method="post" action="authentication.php">
                  <div class="form-outline mb-4">
                    <div class="myLable" align="left">Email Address</div>
                    <input
                      type="email"
                      id="typeEmail"
                      name="userName"
                      class="form-control form-control-lg bFrame"
                      placeholder="Email@domain.com"
                      aria-label="Email"
                    />
                    <label
                      align="left"
                      class="form-check-label labelError"
                      id="lblEmail"
                    >
                      Wrong email address! Try again with a valid email address.
                    </label>
                  </div>

                  <div class="form-outline mb-4">
                    <div class="myLable" align="left">Password</div>
                    <input
                      type="password"
                      id="typePassword"
                      name="password"
                      class="form-control form-control-lg bFrame"
                      placeholder="Password"
                      aria-describedby="Password"
                    />
                    <label
                      align="left"
                      class="form-check-label labelError"
                      id="lblPassword"
                    >
                      Wrong password! Try again or reset your password.
                    </label>
                  </div>

                  <div class="form-check d-flex justify-content-start mb-4">
                    <input
                      class="form-check-input bFrame"
                      type="checkbox"
                      value=""
                      id="form1Example3"
                    />
                    <label class="form-check-label myLable"
                      >&nbsp; Remember password
                    </label>
                  </div>

                  <button
                    id="loginButton"
                    class="myBtn"
                    type="submit"
                    name="login"
                    onclick="validateEmailPassword();"
                  >
                    Login
                  </button>
                </form>

                <hr />

                <a href="#!">Forgot password?</a>
                <p class="myLable">
                  Don't have an account?
                  <a href="register.php">Register here</a>
                </p>
                <a href="#" class="text-muted">Terms of use</a>
                <span class="mylabel text-muted">|</span>
                <a href="#" class="text-muted">Privacy policy</a>
              </div>
            </div>
            <br />
            <br />
            <center>
              <p class="copyright">
                2023 © Smart Digital Wallet. Designed by Mohammed Enad.
              </p>
            </center>
          </div>
        </div>
      </div>
    </section>
    <div id="loader"></div>
    <div id="overlay"></div>
  </body>
</html>
