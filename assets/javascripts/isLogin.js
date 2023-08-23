let isLogin = localStorage.getItem('isLoginDiciiArt') === 'true';

const side = document.getElementById('side');
const user = document.getElementById('user');

function getLogin() {
    if (isLogin) {
        user.style.display = 'block';
        side.style.display = 'none';
    } else {
        user.style.display = 'none';
        side.style.display = 'block';
    }
}

getLogin();