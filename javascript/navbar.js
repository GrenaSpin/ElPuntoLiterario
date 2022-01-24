const menuHamburguer = document.querySelector(".menu-btn");
const showMenuHamburguer = document.querySelector(".navbar-list");


menuHamburguer.addEventListener("click", () =>{
	showMenuHamburguer.classList.toggle("show");
});
