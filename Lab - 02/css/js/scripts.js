let currentIndex = 0;

function moveCarousel(step) {
    const items = document.querySelectorAll('.carousel-item');
    currentIndex = (currentIndex + step + items.length) % items.length;
    document.querySelector('.carousel-inner').style.transform = `translateX(-${currentIndex * 100}%)`;
}
