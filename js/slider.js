const slider = document.querySelector('.slider');
const slides = Array.from(document.querySelectorAll('.slide'));
const prevBtn = document.querySelector('#prev-btn');
const nextBtn = document.querySelector('#next-btn');

let currentSlide = 0;

prevBtn.addEventListener('click', () => {
  if (currentSlide === 0) {
    currentSlide = slides.length - 1;
  } else {
    currentSlide--;
  }
  updateSlide();
});

nextBtn.addEventListener('click', () => {
  if (currentSlide === slides.length - 1) {
    currentSlide = 0;
  } else {
    currentSlide++;
  }
  updateSlide();
});

function updateSlide() {
  slides.forEach((slide, index) => {
    if (index === currentSlide) {
      slide.classList.add('active');
    } else {
      slide.classList.remove('active');
    }
  });
}