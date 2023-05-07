const background = document.querySelector('.main .container .right_side .content .balance .images')
const button = document.querySelector('.main .container .right_side .content .balance .balance_button')
const effects = document.getElementById('effects')

background.addEventListener('mouseover', () => {
    effects.classList.add('animated')
})

background.addEventListener('mouseout', () =>{
    effects.classList.remove('animated')
})

button.addEventListener('mouseover', () => {
    effects.classList.add('animated')
})