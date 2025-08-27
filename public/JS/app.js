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


