// script AOS by saiful
AOS.init();

// script about img 
const gambar = [
  './assets/images/about/toko_nailArt.jpg',
  './assets/images/about/toko_nailArt3.jpg',
];

function autogambar () {
  const imageElement = document.getElementById('dynamicImage');
  const random = Math.floor(Math.random() * gambar.length);
  const randomgambar = gambar[random];
  imageElement.src = randomgambar;
}

setInterval(autogambar, 1500);

// script filter product by saiful
$(document).ready(function () {
  var $grid = $('.product-container').isotope({
    itemSelector: '.product-item',
    layoutMode: 'fitRows'
  });

  $('#product-flters li').on('click', function () {
    $('#product-flters li').removeClass('filter-active');
    $(this).addClass('filter-active');
    var filterValue = $(this).attr('data-filter');
    
    $grid.isotope({ filter: filterValue });
    
    setTimeout(function () {
      AOS.refresh();
    }, 500); 
  });
});

// script navbar by saiful
// Saya matikan karena ini untuk click toggle navbar, jika saya jalan bila sudah memilih toggle langsung tertutup dan juga hovernya gak kelihatan
// $(".navbar-nav .nav-item .nav-link").on("click", function () {
//   $(".navbar-collapse").collapse("hide");
// });

$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.navbar').addClass('scrolled');
  } else {
    $('.navbar').removeClass('scrolled');
  }
});
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.navbar').addClass('scrolled');
  } else {
    $('.navbar').removeClass('scrolled');
  }
});

// script text typing effect by saiful
const typingText = document.getElementById("typing-text");
const staticText = "Selamat Datang di ";
const textArray = ["Oh My Nail Art"];
let textIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textIndex].length) {
    const span = document.createElement("span");
    span.textContent = textArray[textIndex].charAt(charIndex);
    span.style.color = "#FFD0D0";
    typingText.appendChild(span);
    charIndex++;
    setTimeout(type, 100);
  } else {
    setTimeout(erase, 2000);
  }

  if (cursor.style.visibility === "visible") {
    cursor.style.visibility = "visible";
  } else {
    cursor.style.visibility = "visible";
  }
}

function erase() {
  if (charIndex > 0) {
    typingText.removeChild(typingText.lastChild);
    charIndex--;
    setTimeout(erase, 50);
  } else {
    textIndex++;
    if (textIndex >= textArray.length) {
      textIndex = 0;
    }
    setTimeout(type, 800);
  }

  if (cursor.style.visibility === "visible") {
    cursor.style.visibility = "hidden";
  } else {
    cursor.style.visibility = "visible";
  }
}

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(type, 1000);
});

// script floating bottom right icon by saiful
document.getElementById("open-modal").addEventListener("click", function () {
  var myModal = new bootstrap.Modal(document.getElementById("myModal"));
  myModal.show();
});

//################################# script Update Contact Us   #################################

// document.addEventListener("DOMContentLoaded", function () {
//   const form = document.querySelector('form');
//   const nameInput = document.getElementById("g-name");
//   const emailInput = document.getElementById("g-email");
//   const messageInput = document.getElementById("g-msg");

//   form.addEventListener('submit', function (e) {
//     const name = nameInput.value;
//     const email = emailInput.value;
//     const message = messageInput.value;

//     // Cek apakah salah satu input kosong
//     if (name === "" || email === "" || message === "") {
//       e.preventDefault(); // Mencegah pengiriman form jika ada input yang kosong

//       Swal.fire(
//         'Peringatan',
//         'Mohon untuk dilengkapi terlebih dahulu!',
//         'warning'
//       );
//     } else {
//       Swal.fire(
//         'Good job!',
//         'Send Message success!',
//         'success'
//       );

  //     sendWhatsAppMessage(e);

  //     // Setelah berhasil dikirim, kosongkan nilai input form
  //     nameInput.value = "";
  //     emailInput.value = "";
  //     messageInput.value = "";

  //     console.log("Input form telah dikosongkan"); // Tambahkan pernyataan log
  //   }
  // });

  

//   function sendWhatsAppMessage(event) {
//     event.preventDefault();
  
//     const name = document.getElementById("g-name").value;
//     const email = document.getElementById("g-email").value;
//     const message = document.getElementById("g-msg").value;
  
//     const phoneNumber = "+628983756070"; // Ganti dengan nomor WhatsApp Anda
//     const text = `Name: ${name}%0AEmail: ${email}%0AMessage: ${message}`;
  
//     const whatsappURL = `https://wa.me/${phoneNumber}?text=${text}`;
  
//     // Buka WhatsApp di tab baru
//     window.open(whatsappURL, "_blank");
//   }
// });

// document.addEventListener("DOMContentLoaded", function () {
//   const form = document.querySelector('form');

//   form.addEventListener('submit', function (e) {
//     const namaPelanggan = document.querySelector("input[name='id_pelanggan']").value;
//     const teksUlasan = document.querySelector("textarea[name='teks_ulasan']").value;
//     const tanggalUlasan = document.querySelector("input[name='tanggal_ulasan']").value;
//     const rating = document.querySelector("input[name='rating']").value;

//     // Cek apakah salah satu input kosong
//     if (namaPelanggan === "" || teksUlasan === "" || tanggalUlasan === "" || rating === "") {
//       e.preventDefault(); // Mencegah pengiriman form jika ada input yang kosong

//       Swal.fire(
//         'Peringatan',
//         'Mohon untuk dilengkapi terlebih dahulu!',
//         'warning'
//       );
//     } else {
//       Swal.fire(
//         'Good job!',
//         'Send Testimonial success!',
//         'success'
//       );
//     }
//   });
// });

// alert ulasan

document.getElementById("testimonial-form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent the default form submission

  var form = this;

  // Use Fetch API to submit form data
  fetch(form.action, {
      method: form.method,
      body: new FormData(form)
  })
  .then(function(response) {
      // Check if response is OK
      if (response.ok) {
          // Reset form after successful submission
          form.reset();
          // Show sweet alert for success
          Swal.fire("Success!", "Ulasan berhasil dikirim!", "success");
      } else {
          // Show sweet alert for failure
          Swal.fire("Error!", "Gagal mengirim ulasan.", "error");
      }
  })
  .catch(function(error) {
      // Show sweet alert for errors
      Swal.fire("Error!", "Terjadi kesalahan.", "error");
  });
});



//script test by aan
var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  centerSlide: true,
  autoplay: {
    delay: 1000, // ini untuk mengatir durasi dari slider cardd(dalam milidetik)
  },
  fadeEffect: {
    crossFade: true,
  },
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
      autoplay: {
        delay: 1000, // ini untuk mengatir durasi dari slider cardd(dalam milidetik)
      },
    },
    520: {
      slidesPerView: 2,
      autoplay: {
        delay: 1000, // ini untuk mengatir durasi dari slider cardd(dalam milidetik)
      },
    },
    950: {
      slidesPerView: 3,
      autoplay: {
        delay: 1000, // ini untuk mengatir durasi dari slider cardd(dalam milidetik)
      },
    },
  },
});
