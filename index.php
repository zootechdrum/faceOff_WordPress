<!-- Grabs the header information from header.php -->
<?php get_header(); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="img-container">
      <img src="<?php echo get_template_directory_uri()?>/rap.jpg" <alt="business logo" /><img 
            src="<?php echo get_template_directory_uri()?>/rap.jpg" <alt="business logo" /><img
            src="<?php echo get_template_directory_uri()?>/rap.jpg" <alt="business logo" />
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-lg-6">
    <form action="https://mailthis.to/rakeembattle90@gmail.com" method="POST" encType="multipart/form-data" class="form">
      <div class="">
          <h2 class="">
            Start booking now
          </h2>
         </div>

        <div class="form__group">
          <label for="name" class="form__label">Full name *</label>
          <input type="text" name="name" class="form-control" placeholder="Full Name" id="name" required>
        </div>

        <div class="form__group u-margin-top">
          <label for="email" class="form__label">Email Address *</label>
          <input type="email" name="_replyto" class="form-control" placeholder="Email address" id="email" required>
        </div>
        <div class="form__group u-margin-top">
          <label for="message" class="form__label">Leave A Message *</label>
          <textarea  type="text" name="message" class="form-control"></textarea>
        </div>
        <div class="form__group">
                <button type="submit" value="Send" class="btn">Submit &rarr;</button>
        </div>
        <input type="hidden" name="_subject" value="Contact form submitted">
        <!-- <input type="hidden" name="_after" value="https://myhomepage.net/"> -->
        <input type="hidden" name="_honeypot" value="">
        <input type="hidden" name="_confirmation" value=""> </form>
    </div>
  </div>

 
 <?php get_footer(); ?>