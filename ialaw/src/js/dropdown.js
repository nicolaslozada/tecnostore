const dropdownBtn = document.querySelector(".btnDropdown");
const dropdownBox = document.querySelector(".dropdownBox")

const openDropdown = function (){
    dropdownBox.classList.toggle("hidden");
    overlay.classList.remove("hidden");
}

const closeDropdown = function () {
    overlay.classList.add("hidden");
    dropdownBox.classList.add("hidden");
};

dropdownBtn.addEventListener("click", openDropdown);
overlay.addEventListener("click", () => {
    closeDropdown ();
});