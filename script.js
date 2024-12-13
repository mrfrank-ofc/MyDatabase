///--//

function redirect(url) {
    window.location.href = url;
  }
  
let visitorNumber = localStorage.getItem('visitorNumber');

if (visitorNumber === null) {
  visitorNumber = 0;
}

document.getElementById('visitor-number').textContent = visitorNumber;

visitorNumber++;

localStorage.setItem('visitorNumber', visitorNumber);




  // if we want to urls logic in js so 
  /*

  const buttons = document.querySelectorAll('button');

buttons.forEach((button, index) => {
  button.addEventListener('click', () => {
    redirectToURL(index + 1);
  });
});

function redirectToURL(buttonIndex) {
  const urlMap = {
    1: 'https://www.example.com/button1-url',
    2: 'https://www.example.com/button2-url',
    3: 'https://www.example.com/button3-url',
    4: 'https://www.example.com/button4-url',
  };

  const url = urlMap[buttonIndex];
  if (url) {
    redirect(url);
  }
}
let visitorNumber = localStorage.getItem('visitorNumber');

if (visitorNumber === null) {
  visitorNumber = 0;
}

document.getElementById('visitor-number').textContent = visitorNumber;

visitorNumber++;

localStorage.setItem('visitorNumber', visitorNumber);

function redirect(url) {
  window.location.href = url;
}

    */
