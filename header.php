<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Gets all our header info from functions.php ex.stylesheets -->
    <?php wp_head(); ?>

    <head>

    <body <?php body_class(); ?>>
        <nav class="navbar navbar-expand-lg fixed-top dark-header">
            <img class="header-logo" src="<?php echo get_template_directory_uri()?>/header_logo.png"
                <alt="business logo" class="header-logo" />
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" >
                        <a class="nav-link" href="<?php echo site_url("") ?>" <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="<?php echo site_url('/blog');?>">Videos</a>
                    </li>
                    <li class="nav-item" <?php if (is_page('contact')) echo 'class="current-menu-item"' ?>>
                        <a class="nav-link" href="<?php echo site_url('/#contact')?>">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    