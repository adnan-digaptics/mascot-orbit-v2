(() => {
  const toggle = document.querySelector(".menu-toggle");
  const panel = document.querySelector(".mobile-panel");

  if (toggle && panel) {
    toggle.addEventListener("click", () => {
      const isOpen = toggle.classList.toggle("open");
      panel.classList.toggle("open", isOpen);
      toggle.setAttribute("aria-expanded", String(isOpen));
      toggle.setAttribute("aria-label", isOpen ? "Close menu" : "Open menu");
    });

    panel.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => {
        toggle.classList.remove("open");
        panel.classList.remove("open");
        toggle.setAttribute("aria-expanded", "false");
        toggle.setAttribute("aria-label", "Open menu");
      });
    });
  }
})();
