const sidebar = document.getElementById("sidebar");
const toggleSidebar = document.getElementById("toggle_sidebar");

toggleSidebar.addEventListener("click", (e) => {
    e.stopPropagation();
    if (sidebar.style.left === "-200px" || sidebar.style.left === "") {
        sidebar.style.left = "0";

    } else {
        sidebar.style.left = "-200px";

    }
});

document.body.addEventListener("click", function (e) {
    if (sidebar.contains(e.target) && sidebar.style.left === "0") {
        sidebar.style.left = "-200px";
    }
});