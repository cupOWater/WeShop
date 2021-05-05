auto_scroll = document.querySelector(".content .row");
flavoursScrollWidth = auto_scroll.scrollWidth;

window.addEventListener('load', () => {
  self.setInterval(() => {
    if (auto_scroll.scrollLeft !== flavoursScrollWidth) {
        auto_scroll.scrollTo(auto_scroll.scrollLeft + 1, 0);
    }
  }, 15);
});