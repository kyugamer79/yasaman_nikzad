const themeSwitcher = document.querySelectorAll('input[name="themeSwitcher"]');

const setTheme = (theme) => {
	document.documentElement.setAttribute('data-theme', theme);
	localStorage.setItem('theme_mode', theme);
};

themeSwitcher.forEach((el) => {
	el.addEventListener('change', () => setTheme(el.value));
});

window.addEventListener('load', () => {
	const themeMode = localStorage.getItem('theme_mode');
	if (!themeMode) return;

	setTheme(themeMode);

	themeSwitcher.forEach((el) => {
		if (el.value !== themeMode) return;

		el.setAttribute('checked', '');
	});
});
