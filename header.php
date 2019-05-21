<!DOCTYPE html>
<html>
    <head>
        <!--Gets all our header info from functions.php ex.stylesheets -->
        <?php wp_head(); ?>
    <head>
    <body>
        <nav class="navbar navbar-expand-lg   dark-header">
        <img src="<?php echo get_template_directory_uri()?>/header_logo.png" <alt="business logo" class="header-logo" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
