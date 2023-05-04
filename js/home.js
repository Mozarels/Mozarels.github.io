const images = [
    '../img/spinimg1.png',
    '../img/spinimg2.png',
    '../img/spinimg3.png',
    '../img/spinimg4.png',
    '../img/spinimg5.png',
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
    '../img/spin2img1.png',
    '../img/spin2img2.png',
    '../img/spin2img3.png',
    '../img/spin2img4.png',
    '../img/spin2img5.png',
    '../img/spin2img6.png',
    '../img/spin2img7.png',
    '../img/spin2img8.png',
    '../img/spin2img9.png',
    '../img/spin2img10.png',
    '../img/spin2img11.png',
    '../img/spin2img12.png',
    '../img/spin2img13.png',
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
  '../img/spin3img1.png',
  '../img/spin3img2.png',
  '../img/spin3img3.png',
  '../img/spin3img4.png',
  '../img/spin3img5.png',
  '../img/spin3img6.png',
  '../img/spin3img7.png',
  '../img/spin3img8.png',
  '../img/spin3img9.png',
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
