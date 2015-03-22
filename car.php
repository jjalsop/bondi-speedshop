<?php include("inc/head-one.html"); ?>
  <title>Bondi Speed Shop – Name of Car</title>
<?php include("inc/head-two.html"); ?>
<body id="cars">
<?php include("inc/nav.html"); ?>
  <section id="car" class="car-hero" style="background-image:url(img/test-car.jpg)">
    <div class="black-overlay">
      <div class="introduction">
        <h1>1976 Name of Car</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum blanditiis officia ipsum amet possimus maiores necessitatibus incidunt dolore voluptates officiis, unde omnis ullam, reiciendis, temporibus nam voluptatum veritatis nobis quaerat! Officiis deserunt ipsum necessitatibus at.</p>
        <a href="#enquire" class="button scroll">Enquire Now</a>
      </div>
    </div>
  </section>
  <section class="content-section">
    <div class="row medium-4 columns medium-centered">
      <h3>About this car</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque veritatis nostrum iure, quidem eos itaque, sit odio error quae hic porro temporibus rerum facilis beatae dolore molestias a cupiditate minima nulla nemo. Fugiat, voluptatibus, quis!</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident ipsum consequuntur blanditiis, aperiam maxime, accusantium modi et necessitatibus dolores minima reiciendis voluptatem nostrum veritatis maiores quas laborum dicta saepe repellat laboriosam vero placeat magni debitis cumque voluptatum. Animi quaerat reiciendis et? Fugit ipsam dolorem, consectetur.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt inventore aliquam, commodi culpa ad omnis accusamus eveniet dolorem dolorum, cum, voluptatum quidem repellendus, dolor possimus.</p>
    </div>
  </section>
  <section id="car-slides">
    <div id="slider" class="owl-carousel owl-theme">
      <div class="item" style="background-image:url(img/test-image.jpg);"></div>
      <div class="item" style="background-image:url(img/test-image.jpg);"></div>
      <div class="item" style="background-image:url(img/test-image.jpg);"></div>
    </div>
  </section>
  <section class="content-section">
    <div class="row">
      <div class="medium-6 columns medium-centered">
        <h3>Make an enquiry</h3>
      </div>
    </div>
    <div class="row">
      <div class="medium-4 columns medium-centered">
        <a id="enquire"></a>
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