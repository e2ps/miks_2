
<?php include('head.php'); ?>
<div class="container-xxl" style="height: 85vh;">
  <!-- Main contact form -->
  <main class="flex-shrink-0">
    <div class="container contact-form py-5">
      <div class="contact-image text-center mb-4">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" class="img-fluid"/>
      </div>
      
      <form method="post" action="contact.php" >
        <h3 class="text-center mb-4">Drop Us a Message</h3>
        <div class="row">
          <div class="col-md-6">
             <?php include('database/process.php'); ?>
            <div class="form-group mb-3">
              <input type="text" name="fullname" class="form-control" placeholder="Your Name *" value="" />
            </div>
            <div class="form-group mb-3">
              <input type="text" name="Email" class="form-control" placeholder="Your Email *" value="" />
            </div>
            <div class="form-group mb-3">
              <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-3">
              <textarea name="message" class="form-control" placeholder="Your Message *" style="height: 150px;"></textarea>
            </div>
          </div>
            <div class="form-group">
              <input type="submit" name="btnSubmit" class="btn btn-primary" value="Send Message" />
            </div>
        </div>
      </form>
    </div>
  </main>
</div>
  <!-- Footer -->
  <?php include('footer.php'); ?>
