
const signBtn = document.querySelector(".btnlog");
const menuSign = document.querySelector(".signinform");

let contenu = document.querySelector(".sign-box");


signBtn.onclick = () => {
    contenu.classList.toggle("active-box");
};