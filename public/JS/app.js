const mobileNav = document.querySelector(".links");
const hamburger = document.querySelector(".hamburger");
const navbar = document.querySelector("nav");
const call = document.querySelector(".call");
const discord = document.querySelector(".discord");

$(".menu").slick({
  dots: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  centerMode: true,
  centerPadding: "0px",
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 1140,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 830,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

AOS.init();

call.addEventListener("click", () => {
  Swal.fire({
    imageUrl: 'https://i.ibb.co/d04JBmC/image.png',
    imageWidth: 75,
    imageHeight: 75,
    html:  `My phone number is <b><a href="tel:+94711436311">071-1436311</a></b>`,
  })
});

discord.addEventListener("click", () => {
  Swal.fire({
    imageUrl: 'https://i.ibb.co/JsdzLhm/image-2021-10-08-173444.png',
    imageWidth: 75,
    imageHeight: 75,
    html:  `My Discord Handle is <b>chamindu_js#6588</b>`,
  })
});

window.addEventListener("load", () => {
  const loader = document.querySelector(".loaderr");
  loader.style.transform = "translateY(-100%)";
});

hamburger.addEventListener("click", function () {
  mobileNav.classList.toggle("active");
  hamburger.classList.toggle("is-active");
});

window.onscroll = function () {
  if (scrollY > 50) {
    navbar.classList.add("active");
  } else {
    navbar.classList.remove("active");
  }
};


function redirectToWhatsApp() {
    // Ganti nomor di bawah dengan nomor WhatsApp Anda (format internasional, tanpa +)
    const phoneNumber = "6281330920809";
    const message = encodeURIComponent("Hello, I'd like to ask!");
    window.open(`https://wa.me/${phoneNumber}?text=${message}`, "_blank");
}


function getFormData() {
  return {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    destination: document.getElementById("destination").value,
    date: document.getElementById("date").value,
    notes: document.getElementById("notes").value
  };
}

function sendWhatsApp() {
  let data = getFormData();

  let message = `*New Tour Request*%0A
Name: ${data.name}%0A
Email: ${data.email}%0A
Destination: ${data.destination}%0A
Preferred Date: ${data.date}%0A
Notes: ${data.notes}`;

  // Nomor WhatsApp tujuan
  let phone = "6281330920809";

  let url = `https://wa.me/${phone}?text=${message}`;
  window.open(url, "_blank");
}

function sendEmail() {
  let data = getFormData();

  let subject = "New Tour Request";
  let body = `New Tour Request:

Name: ${data.name}
Email: ${data.email}
Destination: ${data.destination}
Preferred Date: ${data.date}
Notes: ${data.notes}`;

  // Email tujuan
  let mailto = `mailto:sandipermadi625@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
  window.location.href = mailto;
}



// const leafContainer = document.getElementById('leafContainer');

// document.addEventListener('mousemove', (e) => {
//   // buat daun baru
//   const leaf = document.createElement('div');
//   leaf.classList.add('leaf');

//   // posisi awal sesuai mouse
//   leaf.style.left = e.clientX + 'px';
//   leaf.style.top = e.clientY + 'px';

//   // random ukuran daun
//   const size = Math.random() * 20 + 20;
//   leaf.style.width = size + 'px';
//   leaf.style.height = size + 'px';

//   // random kecepatan animasi
//   leaf.style.animationDuration = (Math.random() * 2 + 3) + 's';

//   leafContainer.appendChild(leaf);

//   // hapus daun setelah animasi selesai
//   leaf.addEventListener('animationend', () => {
//     leaf.remove();
//   });
// });


var swiper = new Swiper(".mySwiper", {
  loop: true,
  speed: 1000, // kecepatan transisi (ms)
  autoplay: {
    delay: 2500, // jeda antar slide (ms)
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


function responsiveCard() {
    var card = document.getElementById('customTourCard');
    var img = document.getElementById('customTourImg');
    var title = document.getElementById('customTourTitle');

    if (window.innerWidth <= 480) { // HP
        card.style.maxWidth = "95%";
        card.style.padding = "15px 10px";
        img.style.height = "auto";
        title.style.fontSize = "20px";
    } else if (window.innerWidth <= 768) { // Tablet
        card.style.maxWidth = "90%";
        card.style.padding = "20px 15px";
        img.style.height = "auto";
        title.style.fontSize = "24px";
    } else { // Desktop
        card.style.maxWidth = "900px";
        card.style.padding = "25px 20px";
        img.style.height = "auto";
        title.style.fontSize = "30px";
    }
}

// Hover effect card
var card = document.getElementById('customTourCard');
card.onmouseover = function() {
    card.style.transform = "scale(1.03)";
    card.style.boxShadow = "0 8px 20px rgba(0,0,0,0.2)";
};
card.onmouseout = function() {
    card.style.transform = "scale(1)";
    card.style.boxShadow = "0 4px 8px rgba(0,0,0,0.1)";
};

// Hover effect button
var btn = document.getElementById('customTourButton');
btn.onmouseover = function() {
    btn.style.backgroundColor = "#e07b00";
    btn.style.transform = "scale(1.05)";
};
btn.onmouseout = function() {
    btn.style.backgroundColor = "#f2870c";
    btn.style.transform = "scale(1)";
}

// Jalankan saat load & resize
responsiveCard();
window.addEventListener('resize', responsiveCard);


document.getElementById("searchInput").addEventListener("keyup", function () {
    let keyword = this.value.toLowerCase().trim();

    // ambil semua container per kategori
    let containers = document.querySelectorAll(".blogsContainer");

    containers.forEach(container => {
        let cards = container.querySelectorAll(".blog");
        let hasMatch = false;

        // cek setiap card
        cards.forEach(card => {
            let title = card.querySelector(".blogTitle").innerText.toLowerCase();

            if (keyword === "" || title.includes(keyword)) {
                card.style.display = "block";
                hasMatch = true;
            } else {
                card.style.display = "none";
            }
        });

        // cek apakah sudah ada element pesan di container
        let noResult = container.querySelector(".noResult");
        if (!noResult) {
            noResult = document.createElement("p");
            noResult.className = "noResult";
            noResult.innerText = "Tour not available yet";
            noResult.style.textAlign = "center";
            noResult.style.marginTop = "20px";
            noResult.style.fontSize = "18px";
            noResult.style.color = "#555";
            container.appendChild(noResult);
        }

        // tampilkan atau sembunyikan pesan
        noResult.style.display = hasMatch ? "none" : "block";
    });
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
    const defaultPhoto = 'https://randomuser.me/api/portraits/lego/1.jpg';

    reviewCards.forEach(card => {
        card.addEventListener('click', () => {
            const photos = JSON.parse(card.dataset.photos);
            // jika tidak ada foto, gunakan default
            currentPhotos = (photos && photos.length) ? photos : [defaultPhoto];
            currentIndex = 0;

            updateModal(card.dataset.name, card.dataset.rating, card.dataset.text, currentPhotos[currentIndex]);
            modal.style.display = 'flex';
        });
    });

    function updateModal(name, rating, text, photo) {
        if (!photo || photo === '') {
            modalPhoto.src = defaultPhoto;
        } else {
            modalPhoto.src = photo.startsWith('http') ? photo : `/uploads/reviews/${photo}`;
        }
        modalName.textContent = name;
        modalRating.textContent = '⭐'.repeat(rating);
        modalText.textContent = text;
    }

    prevPhoto.addEventListener('click', () => {
        if (currentPhotos.length === 0) return;
        currentIndex = (currentIndex - 1 + currentPhotos.length) % currentPhotos.length;
        modalPhoto.src = currentPhotos[currentIndex] ? (currentPhotos[currentIndex].startsWith('http') ? currentPhotos[currentIndex] : `/uploads/reviews/${currentPhotos[currentIndex]}`) : defaultPhoto;
    });

    nextPhoto.addEventListener('click', () => {
        if (currentPhotos.length === 0) return;
        currentIndex = (currentIndex + 1) % currentPhotos.length;
        modalPhoto.src = currentPhotos[currentIndex] ? (currentPhotos[currentIndex].startsWith('http') ? currentPhotos[currentIndex] : `/uploads/reviews/${currentPhotos[currentIndex]}`) : defaultPhoto;
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
