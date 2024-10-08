<!-- index.php -->
<?php include 'includes/header.php'; ?>
<main class=''>
   <section class="hero wrapper">
      <div class="hero-content">
         <h3>DIGITAL MARKETING STRATEGY</h3>
         <h1>We bring you new customers</h1>
         <p>We build effective strategies to help you reach customers and prospects across the entire web.</p>
         <button>
            <a href="#">Get a Quote</a>
         </button>
         <div class="google-reviews">
            <img src="/assets/icons/marketing-badges.png" alt="marketing-badges">
         </div>
      </div>
      <div class="banner">
         <img id="heroBanner" src="/assets/images/hero-image.png" alt="hero-image">
      </div>
   </section>
   <section class="page-2 wrapper">
      <div class="cards">
         <div class="card">
            <div class="image">
               <img src="assets/icons/icon-data.png" alt="Online Reputation Management">
            </div>
            <div class="card-content">
               <h4>Online Reputation Management</h4>
               <p>Analyzing negative materials about your brand and addressing them with sentiment analysis and press
                  release distribution.</p>
               <a href="#" class="learn-more">Learn More</a>
            </div>
         </div>
      </div>
      <div class="cards">
         <div class="card">
            <div class="image">
               <img src="assets/icons/icon-calculator.png" alt="Conversion Rate Optimization">
            </div>
            <div class="card-content">
               <h4>Conversion Rate Optimization</h4>
               <p>Turn your visitors into customers with our team of experts. We'll analyze your website and create a
                  conversion-rate strategy.</p>
               <button class="learn-more">Learn More</button>
            </div>
         </div>
      </div>
      <div class="cards">
         <div class="card">
            <div class="image">
               <img src="assets/icons/icon-graph.png" alt="Analytics and Reporting">
            </div>
            <div class="card-content">
               <h4>Analytics and Reporting</h4>
               <p>Detailed analysis and reporting to track your marketing efforts and adjust strategies accordingly.</p>
               <a href="#" class="learn-more">Learn More</a>
            </div>
         </div>
      </div>
   </section>
   <section class="page-3 wrapper">
      <div class="lounch-img">
         <img src="/assets/images/launchproduct.png" alt="">
      </div>
      <div class="content">
         <h3>
            GROW TRAFFIC & INCREASE REVENUE
         </h3>
         <h2>Appear On the Front Page of Google!</h2>
         <p>We offer professional SEO services that help websites increase their organic search score drastically in
            order to compete for the highest rankings — even when it comes to highly competitive keywords.</p>
         <button><a href="#">
               Learn more about us
            </a></button>
      </div>
   </section>
   <section class="page-4">
      <svg id="top-curve" style="fill: #fff;height:100px;" preserveAspectRatio="none" viewBox="0 0 1442 100"
         version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
         <path class="divider-color"
            d="M1442,30.5019121 L1442,100.654403 L0,100.654403 C572.295431,33.9877365 935.145886,0.654403168 1088.55136,0.654403168 C1162.74657,0.654403168 1280.56278,10.6035728 1442,30.5019121 Z"
            id="top-curve"
            transform="translate(721.000000, 50.654403) scale(-1, -1) translate(-721.000000, -50.654403)"></path>
      </svg>
      <div class="heading wrapper">
         <p>SEARCH ENGINE & SOCIAL MEDIA OPTIMIZATION
         </p>
         <h3>Full Service Digital Marketing Agency</h3>
      </div>
      <div class="cards wrapper">
         <a href="#" class="card">
            <div class="image">
               <img src="/assets/images/social.png" alt="">
            </div>
            <div class="content">
               <h4>Social Media Marketing</h4>
            </div>
         </a>
         <a href="#" class="card">
            <div class="image">
               <img src="/assets/images/Organic.png" alt="">
            </div>
            <div class="content">
               <h4>Organic Long-Term SEO</h4>
            </div>
         </a>
         <a href="#" class="card">
            <div class="image">
               <img src="/assets/images/advanced-nalytics.png" alt="">
            </div>
            <div class="content">
               <h4>Advanced Analytics</h4>
            </div>
         </a>
         <a href="#" class="card">
            <div class="image">
               <img src="/assets/images/social-media.png" alt="">
            </div>
            <div class="content">
               <h4>Social Media Marketing</h4>
            </div>
         </a>
      </div>
      <svg id="bottom-curve" style="fill: #fff; " preserveAspectRatio="none" viewBox="0 0 1442 100" version="1.1"
         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
         <path class="divider-color"
            d="M1442,33.4980879 L1442,0.345597 L0,0.345597 C572.295431,66.0122635 935.145886,99.3455968 1088.55136,99.3455968 C1162.74657,99.3455968 1280.56278,89.3964272 1442,69.4980879 Z"
            id="hill-side-soft-off-bottom"
            transform="translate(721, 49.654403) scale(1, -1) translate(-721, -49.654403)"></path>
      </svg>
   </section>
   <!-- page-5  -->
   <?php
   $sectionSubheading = "GROW TRAFFIC & INCREASE REVENUE";
   $sectionHeading = "Appear On the Front Page of Google!";
   $sectionContent = "We offer professional SEO services that help websites increase their organic search score drastically in order to compete for the highest rankings — even when it comes to highly competitive keywords.";
   include 'includes/sections/section_content_block.php';
   ?>
   <!-- page-6 -->
   <?php
   $sectionImage1 = "/assets/images/target.png";
   $sectionHeading1 = "Local Search Strategy";
   $sectionLink1 = "/#";
   $sectionContent1 = "Maximize your presence on search engine results pages on a local scale.";
   $sectionImage2 = "/assets/images/globe.png";
   $sectionHeading2 = "MAp Search Optimization";
   $sectionContent2 = "Google Maps Optimization is an important part for your local marketing strategy.";
   $sectionImage3 = "/assets/images/settings.png";
   $sectionHeading3 = "Link Building & Content";
   $sectionContent3 = "Link building is a tremendously important component of Search Engine Optimization.";
   include 'includes/sections/service_offerings_section.php';
   ?>
   <?php
   $sectionImage1 = "/assets/images/coin.png";
   $sectionHeading1 = "Paid Search Advertising";
   $sectionLink1 = "/#";
   $sectionContent1 = "Paid listings on Google AdWords can help you reach new customers.";
   $sectionImage2 = "/assets/images/notebook.png";
   $sectionHeading2 = "Custom Website Design";
   $sectionContent2 = "Our team specializes in affordable web design and e-commerce.";
   $sectionImage3 = "/assets/images/mail.png";
   $sectionHeading3 = "Email Campaign Design";
   $sectionContent3 = "Custom email templates that speak to your customers and resonate with your brand.";
   include 'includes/sections/service_offerings_section.php';
   ?>
   <!-- ask-buttons-7  -->
   <?php
   $buttonLink1 = "#";
   $buttonText1 = "Free SEO Consultation";

   $buttonLink2 = "#";
   $buttonText2 = "Request a Free Quote";

   include 'includes/sections/ask_button.php';
   ?>
   <!--brands-testimonial -->
   <section class="brands">
      <svg id="brands-svg" style="fill:#fff;height:70px;width:100%" preserveAspectRatio="none" viewBox="0 0 1442 100"
         version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
         <path class="divider-color"
            d="M1442,33.8142136 C1280.56278,15.0410066 1162.74657,5.65440317 1088.55136,5.65440317 C935.145886,5.65440317 572.295431,37.1029354 3.86535248e-12,100 L0,0 L1442,0 L1442,33.8142136 Z">
         </path>
      </svg>
      <div class="wrapper">
         <div class="brands-img">
            <a href="#"><img src="https://modern.seowptheme.com/wp-content/uploads/sites/3/clientlogo-9.png"
                  alt="brands-image"></a>
            <a href="#"><img src="https://modern.seowptheme.com/wp-content/uploads/sites/3/clientlogo-6.png"
                  alt="brands-image"></a>
            <a href="#"><img src="https://modern.seowptheme.com/wp-content/uploads/sites/3/clientlogo-8.png"
                  alt="brands-image"></a>
            <a href="#"><img src="https://modern.seowptheme.com/wp-content/uploads/sites/3/clientlogo-11.png"
                  alt="brands-image"></a>
            <a href="#"><img src="https://modern.seowptheme.com/wp-content/uploads/sites/3/clientlogo-5.png"
                  alt="brands-image"></a>
            <a href="#"><img src="https://modern.seowptheme.com/wp-content/uploads/sites/3/clientlogo-12.png"
                  alt="brands-image"></a>
         </div>
         <!-- Swiper for Content -->
         <div class="swiper-container content-swiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <i class="fa-solid fa-message"></i>
                  <blockquote class="testimonial-content">
                     “We’ve looked at a lot of SEO solutions but these guys were always the clear favorite. They have
                     the right strategy and they’ve been awesome to work with.”
                  </blockquote>
                  <p class="brand-owner">Arya Stark</p>
                  <p class="owner-designation">CEO & Founder</p>
               </div>
               <div class="swiper-slide">
                  <i class="fa-solid fa-message"></i>
                  <blockquote class="testimonial-content">
                     “We’ve looked at a lot of SEO solutions but these guys were always the clear favorite. They have
                     the right strategy and they’ve been awesome to work with.”
                  </blockquote>
                  <p class="brand-owner">John Snow</p>
                  <p class="owner-designation">CEO & Founder</p>
               </div>
            </div>
            <!-- Pagination if needed -->
            <!-- <div class="swiper-pagination"></div> -->
         </div>
      </div>
      <svg id="brands-svg" style="fill:#dbe7ee; height:60px; width:100%" preserveAspectRatio="none"
         viewBox="0 0 1442 100" version="1.1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink">
         <path class="divider-color"
            d="M394.85237,100 L-1,100 L-1,0 L-1,1.07456559 C157.650655,93.379895 352.733938,121.089042 584.249849,84.2020074 C913.749958,31.7033176 1199.33335,4.31314693 1441.00001,2.03149535 L1441.00001,0 L-0.999987893,0 L1441,0 L-0.999987893,0 L1441,0 L1441,100 L-1,100 L-1,0 L-1,1.07456559 C112.35263,67.0248254 244.303421,99.9999702 394.85237,100 Z"
            id="deepening-off"
            transform="translate(720.000006, 50.000000) scale(1, 1) translate(-720.000006, -50.000000)"></path>
      </svg>
   </section>
   <!--our-case-studies -->
   <section class="our-studies">
      <div class="wrapper">
         <div class="our-heading">
            <h2>Our case studies</h2>
            <a href="#">See all projects</a>
         </div>
         <!-- Swiper container for the cards slider -->
         <div class="swiper-container  content-swiper">
            <div class="swiper-wrapper">
               <!-- Card 1 -->
               <div class="swiper-slide card">
                  <a href="#" class="img"><img
                        src="https://modern.seowptheme.com/wp-content/uploads/sites/3/project-thumb-2-style2.png"
                        alt="Case Study 1"></a>
                  <div class="content">
                     <h2>Tremely Designs</h2>
                     <p>This site applies a smart SEO strategy to acquire online clients via long-tail search</p>
                  </div>
               </div>
               <!-- Card 2 -->
               <div class="swiper-slide card">
                  <a href="#" class="img"><img
                        src="https://modern.seowptheme.com/wp-content/uploads/sites/3/project-thumb-3-style2.png"
                        alt="Case Study 1"></a>
                  <div class="content">
                     <h2>Plainst Tech</h2>
                     <p>Currently, 65% of the total traffic on the site and most of the online…</p>
                  </div>
               </div>
               <!-- Card 3 -->
               <div class="swiper-slide card">
                  <a href="#" class="img"><img
                        src="https://modern.seowptheme.com/wp-content/uploads/sites/3/project-thumb-6-style2.png"
                        alt="Case Study 1"></a>
                  <div class="content">
                     <h2>Maindex Solutions</h2>
                     <p>
                        55% of sales come from organic search. Search traffic is the biggest revenue source
                     </p>
                  </div>
               </div>
               <!-- Card 4 -->
               <div class="swiper-slide card">
                  <a href="#" class="img"><img
                        src="https://modern.seowptheme.com/wp-content/uploads/sites/3/project-thumb-1-style2.png"
                        alt="Case Study 1"></a>
                  <div class="content">
                     <h2>Opertray Division</h2>
                     <p>
                        This website achieved Google ranking in four months: Ranks #1-#3 for keyword “Opertray”.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php include 'includes/footer.php'; ?>