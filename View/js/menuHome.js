function loadMenu() {
  fetch("../View/html/menu.html")
    .then((response) => response.text())
    .then((data) => {
      document.querySelector(".menu").innerHTML = data;
    })
    .catch((error) => console.error("Error loading menu:", error));
}

function toggleDropdown(dropdownId) {
  var dropdown = document.getElementById(dropdownId);
  dropdown.classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches(".dropbtn")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};
