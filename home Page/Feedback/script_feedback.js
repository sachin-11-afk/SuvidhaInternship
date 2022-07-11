const el1 = document.getElementById("img1");
const el6 = document.getElementById("img6");
const el2 = document.getElementById("img2");
const el3 = document.getElementById("img3");
const el4 = document.getElementById("img4");
const el5 = document.getElementById("img5");
const cl1 = document.getElementById("txt1");
const cl2 = document.getElementById("txt2");
const cl3 = document.getElementById("txt3");
const cl4 = document.getElementById("txt4");
const cl5 = document.getElementById("txt5");

el1.addEventListener("mouseover", function handleMouseOver() {
    el6.src = "image/1.jpg";
    el6.style.display = "inline-block";
    cl1.style.display = "inline-block";
});

el1.addEventListener("mouseout", function handleMouseOut() {
    el6.style.display = "none";
    cl1.style.display = "none";
});

el2.addEventListener("mouseover", function handleMouseOver() {
    el6.src = "image/2.jpg";
    el6.style.display = "inline-block";
    cl2.style.display = "inline-block";
});

el2.addEventListener("mouseout", function handleMouseOut() {
    el6.style.display = "none";
    cl2.style.display = "none";
});
el3.addEventListener("mouseover", function handleMouseOver() {
    el6.src = "image/3.jpg";
    el6.style.display = "inline-block";
    cl3.style.display = "inline-block";
});

el3.addEventListener("mouseout", function handleMouseOut() {
    el6.style.display = "none";
    cl3.style.display = "none";
});
el4.addEventListener("mouseover", function handleMouseOver() {
    el6.src = "image/4.jpg";
    el6.style.display = "inline-block";
    cl4.style.display = "inline-block";
});

el4.addEventListener("mouseout", function handleMouseOut() {
    el6.style.display = "none";
    cl4.style.display = "none";
});
el5.addEventListener("mouseover", function handleMouseOver() {
    el6.src = "image/5.jpg";
    el6.style.display = "inline-block";
    cl5.style.display = "inline-block";
});

el5.addEventListener("mouseout", function handleMouseOut() {
    el6.style.display = "none";
    cl5.style.display = "none";
});