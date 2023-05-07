const selectBox = document.querySelector('.footer .container .left .language .select')
const selected = document.querySelector('.footer .container .left .language .select .selected div')
const menu = document.querySelector('.footer .container .left .language .menu')
const menuOptions = document.querySelectorAll('.footer .container .left .language .menu ul li')
const caret = document.querySelector('.footer .container .left .language .select .selected .caret')

selectBox.addEventListener('click', () => {
    menu.classList.toggle('active')
    caret.classList.toggle('caret-down')
})

menuOptions.forEach(menuOption => {
    menuOption.addEventListener('click', () => {
        menu.classList.remove('active')

        if (menuOption.classList.contains('tr') == true){
            selected.innerHTML = '<img src="img/turkish_flag.png" alt=""><p>Türkçe</p>'
        } else if (menuOption.classList.contains('en') == true){
            selected.innerHTML = '<img src="img/english_flag.png" alt=""><p>English</p>'
        }
    })
})