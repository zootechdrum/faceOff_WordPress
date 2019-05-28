<!-- Grabs the header information from header.php -->
<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-sm nopadding">
            <img src="<?php echo get_template_directory_uri()?>/kanye.jpg" <alt="business logo" />
        </div>
        <div class="col-lg-4  col-sm nopadding">
            <img src="<?php echo get_template_directory_uri()?>/fc_logo.jpg" <alt="business logo" />
        </div>
        <div class="col-lg-4 col-sm nopadding">
            <img src="<?php echo get_template_directory_uri()?>/kanye.jpg" <alt="business logo" />
        </div>
    </div>
</div>

<div class="container">
    <div id="contact" class="contact-us-section">
        <div class="col">
            <div class="row">
                <div class="contact-us-section-header">
                    <div class="contact-us-section__title text-center">
                        <h2 class="">CONTACT US</h2>
                        <div class="contact-us-seperator">
                            <span></span>
                        </div>
                        <h4 class="contact-us-section-sub">Don't hesitate to get in touch.
                            <br>
                            We want to discuss your project.</h4>
                    </div>
                </div>
                <div>
                </div>
                <div class="col-lg-6">

                    <form action="https://mailthis.to/rakeembattle90@gmail.com" method="POST"
                        encType="multipart/form-data" class="form">
                        <div class="form__group">
                            <label for="name" class="form__label">Full name *</label>
                            <input type="text" name="name" class="form-control" placeholder="Full Name" id="name"
                                required>
                        </div>

                        <div class="form__group u-margin-top">
                            <label for="email" class="form__label">Email Address *</label>
                            <input type="email" name="_replyto" class="form-control" placeholder="Email address"
                                id="email" required>
                        </div>
                        <div class="form__group u-margin-top">
                            <label for="message" class="form__label">Leave A Message *</label>
                            <textarea id="textarea" type="text" name="message" class="form-control"></textarea>
                        </div>
                        <div class="form__group form__submit">
                            <button type="submit" value="Send" class="btn btn-light">Submit &rarr;</button>
                        </div>
                        <input type="hidden" name="_subject" value="Contact form submitted">
                        <input type="hidden" name="_after" value="https://myhomepage.net/">
                        <input type="hidden" name="_honeypot" value="">
                        <input type="hidden" name="_confirmation" value="">
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="contact-details">
                            <div>
                                <h5>Drop in for a second</h5>
                                <p>Please allow 24 hours for a response.We often experiance high volumes.</p>
                                <p>&nbsp;</p>
                                <h5>
                                    <strong>FaceOff Visuals&nbsp;</strong>
                                </h5>
                                <h5>
                                    E: rakeembattle90@gmail.com
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php get_footer(); ?>