const closeBtn=document.getElementById("close_btn")
const mobileNav=document.querySelector(".mobile_nav_bar .navitem");
const menuIconContainer=document.getElementById("menuIcon_container")

closeBtn.addEventListener("click", function () {
    mobileNav.style.display = "none";
})

menuIconContainer.addEventListener("click", function () {
    mobileNav.style.display = "flex";

})