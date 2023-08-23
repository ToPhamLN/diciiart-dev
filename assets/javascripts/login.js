const confirmCtn = document.getElementById('confirm');
const confirmTitle = document.querySelector('.confirm_title');
const confirmText = document.querySelector('.confirm_text');
const loginForm = document.getElementById('login_form');
const switchPwd = document.getElementById('switch_pwd');


//event form login in
function checkErrorValue(inputValue) {
    if (inputValue === "") {
        return true;
    }
    return false;
}

function showConfirm(a, b) {
    confirmCtn.style.display = 'block';
    confirmTitle.textContent = a;
    confirmText.textContent = b;
}

loginForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    const emailError = checkErrorValue(email);
    const passwordError = checkErrorValue(password);
    if (emailError && passwordError) {
        showConfirm('Error', 'Please complete all information!');
    } else {
        loginForm.submit();
    }
});

// show and hide password
switchPwd.addEventListener('click', function () {
    const password = document.getElementById('password');
    if (password.type === 'password') {
        password.setAttribute('type', 'text');
        switchPwd.textContent = "visibility_off"
    } else {
        password.setAttribute('type', 'password');
        switchPwd.textContent = "visibility";
    }
})

// exit error message
confirmCtn.addEventListener('click', function () {
    confirmCtn.style.display = 'none';
})
