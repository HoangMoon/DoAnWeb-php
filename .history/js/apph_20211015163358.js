/*====NOTI=======*/
function noti(title = "Nguyễn Huy Hoàng", img) {
  const templateNoti = `<div class="noti d-flex">
    <img src="https://source.unsplash.com/random" alt="" class="noti-image">
    <div class="noti-content">
        <h3 class="noti-data">${title}</h3>
        <p class="noti-desc">
            Đã mua 1 sản phẩm lorem <br> <span>vừa xong</span>
        </p>
    </div>
</div>`;

  document.body.insertAdjacentHTML("beforeend", templateNoti);
}

const randomTitle = [
  "Nguyễn Huy Hoàng",
  "Trần Anh Tuấn",
  "Nguyễn Thị Thúy",
  "Bùi Hoàng Hải",
  "Phạm Văn Thành",
];

let lastTitle;
const timer = setInterval(function () {
  const itemNoti = document.querySelector(".noti");
  if (itemNoti) {
    itemNoti.parentNode.removeChild(itemNoti);
  }
  const title = randomTitle[Math.floor(Math.random() * randomTitle.length)];
  if (lastTitle !== title) {
    noti(title);
  }
  lastTitle = title;
}, 8000);
