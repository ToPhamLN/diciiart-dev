const toggleLogoutBtn = document.getElementById('toggle_logout_btn');

toggleLogoutBtn.addEventListener('click', function () {
    isLogin = false;
    localStorage.setItem('isLoginDiciiArt', isLogin);
    window.location.href = "./Login.php";
});