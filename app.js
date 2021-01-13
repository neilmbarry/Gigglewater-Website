document
  .querySelector(".cards-container-card")
  .addEventListener("click", () => console.log("hey"));

const revealSection = function (entries, observer) {
  const [entry] = entries;
  //console.log(entry);
  if (!entry.isIntersecting) return;
  entry.target.classList.remove("title-hidden");
  setTimeout(() => {
    document.querySelector(".cards-container").classList.remove("card-blur");
  }, 500);

  observer.unobserve(entry.target);
};

const sectionObserver = new IntersectionObserver(revealSection, {
  root: null,
  threshold: 0,
  rootMargin: "-300px",
});

sectionObserver.observe(document.querySelector(".section-about-title"));
//---delete me---//section.classList.add('section--hidden');
