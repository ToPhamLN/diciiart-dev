const confirmCtn = document.getElementById('confirm');
const confirmTitle = document.querySelector('.confirm_title');
const confirmText = document.querySelector('.confirm_text');
const signupForm = document.getElementById('signup_form');
const switchPwdElement = document.querySelectorAll('#switch_pwd');

const userNameWp = document.querySelector('.username_wp');
const emailWp = document.querySelector('.email_wp');
const passwordWp = document.querySelector('.password_wp');
const passwordAgainWp = document.querySelector('.password_again_wp');

console.log(userNameWp, passwordWp, passwordAgainWp, emailWp);

//event form sign up 
function checkErrorValue(inputValue, minLength, maxLength) {
    if (inputValue === "" || inputValue.length < minLength || inputValue.length > maxLength) {
        return true;
    }
    return false;
}

function checkEmailFormat(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}

function showConfirm(a, b) {
    confirmCtn.style.display = 'block';
    confirmTitle.textContent = a;
    confirmText.textContent = b;
}

signupForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const userName = document.getElementById('username');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const passwordAgain = document.getElementById('password-again');

    const userNameError = checkErrorValue(userName.value, 8, 16);
    const emailError = checkErrorValue(email.value, 1, Infinity) || !checkEmailFormat(email.value);
    const passwordError = checkErrorValue(password.value, 8, 16);
    const passwordAgainError = checkErrorValue(passwordAgain.value, 8, 16);
    const duplicatePasswordError = password.value !== passwordAgain.value;

    if (userNameError) {
        userNameWp.style.borderColor = 'yellow';
    } else {
        userNameWp.style.borderColor = 'initial';
    }

    if (emailError) {
        emailWp.style.borderColor = 'yellow';
    } else {
        emailWp.style.borderColor = 'initial';
    }

    if (passwordError) {
        passwordWp.style.borderColor = 'yellow';
    } else {
        passwordWp.style.borderColor = 'initial';
    }

    if (passwordAgainError || duplicatePasswordError) {
        passwordAgainWp.style.borderColor = 'yellow';
    } else {
        passwordAgainWp.style.borderColor = 'initial';
    }

    if (userNameError || emailError || passwordError || passwordAgainError || duplicatePasswordError) {
        showConfirm('Error', 'Please complete correctly!');
    } else {
        confirmCtn.style.display = 'none';
        signupForm.submit();
    }
});

//Show and hide password
switchPwdElement.forEach(switchPwd => {
    switchPwd.addEventListener('click', function () {
        const passwordFields = document.querySelectorAll('.password');

        passwordFields.forEach(item => {
            if (item.type === 'password') {
                item.setAttribute('type', 'text');
                switchPwdElement.forEach(switchPwdElement => {
                    switchPwdElement.textContent = "visibility";
                });
            } else {
                item.setAttribute('type', 'password');
                switchPwdElement.forEach(switchPwdElement => {
                    switchPwdElement.textContent = "visibility_off";
                })
            }
        });
    });
});

//exit error message
confirmCtn.addEventListener('click', function () {
    confirmCtn.style.display = 'none';
});
