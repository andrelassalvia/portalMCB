// Js to show and hide sidebar
const body = document.querySelector("body"),
    sidebar = document.querySelector(".sidebar"),
    toggle = document.querySelector(".toggle"),
    main = document.querySelector("main"),
    dropdown = document.querySelectorAll(".dropdown-toggle");

toggle.addEventListener("click", function () {
    sidebar.classList.toggle("close");
    main.classList.toggle("open");
});

// to open sidebar when a dropdown is clicked
for (const i of dropdown) {
    i.addEventListener("click", function () {
        main.classList.remove("open");
        sidebar.classList.remove("close");
    });
}
