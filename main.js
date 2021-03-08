const items = document.querySelectorAll('.item');

items.forEach((element) => {

    element.addEventListener('mousemove', (event) => {
        const back = event.target.children[0];
        const front = event.target.children[1];

        const valueX = event.offsetX - (event.target.clientWidth / 2);
        const valueY = event.offsetY - (event.target.clientHeight / 2);

        back.style.transform = `translate3d(${valueX / 10}px, ${valueY / 10}px, 0)`;
        front.style.transform = `translate3d(${-1 * valueX / 10}px, ${-1 * valueY / 10}px, 0)`;
    });

    element.addEventListener('mouseleave', (event) => {
        const back = event.target.children[0];
        const front = event.target.children[1];

        back.style.transform = `translate3d(0, 0, 0)`;
        front.style.transform = `translate3d(0, 0, 0)`;
    });
});

function showModal(index) {
    const modal = document.getElementById('item-modal');
    const slides = document.querySelectorAll('#container-modal .slide-container .slide');

    slides[index].classList.add('visible', 'first');
    modal.classList.add('visible');
}

function hideModal() {
    const modal = document.getElementById('item-modal');
    const slide = document.querySelector('#container-modal .slide-container .slide.visible');

    slide.classList.remove('visible');
    modal.classList.remove('visible');
}

function nextSlide() {
    const slides = document.querySelectorAll('#container-modal .slide-container .slide');

    for (let i = 0; i < slides.length; i++) {
        if (slides[i].classList.contains('visible')) {
            const index = i === slides.length - 1 ? 0 : i + 1;

            slides[i].classList.remove('visible', 'first');
            slides[index].classList.add('visible');
            break;
        }
    }
}

function previousSlide() {
    const slides = document.querySelectorAll('#container-modal .slide-container .slide');

    for (let i = slides.length - 1; i >= 0; i--) {
        if (slides[i].classList.contains('visible')) {
            const index = i === 0 ? slides.length - 1 : i - 1;

            slides[i].classList.remove('visible', 'first');
            slides[index].classList.add('visible');
            break;
        }
    }
}