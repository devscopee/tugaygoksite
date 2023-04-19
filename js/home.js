const Sections = document.querySelectorAll('.main .directions .section')
const Text = document.querySelector('.main p.text')


Sections.forEach(Section => {
    Section.addEventListener('click', () => {
        Sections.forEach(Section => {
            Section.classList.remove('active')
        })
        Section.classList.add('active')

        if (Section.classList.contains('games') == true){
            Text.innerText = 'Oyunlar'
        } else if (Section.classList.contains('pubgm') == true){
            Text.innerText = 'Pubg Mobile'
        } else if (Section.classList.contains('valo') == true){
            Text.innerText = 'Valorant'
        }
    })
})


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