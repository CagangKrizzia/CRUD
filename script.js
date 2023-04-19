
let lastNameInput = document.getElementById("last-name-input");
let lastNameError = document.getElementById("last-name-error");
let emptyLastNameError = document.getElementById("empty-last-name");

let firstNameInput = document.getElementById("first-name-input");
let firstNameError = document.getElementById("first-name-error");
let emptyFirstNameError = document.getElementById("empty-first-name");

//Middle Name
let middleNameInput = document.getElementById("middle-name-input");
let middleNameError = document.getElementById("middle-name-error");
let emptymiddleNameError = document.getElementById("empty-middle-name");

//Email
let emailInput = document.getElementById("email");
let emailError = document.getElementById("email-error");
let emptyEmailError = document.getElementById("empty-email");

//Phone
let phoneInput = document.getElementById("phone");
let phoneError = document.getElementById("phone-error");
let emptyPhoneError = document.getElementById("empty-phone");

let regionInput = document.getElementById("options");
let regionNameError = document.getElementById("region-name-error");
let emptyregionError = document.getElementById("empty-region-name");

//Password
let passwordInput = document.getElementById("password");
let passwordError = document.getElementById("password-error");
let emptyPasswordError = document.getElementById("empty-password");

//Verify Password
let verifyPasswordInput = document.getElementById("verify-password");
let verifyPasswordError = document.getElementById("verify-password-error");
let emptyVerifyPasswordError = document.getElementById("empty-verify-password");

//Submit
let submitButton = document.getElementById("submit-button");

//Valid
let validClasses = document.getElementsByClassName("valid");
let invalidClasses = document.getElementsByClassName("error");

//Password Verification
const passwordVerify = (password) => {
  const regex =
    /^(?=.+[a-z])(?=.+[A-Z])(?=.+[0-9])(?=.+[\$\%\^\&\!@\#\*\(\)\+\=`~\?\>\<])/;
  return regex.test(password) && password.length >= 8;
};

//Text verification (if input contains only text)
const textVerify = (text) => {
  const regex = /^[a-zA-Z]{2,}$/;
  return regex.test(text);
};

//Phone number verification
const phoneVerify = (number) => {
  const regex = /^[0-9]{11}$/;
  return regex.test(number);
};

//Email verification
const emailVerify = (input) => {
  const regex = /^[a-z0-9_]+@[a-z]{3,}\.[a-z\.]{3,}$/;
  return regex.test(input);
};

//For empty input - accepts(input,empty error for that input and other errors)
const emptyUpdate = (
  inputReference,
  emptyErrorReference,
  otherErrorReference
) => {
  if (!inputReference.value) {
    //input is null/empty
    emptyErrorReference.classList.remove("hide");
    otherErrorReference.classList.add("hide");
    inputReference.classList.add("error");
  } else {
    //input has some content
    emptyErrorReference.classList.add("hide");
  }
};

//For error styling and displaying error message
const errorUpdate = (inputReference, errorReference) => {
  errorReference.classList.remove("hide");
  inputReference.classList.remove("valid");
  inputReference.classList.add("error");
};

//For no errors
const validInput = (inputReference) => {
  inputReference.classList.remove("error");
  inputReference.classList.add("valid");
};
//Last name
lastNameInput.addEventListener("input", () => {
  if (textVerify(lastNameInput.value)) {
    lastNameError.classList.add("hide");
    validInput(lastNameInput);
  } else {
    errorUpdate(lastNameInput, lastNameError);
    emptyUpdate(lastNameInput, emptyLastNameError, lastNameError);
  }
});

//First name
firstNameInput.addEventListener("input", () => {
  if (textVerify(firstNameInput.value)) {
    //If verification returns true
    firstNameError.classList.add("hide");
    validInput(firstNameInput);
  } else {
    //for false
    errorUpdate(firstNameInput, firstNameError);
    //empty checker
    emptyUpdate(firstNameInput, emptyFirstNameError, firstNameError);
  }
});

//Email
emailInput.addEventListener("input", () => {
  if (emailVerify(emailInput.value)) {
    emailError.classList.add("hide");
    validInput(emailInput);
  } else {
    errorUpdate(emailInput, emailError);
    emptyUpdate(emailInput, emptyEmailError, emailError);
  }
});

//Last name
lastNameInput.addEventListener("input", () => {
  if (textVerify(lastNameInput.value)) {
    lastNameError.classList.add("hide");
    validInput(lastNameInput);
  } else {
    errorUpdate(lastNameInput, lastNameError);
    emptyUpdate(lastNameInput, emptyLastNameError, lastNameError);
  }
});

//Middle name
middleNameInput.addEventListener("input", () => {
  if (textVerify(middleNameInput.value)) {
    middleNameError.classList.add("hide");
    validInput(middleNameInput);
  } else {
    errorUpdate(middleNameInput, middleNameError);
    emptyUpdate(middleNameInput, emptymiddleNameError, middleNameError);
  }
});


//Phone
phoneInput.addEventListener("input", () => {
  if (phoneVerify(phoneInput.value)) {
    phoneError.classList.add("hide");
    validInput(phoneInput);
  } else {
    errorUpdate(phoneInput, phoneError);
    emptyUpdate(phoneInput, emptyPhoneError, phoneError);
  }
});


//region
regionInput.addEventListener("input", () => {
  if (textVerify(regionInput.value)) {
    regionError.classList.add("hide");
    validInput(regionInput);
  } else {
    errorUpdate(regionInput, regionError);
    emptyUpdate(regionInput, emptyregionError, regionError);
  }
});

//Password
passwordInput.addEventListener("input", () => {
  if (passwordVerify(passwordInput.value)) {
    passwordError.classList.add("hide");
    validInput(passwordInput);
  } else {
    errorUpdate(passwordInput, passwordError);
    emptyUpdate(passwordInput, emptyPasswordError, passwordError);
  }
});

//Verify password
verifyPasswordInput.addEventListener("input", () => {
  if (verifyPasswordInput.value === passwordInput.value) {
    verifyPasswordError.classList.add("hide");
    validInput(verifyPasswordInput);
  } else {
    errorUpdate(verifyPasswordInput, verifyPasswordError);
    emptyUpdate(passwordInput, emptyVerifyPasswordError, verifyPasswordError);
  }
});


//Submit button
submitButton.addEventListener("click", () => {
  if (validClasses.length == 6 && invalidClasses.length == 0) {
    alert("Success");
  } else {
    alert("Error");
  }
});
