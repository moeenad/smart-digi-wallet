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

  <body onload="pageLoader();">
    <!-- header container -->
    <div class="container-md">
      <div class="row">
        <div class="col-12">
          <img src="images/smart-logo-01.png" height="90px" />
        </div>
      </div>
    </div>
    <!-- Body section -->
    <section>
      <div class="container py-5">
        <div class="row">
          <!-- Register Card -->
          <div class="col-7">
            <div class="card shadow-2-strong">
              <div class="card-body p-5 text-left">
                <h3>Create your account</h3>
                <p class="italic">All fields are required.</p>
                <br />
                <form id="myForm" action="process.php" method="post">
                  <div class="form-outline mb-4">
                    <div class="row">
                      <div class="col-6">
                        <div align="left" class="myLable">First Name*</div>
                      </div>
                      <!-- <div class="col-1"></div> -->
                      <div class="col-6">
                        <div class="myLable">Last Name*</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <input
                          type="text"
                          id="typeFirstName"
                          name="firstName"
                          class="form-control form-control-md bFrame"
                          required
                        />
                      </div>
                      <!-- <div class="col-1"></div> -->
                      <div class="col-6">
                        <input
                          type="text"
                          id="typeLastName"
                          name="lastName"
                          class="form-control form-control-md bFrame"
                          required
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <label
                        id="lblFirstName"
                        align="left"
                        class="labelError"
                        style="margin-top: -20px"
                      >
                        First Name required
                      </label>
                    </div>
                    <!-- <div class="col-1"></div> -->
                    <div class="col-6">
                      <label
                        id="lblLastName"
                        align="left"
                        class="labelError"
                        style="margin-top: -20px"
                      >
                        Last Name required
                      </label>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <div align="left" class="myLable">Email*</div>
                    <input
                      type="email"
                      id="typeRegEmail"
                      name="email"
                      class="form-control form-control-md bFrame"
                      placeholder="email@domain.com"
                      required
                    />
                    <label align="left" class="labelError" id="lblRegEmail">
                      Correct Email required.
                    </label>
                  </div>

                  <div class="form-outline mb-4">
                    <div class="row">
                      <div class="col-2">
                        <div align="left" class="myLable">Apt/Unit</div>
                      </div>
                      <div class="col-10">
                        <div class="myLable">Street Address*</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2">
                        <input
                          type="text"
                          id="typeUnitInput"
                          name="unit"
                          class="form-control form-control-md bFrame"
                        />
                      </div>
                      <div class="col-10">
                        <input
                          type="text"
                          id="typeAddress"
                          name="address"
                          class="form-control form-control-md bFrame"
                          placeholder="123 Street Name"
                          required
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2">
                        <div align="left" class="labelError"></div>
                      </div>
                      <div class="col-10">
                        <label id="lblAddress" align="left" class="labelError">
                          Street Address is required
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <div class="row">
                      <div class="col-6">
                        <div align="left" class="myLable">City*</div>
                      </div>
                      <div class="col-6">
                        <div align="left" class="myLable">Province*</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <input
                          type="text"
                          id="typeCity"
                          name="city"
                          class="form-control form-control-md bFrame"
                          required
                        />
                      </div>
                      <div class="col-6">
                        <select
                          class="form-select form-select-md bFrame"
                          id="typeProvenceSelect"
                          name="province"
                        >
                          <option value="">Select One</option>
                          <optgroup label="Canadian Provinces">
                            <option value="AB">Alberta</option>
                            <option value="BC">British Columbia</option>
                            <option value="MB">Manitoba</option>
                            <option value="NB">New Brunswick</option>
                            <option value="NF">Newfoundland</option>
                            <option value="NT">Northwest Territories</option>
                            <option value="NS">Nova Scotia</option>
                            <option value="NU">Nunavut</option>
                            <option value="ON">Ontario</option>
                            <option value="PE">Prince Edward Island</option>
                            <option value="QC">Quebec</option>
                            <option value="SK">Saskatchewan</option>
                            <option value="YT">Yukon Territory</option>
                          </optgroup>
                          <optgroup label="U.S. States/Territories">
                            <option value="AK">Alaska</option>
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="AZ">Arizona</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DC">District of Columbia</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="IA">Iowa</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MD">Maryland</option>
                            <option value="ME">Maine</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MO">Missouri</option>
                            <option value="MS">Mississippi</option>
                            <option value="MT">Montana</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="NE">Nebraska</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NV">Nevada</option>
                            <option value="NY">New York</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VA">Virginia</option>
                            <option value="VT">Vermont</option>
                            <option value="WA">Washington</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WV">West Virginia</option>
                            <option value="WY">Wyoming</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <label align="left" class="labelError" id="lblCity">
                          City Required.
                        </label>
                      </div>
                      <div class="col-6">
                        <label
                          align="left"
                          class="labelError"
                          id="lblProvenceSelect"
                        >
                          Province/State Required.
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <div class="row">
                      <div class="col-6">
                        <div align="left" class="myLable">Country*</div>
                      </div>
                      <div class="col-6">
                        <div align="left" class="myLable">Postal Code/Zip*</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <select
                          class="form-select form-select-md bFrame"
                          id="typeCountrySelect"
                          name="country"
                        >
                          <option value="CANADA" selected>Canada</option>
                          <option value="USA">USA</option>
                        </select>
                      </div>
                      <div class="col-6">
                        <input
                          type="text"
                          id="typePostal"
                          name="postal"
                          class="form-control form-control-md bFrame"
                          required
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <label
                          align="left"
                          class="labelError"
                          id="lblCountrySelect"
                        >
                          Country Required.
                        </label>
                      </div>
                      <div class="col-6">
                        <label align="left" class="labelError" id="lblPostal">
                          Postacode/Zip Required.
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <div class="row">
                      <div class="col-6">
                        <div align="left" class="myLable">Tel Number</div>
                      </div>
                      <div class="col-6">
                        <div align="left" class="myLable">Mobile Number*</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <input
                          type="text"
                          id="typeTel"
                          name="tel"
                          class="form-control form-control-md bFrame"
                          placeholder="(999)999-9999"
                        />
                      </div>
                      <div class="col-6">
                        <input
                          type="text"
                          id="typeMobile"
                          name="mobile"
                          class="form-control form-control-md bFrame"
                          placeholder="(999)999-9999"
                          required
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <label align="left" class="labelError" id="lblTel">
                        </label>
                      </div>
                      <div class="col-6">
                        <label align="left" class="labelError" id="lblMobile">
                          Mobile Number required (999)999-9999.
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <div class="row">
                      <div class="col-6">
                        <label align="left" class="myLable"
                          >Create Password*</label
                        >
                        <button
                          class="btnShowHide"
                          type="button"
                          id="toggleRegPassword"
                        >
                          Show
                        </button>
                      </div>
                      <div class="col-6">
                        <label align="left" class="myLable">
                          Confirm Password*
                        </label>
                        <button
                          class="btnShowHide"
                          type="button"
                          id="toggleRegConfirmPassword"
                        >
                          Show
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <input
                          type="password"
                          id="typeRegPassword"
                          name="password"
                          class="form-control form-control-md bFrame"
                          required
                        />
                      </div>
                      <div class="col-6">
                        <input
                          type="password"
                          id="typeRegConfirmPassword"
                          class="form-control form-control-md bFrame"
                          required
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <label
                          align="left"
                          class="labelError"
                          id="lblRegPassword"
                        >
                          Password must be: minimum 8 characters, One uppercase
                          letter, one lowercase letter, one number, and one
                          special character)
                        </label>
                      </div>
                      <div class="col-6">
                        <label
                          align="left"
                          class="labelError"
                          id="lblRegConfirmPassword"
                        >
                          The password confirmation does not match.
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-check mb-4">
                    <input
                      class="form-check-input bFrame"
                      type="checkbox"
                      id="checkboxTerms"
                      name="checkboxTerms"
                      required
                    />
                    <label id="lblTerms" class="myLable"
                      >I have read and agree to the
                      <a href="#">Terms of Use</a> and
                      <a href="#">Privacy Notice</a>. (Required)
                    </label>
                  </div>
                  <div class="form-check mb-4">
                    <input
                      class="form-check-input bFrame"
                      type="checkbox"
                      value=""
                      id="checkboxNewsletter"
                      name="news"
                    />
                    <label class="myLable"
                      >By checking this box, you agree to receive marketing
                      emails from Smart. You can unsubscribe at any time.
                    </label>
                  </div>

                  <div align="left">
                    <button
                      class="btn myBtn mb-4"
                      type="submit"
                      name="create"
                      onclick="validateRegistration();"
                    >
                      Create Your Acoount
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Login Card -->
          <div class="col-5 mt-0">
            <div class="mt-0">
              <div class="p-5 mt-0">
                <h3
                  align="left"
                  style="font-size: 25px; font-weight: 300; color: #272727"
                >
                  I Already have an account
                </h3>
                <hr class="titleHR" />
                <form id="myForm" method="post" action="authentication.php">
                <div class="form-outline mb-4">
                  <div align="left" class="myLable">Email</div>
                  <input
                    type="email"
                    id="typeEmail"
                    name="userName"
                    class="form-control form-control-md bFrame"
                    placeholder="email@domain.com"
                  />
                  <label align="left" class="labelError" id="lblEmail">
                    Wrong email address! Try again with a valid email address.
                  </label>
                </div>

                <div class="form-outline mb-4">
                  <div align="left" class="myLable">Password</div>
                  <input
                    type="password"
                    id="typePassword"
                    name="password"
                    class="form-control form-control-md bFrame"
                  />
                  <label align="left" class="labelError" id="lblPassword">
                    Wrong password! Try again or reset your password.
                  </label>
                </div>

                <div class="form-check mb-4">
                  <input
                    class="form-check-input bFrame"
                    type="checkbox"
                    value=""
                    id="checkboxRemPass"
                  />
                  <label class="myLable">&nbsp; Remember password </label>
                </div>

                <button
                  class="btn myBtn mb-4"
                  type="submit"
                  name="login"
                  onclick="validateEmailPassword()"
                >
                  Login
                </button>
                </form>
              </div>
            </div>
          </div>
          <br />
        </div>
      </div>
    </section>
    <br />
    <center>
      <p class="copyright">
        2023 © Smart Digital Wallet. Designed by Mohammed Enad.
      </p>
    </center>
    <div id="loader"></div>
    <div id="overlay"></div>
  </body>
</html>
