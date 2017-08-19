<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
  if ($_SESSION['login_user']=="leader"){
header("location:leader.php");}
elseif ($_SESSION['login_user']=="vivek"){
  header("location:owner.php");
}
}// Includes Login Script
if(isset($_POST['login_now'])){
header("location:checking_login.php");
}?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ava Group Home</title>
    <link rel="stylesheet" href="components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="responsee.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  </head>

  <body class="size-1140">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.php" class="logo">
            <!-- Logo White Version -->
            <h2 class="logo-white" style="padding-top:20px;"><font color="white"><b>avagroup.edu</b></font></h2>
            <!-- Logo Dark Version -->
            <h2 class="logo-dark" style="padding-top:20px;"><font color="#C81010"><b>avagroup.edu</b></font></h2>
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Study materials</a></li>
              <li><a href="software.php">Softwares</a></li>

<li><a href="video_play.php">Video</a></li>

            <li><a href="checking_login.php">Login</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- MAIN -->
    <main role="main">
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="img/header.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
                    <h1 class=" margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1"><B>AVA GROUP<font color="#C81010">.education</font></b></h1><h1 class="text-size-30"><font color="lightgray" style="Arial"><b>EDUCATIONAL</font><font color="lightgray" style="Arial"> INSTITUTE</b></font></h1>
                    <div class="s-12 m-10 l-8 center"><p class="text-white text-size-14 margin-bottom-40">professional Dynamic site for education purpose and leaders dynamic responsive site started on 6-6-2017</p></div>
                    <div class="line">
                      <div class="s-12 m-12 l-3 center">
                        <form action="" method="post"><input type="submit" class="button button-white-stroke s-12" name="login_now"  value="Login Admin" /></form>
                        <br><br><a class="button red s-12" href="#xx" />Surf avagroup.edu</a><br>
                        <?php
              $connection = mysql_connect("localhost", "root", "");
              // Selecting Database
              $db = mysql_select_db("avagroup", $connection);
              $ses_sq=mysql_query("select * from notice order by sno desc");
              $notice = mysql_fetch_assoc($ses_sq);
              if ($notice['link']!="hide"){?>
                        <hr><p> Notice on <?php echo $notice['time']; ?> </p>
                        <a class="button button-white-stroke s-12" href="<?php echo $notice['link'];?>" /><marquee><?php echo  $notice['notice'];?></marquee></a><?php } else { echo "";}?>

                      </div>
                    </div>
                  </div>
                </div >
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Section 1 -->
      <section id="xx" class="section-small-padding background-white text-center">
      <br><br>  <div  class="line">
          <h2 class="text-size-30 text-center"><font color="#C81010">Our Sites</font></h2>
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-shield icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">100% virus free softwares</h2>
                <p class="margin-bottom-30"><font color="gray">The Softwares downloaded from this site is free from malware adware and Virus and</font><font color="#C81010"><b> DONT SHARE IT TO OTHERS </b></FONT></p>
                <a class="button button-dark-stroke text-size-12" href="software.php">EDUCATION SOFTWARE DOWNLOAD</a>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-notebook icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">Clear Books and notes</h2>
                <p class="margin-bottom-30"><font color="gray">The document, PDF and PPT downloaded from this site is very useful and</font> <font color="#C81010"><b> DONT SHARE IT TO OTHERS </b></FONT></p>
                <a class="button button-dark-stroke text-size-12" href="products.php">STUDY MATERIALS DOWNLOAD</a>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-umbrella icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">Secured - Recorded Results</h2>
                <p class="margin-bottom-30"><font color="gray">Each of the students mark performance and attendance are recorded ,You can get results at any time</font></p>
                <a class="button button-dark-stroke text-size-12" href="result.php">SHOW MARKS</a>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-home icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">Homepage is open site and free</h2>
                <p class="margin-bottom-30"><font color="gray">Homepage of the avagroup.edu is opened site where the details are shown to all users withour authentication</font></p>
                <a class="button button-dark-stroke text-size-12" href="index.php">GET MORE INFO</a>
              </div>
            </div>

            <div id="you"class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-note icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">YOur details</h2>
                <p class="margin-bottom-20"><font color="gray">Enter your Register number to check your details<br>
                <form action="#you"method="post"><input type="text" class="button button-dark-stroke" name="regno" placeholder="Enter the regno" required="REG no please"/><input type="submit" class="button" name="check" value="check your detail"/></form>
                <br><div align="left"><?php
                if (isset($_POST['check'])){
                  $reg=$_POST['regno'];
      $connection = mysql_connect("localhost", "root", "");
      // Selecting Database
      $db = mysql_select_db("avagroup", $connection);
      $ses_sq1=mysql_query("select count(sno)'e' from student where regno= '$reg' ");
      $ver = mysql_fetch_assoc($ses_sq1);
      if ($ver['e']==1){
      $ses_sq=mysql_query("select * from student where regno= '$reg'");

      $detail = mysql_fetch_assoc($ses_sq);
      echo "<br><b><DIV align='center'>YOUR DETAILS</div></B><BR><BR><b>Name: </b>".$detail['name']."<br><br>";
      echo "<b>Class: </b>".$detail['class']."<br><Br>";
      echo "<b>Phone: </b>".$detail['phone']."<br><br>";
      echo "<b>Email: </b>".$detail['email']."<br><br>";
      echo "<b>Reg.no: </b>".$detail['regno']."<br><Br>";
      echo "<div align='center'><hr><a href='index.php' class='button'>HIDE YOUR DETAILS</A></div><br><Br>";
    }else {echo "<div align='center'><br><br><b><font color='#c81010'>Sorry !!! </font>. Please check your Register number </b><br><Br></div>";}}?></div></font></p>

              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-film icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">Online videos</h2>
                <p class="margin-bottom-30"><font color="gray">The online videos from this site is very useful, and kindly</font> <font color="#C81010"><b> DONT SHARE IT TO OTHERS </b></FONT></p>
                <a class="button button-dark-stroke text-size-12" href="video_play.php">View Video</a>
              </div>
            </div>
          </div>
        </div>
      </section>
<hr class="break margin-top-bottom-0">
      <!-- Section 3 -->
      <section class="section background-white" >
        <div class="line">
          <h2 class="text-size-50 text-center">Our Stats</h2>
          <hr class="break-small background-primary break-center">
          <p  class="h1 text-size-20 margin-top-10 text-dark text-thin">Our tuition current stats - it is being updated at eveytime</p>
          <div class="margin margin-top-bottom-50">
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50"><?php
        $connection = mysql_connect("localhost", "root", "");
        // Selecting Database
        $db = mysql_select_db("avagroup", $connection);
        $ses_sq=mysql_query("select count(sno)'e' from student ");
        $wo = mysql_fetch_assoc($ses_sq);
        $w=$wo['e'];
        echo $w;
        ?></span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Total Students</p>
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50"><?php
        $connection = mysql_connect("localhost", "root", "");
        // Selecting Database
        $db = mysql_select_db("avagroup", $connection);
        $ses_sq=mysql_query("select count(sno)'e' from leaders ");
        $wo = mysql_fetch_assoc($ses_sq);
        $w=$wo['e'];
        echo $w;
        ?></span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Active leaders</p>
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50"><?php
        $connection = mysql_connect("localhost", "root", "");
        // Selecting Database
        $db = mysql_select_db("avagroup", $connection);
        $ses_sq=mysql_query("select count(sno)'e' from student where class>=10");
        $wo = mysql_fetch_assoc($ses_sq);
        $w=$wo['e'];
        echo $w;
        ?></span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">SSLC and HSC Students</p>
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50"><?php
        $connection = mysql_connect("localhost", "root", "");
        // Selecting Database
        $db = mysql_select_db("avagroup", $connection);
        $ses_sq=mysql_query("select count(sno)'e' from doc ");
        $wo = mysql_fetch_assoc($ses_sq);
        $w=$wo['e'];
        echo $w;
        ?></span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Study materials available</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <hr class="break margin-top-bottom-0">
      <!-- Section 5 -->
      <section class="section background-white text-center" id="leader">
        <div class="line">
          <h2 class="text-size-50 text-center">Tuition Leaders</h2>
          <hr class="break-small background-primary break-center">
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <?php
            $connection = mysql_connect("localhost", "root", "");
            // Selecting Database
            $db = mysql_select_db("avagroup", $connection);
            $ses_sq=mysql_query("select * from leaders ");
            while($list = mysql_fetch_array($ses_sq)){
            ?>
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="img/<?php echo $list['sno'];?>.jpeg" alt="img/2.png">
                <h1 class="h1 text-size-30"><b><font color="#C81010"><?php echo $list['name'];?></font></b></h1>
                <p class="h1 text-size-20"><b><?php echo $list['des'];?></b></p>
                <p class="h1 margin-bottom text-size-20"><?php echo $list['detail'];?></p>

              </div>

          </div>
          <?php } ?>
        </div>
      </section>

      <!-- Section 1 -->
      <section class="section">
        <div class="line">
          <h2 class="text-size-50 text-center">About Online Examination</h2>
          <hr class="break-small background-primary break-center">
        </div>
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-2">
              <p class="h1 text-size-30 margin-m-bottom-30 text-primary text-line-height-1 text-right">We Are<br> Exam Designers</p>
            </div>
            <div class="s-12 m-12 l-5">
              <p class="text-size-14 margin-m-bottom-30 text-dark">We create various examination for various classes like SSLC HSC and +1 , The examination are conducted based on the subject portions , Mostly online examination are conducted in the Tuition campus </p>
            </div>
            <div class="s-12 m-12 l-5">
              <p class="text-size-14 text-dark">Online examination results are well monitored and record to the safe database , You can also view your examination results on your phone, as the results are update to your registered parent phone numbers </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 2 -->
      <section class="full-width">
        <div class="s-12 m-12 l-6">
          <img src="img/img-10k.jpg" alt="">
        </div>
        <div class="s-12 m-12 l-6">
          <div class="padding-2x">
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-globe icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">EXM+1 - Online One mark questions</h3>
                <p class="text-dark">Part 1<br> This kind of examination contains the either or choice question where 1 mark for each question</p>
              </div>
            </div>

            <div class="line">
              <div class="float-left">
                <i class="icon-sli-globe icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">EXM+2 - Online One mark questions</h3>
                <p class="text-dark">Part 2<br> EX+2 Examination is second level where negative marks for the EX+1 exam with little complicated questions  </p>
              </div>
            </div>

            <div class="line">
              <div class="float-left">
                <i class="icon-sli-note icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">EXM+3 - Offline examination - Written test</h3>
                <p>These Offline examination are conducted basically like a file test<br>Test Conducted for 100 marks are usually considered</p>
              </div>
            </div>

            <div class="line">
              <div class="float-left">
                <i class="icon-sli-chart icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Result calculation</h3>
                <p>Result is estimated under your progress in every above examinations</p>
              </div>
            </div>


          </div>
        </div>
      </section>




    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>
