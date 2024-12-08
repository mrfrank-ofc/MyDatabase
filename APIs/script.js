// Get battery level
navigator.getBattery().then(function(battery) {
  console.log("Battery level: " + battery.level * 100 + "%");
  console.log("Battery charging: " + battery.charging);
  document.getElementById('battery-level').textContent = `${battery.level * 100}% (${battery.charging ? 'Charging' : 'Discharging'})`;
  
  battery.addEventListener('levelchange', function() {
    console.log("Battery level changed to: " + battery.level * 100 + "%");
    document.getElementById('battery-level').textContent = `${battery.level * 100}% (${battery.charging ? 'Charging' : 'Discharging'})`;
  });
  
  battery.addEventListener('chargingchange', function() {
    console.log("Battery charging state changed to: " + battery.charging);
    document.getElementById('battery-level').textContent = `${battery.level * 100}% (${battery.charging ? 'Charging' : 'Discharging'})`;
  });
});
let visitorNumber = localStorage.getItem('visitorNumber');

if (visitorNumber === null) {
  visitorNumber = 0;
}

document.getElementById('visitor-number').textContent = visitorNumber;

visitorNumber++;

localStorage.setItem('visitorNumber', visitorNumber);

// Get current date and time
function updateDateTime() {
  const now = new Date();
  const options = {
    weekday: 'short',
    month: 'short',
    day: 'numeric',
    year: 'numeric'
  };
  const today = now.toLocaleDateString(undefined, options);
  const time = now.toLocaleTimeString();
  document.getElementById('today-date').textContent = today;
  document.getElementById('current-time').textContent = time;
}
updateDateTime();
setInterval(updateDateTime, 1000); // Update every second

var typing = new Typed(".typing", {
    strings: ["Welcome To Saca Api", "Powered By Anon Devs Group agency", "Hi Visitor"],
    typeSpeed: 100,
    backSpeed: 50,
    loop: true
  });

  // Create stars background
  function createStars() {
    const starsContainer = document.getElementById('stars');
    const numberOfStars = 100;

    for (let i = 0; i < numberOfStars; i++) {
      const star = document.createElement('div');
      star.className = 'star';
      star.style.left = `${Math.random() * 100}%`;
      star.style.top = `${Math.random() * 100}%`;
      const size = Math.random() * 2 + 1;
      star.style.width = `${size}px`;
      star.style.height = `${size}px`;
      star.style.animationDelay = `${Math.random() * 2}s`;
      starsContainer.appendChild(star);
    }
  }

  // Initialize stars
  createStars();

  // Mobile menu functionality
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
  });

  // Close mobile menu when clicking outside
  document.addEventListener('click', (e) => {
    if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('active');
    }
  });

// Get IP address
fetch('https://api.ipify.org?format=json')
    .then(response => response.json())
    .then(data => {
        document.getElementById('ip-address').textContent = data.ip;
    })
    .catch(error => {
        console.error('Error fetching IP address:', error);
    });