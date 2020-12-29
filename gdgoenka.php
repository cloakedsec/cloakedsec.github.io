<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GD GOenka Home</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://www.sherwoodschool.co.in/css/menu2.css" />
  <link rel="stylesheet" type="text/css" href="https://www.sherwoodschool.co.in/css/menu.css" />
  <link rel="stylesheet" type="text/css" href="https://www.sherwoodschool.co.in/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="https://www.sherwoodschool.co.in/css/owl.transitions.css" />
  <link rel="stylesheet" type="text/css" href="https://www.sherwoodschool.co.in/css/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="https://www.sherwoodschool.co.in/css/owl.theme.css" />
  <link rel="stylesheet" type="text/css" href="https://www.sherwoodschool.co.in/css/style.css" />
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="https://www.sherwoodschool.co.in/js/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.sherwoodschool.co.in/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.sherwoodschool.co.in/js/menu.js"></script>
  <script type="text/javascript" src="https://www.sherwoodschool.co.in/js/owl.carousel.min.js"></script>

  <link
    href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900|Open+Sans:300,300i,400,400i,600,600i,700,700i,800|Ruda:400,700,900"
    rel="stylesheet" />
  <link type="text/css" rel="stylesheet" href="https://www.sherwoodschool.co.in/css/megamenu.css" />
  <link rel="shortcut icon" href="images/fabicon.png" type="image/x-icon" />
  <link rel="shortcut icon" href="images/fabicon.png" type="image/x-icon" />




</head>
<body>

<?php get_header(); ?>

<section class="hundred home-banner">
  <div class="flexslider">
    <ul class="slides">
      <?php
    $args = array('post_type' =>'slider', 'posts_per_page'=>20, 'order' => 'ASC');
    $testimonial = new WP_Query($args);
    while ($testimonial->have_posts()) : $testimonial->the_post();
    ?>
      <li>
        <?php if (has_post_thumbnail()) : the_post_thumbnail('banner'); endif; ?>
        <div class="caption">
          <div class="caption-table">
            <div class="caption-table-cell">
              <div class="container">
                <div class="box">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php endwhile; wp_reset_query(); ?>
    </ul>
  </div>
</section>
<section class="usefull-message hundred">
  <div class="container">
    <div class="tab-box">
      <div class="tabcontents">
        <div style="display: none;" id="view1">
          <div class="round-space"><a href="<?php bloginfo('url'); ?>/prospectus/"><img src="<?php bloginfo('template_url'); ?>/images/prospectus.jpg"alt="GDGIS Rohtak Prospectus" /></a>        

<h3>GDGIS Prospectus</h3>
            <p>Keeping in mind our motto: “Higher, Stronger, Brighter”, we give out little ones the very best, each and every day… an idyllic ambience, ideal location a stimulating and nurturing environment for learning. All Through, the emphasis is on closeness and togetherness just like a family. To make your ward a part of legacy of excellence please <a href="<?php bloginfo('url'); ?>/prospectus/"> Read More</a></p>
          </div>
        </div>
        <div style="display: block;" id="view2">
          <div class="round-space"> <img src="<?php bloginfo('template_url'); ?>/images/achievements.jpg" alt="GDGIS Rohtak Achievements" />
            <h3>Achievements</h3>
            <p>JATIN DAHIYA OF GD GOENKA INTERNATIONAL SCHOOL ROHTAK, REPRESENT INDIA IN WORLD TAEKWONDO CHAMPIONSHIP<a href="<?php bloginfo('url'); ?>/achievements"> Read More</a></p>

          </div>
        </div>
        <div style="display: none;" id="view3">
          <div class="round-space">
 <img src="<?php bloginfo('template_url'); ?>/images/gps.jpg" alt="" />
            <h3>GDGIS GPS TRACKING SYSTEM</h3>
            <p>If you want to track your ward details then please<a href="<?php bloginfo('url'); ?>/gps-tracking/"> Click Here</a></p>
          </div>
        </div>
        
        <div style="display: none;" id="view4">
          <div class="round-space">
                          <img src="<?php bloginfo('template_url'); ?>/images/homework.jpg" alt="GDGIS Rohtak Homework" />
               <h3>Daily Home Work</h3>
            <p> Daily Home Work Of GDGIS Rohtak Students<a href="<?php bloginfo('url'); ?>/student-services/daily-home-work/"> Read More</a></p>

          </div>
        </div>
         </div>
      <ul class="tabs" data-persist="true">
        <li><a href="#view2">achievements</a></li>
        <li><a href="#view4">Daily Home Work</a></li>
        <li class="selected"><a href="http://gdgoenkarohtak.com/prospectus/">GDGIS Prospectus</a></li>
        <li><a href="#view3">GPS Tracking System</a></li>
        
      
      </ul>
    </div>
  </div>
</section>
<section class="welcome-sec hundred">
  <div class="container">
    <div class="container-left">
      <h1>G.D.Goenka International School Rohtak- Best School in India</h1><br>
      <img src="<?php bloginfo('template_url'); ?>/images/welcome-img.jpg" alt="Best School In India" class="left-align">
      <p>G.D. Goenka International School, Rohtak, a reputed co-educational, English medium school, under the aegis of G.D. Goenka Group of institution, New Delhi, is a school to reckon with. Established in the year 2014 at Rohtak, the school is renowned for its state of the art infrastructure including, high tech labs and well stocked library, Its well-equipped activity rooms for Art and Craft, Dance & Music and a competent faculty make it the best school in Haryana.</p>

<p>It is a Senior Secondary School starting from pre-nursery to grade XII. Boarding facility is available for both girls and boys, starting from grade 3rd to 12th. The school also offers day boarding facilities to students. This time is utilized in completing home assignments, clarifying doubts and indulging in various hobby classes. All this takes place under the keen and watchful eyes of our diligent academy staff and coaches. the school offers a fully AC campus and AC fleet of buses.......<a href="<?php bloginfo('url'); ?>/about-school/"><b>Read More</b></a>...</p>

      <p></p>
      <div class="Birtday-sec hundred">
        <h2>Birthday Students </h2>
        <div class="Birthdayslider">
          <ul class="slides">
            <?php   $args = array( 'post_type' => 'post',  'category_name' => 'birthday', 'order' =>
'date' , 'posts_per_page'=>10 );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
               ?>
            <?php $curdate = date('Y-m-d');  $birth = $cfs->get('birth'); ?>
            <?php if ($curdate < $birth) {?>
            <li>
              <div class="box-out">
                <div class="box">
                  <?php if (has_post_thumbnail()) : the_post_thumbnail('birththumb');?>
                  <?php endif; ?>
                </div>
                <div class="box">
                  <h5> Upcoming
                    <?php the_title(); ?>
                    Birthday </h5>
                  <h5><?php echo $birth; ?></h5>
                  <?php // the_content();?>
                </div>
              </div>
            </li>
            <?php } ?>
            <?php endwhile; wp_reset_query(); ?>
            <?php
        $args2 = array( 'post_type' => 'post',  'category_name' => 'birthday', 'order' => 'date' , 'posts_per_page'=>20);
        $loop2 = new WP_Query($args2);
        while ($loop2->have_posts()) : $loop2->the_post(); global $product; ?>
            <?php $curdate = date('Y-m-d'); $birth = $cfs->get('birth'); ?>
            <?php if ($curdate==$birth) {?>
            <li>
              <div class="box-out">
                <div class="box">
                  <?php if (has_post_thumbnail()) : the_post_thumbnail('birththumb');?>
                  <?php endif; ?>
                </div>
                <div class="box">
                  <h5> Today is
                    <?php the_title(); ?>
                    Birthday </h5>
                  <?php the_content(); ?>
                </div>
              </div>
            </li>
            <?php }  ?>
            <?php endwhile; wp_reset_query(); ?>
            <?php   $args3 = array( 'post_type' => 'post',  'category_name' => 'birthday', 'order' =>'date' , 'posts_per_page'=>2);
        $loop3 = new WP_Query($args3);
        while ($loop3->have_posts()) : $loop3->the_post();
               ?>
            <?php $curdate = date('Y-m-d');  $birth = $cfs->get('birth'); ?>
            <?php if ($curdate > $birth) {?>
            <li>
              <div class="box-out">
                <div class="box">
                  <?php if (has_post_thumbnail()) : the_post_thumbnail('birththumb');?>
                  <?php endif; ?>
                </div>
                <div class="box">
                  <h5> Recently Was
                    <?php the_title(); ?>
                    Birthday </h5>
                  <?php the_content(); ?>
                </div>
              </div>
            </li>
            <?php } ?>
            <?php endwhile; wp_reset_query();   ?>
          </ul>
        </div>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</section>
<section class="latest-blog hundred">
  <div class="container">
    <h3>Read Our Latest Blog</h3>
    <ul class="blog-list">
     <?php
 $conn = mysql_connect("localhost", "gdgoekku_blo", "X1Lb#z@TI(tL") or mysql_error();
 $db = mysql_select_db("gdgoekku_blog", $conn) or mysql_error();
// $sql = "SELECT * FROM `pm_posts` WHERE post_type = 'post' AND post_status IN ('publish') ORDER BY post_date DESC LIMIT 0,5;";
 $sql = "SELECT p1.*, wm2.meta_value FROM nk_posts p1 LEFT JOIN nk_postmeta wm1 ON ( wm1.post_id = p1.ID AND wm1.meta_value IS NOT NULL
		AND wm1.meta_key = '_thumbnail_id' ) LEFT JOIN 	nk_postmeta wm2 ON ( wm1.meta_value = wm2.post_id AND wm2.meta_key = '_nk_attached_file'
		AND wm2.meta_value IS NOT NULL ) WHERE 	p1.post_status='publish' AND p1.post_type='post' ORDER BY p1.post_date DESC Limit 4";
    $q = mysql_query($sql) or die(mysql_error());
    while ($wp = mysql_fetch_assoc($q)) {
        $wp['post_title'];
        $wp['post_content'];
        $wp['post_excerpt'];
        $content = substr($wp['post_content'], 0, 120);
        $wp['post_name'];
        $wp['post_date'];
        $expdt = date('Y-m-d', strtotime($wp['post_date']));
        $date = explode('-', $expdt);
        $date[0];
        $monthNum = $date[1];
        $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
        $date[2];
        $post_ids= $wp['ID'];
        $wp['comment_count'];
        $wp['meta_value'];
        $s = $wp['post_title']; ?>       
      <li> <a href="<?php bloginfo('url'); ?>/blog/<?php echo $wp['post_name']; ?>">
        <div class="box">
                    <p class="date"><?php echo $monthName; ?> <?php echo $date[2]; ?>, <?php echo $date[0]; ?></p>
          <h4><?php echo $wp['post_title']; ?></h4>
          <p><?php  echo string_limit_words($content, 15); ?>...</p>
        </div>
        </a> </li>

 <?php
    } ?>
    </ul>
    <a href="<?php bloginfo('url'); ?>/blog/" class="btn">view  blog</a> </div>
</section>



<section>

<div class="fullwidth sherwood">	
    <div class="parallax-sherwood fullwidth" data-image-src="images/sherwood.jpg" alt="Top CBSE Schools in Gurgaon">
		<div class="fullwidth">
        <h1 class="pagetitle pagetitle_mid wow fadeInUp" style="visibility: visible;"> Why Choose GD Goenka<p> (Top and Best CBSE Affiliated School in Gurgaon)</p></h1>
    	<div class="tabarea"> 
         	<ul>
            	<li><a class="showfile activelink" title="one">Student Centric Curriculum</a></li>
                <li><a class="showfile" title="two">Co-curricular &amp;<br>Sports activities</a></li>
                <li><a class="showfile" title="three">Creative  &amp; <br> Innovative Approach</a></li>
                <li><a class="showfile" title="four">Campus &amp; Facilities</a></li>
                <li><a class="showfile" title="five">Various Club<br>Activities</a></li>
            </ul>
         </div>
         
    	 <div class="fullwidth tabcontent">
          <div id="one" class="logfile">
         	<p>GD Goenka International School in Rohtak adopts a creative and innovative approach where learning is catered through the hands-on experiences, imparted through exposure to myriad activities in both the scholastic as well as co-scholastic areas.</p>
            <div class="fullwidth tabcontent">
         	<a href="/why-choose-sherwood.php#student"><span class="why_choose_btn_icon"></span></a>
         </div>
			</div>
            <div id="two" class="logfile" style="display:none;">
         	<p>An equal and paramount importance is given to extra-curricular activities to achieve an all-round personality development of the students. The multifaceted activities of the school also include the NIE programme organized by the Times of India group.</p>
            <div class="fullwidth tabcontent">
         	<a href="/why-choose-sherwood.php#sports"><span class="why_choose_btn_icon"></span></a>
         </div>
			</div>
            <div id="three" class="logfile" style="display:none;">
         	<p>'Smart class' technology has been adopted wherein classrooms are equipped with Interactive Boards for all classes.  This helps reinforce class room concepts and brings greater clarity of thoughts and understanding. Sherwood Convent considered as one of the best school in Gurgaon, this English-medium CBSE Affiliated School in Gurgaon has an impressive structure and even more quality educational values.</p>
            <div class="fullwidth tabcontent">
         	<a href="/why-choose-sherwood.php#teachers"><span class="why_choose_btn_icon"></span></a>
         </div>
			</div>
            <div id="four" class="logfile" style="display:none;">
         	<p>In keeping with the advancement of technology, all the classrooms, Labs, Library are equipped with multimedia smart boards to enhance the learning experience. The class rooms are air conditioned to provide a comfortable environment to the students.</p>
            <div class="fullwidth tabcontent">
         	<a href="infrastructure-and-facilities.php"><span class="why_choose_btn_icon"></span></a>
         </div>
			</div>
            <div id="five" class="logfile" style="display:none;">
         	<p>Activity clubs swing into full force every Friday to nurture the inherent talents of the childern. Each child is allotted the activity of his/her choice as per his/her aptitude and talent. This gives a first hand opportunity for the child to realize his innate ability besides academics. </p>
            <div class="fullwidth tabcontent">
         	<a href="/why-choose-sherwood.php#club"><span class="why_choose_btn_icon"></span></a>
         </div>
			</div>
            
         </div>
         
         
    </div>
	</div>
</div>

</section>

<section>
<div class="fullwidth testimonial">
           <h2><em>“A person can succeed at almost anything for which they have unlimited enthusiasm.”</em></h2>
       
         
</div>
</section>

<style>

#testimonial4{
  overflow: hidden;
  min-height: 375px;
  position: relative;
  background: #1583c9;
}
#testimonial4 .carousel-inner{
  width: 75%;
  margin: auto;
}
#testimonial4 .carousel-inner:hover{
  cursor: -moz-grab;
  cursor: -webkit-grab;
}
#testimonial4 .carousel-inner:active{
  cursor: -moz-grabbing;
  cursor: -webkit-grabbing;
}
#testimonial4 .carousel-inner .item{
  overflow: hidden;
}

.testimonial4_indicators .carousel-indicators{
  left: 0;
  margin: 0;
  width: 100%;
  font-size: 0;
  height: 20px;
  bottom: 15px;
  padding: 0 5px;
  cursor: e-resize;
  overflow-x: auto;
  overflow-y: hidden;
  position: absolute;
  text-align: center;
  white-space: nowrap;
}
.testimonial4_indicators .carousel-indicators li{
  padding: 0;
  width: 10px;
  height: 10px;
  border: none;
  text-indent: 0;
  margin: 2px 3px;
  cursor: pointer;
  display: inline-block;
  background: #ffffff;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.testimonial4_indicators .carousel-indicators .active{
  padding: 0;
  width: 10px;
  height: 10px;
  border: none;
  margin: 2px 3px;
  background-color: #000;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.testimonial4_indicators .carousel-indicators::-webkit-scrollbar{
  height: 3px;
}
.testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb{
  background: #eeeeee;
  -webkit-border-radius: 0;
  border-radius: 0;
}

.testimonial4_control_button .carousel-control{
  top: 175px;
  opacity: 1;
  width: 40px;
  bottom: auto;
  height: 40px;
  font-size: 10px;
  cursor: pointer;
  font-weight: 700;
  overflow: hidden;
  line-height: 38px;
  text-shadow: none;
  text-align: center;
  position: absolute;
  background: transparent;
  border: 2px solid #ffffff;
  text-transform: uppercase;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: all 0.6s cubic-bezier(0.3,1,0,1);
  transition: all 0.6s cubic-bezier(0.3,1,0,1);
}
.testimonial4_control_button .carousel-control.left{
  left: 7%;
  right: auto;
}
.testimonial4_control_button .carousel-control.right{
  right: 7%;
  left: auto;
}
.testimonial4_control_button .carousel-control.left:hover,
.testimonial4_control_button .carousel-control.right:hover{
  color: #000;
  background: #fff;
  border: 2px solid #fff;
}

.testimonial4_header{
  top: 0;
  left: 0;
  bottom: 0;
  width: 550px;
  display: block;
  margin: 30px auto;
  text-align: center;
  position: relative;
}
.testimonial4_header h4{
  color: #ffffff;
  font-size: 30px;
  font-weight: 600;
  position: relative;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.testimonial4_slide{
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 70%;
  margin: auto;
  padding: 20px;
  position: relative;
  text-align: center;
}
.testimonial4_slide img {
  top: 0;
  left: 0;
  right: 0;
  width: 50px;
  height: 50px;
  margin: auto;
  display: block;
  color: #f2f2f2;
  font-size: 18px;
  line-height: 46px;
  text-align: center;
  position: relative;
}

.testimonial4_slide p {
  color: #ffffff;
  font-size: 16px;
  margin: 40px 0 20px 0;
}

.testimonial4_slide h4 {
  color: #ffffff;
  font-size: 24px;
  font-weight: bold;
}


@media only screen and (max-width: 480px){
  .testimonial4_control_button .carousel-control{
    display: none;
  }
  .testimonial4_header{
    width: 95%;
  }
  .testimonial4_header h4{
    font-size: 20px;
  }
  .testimonial4_slide{
    width: 98%;
    padding: 5px;
  }
}

@media (min-width: 481px) and (max-width: 767px){
  .testimonial4_control_button .carousel-control.left{
    left: 2%;
  }
  .testimonial4_control_button .carousel-control.right{
    right: 2%;
  }
  .testimonial4_header{
    width: 95%;
  }
  .testimonial4_slide{
    width: 98%;
    padding: 5px;
  }
}

@media (min-width: 768px) and (max-width: 991px){
  .testimonial4_control_button .carousel-control.left{
    left: 5%;
  }
  .testimonial4_control_button .carousel-control.right{
    right: 5%;
  }
}

@-webkit-keyframes psBoxShadowEffect_2{
  0% {
    opacity: 0.3;
  }
  40% {
    opacity: 0.5;
	-webkit-box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #ffffff, 0 0 0 10px rgba(255,255,255,0.5);
  }
  100% {
    -webkit-box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 5px 5px #ffffff, 0 0 0 5px rgba(255,255,255,0.5);
    -webkit-transform: scale(1.5);
    opacity: 0;
  }
}
@keyframes psBoxShadowEffect_2{
  0% {
    opacity: 0.3;
  }
  40% {
    opacity: 0.5;
	box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #ffffff, 0 0 0 10px rgba(255,255,255,0.5);
  }
  100% {
    box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 5px 5px #ffffff, 0 0 0 5px rgba(255,255,255,0.5);
    transform: scale(1.5);
    opacity: 0;
  }
}


</style>

<section>



</section>

<section class="testimonial hundred">

<div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
		<div class="testimonial4_header">
			<h4>what our clients are saying</h4>
		</div>
		<ol class="carousel-indicators">
			<li data-target="#testimonial4" data-slide-to="0" class="active"></li>
			<li data-target="#testimonial4" data-slide-to="1"></li>
			<li data-target="#testimonial4" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="testimonial4_slide">
					<img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />
					<p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
					<h4>Ben Hanna</h4>
				</div>
			</div>
			<div class="item">
				<div class="testimonial4_slide">
					<img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />
					<p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
					<h4>Ben Hanna</h4>
				</div>
			</div>
			<div class="item">
				<div class="testimonial4_slide">
					<img src="http://via.placeholder.com/100x100" class="img-circle img-responsive" />
					<p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
					<h4>Ben Hanna</h4>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#testimonial4" role="button" data-slide="prev">
			<span class="fa fa-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#testimonial4" role="button" data-slide="next">
			<span class="fa fa-chevron-right"></span>
		</a>
	</div>

</section>

<section>


<h1 style="text-align:center"> Testimonials</h1>
<div class="fullwidth events">
    
    <div class="fullwidth eventlist">	
	    	<ul>
						<li style="background-image:url(https://www.sherwoodschool.co.in/images/events/main/0_651040716_gallery_img7.jpg); background-size: cover; background-repeat: no-repeat; background-position: center top;">
					<a href="events/528/it-was-the-best-time-of-the-year-our-sherwood-kids-totally-rocked-the-annual-day-in-a-splendid-way.php">
											<img src="https://www.sherwoodschool.co.in/images/events/main/0_651040716_gallery_img7.jpg" alt="Best CBSE Affiliated Schools in Gurgaon">
															<h3>Testimony</h3>
					</a>
				</li>
			
							<li>
            <h3 style="text-align:center"> Testimony Text</h3>
              
				</li>
			
							
			
							
			
						<!--
			<li>
            	<a href="#">
                <img src="images/img1.jpg" alt="img" /> <span>14 May ‘16</span>
                <h3>District Level Science Exhibition "INSPIRE"</h3>
                </a>
            </li>
            <li>
            	<a href="#">
                <img src="images/img2.jpg" alt="img" /> <span>14 May ‘16</span>
                <h3>Cyber Buzz 2016</h3>
                </a>
            </li>
            <li>
            	<a href="#">
                <img src="images/img3.jpg" alt="img" /> <span>14 May ‘16</span>
                <h3>Christmas Day Celebration</h3>
                </a>
            </li>
            <li>
            	<a href="#">
                <img src="images/img4.jpg" alt="img" /> <span>14 May ‘16</span>
                <h3>Cyber Buzz 2016</h3>
                </a>
            </li>
            <li>
            	<a href="#">
                <img src="images/img5.jpg" alt="img" /> <span>14 May ‘16</span>
                <h3>Friday Activities</h3>
                </a>
            </li>
			-->
        </ul>
				</div>
    
    <div class="fullwidth text-center">
    	<a class="btnlink" href="events-and-competitions.php">View All</a>
    </div>
    
</div>


</section>

<?php get_footer(); ?>	
</body>
</html>