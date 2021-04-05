const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
const btnMeds = document.querySelector("#Medicos");
const btnProv = document.querySelector("#Proveedores");
const btnFarm = document.querySelector("#Farmacias");
const btnCont = document.querySelector("#Contactanos");
const btnSom = document.querySelector("#Somos");
menuBtn.onclick = ()=>{
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
}
cancelBtn.onclick = ()=>{
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
btnMeds.onclick = ()=>{
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
btnProv.onclick = ()=>{
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
btnFarm.onclick = ()=>{
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
btnCont.onclick = ()=>{
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
btnSom.onclick = ()=>{
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
window.onscroll = ()=>{
    if (this.scrollY > 460) {
        navbar.classList.remove("bye");
    } else {
        navbar.classList.add("bye");
    }
    if (this.scrollY > 500) {
        navbar.classList.add("sticky");  
    } else {
        navbar.classList.remove("sticky");
    }
}
window.addEventListener('scroll', function () {
  
  let heightTotal = window.pageYOffset;

  if (heightTotal >=800 && heightTotal <=1500) {
    btnMeds.classList.add('scrollspy');
    btnProv.classList.remove('scrollspy');
    btnFarm.classList.remove('scrollspy');
  }
  if (heightTotal >=1550 && heightTotal <=2300) {
    btnProv.classList.add('scrollspy');
    btnMeds.classList.remove('scrollspy');
    btnFarm.classList.remove('scrollspy');
  }
  if (heightTotal >=2400) {
    btnFarm.classList.add('scrollspy');
    btnProv.classList.remove('scrollspy');
    btnMeds.classList.remove('scrollspy');
  }
  console.log(heightTotal);
})
