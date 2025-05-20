<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="styles.css" />

    <title>{{ config('app.name', 'Laravel') }}</title>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

:root {
  --primary-color: #1dcf1a;
  --primary-color-dark: #0cae29;
  --text-dark: #020617;
  --text-light: #1f964f;
  --extra-light: #f3f4f6;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
  padding-bottom: 0px;
}

.section__subheader {
  margin-bottom: 10px;
  font-size: 1.2rem;
  font-weight: 500;
  color: var(--primary-color);
}

.section__header {
  font-size: 2.5rem;
  font-weight: 600;
  color: var(--text-dark);
  line-height: 3.25rem;
}

.section__header span {
  color: var(--primary-color);
}

.section__description {
  color: var(--text-light);
  line-height: 1.75rem;
}

.btn {
 
  outline: none;
  border: none;
  font-size: 1rem;
 

  border-radius: 5px;
  transition: 0.3s;
  cursor: pointer;
}


img {
  display: flex;
  width: 100%;
}

a {
  text-decoration: none;
  transition: 0.3s;
}

ul {
  list-style: none;
}

html,
body {
  scroll-behavior: smooth;
}

body {
  font-family: "Poppins", sans-serif;
}

nav {
  position: fixed;
  isolation: isolate;
  width: 100%;
  z-index: 9;
}

.nav__header {
  padding: 0.75rem 1rem;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: var(--primary-color);
}

.nav__logo a {
  font-size: 1.25rem;
  font-weight: 600;
  color: var(--white);
}

.nav__menu__btn {
  font-size: 1.5rem;
  color: var(--white);
  cursor: pointer;
}

.nav__links {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 2rem;
  padding: 2rem;
  background-color: var(--primary-color);
  transition: transform 0.5s;
  z-index: -1;
}

.nav__links.open {
  transform: translateY(100%);
}

.nav__links a {
  font-weight: 500;
  color: var(--white);
}

.nav__btns {
  display: none;
}

.header__container {
  display: grid;
  gap: 2rem;
  overflow: hidden;
}

.header__content h1 {
  margin-bottom: 2rem;
  font-size: 4rem;
  color: var(--text-dark);
  text-align: center;
}

.header__content h1 span {
  text-decoration: underline;
  text-decoration-color: var(--primary-color);
}

.header__content .section__description {
  text-align: center;
}

.header__content form {
  margin-top: 4rem;
  width: 100%;
  padding: 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1rem;
  background-color: var(--white);
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
  border-radius: 1rem;
  background-color: rgba(255, 255, 255, 0.2);
}

.header__content .input__group {
  flex: 1 0 125px;
  display: grid;
  gap: 10px;
}

.header__content label {
  font-size: 1.1rem;
  font-weight: 500;
  color: var(--text-dark);
}

.header__content input {
  width: 100%;
  outline: none;
  border: none;
  font-size: 1rem;
  background-color: transparent;
  color: var(--text-light);
}

.header__content input::placeholder {
  color: var(--text-light);
}

.header__content .btn {
  padding: 13px 15px;
  font-size: 1.75rem;
  border-radius: 1rem;
}

.header__image {
  position: relative;
  isolation: isolate;
  display: grid;
  gap: 1rem;
  grid-template-columns: repeat(5, 1fr);
  grid-auto-rows: 90px;
}

.header__image img {
  height: 100%;
  object-fit: cover;
  border-radius: 1rem;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

.header__image img:nth-child(1) {
  grid-area: 1/1/4/3;
}

.header__image img:nth-child(2) {
  grid-area: 4/1/7/3;
}

.header__image img:nth-child(3) {
  grid-area: 2/3/6/6;
}

.header__image img:nth-child(4) {
  position: absolute;
  top: -2rem;
  right: 5rem;
  height: 10rem;
  width: unset;
  object-fit: contain;
  aspect-ratio: 1;
  box-shadow: none;
}

.choose__container {
  display: grid;
  gap: 2rem;
  overflow: hidden;
}

.choose__image img {
  max-width: 475px;
  margin-inline: auto;
  border-radius: 2rem;
  box-shadow: 30px -30px 0px rgba(0, 0, 0, 0.1);
}

.choose__list {
  margin-top: 4rem;
  display: grid;
  gap: 3rem;
}

.choose__list li {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.choose__list li span {
  display: inline-block;
  padding: 6px 14px;
  font-size: 2rem;
  color: var(--primary-color);
  border-radius: 10px;
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
}

.choose__list li h4 {
  margin-bottom: 5px;
  font-size: 1.2rem;
  font-weight: 500;
  color: var(--text-dark);
}

.choose__list li p {
  color: var(--text-light);
}

.popular__container {
  position: relative;
  isolation: isolate;
  padding-bottom: 1rem;
}

.popular__bg {
  position: absolute;
  left: 75%;
  top: 0;
  transform: translate(-65%, -50%) rotate(-135deg);
  height: 12rem;
  width: unset;
  aspect-ratio: 1;
  object-fit: contain;
}

.swiper {
  padding-block: 4rem;
  width: 100%;
}

.swiper-slide {
  min-width: 375px;
}

.popular__card {
  margin-inline: 1rem;
  overflow: hidden;
  border-radius: 3rem;
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
}

.popular__content {
  position: relative;
  isolation: isolate;
  padding-block: 3rem 2rem;
  padding-inline: 2rem;
}

.popular__rating {
  padding: 0.5rem 1rem;
  position: absolute;
  top: 0;
  left: 2rem;
  transform: translateY(-50%);
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--text-light);
  background-color: var(--white);
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
  border-radius: 2rem;
}

.popular__rating span {
  font-size: 1.2rem;
  color: goldenrod;
}

.popular__content h4 {
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.popular__content p {
  margin-bottom: 1rem;
  font-weight: 500;
  color: var(--text-light);
}

.popular__content p span {
  color: var(--primary-color);
}

.popular__card__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.popular__card__footer div {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--text-light);
}

.popular__card__footer span {
  font-size: 1.2rem;
}

.explore__container {
  display: grid;
  gap: 2rem 1rem;
  overflow: hidden;
}

.explore__image img {
  max-width: 475px;
  margin-inline: auto;
  border-radius: 2rem;
  box-shadow: -30px -30px 0px rgba(0, 0, 0, 0.1);
}

.explore__content .section__description {
  padding-block: 2rem;
}

.explore__content .btn {
  padding: 1.25rem 2.5rem;
  font-size: 1.5rem;
  border-radius: 1.25rem;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
}

.explore__grid {
  margin-top: 4rem;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1rem;
}

.explore__grid h4 {
  font-size: 3rem;
  font-weight: 500;
  color: var(--text-dark);
}

.explore__grid p {
  color: var(--text-light);
}

.client__container {
  position: relative;
  isolation: isolate;
}

.client__bg {
  position: absolute;
  left: 75%;
  top: 0;
  transform: translate(-65%, -35%) rotate(-45deg);
  height: 12rem;
  width: unset;
  aspect-ratio: 1;
  object-fit: contain;
}

.client__card {
  position: relative;
  isolation: isolate;
  margin-top: 4rem;
  display: none;
  animation: fadeEffect 1s;
}

.client__card.active {
  display: block;
}

@keyframes fadeEffect {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.client__card img {
  max-width: 400px;
  border-radius: 2rem;
  box-shadow: 30px -30px 0px rgba(0, 0, 0, 0.1);
}

.client__content {
  padding: 2rem;
  background-color: var(--white);
  border-left: 5px solid var(--primary-color);
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
  transform: translateY(-5rem);
}

.client__content h4 {
  font-size: 2rem;
  font-weight: 500;
  color: var(--text-dark);
}

.client__content h5 {
  margin-bottom: 2rem;
  font-size: 1.2rem;
  font-weight: 400;
  color: var(--primary-color);
}

.client__content p {
  color: var(--text-light);
}

.client__btns {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
}

.client__btns .btn {
  padding: 10px 12px;
  font-size: 1.5rem;
  color: var(--primary-color);
  background-color: var(--white);
  border: 2px solid var(--primary-color);
  border-radius: 100%;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.client__btns .btn:hover {
  color: var(--white);
  background-color: var(--primary-color);
}

.subscribe__container :is(.section__header, .section__description) {
  max-width: 600px;
  margin-inline: auto;
  margin-bottom: 2rem;
  text-align: center;
}

.subscribe__container form {
  max-width: 500px;
  margin-inline: auto;
  padding: 5px;
  display: flex;
  align-items: center;
  background-color: rgba(44, 141, 22, 0.5);
  border-radius: 10px;
}

.subscribe__container input {
  width: 100%;
  padding-inline: 1rem;
  outline: none;
  border: none;
  font-size: 1rem;
  color: var(--white);
  background-color: transparent;
}

.subscribe__container input::placeholder {
  color: var(--white);
}

footer {
  background-color: var(--primary-color);
}

.footer__container {
  display: grid;
  gap: 4rem 2rem;
  margin-top: 15px;
}

.footer__logo {
  margin-bottom: 2rem;
}

.footer__logo a {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--white);
}

.footer__col p {
  margin-bottom: 2rem;
  color: var(--white);
  line-height: 1.75rem;
}

.footer__socials {
  display: flex;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
}

.footer__socials a {
  padding: 6px 10px;
  font-size: 1.25rem;
  color: var(--text-dark);
  background-color: var(--white);
  border-radius: 100%;
}

.footer__socials a:hover {
  color: var(--white);
  background-color: var(--primary-color-dark);
}

.footer__col h4 {
  margin-bottom: 2rem;
  font-size: 1.2rem;
  font-weight: 500;
  color: var(--white);
}

.footer__links {
  display: grid;
  gap: 1rem;
}

.footer__links a {
  color: var(--white);
}

.footer__links span {
  display: inline-block;
  margin-right: 10px;
  font-size: 1.2rem;
}

.footer__col__flex {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}

.footer__col__flex img {
  max-width: 75px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

.footer__bar {
  padding: 1rem;
  color: var(--white);
  text-align: center;
}

@media (width > 540px) {
  .client__content {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    margin-left: 2rem;
    width: 75%;
  }

  .client__btns {
    margin-top: 2rem;
  }

  .footer__container {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (width > 768px) {
  nav {
    position: static;
    padding: 1.5rem 1rem;
    max-width: var(--max-width);
    margin-inline: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
  }

  .nav__header {
    flex: 1;
    padding: 0;
    background-color: transparent;
  }

  .nav__logo a {
    font-size: 1.5rem;
    color: var(--text-dark);
  }

  .nav__logo a span {
    color: var(--primary-color);
  }

  .nav__menu__btn {
    display: none;
  }

  .nav__links {
    position: static;
    width: fit-content;
    padding: 0;
    flex-direction: row;
    background-color: transparent;
    transform: none !important;
  }

  .nav__links a {
    color: var(--text-dark);
  }

  .nav__links a:hover {
    color: var(--primary-color);
  }

  .nav__btns {
    flex: 1;
    display: flex;
    justify-content: flex-end;
  }

  .header__container {
    padding-top: 2rem;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    isolation: isolate;
  }

  .header__content {
    position: relative;
    padding-bottom: 10rem;
  }

  .header__content :is(h1, .section__description) {
    text-align: left;
  }

  .header__content form {
    position: absolute;
    width: max-content;
    padding: 1.5rem;
    margin: 0;
    bottom: 0;
    border-radius: 1.5rem;
    backdrop-filter: blur(5px);
    z-index: 10;
  }

  .choose__container {
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
  }

  .explore__container {
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
  }

  .explore__content {
    grid-area: 1/1/2/2;
  }

  .client__btns {
    position: absolute;
    top: 15rem;
    right: 1rem;
    margin-top: 0;
  }

  .footer__container {
    grid-template-columns: repeat(7, 1fr);
  }

  .footer__col:nth-child(1) {
    grid-column: 1/3;
  }

  .footer__col:nth-child(2) {
    grid-column: 3/4;
  }

  .footer__col:nth-child(3) {
    grid-column: 4/6;
  }

  .footer__col:nth-child(4) {
    grid-column: 6/8;
  }
}

@media (width > 1024px) {
  .header__image {
    gap: 1.5rem;
    grid-auto-rows: 90px;
  }
}
#inquiries {
  padding: 2em;
  background-color: #f9f9f9;
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
  max-width: 500px;
  margin: auto;
  padding: 1em;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

label {
  margin: 0.5em 0 0.2em;
  font-weight: bold;
  text-align: left;
}

input, select, textarea {
  margin-bottom: 1em;
  padding: 0.7em;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
}

button {
  background-color: #4aa71c;
  color: #fff;
  padding: 0.7em;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1em;
}

button:hover {
  background-color: #0dbc62;
}

/* Responsive Design */
@media (max-width: 768px) {
  #inquiries {
    padding: 1em;
  }

  form {
    padding: 1em;
    width: 90%;
  }

  button {
    font-size: 0.9em;
    padding: 0.6em;
  }
}

@media (max-width: 480px) {
  form {
    padding: 0.8em;
    width: 95%;
  }

  label {
    font-size: 0.9em;
  }

  input, select, textarea {
    font-size: 0.9em;
    padding: 0.6em;
  }

  button {
    font-size: 0.85em;
    padding: 0.5em;
  }
}

</style>
<script>
    const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute(
    "class",
    isOpen ? "ri-close-line" : "ri-menu-3-line"
  );
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-3-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".header__image img", {
  ...scrollRevealOption,
  origin: "right",
  interval: 500,
});
ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOption,
  delay: 1500,
});
ScrollReveal().reveal(".header__content .section__description", {
  ...scrollRevealOption,
  delay: 2000,
});
ScrollReveal().reveal(".header__content form", {
  ...scrollRevealOption,
  delay: 2500,
});

ScrollReveal().reveal(".choose__image img", {
  ...scrollRevealOption,
  origin: "left",
});
ScrollReveal().reveal(".choose__content .section__subheader", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".choose__content .section__header", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".choose__list li", {
  ...scrollRevealOption,
  delay: 1500,
  interval: 500,
});

const swiper = new Swiper(".swiper", {
  slidesPerView: 3,
  spaceBetween: 0,
  loop: true,
});

ScrollReveal().reveal(".explore__image img", {
  ...scrollRevealOption,
  origin: "right",
});
ScrollReveal().reveal(".explore__content .section__subheader", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".explore__content .section__header", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".explore__content .section__description", {
  ...scrollRevealOption,
  delay: 1500,
});
ScrollReveal().reveal(".explore__content .explore__btn", {
  ...scrollRevealOption,
  delay: 2000,
});
ScrollReveal().reveal(".explore__grid div", {
  duration: 1000,
  delay: 2500,
  interval: 500,
});

const next = document.getElementById("next");
const prev = document.getElementById("prev");
const clientCards = Array.from(document.querySelectorAll(".client__card"));

next.addEventListener("click", (e) => {
  for (let index = 0; index < clientCards.length; index++) {
    if (clientCards[index].classList.contains("active")) {
      const nextIndex = (index + 1) % clientCards.length;
      clientCards[index].classList.remove("active");
      clientCards[nextIndex].classList.add("active");
      break;
    }
  }
});

prev.addEventListener("click", (e) => {
  for (let index = 0; index < clientCards.length; index++) {
    if (clientCards[index].classList.contains("active")) {
      const prevIndex = (index ? index : clientCards.length) - 1;
      clientCards[index].classList.remove("active");
      clientCards[prevIndex].classList.add("active");
      break;
    }
  }
});

ScrollReveal().reveal(".subscribe__container .section__header", {
  ...scrollRevealOption,
});
ScrollReveal().reveal(".subscribe__container .section__description", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".subscribe__container form", {
  ...scrollRevealOption,
  delay: 1000,
});

</script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
    <nav>
        <div class="nav__header">
            <div class="nav__logo">
                <a href="#">Madam Fe <span>Boarding House</span></a>
            </div>
            <div class="nav__menu__btn" id="menu-btn">
                <i class="ri-menu-3-line"></i>
            </div>
        </div>
        <ul class="nav__links" id="nav-links">
            <li><a href="#home">About</a></li>

            <li><a href="#package">Facilities</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="nav__btns">
            <a href="{{route('login')}}" class=" bg-green-500 p-4 rounded-sm text-gray-50">
                <button>Book now</button>
            </a>
        </div>
    </nav>

    <header class="section__container header__container" id="home">
        <div class="header__content">
            <h1><span>Your</span> Home Away From Home</h1>
            <p class="section__description">
                Indulge in an extraordinary stay with us! Discover elegant accommodations, enjoy exceptional service, and create memories that last a lifetime
            </p>
        </div>
        <div class="header__image">

            <img src="{{ asset('storage/rooms/room3.jpg') }}" alt="Logo">
            <img src="{{ asset('storage/rooms/room1.jpg') }}" alt="header" />
            <img src="{{ asset('storage/rooms/room5.jpg') }}" alt="header" />

        </div>
    </header>

    <section class="section__container choose__container">
        <div class="choose__image">

            <img src="{{ asset('storage/rooms/logo.jpg') }}" alt="Logo">
        </div>
        <div class="choose__content">
            <p class="section__subheader">Why Choose Us?</p>
            <h2 class="section__header">Make Your Stay<span> Unforgettable</span></h2>
            <ul class="choose__list">
                <li>
                    <span><i class="ri-verified-badge-fill"></i></span>
                    <div>
                        <h4>Best Price Gurantee</h4>
                        <p>
                            Enjoy premium comfort at the most competitive rates, ensuring the best value for your stay.
                        </p>
                    </div>
                </li>
                <li>
                    <span><i class="ri-verified-badge-fill"></i></span>
                    <div>
                        <h4>Seamless Booking Experience</h4>
                        <p>
                            Book your stay effortlessly with flexible options designed to fit your schedule and preferences.
                        </p>
                    </div>
                </li>
                <li>
                    <span><i class="ri-verified-badge-fill"></i></span>
                    <div>
                        <h4>Tailored Recommendations</h4>
                        <p>
                            Discover nearby attractions, dining, and experiences with our curated guides, making your stay extraordinary.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <section class="section__container explore__container" id="package">
        <div class="header__image">
            <img src="{{ asset('storage/rooms/room6.jpg') }}" alt="Logo">
            <img src="{{ asset('storage/rooms/room5.jpg') }}" alt="header" />
            <img src="{{ asset('storage/rooms/room1.jpg') }}" alt="header" />

        </div>
        <div class="explore__content">
            <p class="section__subheader">Explore Our Facilities</p>
            <h2 class="section__header">
                Choose Exceptional Comfort for <span>Your Stay</span>
            </h2>
            <p class="section__description">
                Discover a world of luxury! Indulge in our top-notch amenities, thoughtfully designed to ensure your stay is both relaxing and memorable.
            </p>
            <div class="explore__btn">
                <button class="btn">Learn More About Us.</button>
            </div>
            <div class="explore__grid">
                <div>
                    <h4>50</h4>
                    <p>Years of<br /> Excellence</p>
                </div>
                <div>
                    <h4>37+</h4>
                    <p>Unique <br />Amenities</p>
                </div>
                <div>
                    <h4>20</h4>
                    <p>Happy<br />Guest Daily</p>
                </div>
            </div>
        </div>
    </section>



    <footer class="bg-green-500" id="contact">
        <div class="section__container footer__container">
            <div class="footer__col">
                <div class="footer__logo">
                    <a href="#">Madam Fe Boarding House</a>
                </div>
                <p>
                    Experience Luxury with Us!
                    Connect with us through our social media channels, explore quick links to BH amenities, and enjoy 24/7 guest support to make your stay seamless and unforgettable.
                </p>
                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class="ri-facebook-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-twitter-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-instagram-line"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Services</h4>
                <ul class="footer__links">
                    <li><a href="#">About Us</a></li>

                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4>Contact</h4>
                <ul class="footer__links">
                    <li>
                        <a href="#">
                            <span><i class="ri-phone-fill"></i></span> +63 912 345 6789
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="ri-map-pin-fill"></i></span> Poblacion, Tagbina, Surigao del sur 8308
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="ri-mail-fill"></i></span> madamFe@gmail.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div> -->
        <script>
            const menuBtn = document.getElementById("menu-btn");
            const navLinks = document.getElementById("nav-links");
            const menuBtnIcon = menuBtn.querySelector("i");

            menuBtn.addEventListener("click", (e) => {
                navLinks.classList.toggle("open");

                const isOpen = navLinks.classList.contains("open");
                menuBtnIcon.setAttribute(
                    "class",
                    isOpen ? "ri-close-line" : "ri-menu-3-line"
                );
            });

            navLinks.addEventListener("click", (e) => {
                navLinks.classList.remove("open");
                menuBtnIcon.setAttribute("class", "ri-menu-3-line");
            });

            const scrollRevealOption = {
                distance: "50px",
                origin: "bottom",
                duration: 1000,
            };

            ScrollReveal().reveal(".header__image img", {
                ...scrollRevealOption,
                origin: "right",
                interval: 500,
            });
            ScrollReveal().reveal(".header__content h1", {
                ...scrollRevealOption,
                delay: 1500,
            });
            ScrollReveal().reveal(".header__content .section__description", {
                ...scrollRevealOption,
                delay: 2000,
            });
            ScrollReveal().reveal(".header__content form", {
                ...scrollRevealOption,
                delay: 2500,
            });

            ScrollReveal().reveal(".choose__image img", {
                ...scrollRevealOption,
                origin: "left",
            });
            ScrollReveal().reveal(".choose__content .section__subheader", {
                ...scrollRevealOption,
                delay: 500,
            });
            ScrollReveal().reveal(".choose__content .section__header", {
                ...scrollRevealOption,
                delay: 1000,
            });
            ScrollReveal().reveal(".choose__list li", {
                ...scrollRevealOption,
                delay: 1500,
                interval: 500,
            });

            const swiper = new Swiper(".swiper", {
                slidesPerView: 3,
                spaceBetween: 0,
                loop: true,
            });

            ScrollReveal().reveal(".explore__image img", {
                ...scrollRevealOption,
                origin: "right",
            });
            ScrollReveal().reveal(".explore__content .section__subheader", {
                ...scrollRevealOption,
                delay: 500,
            });
            ScrollReveal().reveal(".explore__content .section__header", {
                ...scrollRevealOption,
                delay: 1000,
            });
            ScrollReveal().reveal(".explore__content .section__description", {
                ...scrollRevealOption,
                delay: 1500,
            });
            ScrollReveal().reveal(".explore__content .explore__btn", {
                ...scrollRevealOption,
                delay: 2000,
            });
            ScrollReveal().reveal(".explore__grid div", {
                duration: 1000,
                delay: 2500,
                interval: 500,
            });

            const next = document.getElementById("next");
            const prev = document.getElementById("prev");
            const clientCards = Array.from(document.querySelectorAll(".client__card"));

            next.addEventListener("click", (e) => {
                for (let index = 0; index < clientCards.length; index++) {
                    if (clientCards[index].classList.contains("active")) {
                        const nextIndex = (index + 1) % clientCards.length;
                        clientCards[index].classList.remove("active");
                        clientCards[nextIndex].classList.add("active");
                        break;
                    }
                }
            });

            prev.addEventListener("click", (e) => {
                for (let index = 0; index < clientCards.length; index++) {
                    if (clientCards[index].classList.contains("active")) {
                        const prevIndex = (index ? index : clientCards.length) - 1;
                        clientCards[index].classList.remove("active");
                        clientCards[prevIndex].classList.add("active");
                        break;
                    }
                }
            });

            ScrollReveal().reveal(".subscribe__container .section__header", {
                ...scrollRevealOption,
            });
            ScrollReveal().reveal(".subscribe__container .section__description", {
                ...scrollRevealOption,
                delay: 500,
            });
            ScrollReveal().reveal(".subscribe__container form", {
                ...scrollRevealOption,
                delay: 1000,
            });
        </script>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>

</body>

</html>