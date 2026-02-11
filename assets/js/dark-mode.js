document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.querySelector(".mn-dark-mode-toggle");
  const body = document.body;

  /*>>> Load saved Preference <<<*/
  if (localStorage.getItem("mn-dark-mode") === "enabled") {
    body.classList.add("mn-dark-mode");
  }

  /*>>> Toggle dark mode <<<*/
  if (toggleButton) {
    toggleButton.addEventListener("click", function () {
      body.classList.toggle("mn-dark-mode");

      if (body.classList.contains("mn-dark-mode")) {
        localStorage.setItem("mn-dark-mode", "enabled");
      } else {
        localStorage.setItem("mn-dark-mode", "disabled");
      }
    });
  }
});
