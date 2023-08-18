const errForm = document.getElementById('err_form');
const errText = document.querySelector('.err_text');
const signupForm = document.getElementById('signup_form');

const switchPwdElement = document.querySelectorAll('#switch_pwd');

//is login Set in navbar


//event form sign up 
function checkErrorValue(inputValue) {
    if (inputValue === "") {
        return true;
    }
    return false;
}

signupForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const userName = document.getElementById('user-name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const passwordAgain = document.getElementById('password-again').value;

    const userNameError = checkErrorValue(userName);
    const emailError = checkErrorValue(email);
    const passwordError = checkErrorValue(password);
    const passwordAgainError = checkErrorValue(passwordAgain);
    const duplicatePasswordError = password != passwordAgain;

    if (userNameError || emailError || passwordError || passwordAgainError || duplicatePasswordError) {
        errForm.style.display = 'block';
        errText.textContent = "Please complete all information!";
        if (duplicatePasswordError) {
            errText.textContent = "Please check your password again!"
        }
    } else {
        errForm.style.display = 'none';
        console.log(userName, email, password, passwordAgain)
    }
});

//Show and hide password
switchPwdElement.forEach(switchPwd => {
    switchPwd.addEventListener('click', function () {
        const passwordFields = document.querySelectorAll('.password');

        passwordFields.forEach(item => {
            if (item.type === 'password') {
                item.setAttribute('type', 'text');
            } else {
                item.setAttribute('type', 'password');
            }
        });
    });
});


//exit error message
errForm.addEventListener('click', function () {
    errForm.style.display = 'none';
})







