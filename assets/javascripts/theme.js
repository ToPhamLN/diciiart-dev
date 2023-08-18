// theme dark or light in morelis.php
const toggleDarkLightBtn = document.querySelector('#toggle_dark_light_btn');
const root = document.querySelector(':root');

let isDarkMode = localStorage.getItem('isDarkMode') === 'true';

function applyTheme() {
    if (isDarkMode) {
        root.style.setProperty('--primary-color', '#377da8');
        root.style.setProperty('--background-color', '#c9e0de');
        root.style.setProperty('--text-color', '#242424');
        root.style.setProperty('--text-hover', '#1d1d1d');
        root.style.setProperty('--first-bgd-color', '#f2e7ed');
        root.style.setProperty('--second-bgd-color', '#A9BDFF');
        root.style.setProperty('--btn-color', '#1E4279');
    } else {
        root.style.setProperty('--primary-color', '#377da8');
        root.style.setProperty('--background-color', '#242424');
        root.style.setProperty('--text-color', '#c9e0de');
        root.style.setProperty('--text-hover', '#ffffff');
        root.style.setProperty('--first-bgd-color', '#0F161D');
        root.style.setProperty('--second-bgd-color', '#3f4444');
        root.style.setProperty('--btn-color', '#3b4e4e');


    }
};

applyTheme();

toggleDarkLightBtn.addEventListener('click', () => {
    isDarkMode = !isDarkMode;
    localStorage.setItem('isDarkMode', isDarkMode);
    applyTheme();
});