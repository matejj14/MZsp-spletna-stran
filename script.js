/*preverjanje dolžine sporočila*/
document.addEventListener("DOMContentLoaded", function() {
  var sporociloInput = document.querySelector("textarea[name='sporocilo']");
  var zadevaInput = document.querySelector("input[name='zadeva']");
  
  if (sporociloInput) {
      sporociloInput.addEventListener("keydown", function(event) {
          var sporocilo = this.value;
          var keyCode = event.keyCode || event.which;
          if (sporocilo.length >= 2000 && keyCode !== 8 && keyCode !== 46) {
              event.preventDefault();
              alert("Sporočilo ne sme presegati 2000 znakov.");
          }
      });
  }

  if (zadevaInput) {
      zadevaInput.addEventListener("keydown", function(event) {
          var zadeva = this.value;
          var keyCode = event.keyCode || event.which;
          if (zadeva.length >= 100 && keyCode !== 8 && keyCode !== 46) {
              event.preventDefault();
              alert("Zadeva ne sme presegati 100 znakov.");
          }
      });
  }
});

/*koda za dodajanje active razreda navigation baru pri mobilnih napravah*/
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if(close){
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
    
}

/*premikanje med login in registriraj se stranjo*/
document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.wrapper');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');

    registerLink.addEventListener('click', () => {
        console.log("Register link clicked"); // Dodajte to vrstico
        wrapper.classList.add('active');
    });

    loginLink.addEventListener('click', () => {
        console.log("Login link clicked"); // Dodajte to vrstico
        wrapper.classList.remove('active');
    });
});


/*slideshow*/
document.addEventListener("DOMContentLoaded", function() {
  // Prikaži slike ob nalaganju strani
  var slideshows = document.querySelectorAll('.slideshow-container');

  slideshows.forEach(function(container, index) {
      showSlides(0, index);
      
      var prevButton = container.querySelector('.prev');
      var nextButton = container.querySelector('.next');

      prevButton.addEventListener('click', function() {
        event.preventDefault(); //pri administrator.php prepreči, da bi se pošiljal obrazec s tema gumboma namesto s save
          plusSlides(-1, index);
      });

      nextButton.addEventListener('click', function() {
        event.preventDefault();  
        plusSlides(1, index);
      });
  });
});

function plusSlides(n, slideshowIndex) {
  showSlides(n, slideshowIndex);
}

function showSlides(n, slideshowIndex) {
  var container = document.querySelectorAll('.slideshow-container')[slideshowIndex];
  var slides = container.getElementsByClassName("slideshow-image");
  var counter = container.querySelector('.slideshow-counter');
  var slideIndex = parseInt(container.dataset.slideIndex) || 1; // Dobimo trenutni indeks slike iz podatkovnega atributa

  // Prilagodimo slideIndex glede na korak
  slideIndex += n;

  // Preverimo meje slideIndex
  if (slideIndex > slides.length) { slideIndex = 1; }
  if (slideIndex < 1) { slideIndex = slides.length; }

  // Skrijemo vse slike
  for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

  // Prikazemo trenutno sliko
  slides[slideIndex - 1].style.display = "block";

  // Posodobimo podatkovni atribut za slideIndex
  container.dataset.slideIndex = slideIndex;

  // Posodobimo prikaz številke trenutne slike
  counter.textContent = slideIndex + '/' + slides.length;
}



// Funkcija za prikaz prve strani dogodkov
function prikaziStran1() {
  document.getElementById("stran-1").style.display = "block";
  document.getElementById("stran-2").style.display = "none";
  window.scrollTo(0, 0); // Pomakni stran na vrh
}

// Funkcija za prikaz druge strani dogodkov
function prikaziStran2() {
  document.getElementById("stran-1").style.display = "none";
  document.getElementById("stran-2").style.display = "block";
  window.scrollTo(0, 0); // Pomakni stran na vrh
}

// Dodajanje poslušalcev dogodkov na gumbe
document.getElementById("gumb-stran-1").addEventListener("click", prikaziStran1);
document.getElementById("gumb-stran-2").addEventListener("click", prikaziStran2);

// Privzeto prikaži prvo stran dogodkov
prikaziStran1();
