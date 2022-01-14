const burger = document.getElementById("burger");

burger.addEventListener(
  "click",
  (toggleBurgerMenu = () => {
    const navIcon = document.getElementById("burger__icon");
    navIcon.classList.toggle("active");

    const navbar = document.getElementsByTagName("nav")[0];

    if (navbar.style.display === "flex") {
      navbar.style.display = "none";
    } else {
      navbar.style.display = "flex";
    }
  })
);
