<?php
    // Hero section
?>

<div class="hero">
    <div class="hero-wrapper">
        <div class="hero-content">
            <div class="hero-content-wrapper">
                <small>Who we are</small>
                <h1 class="mt-10">Engage brand and increase viewability.</h1>
                <p>Maecenas finibus urna a accumsan dapibus. Donec lobortis, neque vel vehicula dictum.</p>
                <div class="hero-buttons">
                    <a href="#" rel="noopener" class="primary light">Download Now</a>
                    <a href="#" rel="noopener" class="secondary light ml-20">Learn More</a>
                </div>
            </div>
        </div>

        <div class="hero-image">
            <div class="hero-image-wrapper">
                <!-- Setting the background image inline so we can update this from the dashboard in the future. -->
                <div class="hero-image-image" style="background-image: url(<?= get_template_directory_uri() . '/assets/images/Device_Ipad.png' ?>)"></div>
                <img src="<?= get_template_directory_uri() . '/assets/images/Device_Ipad.png' ?>" alt="iPad device with blank screen">
            </div>
        </div>
    </div>
</div>
