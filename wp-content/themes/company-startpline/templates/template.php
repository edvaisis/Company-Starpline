<?php
/*
 Template Name: Theme main template
*/

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Edvardas Template
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

<div class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="logo"></div>
      </div>
      <div class="col-md-6">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'top-menu',
          'container_class' => 'custom-menu-class'
        ));
        ?>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row main_1">
      <div class="col-md-6">
        <h2>Lorem ipsum dolor sit amet consectetur adipiscing elit</h2>
        <p>Nam vel mi ex nulla malesuada tincidunt vehicula in pharetra magna at neque ornare tempor magna at neque ornare tempor.</p>
        <p style="font-weight: bold;">Donec eu placerat nisl eget blandit erat.</p>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row quote">
    <div class="col-md-6">
      <h1><span>&#8220;</span>Lorem Ipsum dolor sit amen purus consectetur adipiscing elit nulla rect malesuada tincidunt vehicula. In pharetra magna at neque ornare tempor </h1>
      <p style="color: #97c9e9; font-weight: bold;">Joe Blogs, Company Name</p>
    </div>
    <div class="col-md-6">
      <p style="font-weight:bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel mi ex. Nulla malesuada tincidunt vehicula. In pharetra magna at neque ornare tempor.</p>
      <p>Sodales malesuada. Morbi in purus est. Donec eu placerat nisl, eget blandit erat. Praesent imperdiet, sapien a porta mattis, enim sem blandit arcu, ac lacinia augue lorem vitae sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel mi ex. Nulla malesuada tincidunt vehicula. In pharetra magna at neque ornare tempor.
      </p>
      <p>
        Ut faucibus metus eu sodales malesuada. Morbi in purus est. Donec eu placerat nisl, eget blandit erat. Praesent imperdiet, sapien a porta mattis, enim sem blandit arcu, ac lacinia augue lorem vitae sem.
      </p>
      <p>
        Praesent imperdiet, sapien a porta mattis, enim sem blandit arcu, ac lacinia augue lorem vitae sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel mi ex. Nulla malesuada tincidunt vehicula. In pharetra magna at neque ornare tempor. </p>
    </div>
  </div>
</div>
<!-- What are you looking for start-->
<div class="container">
  <div class="what_are_you_looking">
    <h1>What are you looking for...</h1>
  </div>
  <div class="row">
    <div class="col-md-3 service">
      <img src="wp-content\themes\company-startpline\images\group_195.png" class="img-fluid">
      <div class="vl"></div>
      <h4>Service 1</h4>
    </div>
    <div class="col-md-3 service">
      <img src="wp-content\themes\company-startpline\images\group_195.png" class="img-fluid">
      <div class="vl"></div>
      <h4>Service 2</h4>
    </div>
    <div class="col-md-3 service">
      <img src="wp-content\themes\company-startpline\images\group_195.png" class="img-fluid">
      <div class="vl"></div>
      <h4>Service 3</h4>
    </div>
    <div class="col-md-3 service">
      <img src="wp-content\themes\company-startpline\images\group_195.png" class="img-fluid">
      <div class="vl"></div>
      <h4>Service 4</h4>
    </div>
  </div>
</div>
<!-- What are you lookig for end-->

<section class="bg-light">
  <div class="container middle">
    <div class="row lean_on_us">
      <div class="col-md-4">
        <img src="wp-content\themes\company-startpline\images\Group.png" class="img-fluid">
      </div>
      <div class="col-md-8 content">
        <h1 style="font-weight: 300;">Lean on us when you need an expert</h1>
        <p style="font-weight: 300;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel mi ex. Nulla malesuada tincidunt vehicula. In pharetra magna at neque ornare tempor.</p>
        <p>Ut faucibus metus eu sodales malesuada. Morbi in purus est. Donec eu placerat nisl, eget blandit erat. Praesent imperdiet, sapien a porta mattis, enim sem blandit arcu, ac lacinia augue lorem vitae sem.</p>
        <p>Ut faucibus metus eu sodales malesuada morbi in purus est donec eu placerat nisl.</p>
      </div>
    </div>
  </div>
</section>

<section class="bg-light">
  <div class="container section_add">
  </div>
</section>
<section class="bg-light">
  <div class="container">
    <div class="jumbotron wrap">
      <div class="feature_p">
        <h1>Featured projects</h1>
      </div>
      <div class="col-md-6 white">
        <div class="w_text">
          <h1>Project Name</h1>
          <h2 style="color: #97c9e9">Location</h2>
          <p>Ut faucibus metus eu sodales malesuada morbi in purus est donec eu placerat nisl, eget blandit erat. Praesent imperdiet, sapien a porta mattis.</p>
          <p>Enim sem blandit arcu, ac lacinia augue lorem vitae sem.</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="bg-light">
  <div class="conatainer section_add"></div>
  </div>
</section>


<div class="row get_in_touch">
  <div class="col-md-12">
    <h1>Get in Touch</h1>
    <h4>We'd love to hear about your next project</h4>
    <h5>Talk to us earlu and we'll you to get the specification right first time</h5>
    <div class="icon">
      <div class="col-sm-12 contact-us-section">
        <!-- <div class="circle plus contact-us-button"></div>-->
        <span class="contact-us-text">Contact Us</span>
      </div>
    </div>
  </div>
</div>

<div class="row news">
  <div class="col-md-6 tweets">
    <h1>Latest Tweets</h1>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates exercitationem cupiditate optio, animi quasi placeat fugiat aspernatur eos provident impedit amet nihil rerum dolorem tempore iste doloribus, dicta ipsum veritatis.
        </div>
        <div class="carousel-item">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore vitae modi quisquam quaerat numquam at temporibus eum. Laudantium at non quia delectus veritatis porro, tempore odit et maiores. Laudantium, dicta.
        </div>
        <div class="carousel-item">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam illo laboriosam excepturi nam earum dolore, ad pariatur, atque repellendus alias cupiditate cum officiis unde! Quaerat reprehenderit commodi dolorem ut ipsam?
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
  <div class="col-md-6 newsletter">
    <h1>Newsletter</h1>
    <h2 style="color: #97c9e9">Keep up to date on all the latest news</h2>

    <div class="row">
      <div class="input-group mt-2 mb-3">
        <input type="text" class="form-control" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Subscribe</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>