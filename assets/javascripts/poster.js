const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');
const currentImg = document.getElementById('current_img');

// slide show in post_img
const images = [

    "./../assets/imgs/demo1.png",
    "./../assets/imgs/demo2.jpg",
    "./../assets/imgs/demo3.jpg",
    "./../assets/imgs/demo4.jpg",
    "./../assets/imgs/demo5.jpg",
    "./../assets/imgs/demo6.png",
    "./../assets/imgs/demo7.jpg",
    "./../assets/imgs/demo8.jpg",
    "./../assets/imgs/demo9.jpg",
    "./../assets/imgs/demo10.jpg",

]

let currentIndex = 0;

function updateImage() {
    currentImg.src = images[currentIndex];
}

nextBtn.addEventListener("click", function () {
    currentIndex = (currentIndex + 1) % images.length;
    updateImage();
});

prevBtn.addEventListener("click", function () {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateImage();
});

updateImage();

// Add comment
document.addEventListener("DOMContentLoaded", function () {
    const commentForm = document.getElementById("comment_form");
    const commentList = document.getElementById("comments");

    commentForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const commentInput = document.getElementById("comment");
        const newComment = commentInput.value;

        if (newComment !== "") {
            const commentItem = document.createElement("li");
            commentItem.innerText = newComment;
            commentList.appendChild(commentItem);

            // Reset input
            commentInput.value = "";
        }
    });
});



