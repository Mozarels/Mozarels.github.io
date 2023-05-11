const images = [
    '../img/spinimg1.webp',
    '../img/spinimg2.webp',
    '../img/spinimg3.webp',
    '../img/spinimg4.webp',
    '../img/spinimg5.webp',
  ];
  let currentImageIndex = 0;
  
  function changeImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    const imageUrl = images[currentImageIndex];
    const image = document.getElementById('my-image');
    image.src = imageUrl;
  }
  setInterval(changeImage, 7000);
  
  const image = document.getElementById('my-image');
  image.classList.add('spin');

const makananKecil = [
    '../img/spin2img1.webp',
    '../img/spin2img2.webp',
    '../img/spin2img3.webp',
    '../img/spin2img4.webp',
    '../img/spin2img5.webp',
    '../img/spin2img6.webp',
    '../img/spin2img7.webp',
    '../img/spin2img8.webp',
    '../img/spin2img9.webp',
    '../img/spin2img10.webp',
    '../img/spin2img11.webp',
    '../img/spin2img12.webp',
    '../img/spin2img13.webp',
];

let currentSpinDua = 0;

function changeImageDua() {
    currentSpinDua = (currentSpinDua + 1) % makananKecil.length;
    const spinDuaUrl = makananKecil[currentSpinDua];
    const gambarSpinDua = document.getElementById('my-spindua');
    gambarSpinDua.src = spinDuaUrl;
}

setInterval(changeImageDua, 4000);

const gambarSpinDua = document.getElementById('my-spindua');
gambarSpinDua.classList.add('spinduaclass');



let currentSpinTiga = 0;

function changeImageTiga() {
  currentSpinTiga = (currentSpinTiga + 2) % makananKecil.length;
  const spinTigaUrl = makananKecil[currentSpinTiga];
  const gambarSpinTiga = document.getElementById('my-spintiga');
  gambarSpinTiga.src = spinTigaUrl;
}

setInterval(changeImageTiga, 3000);

const gambarSpinTiga = document.getElementById('my-spintiga');
gambarSpinTiga.classList.add('spintigaclass');



const minuman = [
  '../img/spin3img1.webp',
  '../img/spin3img2.webp',
  '../img/spin3img3.webp',
  '../img/spin3img4.webp',
  '../img/spin3img5.webp',
  '../img/spin3img6.webp',
  '../img/spin3img7.webp',
  '../img/spin3img8.webp',
  '../img/spin3img9.webp',
];

let currentSpinMinuman = 0;

function changeSpinMinuman() {
  currentSpinMinuman = (currentSpinMinuman + 1) % minuman.length;
  const minumanUrl = minuman[currentSpinMinuman];
  const gambarMinuman = document.getElementById('my-minuman');
  gambarMinuman.src = minumanUrl;
}

setInterval(changeSpinMinuman, 5000);

const gambarMinuman = document.getElementById('my-minuman');
gambarMinuman.classList.add('spinminuman');
