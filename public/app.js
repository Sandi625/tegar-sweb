document.addEventListener("DOMContentLoaded", () => {
  // Progress bar, toTop, navbar
  const bar = document.querySelector(".progress");
  const toTop = document.querySelector(".toTop");
  const navbar = document.querySelector("nav");

  window.onscroll = function () {
    let scrollTop = window.scrollY;
    let docHeight = document.documentElement.scrollHeight - window.innerHeight;
    let fill = (scrollTop / docHeight) * 100;

    if(bar) bar.style.width = `${fill}%`;

    if(toTop) toTop.style.opacity = scrollTop > 750 ? "1" : "0";

    if(navbar) {
      if(scrollTop > 50) navbar.classList.add("active");
      else navbar.classList.remove("active");
    }
  };

  // Hamburger menu
  const mobileNav = document.querySelector(".links");
  const hamburger = document.querySelector(".hamburger");

  if(mobileNav && hamburger){
    hamburger.addEventListener("click", function () {
      mobileNav.classList.toggle("active");
      hamburger.classList.toggle("is-active");
    });
  }

  // Booking card hover
  const card = document.querySelector('.bookingCard');
  const btn = document.querySelector('.bookingBtn');

  if(card && btn){
    card.addEventListener('mouseenter', () => btn.classList.add('expand'));
    card.addEventListener('mouseleave', () => btn.classList.remove('expand'));
  }

  // Form helper functions
  function getFormData() {
    const name = document.getElementById('name')?.value.trim() || '';
    const email = document.getElementById('email')?.value.trim() || '';
    const pkg = document.getElementById('package')?.value || '';
    const date = document.getElementById('departure_date')?.value || '';
    const people = document.getElementById('people')?.value || '';
    const country = document.getElementById('country')?.value.trim() || '';
    const special = document.getElementById('special_request')?.value.trim() || '';

    return `
Nama: ${name}
Email: ${email}
Paket Trip: ${pkg}
Tanggal Berangkat: ${date}
Jumlah Orang: ${people}
Negara: ${country}
Special Request: ${special || '-'}
`;
  }

  window.sendEmail = function() {
    const message = getFormData();

    if(!document.getElementById('name')?.value || !document.getElementById('email')?.value){
      alert("Nama dan Email wajib diisi!");
      return;
    }

    const subject = encodeURIComponent("Form Pemesanan Trip");
    const body = encodeURIComponent(message);

    window.location.href = `mailto:sandipermadi625@gmail.com?subject=${subject}&body=${body}`;
  }

  window.sendWhatsApp = function() {
    const message = encodeURIComponent(getFormData());
    const phone = "6281330920809";
    window.open(`https://wa.me/${phone}?text=${message}`, "_blank");
  }

  // Adjust custom trip form
  function adjustCustomTripForm() {
    const title = document.querySelector('.customTripTitle');
    const inputs = document.querySelectorAll('.customTripForm input, .customTripForm textarea');
    const buttons = document.querySelectorAll('.customTripBtn');

    if(!title) return;

    if (window.innerWidth <= 480) {
      title.style.fontSize = '2rem';
      inputs.forEach(input => input.style.fontSize = '0.95rem');
      buttons.forEach(btn => btn.style.fontSize = '1rem');
    } else {
      title.style.fontSize = '2.5rem';
      inputs.forEach(input => input.style.fontSize = '1rem');
      buttons.forEach(btn => btn.style.fontSize = '1.2rem');
    }
  }

  adjustCustomTripForm();
  window.addEventListener('resize', adjustCustomTripForm);

  // Popup
  const openPopup = document.getElementById("openPopup");
  const closePopup = document.getElementById("closePopup");
  const popup = document.getElementById("popup");

  if(openPopup && closePopup && popup){
    openPopup.onclick = (e) => { e.preventDefault(); popup.style.display = "block"; };
    closePopup.onclick = () => popup.style.display = "none";
    window.onclick = (event) => { if(event.target === popup) popup.style.display = "none"; };
  }
});

const reviewCards = document.querySelectorAll('.reviewCard');
    const modal = document.getElementById('reviewModal');
    const closeModal = document.getElementById('closeModal');
    const modalPhoto = document.getElementById('modalPhoto');
    const modalName = document.getElementById('modalName');
    const modalRating = document.getElementById('modalRating');
    const modalText = document.getElementById('modalText');
    const prevPhoto = document.getElementById('prevPhoto');
    const nextPhoto = document.getElementById('nextPhoto');

    let currentPhotos = [];
    let currentIndex = 0;

    reviewCards.forEach(card => {
        card.addEventListener('click', () => {
            currentPhotos = JSON.parse(card.dataset.photos);
            currentIndex = 0;

            modal.style.display = 'flex';
            updateModal(card.dataset.name, card.dataset.rating, card.dataset.text, currentPhotos[currentIndex]);
        });
    });

    function updateModal(name, rating, text, photo) {
        modalPhoto.src = photo ? photo.startsWith('http') ? photo : `/uploads/reviews/${photo}` : '';
        modalName.textContent = name;
        modalRating.textContent = '⭐'.repeat(rating);
        modalText.textContent = text;
    }

    prevPhoto.addEventListener('click', () => {
        if (currentPhotos.length === 0) return;
        currentIndex = (currentIndex - 1 + currentPhotos.length) % currentPhotos.length;
        modalPhoto.src = currentPhotos[currentIndex].startsWith('http') ? currentPhotos[currentIndex] : `/uploads/reviews/${currentPhotos[currentIndex]}`;
    });

    nextPhoto.addEventListener('click', () => {
        if (currentPhotos.length === 0) return;
        currentIndex = (currentIndex + 1) % currentPhotos.length;
        modalPhoto.src = currentPhotos[currentIndex].startsWith('http') ? currentPhotos[currentIndex] : `/uploads/reviews/${currentPhotos[currentIndex]}`;
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
