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
