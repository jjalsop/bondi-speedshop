<?php include('perch/runtime.php');?>
<?php include("inc/head-one.html"); ?>
  <title>Bondi Speed Shop – Contact</title>
<?php include("inc/head-two.html"); ?>
<body id="contact">
<?php include("inc/nav.html"); ?>
  <section id="contact" class="page-hero">
    <div class="introduction">
      <h1>Contact</h1>
    </div>
  </section>
  <section class="content-section">
    <div class="row">
      <div class="medium-4 columns medium-centered">
        <h3>Get in touch</h3>
      </div>
    </div>
    <div class="row">
      <div class="medium-4 columns medium-centered">
        <form action="#" data-abide>
          <div class="row">
            <div class="medium-12 columns">
              <input type="text" placeholder="First name" required>
              <small class="error">Please enter your first name.</small>
            </div>
          </div>
          <div class="row">
            <div class="medium-12 columns">
              <input type="text" placeholder="Last name" required>
              <small class="error">Please enter your last name.</small>
            </div>
          </div>
          <div class="row">
            <div class="medium-12 columns">
              <input type="email" placeholder="Email address" required>
              <small class="error">Please enter a valid email address.</small>
            </div>
          </div>
          <div class="row">
            <div class="medium-12 columns">
              <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message" required></textarea>
              <small class="error">Please enter a message.</small>
            </div>
          </div>
          <button type="submit" class="button full-width">Send</button>

        </form>
      </div>
    </div>
  </section>

  <?php include("inc/footer.html"); ?> 
</body>
<?php include("inc/scripts.html"); ?> 