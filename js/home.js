const Sections = document.querySelectorAll('.main .directions .section')
const Text = document.querySelector('.main p.text')
const PubgMobileItems = document.querySelectorAll('.main .container .items .product-div.pubgm')
const ValorantItems = document.querySelectorAll('.main .container .items .product-div.valo')
const GamesItems = document.querySelectorAll('.main .container .items .product-div.games')

Sections.forEach(Section => {
    Section.addEventListener('click', () => {
        Sections.forEach(Section => {
            Section.classList.remove('active')
        })
        Section.classList.add('active')

        if (Section.classList.contains('games') == true){
            Text.innerText = 'Oyunlar'

            PubgMobileItems.forEach(PubgMobileItem => {
                PubgMobileItem.style.display = 'none'
            })
            ValorantItems.forEach(ValorantItem => {
                ValorantItem.style.display = 'none'
            })
            GamesItems.forEach(GamesItem => {
                GamesItem.style.display = 'flex'
            })
        } else if (Section.classList.contains('pubgm') == true){
            Text.innerText = 'Pubg Mobile'

            PubgMobileItems.forEach(PubgMobileItem => {
                PubgMobileItem.style.display = 'flex'
            })
            ValorantItems.forEach(ValorantItem => {
                ValorantItem.style.display = 'none'
            })
            GamesItems.forEach(GamesItem => {
                GamesItem.style.display = 'none'
            })
        } else if (Section.classList.contains('valo') == true){
            Text.innerText = 'Valorant'

            PubgMobileItems.forEach(PubgMobileItem => {
                PubgMobileItem.style.display = 'none'
            })
            ValorantItems.forEach(ValorantItem => {
                ValorantItem.style.display = 'flex'
            })
            GamesItems.forEach(GamesItem => {
                GamesItem.style.display = 'none'
            })
        }
    })
})        // yorum satırı





// Slider Codes
var imagenumber = 1;
displayimage(imagenumber)

function nextimage(n){
    displayimage(imagenumber += n)
}
function previmage(n){
    displayimage(imagenumber -= n)
}

function displayimage(n){
    var i;
    var image = document.getElementsByClassName('image')
    if (n > image.length){
        imagenumber = 1
    }
    if (n < 1){
        imagenumber = image.length
    }
    for (i=0; i < image.length; i++){
        image[i].style.display = 'none'
    }
    image[imagenumber - 1].style.display = 'block'
} 