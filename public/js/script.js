const regularity = document.querySelector('.profile__regularity');
const regularityBtn = document.querySelector('.regularity-btn');
const regAchieve = document.querySelector('.achievement__box--regularity');

regularity.addEventListener('click', () => {
    regAchieve.classList.toggle('hidden');
    regularityBtn.classList.toggle('rotate-90');
})


const develop = document.querySelector('.profile__self-development');
const developBtn = document.querySelector('.develop-btn');
const devAchieve = document.querySelector('.achievement__box--develop');

develop.addEventListener('click', () => {
    devAchieve.classList.toggle('hidden');
    developBtn.classList.toggle('rotate-90');
})

const quantity = document.querySelector('.profile__quantity');
const quantityBtn = document.querySelector('.quantity-btn');
const quantityAchieve = document.querySelector('.achievement__box--quantity');

quantity.addEventListener('click', () => {
    quantityAchieve.classList.toggle('hidden');
    quantityBtn.classList.toggle('rotate-90');
})
