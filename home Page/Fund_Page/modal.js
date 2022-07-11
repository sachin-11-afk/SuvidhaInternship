let modal = document.querySelector(".modal");

openModal = () => {
    modal.style.display = "flex";
};

closeModal = () => {
    modal.style.display = "none";
};
document.querySelector(".modal-btn").addEventListener("click", openModal);
document.querySelector(".close").addEventListener("click", closeModal);

// close modal when user clicked outside modal
window.onclick = (event) => {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};