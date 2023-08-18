const errForm = document.getElementById('err_form');
const errText = document.querySelector('.err_text');
const postForm = document.getElementById('post_form');

// event form post NFT
document.getElementById("image").addEventListener("change", function (event) {
    const imageFile = event.target.files[0];
    const imagePreview = document.getElementById("imagePreview");

    const reader = new FileReader();
    reader.onload = function () {
        imagePreview.src = reader.result;
    };

    if (imageFile) {
        reader.readAsDataURL(imageFile);
    } else {
        imagePreview.src = "#";
    }
});

function checkErrorValue(inputValue) {
    if (inputValue === "") {
        return true;
    }
    return false;
};

postForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const title = document.getElementById('title').value;
    const image = document.getElementById('image').value;
    const description = document.getElementById('description').value;

    const titleError = checkErrorValue(title);
    const imageError = checkErrorValue(image);
    const descriptionError = checkErrorValue(description);

    if (titleError || imageError || descriptionError) {
        errForm.style.display = 'block';
        errText.textContent = "Please complete all imformation!"
    } else {
        errForm.style.display = 'none';
        console.log(title, image, description);
    }
});

// exit error message
errForm.addEventListener('click', function () {
    errForm.style.display = 'none';
});


