const titleCard1 = document.querySelector("[data-title-card-1]");
const titleCard2 = document.querySelector("[data-title-card-2]");
const titleCard3 = document.querySelector("[data-title-card-3]");
const dropMenuToggler = document.querySelector("[data-drop-menu-toggler]");
const dropDownMenu = document.querySelector(".dropDownMenu");
const campaignCards = document.querySelectorAll(".campaignCard");
const container = document.querySelector(".cardsContainer");

titleCard1.addEventListener("click", () => {
    if (titleCard1.classList.contains("active")) {
        return;
    } else {
        titleCard1.classList.add("active");
        titleCard2.classList.remove("active");
        titleCard3.classList.remove("active");
    }
});
titleCard2.addEventListener("click", () => {
    if (titleCard2.classList.contains("active")) {
        return;
    } else {
        titleCard1.classList.remove("active");
        titleCard2.classList.add("active");
        titleCard3.classList.remove("active");
    }
});
titleCard3.addEventListener("click", () => {
    if (titleCard3.classList.contains("active")) {
        return;
    } else {
        titleCard1.classList.remove("active");
        titleCard2.classList.remove("active");
        titleCard3.classList.add("active");
    }
});

dropMenuToggler.addEventListener("click", () => {
    dropDownMenu.classList.toggle("dropDownInactive");
    // dropMenuToggler.style.backgroundColor = "#ff8f3fdc";
});

campaignCards.forEach((card) => {
    card.addEventListener("mouseenter", () => {
        card.classList.add("preview");
        // container.style.filter = "blur(1px)";
    });

    card.addEventListener("mouseleave", () => {
        // console.log("mouse Out");
        card.classList.remove("preview");
        // container.style.filter = "blur(0)";
    });
});