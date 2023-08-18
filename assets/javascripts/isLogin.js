const isLogin = false;
const side = document.getElementById('side');
const user = document.getElementById('user');
if (isLogin) {
    user.style.display = 'block';
    side.style.display = 'none';
} else {
    user.style.display = 'none';
    side.style.display = 'block';
}
