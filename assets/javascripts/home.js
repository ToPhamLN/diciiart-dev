const cardImage = document.querySelectorAll('.card');

//routing to poster
cardImage.forEach(item => {
    item.addEventListener('click', function () {
        window.location.href = "./../../../diciiart-dev/pages/Poster.php";
    });
});

//trancate contents
document.addEventListener("DOMContentLoaded", function () {
    var paragraphs = document.querySelectorAll(".truncate");

    paragraphs.forEach(function (paragraph) {
        var content = paragraph.textContent;
        if (content.length > 15) {
            var truncatedContent = content.substring(0, 15) + "...";
            paragraph.textContent = truncatedContent;
        }
    });
});