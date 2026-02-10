document.addEventListener("scroll", function () {
  const progress = document.querySelector(".mn-reading-progress");
  const article = document.querySelector(".mn-article");

  if (!progress || !article) return;

  const totalHeight = article.offsetHeight;
  const scrollY = window.scrollY;
  const windowHeight = window.innerHeight;

  const progressPercent = Math.min(
    (scrollY / (totalHeight - windowHeight)) * 100,
    100,
  );

  progress.style.width = progressPercent + "%";
});
