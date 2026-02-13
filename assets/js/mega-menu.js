document.addEventListener("DOMContentLoaded", function () {
  const menuItems = document.querySelectorAll(
    ".mn-primary-menu li.has-mega-menu",
  );

  menuItems.forEach((item) => {
    item.addEventListener("click", function (e) {
      if (window.innerWidth < 992) {
        e.preventDefault();
        this.querySelector(".mn-mega-menu").classList.toggle("open");
      }
    });
  });
});
