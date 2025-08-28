const bar = document.querySelector(".progress");
const toTop = document.querySelector(".toTop");
const mobileNav = document.querySelector(".links");
const hamburger = document.querySelector(".hamburger");
const navbar = document.querySelector("nav");

window.onscroll = function () {
  let scrollTop = window.scrollY;
  let docHeight = document.documentElement.scrollHeight - window.innerHeight;
  let fill = (scrollTop / docHeight) * 100;

  bar.style.width = `${fill}%`;

  if (scrollTop > 750) {
    toTop.style.opacity = "1";
  } else {
    toTop.style.opacity = "0";
  }

  if (scrollTop > 50) {
    navbar.classList.add("active");
  } else {
    navbar.classList.remove("active");
  }
};

hamburger.addEventListener("click", function () {
  mobileNav.classList.toggle("active");
  hamburger.classList.toggle("is-active");
});


const card = document.querySelector('.bookingCard');
const btn = document.querySelector('.bookingBtn');

card.addEventListener('mouseenter', () => {
  btn.classList.add('expand'); // tombol memanjang saat hover card
});

card.addEventListener('mouseleave', () => {
  btn.classList.remove('expand'); // kembali normal saat hover selesai
});




function getFormData() {
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const pkg = document.getElementById('package').value;
  const date = document.getElementById('departure_date').value;
  const people = document.getElementById('people').value;
  const country = document.getElementById('country').value.trim();
  const special = document.getElementById('special_request').value.trim();

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

function sendEmail() {
  const message = getFormData();

  // Validasi sederhana
  if(!document.getElementById('name').value || !document.getElementById('email').value){
    alert("Nama dan Email wajib diisi!");
    return;
  }

  const subject = encodeURIComponent("Form Pemesanan Trip");
  const body = encodeURIComponent(message);

  // Kirim email via default client email user
  window.location.href = `mailto:sandipermadi625@gmail.com?subject=${subject}&body=${body}`;
}

function sendWhatsApp() {
  const message = encodeURIComponent(getFormData());

  // Gunakan nomor WhatsApp internasional
  const phone = "6281330920809";
  window.open(`https://wa.me/${phone}?text=${message}`, "_blank");
}





function adjustCustomTripForm() {
  const title = document.querySelector('.customTripTitle');
  const inputs = document.querySelectorAll('.customTripForm input, .customTripForm textarea');
  const buttons = document.querySelectorAll('.customTripBtn');

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

// Jalankan saat load & resize
adjustCustomTripForm();
window.addEventListener('resize', adjustCustomTripForm);


function sendWhatsApp() {
    var name = document.getElementById('tripName').value.trim();
    var email = document.getElementById('tripEmail').value.trim();
    var packageName = document.getElementById('tripPackage').value.trim();
    var people = document.getElementById('tripPeople').value.trim();
    var pickup = document.getElementById('pickupLocation').value.trim();
    var pickupDate = document.getElementById('pickupDate').value;
    var dropoff = document.getElementById('dropoffLocation').value.trim();
    var dropoffDate = document.getElementById('dropoffDate').value;
    var country = document.getElementById('tripCountry').value.trim();
    var request = document.getElementById('tripRequest').value.trim() || '-';

    // Validasi semua field wajib
    if (!name || !email || !people || !pickup || !pickupDate || !dropoff || !dropoffDate || !country) {
        alert("Please complete all required fields!");
        return;
    }

    // Validasi tanggal
    if (new Date(pickupDate) > new Date(dropoffDate)) {
        alert("Pick-up date cannot be later than drop-off date!");
        return;
    }

    var message = `NEW TOUR REQUEST
Destination: ${packageName}
NAME: ${name}
EMAIL: ${email}
Total participant: ${people}
Pick up Location: ${pickup} (${pickupDate})
Drop off Location: ${dropoff} (${dropoffDate})
Country: ${country}
Special request: ${request}`;

    var encodedMessage = encodeURIComponent(message);
    var phoneNumber = '6281330920809';

    window.open(`https://wa.me/${phoneNumber}?text=${encodedMessage}`, '_blank');
}

function sendEmail() {
    var name = document.getElementById('tripName').value.trim();
    var email = document.getElementById('tripEmail').value.trim();
    var packageName = document.getElementById('tripPackage').value.trim();
    var people = document.getElementById('tripPeople').value.trim();
    var pickup = document.getElementById('pickupLocation').value.trim();
    var pickupDate = document.getElementById('pickupDate').value;
    var dropoff = document.getElementById('dropoffLocation').value.trim();
    var dropoffDate = document.getElementById('dropoffDate').value;
    var country = document.getElementById('tripCountry').value.trim();
    var request = document.getElementById('tripRequest').value.trim() || '-';

    if (!name || !email || !people || !pickup || !pickupDate || !dropoff || !dropoffDate || !country) {
        alert("Please complete all required fields!");
        return;
    }

    if (new Date(pickupDate) > new Date(dropoffDate)) {
        alert("Pick-up date cannot be later than drop-off date!");
        return;
    }

    var subject = encodeURIComponent("NEW TOUR REQUEST");
    var body = encodeURIComponent(
`Destination: ${packageName}
NAME: ${name}
EMAIL: ${email}
Total participant: ${people}
Pick up Location: ${pickup} (${pickupDate})
Drop off Location: ${dropoff} (${dropoffDate})
Country: ${country}
Special request: ${request}`);

    var mailTo = "sandipermadi625@gmail.com";
    window.location.href = `mailto:${mailTo}?subject=${subject}&body=${body}`;
}
