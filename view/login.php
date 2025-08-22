<?php
     require_once('../nav/head.php');
?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form method="post" action="../page/PFL.php?function=login"> <!-- Point to your login handler -->
              <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase text-white">Login</h2>
                <p class="text-white-50 mb-5">Please enter your Email and password!</p>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                  <input type="email" name="Email" id="typeEmailX" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div data-mdb-input-init class="form-outline form-white mb-4">
                  <input type="password" name="Pass" id="Password" class="form-control form-control-lg" oninput="updateStrength(this)" required />
                  <label class="form-label" for="Password">Password</label><br>
                  <span id="strength" style="margin-left: 10px; font-weight: bold;"></span>
                </div>

                <button type="submit"
                  class="btn btn-outline-light hover-primary btn-lg px-5"
                  >
                  Login
                </button>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white mx-4 px-2"><i class="fab fa-twitter fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>

              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
     require_once('../nav/footer.php');
?>