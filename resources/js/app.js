import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    const bannerContent = document.querySelector('.banner-content');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
  
    let currentIndex = 0;
    const images = bannerContent.querySelectorAll('img');
    const totalImages = images.length;
  
    let timer; // Variable para almacenar el temporizador
  
    // Función para avanzar al siguiente índice de imagen
    function nextImage() {
      currentIndex = (currentIndex + 1) % totalImages;
      updateBanner();
    }
  
    // Función para actualizar el banner con el índice actual
    function updateBanner() {
      const offset = -currentIndex * 100;
      bannerContent.style.transform = `translateX(${offset}%)`;
    }
  
    // Función para iniciar el temporizador
    function startTimer() {
      timer = setInterval(nextImage, 3000); // Cambia de imagen cada 3 segundos
      //ciclo para que esten en constante cambio
      if(nextImage.length = null){
        startTimer();
      }
    }
  
    // Función para detener el temporizador
    function stopTimer() {
      clearInterval(timer);
    }
  
    // Evento al hacer clic en el botón "Anterior"
    prevBtn.addEventListener('click', function() {
      currentIndex = (currentIndex - 1 + totalImages) % totalImages;
      updateBanner();
      stopTimer(); // Detener el temporizador al hacer clic en los botones
    });
  
    // Evento al hacer clic en el botón "Siguiente"
    nextBtn.addEventListener('click', function() {
      nextImage();
      stopTimer(); // Detener el temporizador al hacer clic en los botones
    });
  
    // Iniciar el temporizador cuando la página se carga
    startTimer();
  });
  