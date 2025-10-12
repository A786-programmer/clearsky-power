<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'header-files.php' ?>
        <title>Our Story & Mission | <?= $websiteName ?></title>
    </head>
    <body class="solar-energy-home">
        <?php include 'header.php' ?>
        <div class="rts-about-area mt--40 mb--40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="rts-about-left-image-area">
                            <div class="thumbnail">
                                <img src="assets/images/about/20.png" alt="solar energy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right-content-area-solar-energy">
                            <div class="title-area-left">
                                <h2 class="title skew-up">About Us</h2>
                            </div>
                            <ul class="nav custom-nav-soalr-about nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="story-and-mission-tab" data-bs-toggle="pill" data-bs-target="#story-and-mission" type="button" role="tab" aria-controls="story-and-mission" aria-selected="true">Our Story & Mission</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="history-and-experience-tab" data-bs-toggle="pill" data-bs-target="#history-and-experience" type="button" role="tab" aria-controls="history-and-experience" aria-selected="false">History & Experience</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="story-and-mission" role="tabpanel" aria-labelledby="story-and-mission-tab">
                                    <div class="single-about-content-solar">
                                        <h6>Our Mission</h6>
                                        <p class="disc">ClearSky Power engineers dependable solar and energy systems through a complete project lifecycle—from initial assessment and system modeling to commissioning and long-term support. Through innovation and precision, we build sustainable power infrastructure that drives progress across the Horn of Africa.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="history-and-experience" role="tabpanel" aria-labelledby="history-and-experience-tab">
                                    <div class="single-about-content-solar">
                                        <h6>Who We Are</h6>
                                        <p class="disc">Founded in 2019, ClearSky Power is a solar engineering company with decades of combined experience in renewable energy design, construction, and system integration. With offices across Somaliland, Puntland, Mogadishu, Kismayo, and Boston, we deliver reliable, high-performance projects backed by global expertise and local insight</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </body>
</html>