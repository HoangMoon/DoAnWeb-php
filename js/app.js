const loginCreate = document.querySelector(".login__create ");
const loginButton = document.querySelector(".login__button");

// show password
const iconEye = document.querySelectorAll(".icon-eye");
iconEye.forEach((item) =>
  item.addEventListener("click", function (e) {
    const input = this.previousElementSibling;
    const inputType = input.getAttribute("type");
    if (inputType === "password") {
      input.setAttribute("type", "text");
      e.target.classList.toggle("fa-eye-slash");
      e.target.classList.toggle("fa-eye");
    } else {
      input.setAttribute("type", "password");
      e.target.classList.toggle("fa-eye-slash");
      e.target.classList.toggle("fa-eye");
    }
  })
);

const iconEye = document.querySelectorAll(".icon-eye");

iconEye.forEach((item) => {
  item.addEventListener("click", function (e) {
    const inputPass = this.previousElementSibling; // input
    const inputType = inputPass.getAttribute("type"); // lấy ra type input
    if (inputType === "password") {
      inputPass.setAttribute("type", "text");
      e.target.classList.toggle("fa-eye-slash");
      e.target.classList.toggle("fa-eye");
    } else {
      inputPass.setAttribute("type", "password");
      e.target.classList.toggle("fa-eye-slash");
      e.target.classList.toggle("fa-eye");
    }
  });
});

// const form = document.querySelector(".form");
// const username = document.querySelector("#username");
// const email = document.querySelector("#email");
// const password = document.querySelector("#password");
// const password2 = document.querySelector("#password2");
// const btn = document.querySelector(".btn");

// btn.addEventListener("submit", function (e) {
//   e.preventDefault();

//   checkInputs();
// });

// function checkInputs() {
//   // get the values from the inputs
//   const usernameValue = username.value.trim();
//   const emaileValue = email.value.trim();
//   const passwordValue = password.value.trim();
//   const password2Value = password2.value.trim();

//   // Condition UserName
//   if (usernameValue === "") {
//     // show error
//     // add error class
//     setErrorFor(username, "Username cannot be blank");
//   } else {
//     // add success class
//     setSuccessFor(username);
//   }

//   // Condition Email
//   if (emaileValue === "") {
//     setErrorFor(email, "Email cannot be blank");
//   } else if (!isEmail(emaileValue)) {
//     setErrorFor(email, "Email is not valid");
//   } else {
//     setSuccessFor(email);
//   }

//   // Condition Password
//   if (passwordValue === "") {
//     setErrorFor(password, "Password cannot be blank");
//   } else {
//     setSuccessFor(password);
//   }

//   // Condition Password2
//   if (password2Value === "") {
//     setErrorFor(password2, "Password cannot be blank");
//   } else if (password2Value !== passwordValue) {
//     setErrorFor(password2, "Password does not match");
//   } else {
//     setSuccessFor(password2);
//   }
// }

// // Fuction Value Error
// function setErrorFor(input, message) {
//   const formControl = input.parentNode;
//   console.log(formControl);
//   const small = formControl.querySelector("small");

//   // add errror message inside small
//   small.textContent = message;

//   // add error class
//   formControl.classList.add("error");
// }

// // Function value Success
// function setSuccessFor(input) {
//   const formControl = input.parentNode;
//   formControl.classList.remove("error");
//   formControl.classList.add("success");
// }

// function isEmail(email) {
//   return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
//     email
//   );
// }

// const iconEye = document.querySelectorAll(".icon-eye");

// iconEye.forEach((item) => {
//   item.addEventListener("click", function (e) {
//     const inputPass = this.previousElementSibling; // input
//     const inputType = inputPass.getAttribute("type"); // lấy ra type input
//     if (inputType === "password") {
//       inputPass.setAttribute("type", "text");
//       e.target.classList.toggle("fa-eye-slash");
//       e.target.classList.toggle("fa-eye");
//     } else {
//       inputPass.setAttribute("type", "password");
//       e.target.classList.toggle("fa-eye-slash");
//       e.target.classList.toggle("fa-eye");
//     }
//   });
// });
