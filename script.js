// Toggle class active
const navbarNav = document.querySelector('.navbar-nav');
// ketika hamburger menu diklik
document.querySelector('#hamburger-menu')
.onclick = ()=> {
navbarNav.classList.toggle('active');
};

// Toggle class active Search
const searchForm = document.querySelector('.search-form');
const searchBox = document.querySelector('#search-box');

document.querySelector('#search-button').onclick = (e)=> {
  searchForm.classList.toggle('active');
  searchBox.focus();
  e.preventDefault();
};

//di luar side bar eleemen
const hm = document.querySelector('#hamburger-menu');
const sb = document.querySelector('#search-button')

document. addEventListener('click',   function(e){
  if(!hm.contains(e.target) && !navbarNav.contains(e.target)){
    navbarNav.classList.remove('active');
  }
  if(!sb.contains(e.target) && !searchForm.contains(e.target)){
    searchForm.classList.remove('active');
  }
});


//modal box
const itemDetailModal = document.querySelector('#item-detail-modal');
const itemDetailButtons = document.querySelectorAll('.item-detail-button');
const itemDetailModal2 = document.querySelector('#item-detail-modal2');
const itemDetailButtons2 = document.querySelectorAll('.item-detail-button2');
const itemDetailModal3 = document.querySelector('#item-detail-modal3');
const itemDetailButtons3 = document.querySelectorAll('.item-detail-button3');

const updateModalContent = (modal, imgSrc, title, description) => {
  const modalImg = modal.querySelector('.modal-content img');
  const modalTitle = modal.querySelector('.modal-content h3');
  const modalDescription = modal.querySelector('.modal-content p');

  modalImg.src = imgSrc;
  modalTitle.textContent = title;
  modalDescription.textContent = description;
};

itemDetailButtons.forEach((btn) => {
  btn.onclick = (e) => {
    updateModalContent(itemDetailModal, './img/peyek1.png', 'Peyek Kece', 'Peyek kece merupakan makanan ringan yang terbuat dari kacang pilihan dan tentunya bisa dinikmati semua kalangan masyarakat.');
    itemDetailModal.style.display = 'flex';
    e.preventDefault();
  };
});

itemDetailButtons2.forEach((btn) => {
  btn.onclick = (e) => {
    updateModalContent(itemDetailModal2, './img/pipcorn2-removebg-preview.png', 'Pipcorn', 'Pipcorn Merupakan makanan yang terbuat dari biji jagung pilihan dan tentunya pipcorn ini tidak terlalu manis, pipcorn akan balance dengan rasa asin lautnya. jadi pipcorn ini bisa dinikmati kalangan masyarakat dan tentunya picpron ini tidak eneg.');
    itemDetailModal2.style.display = 'flex';
    e.preventDefault();
  };
});

itemDetailButtons3.forEach((btn) => {
  btn.onclick = (e) => {
    updateModalContent(itemDetailModal3, './img/makan_3-removebg-preview.png', 'Kripik Gaul', 'Kripik gaul merupakan makanan ringan yang terbuat dari kentang pilihan dan, bisa dinikmati semua kalangan masyarakat.');
    itemDetailModal3.style.display = 'flex';
    e.preventDefault();
  };
});


// Klik di luar
window.onclick = (e) => {
  if (e.target === itemDetailModal) {
    itemDetailModal.style.display = 'none';
  } else if (e.target === itemDetailModal2) {
    itemDetailModal2.style.display = 'none';
  } else if (e.target === itemDetailModal3) {
    itemDetailModal3.style.display = 'none';
  }
};

const closeIcon1 = document.querySelector('#item-detail-modal .close-icon');
const closeIcon2 = document.querySelector('#item-detail-modal2 .close-icon');
const closeIcon3 = document.querySelector('#item-detail-modal3 .close-icon');

closeIcon1.onclick = (e) => {
  itemDetailModal.style.display = 'none';
  e.preventDefault();
};

closeIcon2.onclick = (e) => {
  itemDetailModal2.style.display = 'none';
  e.preventDefault();
};

closeIcon3.onclick = (e) => {
  itemDetailModal3.style.display = 'none';
  e.preventDefault();
};

