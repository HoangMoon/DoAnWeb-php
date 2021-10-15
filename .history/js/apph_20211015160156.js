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

/* coundown timer*/
var countDate = new Date("November 31, 2021 00:00:00 ").getTime();

function newYear() {
  let now = new Date().getTime();
  gap = countDate - now;

  let second = 1000;
  let minute = second * 60;
  let hour = minute * 60;
  let day = hour * 24;

  let d = Math.floor(gap / day);
  let h = Math.floor((gap % day) / hour);
  let m = Math.floor((gap % hour) / minute);
  let s = Math.floor((gap % minute) / second);

  document.getElementById("day").innerText = d;
  document.getElementById("hour").innerText = h;
  document.getElementById("minute").innerText = m;
  document.getElementById("second").innerText = s;
}

setInterval(function () {
  newYear();
}, 1000);
