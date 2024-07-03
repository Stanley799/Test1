const sideBar = document.querySelector(".sidebar");
const navToggle = document.querySelector(".mobile-nav-toggle");

navToggle.addEventListener('click',()=> {
const visibility = sideBar.getAttribute('data-visible');

if (visibility === "false"){
    sideBar.setAttribute('data-visible', true);
    navToggle.setAttribute('aria-expanded',true);
} else if (visibility === "true"){
    sideBar.setAttribute('data-visible', false);
    navToggle.setAttribute('aria-expanded',false);
}
});
