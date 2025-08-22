
<?php include('../nav/head.php'); ?>
<div class="container-xxl" style="height: 85vh;">
  <!-- Main contact form -->
  <main class="flex-shrink-0">
    <div class="container contact-form py-5">
      <div class="contact-image text-center mb-4">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" class="img-fluid"/>
      </div>
      <form method="post" action="../page/CTT.php?function=Contact" >
        <h3 class="text-center mb-4">Drop Us a Message</h3>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-3">
              <input type="text" name="fullname" class="form-control" placeholder="Your Name *" value="" />
            </div>
            <div class="form-group mb-3">
              <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" required/>
            </div>
            <div class="form-group mb-3">
              <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" required/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-3">
              <textarea name="message" class="form-control auto-resize" placeholder="Your Message *"  style="height: 150px;" required></textarea>
              
            </div> 
          </div>
            <div class="form-group">
              <input type="submit" class="btn btn-outline-primary" value="Send Message" />
            </div>
        </div>
      </form>
    </div>
  </main>
</div>
  <!-- Footer -->
  <?php include('../nav/footer.php'); ?>
