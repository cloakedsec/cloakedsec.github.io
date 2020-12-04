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


 <!-- custom after slider content -->

 <div class="fullwidth welcome">
    <div class="welcomtext wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s;">       
       <h2><small>Welcome to</small>GD Goenka International School</h2>
  	</div>
    
    <div class="welcomtext wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">     
       <p><span>GD Goenka Convent School in Gurgaon owes its genesis to our Founder chairman Sqn Ldr M.L. Malik (Retd) Ex-Registrar Sainik School. Since its inception in 1993, the school has grown in leaps and bounds, crossed many milestones and achieved many targets.</span></p>
       <p>The school that had a humble beginning, today stands tall contributing to and nurturing the ambitions and aspirations of innumerable number of children. GD Goenka Convent being the top &amp; best CBSE school in Gurgaon, it has the futuristic infrastructure, spacious and well ventilated classrooms.</p>
  	</div>
    
    <div class="notifications">
    <div class="fullwidth textnot">
    	<h3>Notifications</h3>
		 <div id="notification" class="owl-carousel owl-theme" style="opacity: 1; display: block;">  
						            
				  <div class="owl-wrapper-outer autoHeight" style="height: 130px;"><div class="owl-wrapper" style="width: 958px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px); transform-origin: 239.5px center; perspective-origin: 239.5px center;"><div class="owl-item" style="width: 479px;"><div>
				  
					<a href="notification.php?id=610"><p>Registration open for 2021-2022</p></a>
					<a href="notification.php?id=610"><p>
					For registration click here - https://www.gdgoenkarohtak.com/					
					</p>
					</a>
				  </div></div></div></div>
				 
       
				 <div class="owl-controls clickable" style="display: none;"><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></div>
		<!--
        <div id="notification" class="owl-carousel">              
          <div>
            <p>Admission Open (Session 2016-17) for Classes Pre Nur to IXth and Class XIth(Science and Commerce), Registration forms are available at the School reception between 8.00 a.m to 1.30 p.m on all working days.</p>
          </div>
          <div>
            <p>Classes Pre Nur to IXth and Class XIth(Science and Commerce), Admission Open (Session 2016-17) for  Registration forms are available at the School reception between 8.00 a.m to 1.30 p.m on all working days.</p>
          </div>
        </div>
		-->
    
    	<a class="notbtn" href="notifications.php">+</a>
    </div>
    <div class="fullwidth payfee">
    	<a target="_blank" rel="nofollow" href="#"><span>PAY FEE ONLINE</span> <span class="pay_fee_arrow"></span></a>
    </div>
	
	
		
    </div>
    
	
	
	

    
</div>
  
<div class="fullwidth base">
	<ul>
    	<li class="wow fadeInLeft" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s;"><span>CBSE</span> Affiliation No.<strong>XXXXXX</strong></li>
        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s;"><span>25+</span>Years</li>
        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s;"><span>16+</span>Buses</li>
        <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.9s;"><span>7000+</span>Books</li>
    </ul>
</div>

  <!-- custom end -->

  <div class="container">
    


 
  </div>
</section> 
<section class="welcome-sec hundred">
  <div class="container">
    <div class="container-left">
      <h1>G.D.Goenka International School Rohtak- Best School in India</h1><br>
      <img src="https://gdgoenkarohtak.com/wp-content/themes/gdgoenka/images/welcome-img.jpg" alt="Best School In India" class="left-align">
      <p>G.D. Goenka International School, Rohtak, a reputed co-educational, English medium school, under the aegis of G.D. Goenka Group of institution, New Delhi, is a school to reckon with. Established in the year 2014 at Rohtak, the school is renowned for its state of the art infrastructure including, high tech labs and well stocked library, Its well-equipped activity rooms for Art and Craft, Dance &amp; Music and a competent faculty make it the best school in Haryana.</p>

<p>It is a Senior Secondary School starting from pre-nursery to grade XII. Boarding facility is available for both girls and boys, starting from grade 3rd to 12th. The school also offers day boarding facilities to students. This time is utilized in completing home assignments, clarifying doubts and indulging in various hobby classes. All this takes place under the keen and watchful eyes of our diligent academy staff and coaches. the school offers a fully AC campus and AC fleet of buses.......<a href="https://gdgoenkarohtak.com/about-school/"><b>Read More</b></a>...</p>

      <p></p>
      <div class="Birtday-sec hundred">
        <h2>Birthday Students </h2>
        <div class="Birthdayslider" style="height: 278px;">
          <ul class="slides">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
              <div class="box-out">
                <div class="box">
                  <img width="284" height="284" src="https://gdgoenkarohtak.com/wp-content/uploads/2016/04/Falak-Dua17-4-09-e1460794389833-284x284.jpg" class="attachment-birththumb size-birththumb wp-post-image" alt="" loading="lazy" srcset="https://gdgoenkarohtak.com/wp-content/uploads/2016/04/Falak-Dua17-4-09-e1460794389833-284x284.jpg 284w, https://gdgoenkarohtak.com/wp-content/uploads/2016/04/Falak-Dua17-4-09-e1460794389833-150x150.jpg 150w, https://gdgoenkarohtak.com/wp-content/uploads/2016/04/Falak-Dua17-4-09-e1460794389833-600x600.jpg 600w, https://gdgoenkarohtak.com/wp-content/uploads/2016/04/Falak-Dua17-4-09-e1460794389833-300x300.jpg 300w" sizes="(max-width: 284px) 100vw, 284px" draggable="false">                                  </div>
                <div class="box">
                  <h5> Recently Was
                    Falak Dua                    Birthday </h5>
                  <p>Wish You a Very Very Happy Birthday From GDGIS Rohtak Family</p>
                </div>
              </div>
            </li>
                                                            <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
              <div class="box-out">
                <div class="box">
                  <img width="284" height="284" src="https://gdgoenkarohtak.com/wp-content/uploads/2016/04/Daksh-Rana13-Apr-10-e1460175150399-284x284.jpg" class="attachment-birththumb size-birththumb wp-post-image" alt="" loading="lazy" srcset="https://gdgoenkarohtak.com/wp-content/uploads/2016/04/Daksh-Rana13-Apr-10-e1460175150399-284x284.jpg 284w, https://gdgoenkarohtak.com/wp-content/uploads/2016/04/Daksh-Rana13-Apr-10-e1460175150399-150x150.jpg 150w, https://gdgoenkarohtak.com/wp-content/uploads/2016/04/Daksh-Rana13-Apr-10-e1460175150399-600x600.jpg 600w, https://gdgoenkarohtak.com/wp-content/uploads/2016/04/Daksh-Rana13-Apr-10-e1460175150399-300x300.jpg 300w" sizes="(max-width: 284px) 100vw, 284px" draggable="false">                                  </div>
                <div class="box">
                  <h5> Recently Was
                    Daksh Rana                    Birthday </h5>
                  <p>Wish You a Very Very Happy Birthday From GDGIS Rohtak Family</p>
                </div>
              </div>
            </li>
                                  </ul>
        <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
      </div>
    </div>
    <div class="container-right">
  <div class="right-box">
    <h3>Action Centre</h3>
    <div class="right-box-in">
      <ul class="actioncenter-list">
		   <li>
                    <div class="box"><a href="https://gdgoenkarohtak.com/complaint/"><span><img src="https://gdgoenkarohtak.com/wp-content/themes/gdgoenka/images/contact.png" alt=""></span>
           <p>Complaints/Grievances</p>
            </a> </div>
        </li>

		  
        <li>
                    <div class="box"><a href="http://gdgisenquiry.schooloncloud.com/"><span><img src="https://gdgoenkarohtak.com/wp-content/themes/gdgoenka/images/admission-enquiry.png" alt=""></span>
           <p>Admission Enquiry</p>
            </a> </div>
        </li>

    <li>
          <div class="box"><a href="https://gdgisrohtak.schooloncloud.com/" https:="" gdgoenkarohtak.com"=""><span><img src="https://gdgoenkarohtak.com/wp-content/themes/gdgoenka/images/suggestions1.png" alt=""></span>
            <p>Parents login</p>
            </a> </div>
        </li>

        <li>
          <div class="box"><a href="https://m.p-y.tm/gdgoenkaintl_web" https:="" gdgoenkarohtak.com"=""><span><img src="https://gdgoenkarohtak.com/wp-content/themes/gdgoenka/images/paytm.png" alt=""></span>
            <p>Paytm</p>
            </a> </div>
        </li>
        <li>
          <div class="box"><a href="https://gdgoenkarohtak.com/wp-content/uploads/2018/holidayplanner2019.pdf"><span><img src="https://gdgoenkarohtak.com/wp-content/themes/gdgoenka/images/events.png"></span>
            <p> Holidays &amp; Events</p>
            </a> </div>
        </li>
        <li>
          <div class="box"><a href="https://gdgoenkarohtak.com/wp-content/uploads/2015/08/meal.pdf"><span><img src="https://gdgoenkarohtak.com/wp-content/themes/gdgoenka/images/meal.png"></span>
            <p>Meal Menu</p>
            </a> </div>
        </li>
       
      </ul>
    </div>
  </div>
  <div class="right-box">
    <h3>Life @ GD Goenka Rohtak</h3>
    <div class="right-box-in">
     <iframe width="854" height="480" src="https://www.youtube.com/embed/OVPus-VyVjg" frameborder="0" allowfullscreen=""></iframe>
     <p>Best School in Rohtak. GDGIS Rohtak Best School in India,Top Schools in India</p>
    </div>
  </div>
</div>
<div id="contact" class="contact-popup-box mfp-hide">
  <h3>GD GOENKA INTERNATIONAL SCHOOL, ROHTAK</h3>
  <p>8th Mile Stone, Sonepat Road, Rohtak, 124001 Haryana</p>
  <p>Mobile No: +91 8222911801-02-04</p>
  <p>Email: <a href="mailto:info@gdgoenkarohtak.com">info@gdgoenkarohtak.com</a></p>
</div>  </div>
</section>
<section class="latest-blog hundred">
  <div class="container">


<!-- custom content start -->

<div class="fullwidth testimonial">
           <h2><em>“A person can succeed at almost anything for which they have unlimited enthusiasm.”</em></h2>
       
         
</div>

<!-- custom content end -->

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
<section class="testimonial hundred">
  <div class="container">
    <h3 class="bottom_line">Parent Reviews</h3>
    <div class="testimonialslider">
      <ul class="slides">
        <?php
    $args = array('post_type' =>'parentreview', 'posts_per_page'=>10, 'order' => 'DESC');
    $parentreview = new WP_Query($args);
    while ($parentreview->have_posts()) : $parentreview->the_post();
    ?>
        <li>
          <div class="testimonial-box">
            <?php the_content(); ?>
          </div>
          <h5>
            <?php the_title(); ?>
          </h5>
          <?php endwhile; wp_reset_query(); ?>
        </li>
      </ul>
    </div>
  </div>

  <div class="fullwidth sherwood">	
    <div class="parallax-sherwood fullwidth" data-image-src="images/sherwood.jpg" alt="Top CBSE Schools in Gurgaon">
		<div class="fullwidth">
        <h1 class="pagetitle pagetitle_mid wow fadeInUp" style="visibility: visible;"> Why Choose GD Goenka<p> (Top and Best CBSE Affiliated School in Rohtak)</p></h1>
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
         	<p></p>
            <div class="fullwidth tabcontent">
         	<a href="/why-choose-student"><span class="why_choose_btn_icon"></span></a>
         </div>
			</div>
            <div id="two" class="logfile" style="display:none;">
         	<p></p>
            <div class="fullwidth tabcontent">
         	<a href=""><span class="why_choose_btn_icon"></span></a>
         </div>
			</div>
            <div id="three" class="logfile" style="display:none;">
         	<p></p>
            <div class="fullwidth tabcontent">
         	<a href="/why-choo.php#teachers"><span class="why_choose_btn_icon"></span></a>
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
         	<a href="/why-choose-.php#club"><span class="why_choose_btn_icon"></span></a>
         </div>
			</div>
            
         </div>
         
         
    </div>
	</div>
</div>

</section>
<?php get_footer(); ?>
  
</body>
</html>