  function updateClock() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const timeString = `${hours}:${minutes}:${seconds}`;
    document.getElementById('clock').textContent = timeString;
  }

  // Jalankan sekali saat halaman dimuat
  updateClock();

  // Update setiap detik
  setInterval(updateClock, 1000);

  const quotes = [
    "effort is attractive🖐️",
    "eat well, sleep well, rest well🚀",
    "everyday is a great day🌟",
    "keep growing, stay kiyowo!🦄",
  ];
  
  const random = Math.floor(Math.random() * quotes.length);
  document.getElementById("quote").textContent = quotes[random];

  
