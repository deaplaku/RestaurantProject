<?php

?>
<?php
/** @var array $mainDishes */
/** @var array $sides */
/** @var array $drinks */
include_once('../components/header.php');
include_once('../components/header.php')?>
<!-- Hero Section with Video Background and Text Overlay -->
<section id="hero" style="position: relative;">
    <video autoplay loop muted playsinline poster="your-poster-image.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
        <source src="../image/paintedMovie.mp4" type="video/mp4">
    </video>
    <div class="hero container" style="position: relative; z-index: 1;">
        <div>
            <h1><strong><h1 class="text-center" style="font-family:Copperplate; color:whitesmoke;"> PAINTED BLACK</h1><span></span></strong></h1>
            <h1><strong style="color:white;">RESTAURANT<span></span></strong></h1>
            <a href="#projects" type="button" class="cta">MENU</a>
        </div>
    </div>
</section>
<!-- End Hero Section -->


    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="about container">
            <div class="about-content" style="display: flex; flex-wrap: wrap; align-items: center; gap: 3rem;"> <!-- changed gap -->

                <!-- Image Column -->
                <div class="about-image" style="flex: 1; min-width: 300px;">
                    <img src="https://i.imgur.com/PhBRrN1.png" alt="Painted Black Couch" class="img-fluid about-img" style="width: 100%; height: auto; border-radius: 10px;">
                </div>

                <!-- Text Column -->
                <div class="about-text" style="flex: 1; min-width: 300px; max-width: 700px; text-align: left; margin: 0 auto;">
                    <h1 class="section-title">About <span>Us</span></h1>
                    <h2>THE ART OF CASUAL ITALIAN DINING</h2>
                    <p class="fst-italic">Directly from our heritage, experience and years of practice in the best restaurants in Italy and UK.</p>
                    <p>Four Italians, five continents, have different skills but the same philosophy. We opened Painted Black as a home to Rolling Stones and the meaning that going back to black has to us.</p>
                    <p>Restarting from the beginning: The products. Nursing the body and the mind with elaborated simplicity.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- why us Section -->
    <section id="why-us" class="why-us section">
        <!-- Section Title -->
        <div class="container-small section-title" data-aos="fade-up" style="max-height:350px;">
            <h2>About Painted Black</h2>
            <p>OUR PHILOSOPHY</p>
        </div>
        <!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <span>Nothing Lasts</span>
                        <h4><a href="" class="stretched-link">~</a></h4>
                        <p>At Painted Black, we embrace the fleeting beauty of each moment.
                            Just as flavors come alive and fade, our philosophy celebrates the art of impermanence
                            making every dining experience unique and unforgettable.</p>
                    </div>
                </div><!-- Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <span>Nothing is Finished</span>
                        <h4><a href="" class="stretched-link">~</a></h4>
                        <p>Embodies our belief in constant evolution. Every dish, every moment, is part of a journey—continuously refined, reimagined, and inspired. It’s a celebration of growth, creativity, and the beauty of never settling,
                            ensuring each experience feels timeless yet uniquely yours.</p>
                    </div>
                </div><!-- Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <span>Nothing is Perfect</span>
                        <h4><a href="" class="stretched-link">~</a></h4>
                        <p>A vouch to remember to embrace imperfection as part of the beauty of creation. It is through the imperfections that authenticity shines, inspiring us to continuously strive, refine,
                            and innovate while cherishing the natural charm of every detail.</p>
                    </div>
                </div><!-- Card Item -->

            </div>

        </div>

    </section>
    <!-- why us Section -->

    <!-- menu Section -->
    <section id="projects">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title">Me<span>n</span>u</h1>
            </div>

            <select style="text-align:center;" id="menu-category" class="menu-category">
                <option value="blue">ALL ITEMS</option>
                <option value="yellow">MAIN DISHES</option>
                <option value="red">SIDE DISHES</option>
                <option value="green">DRINKS</option>
            </select>

            <div class="yellow msg">

                <div></div>
                <div class="mainDish">
                    <h1 style="text-align:center;">MAIN DISHES</h1>
                    <?php foreach ($mainDishes as $item): ?>
                        <p>
                            <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
                            <span class="item-price">RM<?php echo $item['item_price']; ?></span><br>
                            <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
                        <hr>

                        </p>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="red msg">
                <div></div>
                <div class="sideDish">
                    <h1 style="text-align:center">SIDE DISHES</h1>
                    <?php foreach ($sides as $item): ?>
                        <p>
                            <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
                            <span class="item-price">RM<?php echo $item['item_price']; ?></span><br>
                            <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
                        <hr>
                        </p>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="green msg">
                <div></div>
                <div class="drinks">
                    <h1 style="text-align:center">DRINKS</h1>
                    <?php foreach ($drinks as $item): ?>
                        <p>
                            <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
                            <span class="item-price">RM<?php echo $item['item_price']; ?></span><br>
                            <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
                        <hr>
                        </p>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="blue msg">

                <div class="mainDish">
                    <h1 style="text-align:center">MAIN DISHES</h1>
                    <?php foreach ($mainDishes as $item): ?>
                        <p>
                            <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
                            <span class="item-price">RM<?php echo $item['item_price']; ?></span><br>
                            <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
                        <hr>
                        </p>
                    <?php endforeach; ?>
                </div>



                <div class="sideDish">
                    <h1 style="text-align:center">SIDE DISHES</h1>
                    <?php foreach ($sides as $item): ?>
                        <p>
                            <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
                            <span class="item-price">RM<?php echo $item['item_price']; ?></span><br>
                            <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
                        <hr>
                        </p>
                    <?php endforeach; ?>
                </div>


                <div class="drinks">
                    <h1 style="text-align:center">DRINKS</h1>
                    <?php foreach ($drinks as $item): ?>
                        <p>
                            <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
                            <span class="item-price">RM<?php echo $item['item_price']; ?></span><br>
                            <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
                        <hr>
                        </p>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </section>
    <!-- End menu Section -->


  
  
 <!-- Contact Section -->
<section id="contact">
  <div class="contact container">
    <div>
      <h1 class="section-title">Contact <span>info</span></h1>
    </div>
    <div class="contact-items">
      <div class="contact-item contact-item-bg">
        <div class="contact-info">
          <div class='icon'><img src="../image/icons8-phone-100.png" alt=""/></div>
          <h1>Phone</h1>
          <h2>+069 216 6625</h2>
        </div>
      </div>
      
      <div class="contact-item contact-item-bg"> 
        <div class="contact-info">
          <div class='icon'><img src="../image/icons8-email-100.png" alt=""/></div>
          <h1>Email</h1>
          <h2>info@paintedblack.club</h2>
        </div>
      </div>
      
      <div class="contact-item contact-item-bg">
        <div class="contact-info">
          <div class='icon'> <img src="../image/icons8-home-address-100.png" alt=""/></div>
          <h1>Address</h1>
          <h2>Rruga Hajdar Hidi 5-8, Tiranë 1001 - Albania</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

<?php 
include_once('../components/footer.php');
?>