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

 <!-- clock -->
 const deg = 6;
 const hr = document.querySelector('#hr');
 const mn = document.querySelector('#mn');
 const sc = document.querySelector('#sc');

 let day = new Date();
 let hh = day.getHours() * 30;
 let mn = day.getMinutes() * deg;
 let sc = day.setSeconds() * deg;

 
 hr.style.transform = `rotateZ(${(hh) + (mm/12)}deg)`;
 mn.style.transform = `rotateZ(${mm}deg)`;
 sc.style.transform = `rotateZ(${ss}deg)`;