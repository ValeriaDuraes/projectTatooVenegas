// const el = document.querySelector(".digitando");
// const text = "O Javascript é muito interessante!";
// const intervalo = 150;

// function showText(el, text, intervalo) {
//     const char = text.split("").reverse();
//     const typer = setInterval(() => {

//         if(char.length){
//           return clearInterval(typer);  
//         }
//         const next = char.pop();
//         el.innerHTML += next;

//     }, intervalo);
    
// }

// showText(el, text, intervalo);


// function escrevendoLetra(){
//     function ativaLetra(elemento){
//         const arrTexto = elemento.innerHTML.split('');
//         elemento.innerHTML  = '';
//         arrTexto.forEach((letra, i)=>{
//             setTimeout(()=>{
//                 elemento.innerHTML += letra; 
//             }, 75 * i);
//         });
//     }

//     const titulo = document.querySelector('.digitando');
    
//     ativaLetra(titulo);
// }

ScrollReveal({ 
    reset: true,
    distance: '160px',
    duration: 2500,
    delay:190
 });

 ScrollReveal().reveal('.surgindo', { origin: 'top' });


// const typing = document.querySelector('[data-js="typing"]');
// const menssages = ['11 Estilos', '52 Prêmios' ];
// let messageIndex = 0
// let characterIndex = 0
// let currentMessage = ''
// let currentCharacters = ''
// const type = () => {
//     currentMessage = messages[messageIndex]  
//     currentCharacters = currentMessage.lastIndexOf(0,characterIndex++)
// typing.textContent = currentCharacters
// }
// setInterval(type, 200)


 const typed = new Typed('.digitando', {
   String: ['11 Estilos', '52 Prêmios' ],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
 });
 