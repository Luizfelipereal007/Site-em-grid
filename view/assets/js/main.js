console.log('js foi carregado')

// marca a o menu como ativo
let uri = document.location.pathname
uri = uri.substring(0, uri.length - 4) // desconta os 4 ultimos caracteres do .php
document
    .querySelector('#nav-items')
    .querySelectorAll('a.nav-link')
    .forEach((link) => {
        if (link.href.includes(uri)) {
            link.classList.add('active')
        }
    })

// abre o sidebar no mobile
const sidebar = document.querySelector('#sidebar')
const menuMobile = document.querySelector('#mobile-menu')
menuMobile.addEventListener('click', () => {
    sidebar.classList.toggle('opened')
})
