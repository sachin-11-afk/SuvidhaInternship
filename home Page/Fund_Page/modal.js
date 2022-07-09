let modal = document.querySelector(".modal");

openModal = () => {
    modal.style.display = "flex";
};

closeModal = () => {
    modal.style.display = "none";
};
let FirstName = document.getElementById("FirstName").value;
document.querySelector(".modal-btn").addEventListener(
    "click",
    openModal
    /*function() {
    if (FirstName == "") {
            console.log("FirstName");
            alert("Please fill First Name");
        } else {
            console.log("openModal");
            openModal;
        }
    
}*/
);
document.querySelector(".close").addEventListener("click", closeModal);

// close modal when user clicked outside modal
window.onclick = (event) => {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};