/* document.addEventListener('DOMContentLoaded', () => {
    const boxes = document.querySelector('.boxes')
    const box = document.createElement('div')
    const img = document.createElement('img')
    const case_img = document.createElement('img')
  
    fetch('js/items.json')
      .then(response => response.json())
      .then(data => {
        const gunValue = data.mor1[0].gun;
        const caseValue = data.mor1[0].case
        img.setAttribute('src', gunValue)
        case_img.setAttribute('src', caseValue)
      });
  
    box.appendChild(img)
    box.appendChild(case_img)
    boxes.appendChild(box)
  })
   */