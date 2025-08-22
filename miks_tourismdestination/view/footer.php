
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
  </body>
</html>