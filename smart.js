//-------------------------------------------------------------
// Added By    : MOHAMMED ENAD
// Added On    : 16 Feb 2023
// Describtion : Validation registertest form
//-------------------------------------------------------------

function validateRegistration() {
  const regFirstNameInput = document.getElementById("typeFirstName");
  const regLastNameInput = document.getElementById("typeLastName");
  const regEmailInput = document.getElementById("typeRegEmail");
  const regAddressInput = document.getElementById("typeAddress");
  const regCityInput = document.getElementById("typeCity");
  const regProvenceSelect = document.getElementById("typeProvenceSelect");
  const regCountrySelect = document.getElementById("typeCountrySelect");
  const regPostalZipInput = document.getElementById("typePostal");
  const regMobileInput = document.getElementById("typeMobile");
  const regPasswordInput = document.getElementById("typeRegPassword");
  const regConfirmPasswordInput = document.getElementById(
    "typeRegConfirmPassword"
  );
  const regCheckboxTerms = document.getElementById("checkboxTerms");

  const regFirstNameLable = document.getElementById("lblFirstName");
  const regLastNameLable = document.getElementById("lblLastName");
  const regEmailLable = document.getElementById("lblRegEmail");
  const regAddressLable = document.getElementById("lblAddress");
  const regCityLabel = document.getElementById("lblCity");
  const regProvenceLabel = document.getElementById("lblProvenceSelect");
  const regCountryLabel = document.getElementById("lblCountrySelect");
  const regPostalZipLabel = document.getElementById("lblPostal");
  const regMobileLabel = document.getElementById("lblMobile");
  const regPasswordLabel = document.getElementById("lblRegPassword");
  const regConfirmPasswordLabel = document.getElementById(
    "lblRegConfirmPassword"
  );
  const regTermsLabel = document.getElementById("lblTerms");

  const regNamePattern = /^[a-zA-Z]{3,25}$/; // Regex name contains only letters with min 3 and max 25
  const regEmailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //
  const regPasswordPattern =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,}$/;
  const regAddressPattern = /^(\d{1,}) [a-zA-Z0-9\s]{5,}$/;
  const regMobilePattern = /^\(\d{3}\)\d{3}-\d{4}$/;

  // Postal/Zip code pattern based on the selected country
  let regPostalZipPattern =
    regCountrySelect.value === "Canada"
      ? /^([A-Za-z]\d[A-Za-z] \d[A-Za-z]\d)$/
      : /^\d{5}(?:[-\s]\d{4})?$/;
  //
  function regValidateInput(input, label, pattern) {
    if (!input.value) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else if (!input.value.match(pattern)) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else {
      label.style.display = "none";
      input.classList.remove("error");
      return true;
    }
  }

  function regValidateConfirmPassword() {
    if (!regConfirmPasswordInput.value) {
      regConfirmPasswordLabel.style.display = "block";
      regConfirmPasswordInput.classList.add("error");
      regConfirmPasswordInput.focus();
      return false;
    } else if (regConfirmPasswordInput.value !== regPasswordInput.value) {
      regConfirmPasswordLabel.style.display = "block";
      regConfirmPasswordInput.classList.add("error");
      regConfirmPasswordInput.focus();
      return false;
    } else {
      regConfirmPasswordLabel.style.display = "none";
      regConfirmPasswordInput.classList.remove("error");
      return true;
    }
  }

  const regPasswordToggleBtn = document.getElementById("toggleRegPassword");
  const regConfirmPasswordToggleBtn = document.getElementById(
    "toggleRegConfirmPassword"
  );

  regPasswordToggleBtn.addEventListener("click", () => {
    if (regPasswordInput.type === "password") {
      regPasswordInput.type = "text";
      regPasswordToggleBtn.textContent = "Hide";
    } else {
      regPasswordInput.type = "password";
      regPasswordToggleBtn.textContent = "Show";
    }
  });

  regConfirmPasswordToggleBtn.addEventListener("click", () => {
    if (regConfirmPasswordInput.type === "password") {
      regConfirmPasswordInput.type = "text";
      regConfirmPasswordToggleBtn.textContent = "Hide";
    } else {
      regConfirmPasswordInput.type = "password";
      regConfirmPasswordToggleBtn.textContent = "Show";
    }
  });

  const regValidateCheckbox = (input, label) => {
    if (!input.checked) {
      label.classList.add("lblError");
      input.classList.add("error");
      input.focus;
      return false;
    } else {
      label.classList.remove("lblError");
      input.classList.remove("error");
      return true;
    }
  };

  // validate First Name
  regFirstNameInput.oninput = () =>
    regValidateInput(regFirstNameInput, regFirstNameLable, regNamePattern);
  // validate Last Name
  regLastNameInput.oninput = () =>
    regValidateInput(regLastNameInput, regLastNameLable, regNamePattern);
  // validate Email Regex
  regEmailInput.oninput = () =>
    regValidateInput(regEmailInput, regEmailLable, regEmailPattern);
  // validate Address Regex
  regAddressInput.oninput = () =>
    regValidateInput(regAddressInput, regAddressLable, regAddressPattern);
  // validate City
  regCityInput.oninput = () =>
    regValidateInput(regCityInput, regCityLabel, regNamePattern);
  // validate Province
  regProvenceSelect.oninput = () =>
    regValidateInput(regProvenceSelect, regProvenceLabel);
  // validate Postal/Zip
  regPostalZipInput.oninput = () =>
    regValidateInput(regPostalZipInput, regPostalZipLabel, regPostalZipPattern);
  // validate Mobile Regex
  regMobileInput.oninput = () =>
    regValidateInput(regMobileInput, regMobileLabel, regMobilePattern);
  // validate Password Regex
  regPasswordInput.oninput = () =>
    regValidateInput(regPasswordInput, regPasswordLabel, regPasswordPattern);
  // validate Confirm Password
  regConfirmPasswordInput.oninput = regValidateConfirmPassword;
  // validate Terms Checkbox
  regCheckboxTerms.onchange = () =>
    regValidateCheckbox(regCheckboxTerms, regTermsLabel);

  return (
    regValidateInput(regFirstNameInput, regFirstNameLable, regNamePattern) &&
    regValidateInput(regLastNameInput, regLastNameLable, regNamePattern) &&
    regValidateInput(regEmailInput, regEmailLable, regEmailPattern) &&
    regValidateInput(regAddressInput, regAddressLable, regAddressPattern) &&
    regValidateInput(regCityInput, regCityLabel, regNamePattern) &&
    regValidateInput(regProvenceSelect, regProvenceLabel) &&
    regValidateInput(
      regPostalZipInput,
      regPostalZipLabel,
      regPostalZipPattern
    ) &&
    regValidateInput(regMobileInput, regMobileLabel, regMobilePattern) &&
    regValidateInput(regPasswordInput, regPasswordLabel, regPasswordPattern) &&
    regValidateConfirmPassword() &&
    regValidateCheckbox(regCheckboxTerms, regTermsLabel)
  );
}

//-------------------------------------------------------------
// Added By    : MOHAMMED ENAD
// Added On    : 9 Feb 2023
// Describtion : Validation login form
//-------------------------------------------------------------
function validateEmailPassword() {
  const emailInput = document.getElementById("typeEmail");
  const passwordInput = document.getElementById("typePassword");
  const emailLabel = document.getElementById("lblEmail");
  const passwordLabel = document.getElementById("lblPassword");
  const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  function validateInput(input, label, pattern) {
    if (!input.value) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else if (!input.value.match(pattern)) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else {
      label.style.display = "none";
      input.classList.remove("error");
      return true;
    }
  }

  emailInput.oninput = () =>
    validateInput(emailInput, emailLabel, emailPattern);
  passwordInput.oninput = () => validateInput(passwordInput, passwordLabel);

  return (
    validateInput(emailInput, emailLabel, emailPattern) &&
    validateInput(passwordInput, passwordLabel)
  );
}

//-------------------------------------------------------------
// Added By    : MOHAMMED ENAD
// Added On    : 7 Feb 2023
// Describtion : Page Loader
//-------------------------------------------------------------

let myVar;

function pageLoader() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

//-------------------------------------------------------------
// Added By    : MOHAMMED ENAD
// Added On    : 20 Feb 2023
// Describtion : Change style sheet to switch between Day/Night Mode
//-------------------------------------------------------------

function toggleCss() {
  let stylesheet = document.getElementById("mystyel");
  if (stylesheet.getAttribute("href") === "style.css") {
    stylesheet.setAttribute("href", "styledark.css");
    document
      .getElementById("day-night-mode")
      .setAttribute("src", "images/nightmode.png");
    document
      .getElementById("smart-logo")
      .setAttribute("src", "images/smart-logo-02.png");
    document
      .getElementById("imgDashboard")
      .setAttribute("src", "images/dashboard-03.png");
    document
      .getElementById("imgAccount")
      .setAttribute("src", "images/account-03.png");
    document
      .getElementById("imgExchange")
      .setAttribute("src", "images/exchange-03.png");
    document
      .getElementById("imgRecipients")
      .setAttribute("src", "images/recipients-03.png");
    document
      .getElementById("imgRewards")
      .setAttribute("src", "images/rewards-03.png");

    // set mode in Browser's Local Storage
    localStorage.setItem("mode", "night");
  } else {
    stylesheet.setAttribute("href", "style.css");
    document
      .getElementById("day-night-mode")
      .setAttribute("src", "images/daymode.png");
    document
      .getElementById("smart-logo")
      .setAttribute("src", "images/smart-logo-01.png");
    document
      .getElementById("imgDashboard")
      .setAttribute("src", "images/dashboard-02.png");
    document
      .getElementById("imgAccount")
      .setAttribute("src", "images/account-02.png");
    document
      .getElementById("imgExchange")
      .setAttribute("src", "images/exchange-02.png");
    document
      .getElementById("imgRecipients")
      .setAttribute("src", "images/recipients-02.png");
    document
      .getElementById("imgRewards")
      .setAttribute("src", "images/rewards-02.png");

    // set mode in Browser's Local Storage
    localStorage.setItem("mode", "day");
  }
}

// Check for previously saved mode on page load
document.addEventListener("DOMContentLoaded", function () {
  let mode = localStorage.getItem("mode");
  if (mode === "night") {
    toggleCss();
  }
});
