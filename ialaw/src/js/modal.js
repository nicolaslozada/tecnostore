const modal = document.querySelector(".modal");
const overlay = document.querySelector(".overlay");
const openModalBtn = document.querySelectorAll(".openModalBtn");
const closeModalBtn = document.querySelector(".btn-close");

const openModal = function () {
    modal.classList.remove("hidden");
    overlay.classList.remove("hidden");
    dropdownBox.classList.add("hidden");
};

const closeModal = function () {
    modal.classList.add("hidden");
    overlay.classList.add("hidden");
};
  
const scrolltoTop = function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 


let i;
for (i = 0; i < openModalBtn.length; i++) {  
    openModalBtn[i].addEventListener("click", () =>{
        openModal();
        scrolltoTop();
    });
}

closeModalBtn.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);

