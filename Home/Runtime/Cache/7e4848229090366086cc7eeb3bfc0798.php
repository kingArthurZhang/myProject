<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <title>Arthur's World</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="_scripts/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="__PUBLIC__/bs/css/bootstrap.min.css">
    <script src="__PUBLIC__/bs/js/jquery.min.js"></script>
    <script src="__PUBLIC__/bs/js/bootstrap.min.js"></script>
    <link href="../Public/css/main.css" rel="stylesheet" media="screen, projection">
    </head>
<body>
    <header class="homeHeader pageHeader" role="banner">
        <h1>Arthur's World<a href="" title="home"></a></h1>
            <a href="#mainContent" title="skip to main page content" class="skip">Skip to main content</a>
        <nav id="pageNav" class="cf" role="navigation">
            <ul>
                <li><a href="" title="">Programs</a></li>
                <li><a href="" title="">Admissions</a></li>
                <li><a href="" title="">Student Portal</a></li>
                <li><a href="" title="">Campus</a></li>
                <li><a href="__ROOT__/admin.php/Index/index" title="Manage Content">Manage</a></li>
                <li><a href="__ROOT__/admin.php/Login/index" title="Log in">Log in</a></li>
            </ul>
        </nav>
        <p class="branding">Arthur is a <span class="orange">Boy</span> <span class="lavender">he wants to</span> change <span class="blue">world</span> in his own way.
        <a href="" title=""> Learn more.</a></p>
    </header>
    <section class="spotlight info condense">
        <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><h2><?php echo ($row['title']); ?></h2>
            <img src="../Public/images/featured_student.jpg" width="285" height="230" alt="Featured student work">
            <p><?php echo (htmlspecialchars_decode($row['content'])); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
    </section>
    <section class="show info condense">
        <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><h2><?php echo ($row['title']); ?></h2>
            <img src="../Public/images/featured_student.jpg" width="285" height="230" alt="Featured student work">
            <p><?php echo (htmlspecialchars_decode($row['content'])); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
    </section>
    <section class="events info condense">
        <h2>Coming Events</h2>
        <img src="../Public/images/events.jpg" alt="Coming events" width="285" height="230" class="info">
            <ul>
                <li><span class="date">3/10</span> Roux Benefit for the Elementary Arts Concert</li>
                <li><span class="date">3/12</span> Midterm exams begin</li>
                <li><span class="date">3/16</span> 5th Annual Working Artist Lecture Series kicks off</li>
                <li><span class="date">3/17</span>NYC St. Patrick’s Day Parade</li>
                <li><span class="date">4/06</span>Opening reception for The Stone World exhibit</li>
                <li><span class="date">4/23</span>Roux Student Fashion Weeks starts</li>
                <li><span class="date">4/30</span>Cross-Campus Bingo Championship</li>
                <li><span class="date">5/11</span>Opening reception for the Ceramic Currency exhibit</li>
                <li><span class="date">5/21</span>Finals exams begin</li>
            </ul>
    </section>
        <article id="mainContent" role="main">
            <h2>Fall registration is now open</h2>
            <p>Here at Roux, we&rsquo;re as excited for the upcoming school year as we are this one. Visiting professors Barry Mandow (renowned photojournalist) and Rebecca Short (textile designer) will be joining us in the fall and construction on the Roux North remodel will be completed by October 2012.</p>
            <p>Registration for the Fall 2012 semester opens July 13th. Current students: don&rsquo;t forget to sign up for your registration appointment. If you&rsquo;re a prospective student looking to apply to Roux, now is the time to meet with a counselor to polish up those last remaining application details and complete any necessary paperwork for grants and scholarships. The application deadline is April 13th. Program spots will be awarded on a first-come, first-serve basis, so file your applications soon. </p>

            <h2>Victor Stuesse wins Lacie Award</h2>
            <p>Victor Stuesse is the recipient of this year&rsquo;s Lacie Award, dedicated to honoring the work of a professor who has touched lives both inside and outside of the Roux community. As a teacher, Professor Stuesse has ushered over 900 students through the Craft + Design program, and has always been willing to share the secrets of his craft. As a sculptor and restorer, he has donated his time to public works projects such as the Central Park Arts Maintenance Council and the Metropolitan Museum&rsquo;s docent program.</p>
            <p>Professor Stuesse has had a long and successful career in the arts, having received many commissions over the years in cities from Chicago to Bangkok, but always returns to &ldquo;the job I call a dream.&rdquo; For his dedication to teaching and community involvement, the Roux Academy is proud to award him with this year&rsquo;s prize, which also includes a stipend for pursuit of personal projects outside the academy. Congratulations, Professor Stuesse!</p>
        </article>
    <aside>
        <section class="alumni info condense">
            <h2>Alumni Profile</h2>
            <img src="../Public/images/alumni_profile.jpg" width="285" height="230" alt="Alumni profile">
            <p>This month's Alumni Profile is Arnie Palmer, BFA Studio Concentration. During his recent visit to New York for his upcoming show he was generous enough to sit down with us and talk about his formative years as a student on the North campus and life in the outside world. <a href="alumni.htm" title="alumni profile" class="more">Read more</a></p>
        </section>
        <section class="connect info">
            <h2>Connect with us</h2>
                <ul>
                  <li><a href="http://www.twitter.com/rouxacademy" title="Follow us!" target="_blank" class="twitter">Twitter</a></li>
                  <li><a href="https://plus.google.com/" title="Google Plus" target="_blank" class="google">Google Plus</a></li>
                  <li><a href="http://facebook.com" title="Be our friend" target="_blank" class="facebook">Facebook</a></li>
                  <li><a href="http://www.linkedin.com" title="Let's connect" target="_blank" class="linked">LinkedIn</a></li>
                </ul>
        </section>
        <section class="find info">
            <h2>Find out more</h2>
            <ul>
                <li><a href="tour.htm" title="Take a campus tour">Take a campus tour</a></li>
                <li><a href="catalog.htm" title="course catalog">Download a course catalog</a></li>
                <li><a href="admissions.htm" title="Apply now">Apply now</a></li>
                <li><a href="housing.htm" title="student housing">Explore student housing</a></li>
                <li><a href="programs.htm" title="our programs">Learn more about our programs</a></li>
                <li><a href="conselling.htm" title="career counselling">Talk to a career counselor</a></li>
            </ul>
        </section>
    </aside>

    <footer id="pageFooter" class="cf">
        <nav class="footerNav">
            <section class="col">
                <h3>About Roux Academy</h3>
                  <div class="col1">
                  <ul>
                  <li><a href="mission.htm" title="Our mission">Mission Statement</a></li>
                  <li><a href="history.htm" title="school history">School History</a></li>
                  <li><a href="accreditation.htm" title="accreditation and affliates">Accreditation &amp; Affiliates</a></li>
                  <li><a href="board.htm" title="board members">Board Members</a></li>
                  </ul>
                  </div>
            </section>
            <section class="col">
                <h3>Admissions &amp; Programs</h3>
                  <div class="col1">
                  <ul>
                  <li><a href="degrees.htm" title="Degree programs">Degree Programs</a></li>
                  <li><a href="catalog.htm" title="course catalog">Course Catalog</a></li>
                  <li><a href="fine_art.htm" title="fine art programs">Fine Art Programs</a></li>
                  <li><a href="design.htm" title="design concentration">Design Concentration</a></li>
                  </ul>
                  </div>
            </section>
            <section class="col">
                <h3>Student Resources</h3>
                  <div class="col1">
                  <ul>
                  <li><a href="campus.htm" title="Campus information">Campus Information</a></li>
                  <li><a href="housing.htm" title="student housing">Student Housing</a></li>
                  <li><a href="contact.htm" title="transcript request">Transcript Request</a></li>
                  <li><a href="applying.htm" title="application process">Application Process</a></li>
                  </ul>
                  </div>
            </section>
        </nav>
        <p>&copy;Copyright  Roux Academy of Art &amp; Design.  All rights reserved.<a href="privacy.htm" title="privacy statement"> Privacy Statement</a> |<a href="legal.htm" title="legal terms"> Legal Terms and Conditions</a> |<a href="disclosures.htm" title="student outcomes and disclosures"> Student Outcomes/Disclosures</a></p>
    </footer>

</body>
</html>