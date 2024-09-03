    // index.js
document.addEventListener('DOMContentLoaded', () => {
    const cartIcon = document.querySelector('.nav-item.cart');
    const cartModal = document.getElementById('cart-modal');
    const closeButton = document.querySelector('.cart-modal .close-button');

    cartIcon.addEventListener('click', () => {
        cartModal.classList.add('open');
    });

    closeButton.addEventListener('click', () => {
        cartModal.classList.remove('open');
    });

    // Close the modal if the user clicks outside of it
    window.addEventListener('click', (event) => {
        if (event.target === cartModal) {
            cartModal.classList.remove('open');
        }
    });
});


const searchBtn = document.getElementById('search-btn');
const searchModal = document.getElementById('search-modal');
const closeModalBtn = document.getElementById('close-modal');

searchBtn.addEventListener('click', (event) => {
  event.preventDefault(); // Prevents the default anchor link behavior
  searchModal.classList.add('active');
});

closeModalBtn.addEventListener('click', () => {
  searchModal.classList.add('closing');
  
  // Wait for the animation to finish (500ms) before removing the modal
  setTimeout(() => {
    searchModal.classList.remove('active', 'closing');
  }, 500);
});