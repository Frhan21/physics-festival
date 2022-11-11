const toogleButton = document.getElementsByClassName('nav-btn')[0]
const navbarLinks = document.getElementsByClassName('navigasi')[0]

toogleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})