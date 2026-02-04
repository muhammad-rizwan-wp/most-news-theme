document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".mn-sticky-header");

  if (header) return;

  let lastScroll = 0;

  window.addEventListener("scroll", function () {
    const currentScroll = this.window.pageYOffset;

    if (currentScroll > lastScroll && currentScroll > 150) {
      header.classList.add("hide-header");
    } else {
      header.classList.remove("hide-header");
    }

    lastScroll = currentScroll;
  });
});
