
<footer class="bg-dark text-center text-white py-4">
  <!-- Copyright -->
  <div class="container">
    <p class="mb-0">
      © 2020 Copyright:
      <a href="https://mdbootstrap.com/" class="text-white text-decoration-none">
        MDBootstrap.com
      </a>
    </p>
  </div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
  </script>
  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>


			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

<script>
  $(document).ready(function(){
    $(".carousel-testimony").owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 }
      }
    });
  });
</script>
      <script>
  function updateStrength(input) {
    const strength = document.getElementById('strength');
    const length = input.value.length;

    if (length >= 12) {
      input.style.border = '2px solid #00cfff';
      input.style.boxShadow = '0 0 8px #00cfff';
      strength.innerText = '🛡️ Excellent';
      strength.style.color = '#00cfff';
    } else if (length >= 8) {
      input.style.border = '2px solid #00f600';
      input.style.boxShadow = '0 0 8px #00f600';
      strength.innerText = '😄 Strong';
      strength.style.color = '#00f600';
    } else if (length > 4) {
      input.style.border = '2px solid #ffa500';
      input.style.boxShadow = '0 0 8px #ffa500';
      strength.innerText = '😐 Medium';
      strength.style.color = '#ffa500';
    } else {
      input.style.border = '2px solid #ff4c4c';
      input.style.boxShadow = '0 0 8px #ff4c4c';
      strength.innerText = '😟 Weak';
      strength.style.color = '#ff4c4c';
    }
  }
</script>
  <script>
      function toggleText(button) {
          const card = button.closest('.card-body');
          const dots = card.querySelector('.dots');
          const more = card.querySelector('.more');
      
          if (dots.style.display === 'none') {
          dots.style.display = 'inline';
          more.style.display = 'none';
          button.innerHTML = 'Read more';
          } else {
          dots.style.display = 'none';
          more.style.display = 'inline';
          button.innerHTML = 'Read less';
          }
      }
  </script>
  </body>
</html>