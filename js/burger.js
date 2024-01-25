const links = document.querySelectorAll("nav li");

icons.addEventListener("click", () => {
  nav.classList.toggle("active");
});

links.forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("active");
  });
});
/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}