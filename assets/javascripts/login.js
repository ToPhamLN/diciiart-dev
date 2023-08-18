const errForm = document.getElementById('err_form');
const errText = document.querySelector('.err_text');
const loginForm = document.getElementById('login_form');
const switchPwd = document.getElementById('switch_pwd');


//event form login in
function checkErrorValue(inputValue) {
    if (inputValue === "") {
        return true;
    }
    return false;
}

loginForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    const emailError = checkErrorValue(email);
    const passwordError = checkErrorValue(password);
    if (emailError && passwordError) {
        errForm.style.display = 'block';
        errText.textContent = "Please complete all information!";
    } else {
        errForm.style.display = 'none';
        console.log(email, password);
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
errForm.addEventListener('click', function () {
    errForm.style.display = 'none';
})
