(() => {
  // assets/js/modules/dark-mode.js
  var themeSwitcher = document.querySelectorAll('input[name="themeSwitcher"]');
  var setTheme = (theme) => {
    document.documentElement.setAttribute("data-theme", theme);
    localStorage.setItem("theme_mode", theme);
  };
  themeSwitcher.forEach((el) => {
    el.addEventListener("change", () => setTheme(el.value));
  });
  window.addEventListener("load", () => {
    const themeMode = localStorage.getItem("theme_mode");
    if (!themeMode)
      return;
    setTheme(themeMode);
    themeSwitcher.forEach((el) => {
      if (el.value !== themeMode)
        return;
      el.setAttribute("checked", "");
    });
  });

  // assets/js/modules/mobile-menu.js
  var mobileMenu = () => {
    const mobileMenuOpener = document.getElementById("mobileMenuOpener");
    const mobileMenu2 = document.getElementById("mobileMenu");
    if (!mobileMenu2 || !mobileMenuOpener) {
      return;
    }
    mobileMenuOpener.addEventListener("click", () => {
      mobileMenu2.classList.add("active");
    });
    mobileMenu2.addEventListener("click", (event) => {
      if (event.target === mobileMenu2) {
        mobileMenu2.classList.remove("active");
      }
    });
  };
  mobileMenu();
})();
