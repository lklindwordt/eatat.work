// Import js widgets
// import './folder'

// Import styles
import '../sass/main.scss';

// Import images
import '../img/truck.png';
import '../img/facebook.svg';
import '../img/instagram.svg';
import '../img/mail.svg';
import '../img/bkr-unterwegs-logo.png';

/* Navigation */
const nav_trigger = document.getElementById('nav-trigger');
const nav_layer = document.getElementById("nav-layer");

nav_trigger.addEventListener('click', navToggle);

function navToggle(e) {
  var closed = (nav_trigger.className.indexOf('close') > 0); 
  if(closed) {
    nav_trigger.className = 'nav-trigger open';
    nav_layer.className = 'overlay';
  } else {
    nav_trigger.className = 'nav-trigger close';
    nav_layer.className = 'overlay show';
  }
}

// navTrigger.addEventListener('click', navToggle);

// /* Close */
// function closeNav() {
//   document.getElementById("myNav").style.height = "0%";
// }