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

// todo -list
let btnAddTaskEl = document.querySelector("button");
let taskNameEl = document.querySelector(".content");

let tasks = getTaskFromLocalStorage();
renderTask(tasks);
btnAddTaskEl.addEventListener("click", function () {
  if (!taskNameEl.value) {
    alert("Vui lòng nhập tên công việc");
    return false;
  }
  let tasks = getTaskFromLocalStorage();
  tasks.push({
    name: taskNameEl.value,
  });
  taskNameEl.value = "";
  localStorage.setItem("tasks", JSON.stringify(tasks));
  renderTask(tasks);
});

function renderTask(tasks = []) {
  const resultT = document.querySelector(".result");
  let content = "<ul class='task-list'>";
  tasks.forEach((task) => {
    content += `
    <li class="item-task">
          <div class="task-name">${task.name}</div>
          <div class="task-fc">
            <a href="" class="icon icon-edit"
              ><ion-icon name="create-outline" class= "edit"></ion-icon
            ></a>
            <a href="" class="icon icon-remove"
              ><ion-icon name="trash-outline" class = "remove"></ion-icon
            ></a>
          </div>
          </li>
    `;
  });
  content += "</ul>";
  resultT.innerHTML = content;
}

function getTaskFromLocalStorage() {
  return localStorage.getItem("tasks")
    ? JSON.parse(localStorage.getItem("tasks"))
    : [];
}

const resultH = document.querySelector(".result");

resultH.addEventListener("click", function (e) {
  if (e.target.matches(".remove")) {
    e.preventDefault();
    //remove dom
    const taskName = e.target.parentNode.parentNode.parentNode;
    taskName.parentNode.removeChild(taskName);

    // remove local
    const todoText = e.target.parentNode.parentNode.parentNode.textContent;
    const index = tasks.findIndex((item) => item === todoText);
    tasks.splice(index, 1);
    localStorage.setItem("tasks", JSON.stringify(tasks));
  }
});

resultH.addEventListener("click", function (id) {
  if (id.target.matches(".edit")) {
    id.preventDefault();
    let tasks = getTaskFromLocalStorage();
    if (tasks.length > 0) {
      console.log(tasks[id]);
    }
  }
});

const form = document.querySelector(".form");
const username = document.querySelector("#username");
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const password2 = document.querySelector("#password2");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  checkInputs();
});

function checkInputs() {
  // get the values from the inputs
  const usernameValue = username.value.trim();
  const emaileValue = email.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();

  // Condition UserName
  if (usernameValue === "") {
    // show error
    // add error class
    setErrorFor(username, "Username cannot be blank");
  } else {
    // add success class
    setSuccessFor(username);
  }

  // Condition Email
  if (emaileValue === "") {
    setErrorFor(email, "Email cannot be blank");
  } else if (!isEmail(emaileValue)) {
    setErrorFor(email, "Email is not valid");
  } else {
    setSuccessFor(email);
  }

  // Condition Password
  if (passwordValue === "") {
    setErrorFor(password, "Password cannot be blank");
  } else {
    setSuccessFor(password);
  }

  // Condition Password2
  if (password2Value === "") {
    setErrorFor(password2, "Password cannot be blank");
  } else if (password2Value !== passwordValue) {
    setErrorFor(password2, "Password does not match");
  } else {
    setSuccessFor(password2);
  }
}

// Fuction Value Error
function setErrorFor(input, message) {
  const formControl = input.parentNode;
  console.log(formControl);
  const small = formControl.querySelector("small");

  // add errror message inside small
  small.textContent = message;

  // add error class
  formControl.classList.add("error");
}

// Function value Success
function setSuccessFor(input) {
  const formControl = input.parentNode;
  formControl.classList.remove("error");
  formControl.classList.add("success");
}

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}

const iconEye1 = document.querySelectorAll(".icon-eye1");

iconEye1.forEach((item) => {
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
