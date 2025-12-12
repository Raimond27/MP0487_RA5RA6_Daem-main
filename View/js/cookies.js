const acceptCookiesButton = document.getElementById("btn-accept-cookies");
const cookiesNotice = document.getElementById("cookies-notice");
const cookiesNoticeBackground = document.getElementById("background-cookies-notice");

dataLayer = [];

if (!localStorage.getItem("cookies-accepted")) {
  cookiesNotice.classList.add("active");
  cookiesNoticeBackground.classList.add("active");
} else {
  dataLayer.push({ event: "cookies-accepted" });
}

acceptCookiesButton.addEventListener("click", () => {
  cookiesNotice.classList.remove("active");
  cookiesNoticeBackground.classList.remove("active");

  localStorage.setItem("cookies-accepted", true);

  dataLayer.push({ event: "cookies-accepted" });
});