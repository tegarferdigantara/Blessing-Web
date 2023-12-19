function fixdc5101() {
  Swal.fire({
    title: "Are you sure?",
    imageUrl: "/images/alarm.gif",
    imageWidth: 100,
    imageHeight: 100,
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Confirm",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "/fix5101"; 
    } else {
      Swal.fire({
        title: "Fix 5101 Canceled",
        icon: "info",
      });
    }
  });
}

function buy() {
  Swal.fire({
    title: "Are You Sure? To Buy This Item",
    imageUrl: "/images/alarm.gif",
    imageWidth: 100,
    imageHeight: 100,
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Confirm",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "Thanks For Buy This Item!",
        text: "Please Check Your Mall Inventory!",
        imageUrl: "/images/icon-success.gif",
        imageWidth: 100,
        imageHeight: 100,
        imageAlt: "Custom image",
      });
    }
  });
}

function updateDateTime() {
  var currentTime = new Date();
  var hours = currentTime.getHours();
  var minutes = currentTime.getMinutes();
  var seconds = currentTime.getSeconds();
  var day = currentTime.getDay();
  var date = currentTime.getDate();
  var month = currentTime.getMonth(); // Month is zero-based
  var year = currentTime.getFullYear();
  var gmtOffset = currentTime.getTimezoneOffset() / 60;

  // Tambahkan nol di depan angka jika kurang dari 10
  hours = (hours < 10 ? "0" : "") + hours;
  minutes = (minutes < 10 ? "0" : "") + minutes;
  seconds = (seconds < 10 ? "0" : "") + seconds;

  // Format waktu sebagai string
  var formattedTime = hours + ":" + minutes + ":" + seconds;

  // Mendapatkan nama hari berdasarkan angka hari (0 = Minggu, 1 = Senin, dst.)
  var daysOfWeek = ["Sun", "Mon", "Tues", "Wednes", "Thurs", "Fri", "Satur"];
  var formattedDay = daysOfWeek[day];

  // Array untuk nama-nama bulan
  var months = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Octo", "Nove", "Dec"];
  var formattedMonth = months[month];

  // Format GMT
  var formattedGMT = gmtOffset > 0 ? "+" + gmtOffset : gmtOffset;

  // Tampilkan waktu, hari, tanggal, bulan, tahun, dan GMT di dalam elemen yang sesuai
  document.getElementById("current-time").innerHTML = formattedTime;
  document.getElementById("current-day").innerHTML = formattedDay;
  document.getElementById("current-date").innerHTML = date;
  document.getElementById("current-month").innerHTML = formattedMonth;
  document.getElementById("current-year").innerHTML = year;
  document.getElementById("current-gmt").innerHTML = "GMT " + formattedGMT;
}

// Panggil fungsi updateDateTime setiap detik
setInterval(updateDateTime, 1000);

// Panggil updateDateTime untuk pertama kali agar waktu langsung ditampilkan saat halaman dimuat
updateDateTime();
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl));
$(function () {
  $('[data-toggle="popover"]').popover({
    trigger: "hover", // Menampilkan popover saat hover
    template: '<div class="popover custom-popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
  });
});
