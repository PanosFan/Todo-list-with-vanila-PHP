const upd = document.querySelectorAll("#button1");
const updval = document.querySelectorAll("#hidval");
for (let i = 0; i < upd.length; i++) {
  upd[i].addEventListener("click", function () {
    document.querySelector(".bg-modal").style.display = "flex";
    document.getElementById("placeholder").value = updval[i].value;
  });
}

document.querySelector(".close").addEventListener("click", function () {
  document.querySelector(".bg-modal").style.display = "none";
});
