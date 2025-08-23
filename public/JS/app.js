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


document.getElementById("tourForm").addEventListener("submit", function(e) {
    e.preventDefault();

    // Ambil nilai input
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let destination = document.getElementById("destination").value;
    let date = document.getElementById("date").value;
    let notes = document.getElementById("notes").value;

    // Format pesan
    let message = `*New Tour Request*%0A
Name: ${name}%0A
Email: ${email}%0A
Destination: ${destination}%0A
Preferred Date: ${date}%0A
Notes: ${notes}`;

    // Nomor WhatsApp (gunakan kode negara 62 untuk Indonesia)
    let phone = "6281330920809";

    // Buat URL WhatsApp
    let url = `https://wa.me/${phone}?text=${message}`;

    // Arahkan ke WhatsApp
    window.open(url, "_blank");
});



const leafContainer = document.getElementById('leafContainer');

document.addEventListener('mousemove', (e) => {
  // buat daun baru
  const leaf = document.createElement('div');
  leaf.classList.add('leaf');

  // posisi awal sesuai mouse
  leaf.style.left = e.clientX + 'px';
  leaf.style.top = e.clientY + 'px';

  // random ukuran daun
  const size = Math.random() * 20 + 20;
  leaf.style.width = size + 'px';
  leaf.style.height = size + 'px';

  // random kecepatan animasi
  leaf.style.animationDuration = (Math.random() * 2 + 3) + 's';

  leafContainer.appendChild(leaf);

  // hapus daun setelah animasi selesai
  leaf.addEventListener('animationend', () => {
    leaf.remove();
  });
});
