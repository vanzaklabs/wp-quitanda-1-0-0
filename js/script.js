console.log("JS START ✅ ");

// Variáveis

const logo = document.getElementById('logosvg');
const header = document.getElementById('header');
const announ = document.getElementById('announcement-bar');
const sizex = window.innerHeight / 2.5;
const elemento = document.getElementById('logo');
const ancoragem = document.getElementById('ancoragem');
const menumobile = document.getElementById('menu-mobile');
const navmobrepo = document.getElementById('navmobrepo');
const btntab1 = document.getElementById('btntab1');
const btntab2 = document.getElementById('btntab2');
const btntab3 = document.getElementById('btntab3');
const tab1 = document.getElementById('tab1');
const tab2 = document.getElementById('tab2');
const tab3 = document.getElementById('tab3');


// ONLOAD

console.log("JS CHECKPOINT 1 ✅ ");

window.onload = function () {
  let posicao = ancoragem.getBoundingClientRect();
  console.log(posicao);
    logo.style.width = `${sizex}px`;
    logo.style.height = `${sizex}px`;
    if (posicao.top > 180) {
      header.style.opacity = '0';
      announ.style.opacity = '0';
    }
}

// HEADER
console.log("JS CHECKPOINT 2 ✅ ");
window.addEventListener('scroll', verificarPosicaoElemento);

function verificarPosicaoElemento() {
   
    let posicao = ancoragem.getBoundingClientRect();
    let windowHeight = window.innerHeight;
    if (posicao.top <= 180) {
        elemento.classList.add('elemento-no-topo');
        elemento.classList.remove('logo-absolute');
    }
    if (posicao.top > 180) {
        header.classList.add('fade-in');
        header.style.opacity = '1';
        announ.classList.add('fade-in');
        announ.style.opacity = '1';
        const scrollTop = window.scrollY;

        const initialSize = window.innerHeight / 2.5;
        const newSize = initialSize - (scrollTop * 0.4);
        const finalSize = newSize;

        logo.style.width = `${finalSize}px`;
        logo.style.height = `${finalSize}px`;

        elemento.classList.remove('elemento-no-topo');
        elemento.classList.add('logo-absolute');
    }
}



// TABS
console.log("JS CHECKPOINT 3 ✅ ");
// Função para mostrar a tab1 e ocultar tab2 e tab3
function showTab1() {
  tab1.classList.add('d-flex');
  tab1.classList.remove('d-none');
  btntab1.classList.add('fade-in');
  btntab1.style.opacity= '1';
  
  tab2.classList.remove('d-flex');
  tab2.classList.add('d-none');
  btntab2.classList.add('fade-in');
  btntab2.style.opacity= '0.5';
  
  tab3.classList.remove('d-flex');
  tab3.classList.add('d-none');
  btntab3.classList.add('fade-in');
  btntab3.style.opacity= '0.5';

  btntab1.querySelector('.yellow-underline').style.display = 'block';
  btntab2.querySelector('.yellow-underline').style.display = 'none';
  btntab3.querySelector('.yellow-underline').style.display = 'none';
}

console.log("JS CHECKPOINT 4 ✅ ");
// Função para mostrar a tab2 e ocultar tab1 e tab3
function showTab2() {
  tab2.classList.add('d-flex');
  tab2.classList.remove('d-none');
  btntab2.classList.add('fade-in');
  btntab2.style.opacity= '1';

  tab1.classList.remove('d-flex');
  tab1.classList.add('d-none');
  btntab1.classList.add('fade-in');
  btntab1.style.opacity= '0.5';

  tab3.classList.remove('d-flex');
  tab3.classList.add('d-none');
  btntab3.classList.add('fade-in');
  btntab3.style.opacity= '0.5';

  btntab1.querySelector('.yellow-underline').style.display = 'none';
  btntab2.querySelector('.yellow-underline').style.display = 'block';
  btntab3.querySelector('.yellow-underline').style.display = 'none';
}

console.log("JS CHECKPOINT 5 ✅ ");
// Função para mostrar a tab3 e ocultar tab1 e tab2
function showTab3() {
  tab3.classList.add('d-flex');
  tab3.classList.remove('d-none');
  btntab3.classList.add('fade-in');
  btntab3.style.opacity= '1';
  
  tab1.classList.remove('d-flex');
  tab1.classList.add('d-none');
  btntab1.classList.add('fade-in');
  btntab1.style.opacity= '0.5';
  
  tab2.classList.remove('d-flex');
  tab2.classList.add('d-none');
  btntab2.classList.add('fade-in');
  btntab2.style.opacity= '0.5';

  btntab1.querySelector('.yellow-underline').style.display = 'none';
  btntab2.querySelector('.yellow-underline').style.display = 'none';
  btntab3.querySelector('.yellow-underline').style.display = 'block';
}

console.log("JS CHECKPOINT 6 ✅ ");

console.log("JS 🔴 ");
// Adicionar eventos de clique aos botões
btntab1.onclick = showTab1;
btntab2.onclick = showTab2;
btntab3.onclick = showTab3;
console.log("JS 🔴 ");

console.log("JS CHECKPOINT 7 ✅ ");
// Menu Burguer

let checkbox = document.getElementById('checkbox-menu')
let menu = document.getElementById('nav-mob')

function hamburguer() {
    let posicao = ancoragem.getBoundingClientRect();
  if (checkbox.checked) {
    menu.classList.remove('d-none-menu-mobile')
    menumobile.style.marginTop= '-40px';
    disableScroll();
    elemento.classList.add('elemento-no-topo');
    elemento.classList.remove('logo-absolute');
    navmobrepo.style.marginTop= '5rem';
  } else {
    if (posicao.top > 180) {
      menu.classList.add('d-none-menu-mobile')
      navmobrepo.style.marginTop= '2.5rem';
      menumobile.style.marginTop= '0px';
      enableScroll();
      elemento.classList.remove('elemento-no-topo');
      elemento.classList.add('logo-absolute');
    }else{
      menu.classList.add('d-none-menu-mobile')
      navmobrepo.style.marginTop= '2.5rem';
      menumobile.style.marginTop= '0px';
      enableScroll();
      elemento.classList.add('elemento-no-topo');
      elemento.classList.remove('logo-absolute');
      
    }
   
  }
}

function disableScroll() {
  var scrollX = window.scrollX || document.documentElement.scrollLeft;
  var scrollY = window.scrollY || document.documentElement.scrollTop;
  document.styleSheets[0].insertRule("::-webkit-scrollbar { width: 0px; }", 0);
  window.onscroll = function() {
    window.scrollTo(scrollX, scrollY);
    elemento.classList.add('elemento-no-topo');
  };
}

function enableScroll() {
  window.onscroll = null;
  document.styleSheets[0].deleteRule(0);
  elemento.classList.add('elemento-no-topo');
}
// FIM Menu Burguer

console.log("JS CHECKPOINT 8 ✅ ");
// ScrollSmooth

const lenis = new Lenis()

lenis.on('scroll', (e) => {
  console.log(e)
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

console.log("JS END 🟢 ");