<?php
require_once('vistas/header.php');
require_once('vistas/slider.php');
require_once('vistas/accesosRapidos.php');
require_once('vistas/bienvenidaMision.php');
require_once('vistas/oferta.php');
require_once('vistas/footer.php');

?>



</body>
<script>
    const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>
</html>