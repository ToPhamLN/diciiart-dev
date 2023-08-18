const moreListBtn = document.querySelector('#more_list_btn');
const moreList = document.querySelector('#more_list');

moreListBtn.addEventListener("click", function (e) {
    e.stopPropagation();
    if (moreList.style.display == "none" | moreList.style.display == "") {
        moreList.style.display = "block";
    } else {
        moreList.style.display = "none";
    }
});

document.body.addEventListener("click", function (e) {
    if (!moreList.contains(e.target) && moreList.style.display === "block") {
        moreList.style.display = "none";
    }
});