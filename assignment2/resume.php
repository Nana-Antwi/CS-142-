<?php
include "top.php";
include "header.php";
include "nav.php";
?>

<!-- *************   Your personal information ***************************  -->
<!-- **** change the id here and in the style sheet to  your name -->
<div id="hcard-Nana-Antwi" class="vcard">

    <!-- ****  Of course link to your photo and change the alt description -->
    <p id="myImage"><img src="pose_img.jpg" alt="myself" height="150" width="150"></p>

    <!-- ****  put in  your name and your url -->
    <h1 id="name"><a class="url fn" href="https://nantwi.w3.uvm.edu/cs142/sitemap.php">Nana Antwi</a></h1>


    <!-- ****  in all the following span tags put in your address info -->	
    <div class="adr">
        <span class="street-address">486 South Prospect St</span>, 
        <span class="locality">Burlington</span>,  
        <span class="region">Vermont</span>, 
        <span class="postal-code">05405</span>
        <span class="country-name">USA</span>
    </div>

    <div class="email">
        <span class="type">Email: </span>

        <!-- ****  notice you need to put your address in twice, once for the link and 
        once to display -->		
        <span class="value"><a class="email" href="mailto:nantwi@uvm.edu">nantwi@uvm.edu</a></span>
    </div>

    <!-- ****  type in your contact numbers, delete extra, copy if you need more -->
    <div class="tel">
        <span class="type">Cell: </span>
        <span class="value">1.347.420.8468</span>
    </div>

    <div class="tel">
        <span class="type">Work: </span>
        <span class="value">1-347-420-8468</span>
    </div>

</div>  <!-- ends div class vcard -->



<!-- This section is for work that you do that is directly related to your 
career. Internships, projects etc.  if you do not have any GET some, till then
just comment this section out ********************* -->
<div id="profExperience">
    <h2>Professional Experience</h2>

    

    <!-- Begin job -->
    <ol>
        <li class="job" id="coName"> 
            <span class="dates">2015-present</span>
            <a href="http://www.sears.com/" class="company">Sears</a>, 

            <!-- notice i change the google maps url. everyplace it has a & made it &amp; so it would 
            validate -->
            <a href="https://www.google.com/maps/place/Sears/@42.5051345,-71.2048106,13z/data=!3m1!5s0x89e39e3830f507d1:0xeb846313aeb9eb60!4m5!1m2!2m1!1sgoogle+sears+burlington!3m1!1s0x0000000000000000:0x211dc5a99059e3e6" 
               class="location">Burlington, VT</a>

            <span class="jobtitle">Cashier</span>

            <p class="description"> I work in conducive environment performing theses tasks;
                Receiving payments by cash, check, credit cards, vouchers, or automatic debits for item purchase.
                Issue receipts, refunds, credits, or change due to customers.
                Count money in cash drawers at the beginning of shifts to ensure that amounts are correct and that there is adequate change.
                Greet customers entering establishments.
                Maintain clean and orderly checkout areas.
                Establish or identify prices of goods, services or admission, and tabulate bills using calculators, cash registers, or optical price scanners. </p>
        </li>

        <li class="job" id="coName1">
            <span class="dates">2014-2015</span>
            <a href="http://www.uvm.edu/~recspts/" class="company">UVM Campus Rec</a>, 

            <!-- notice i change the google maps url. everyplace it has a & made it &amp; so it would 
            validate -->
            <a href="http://www.uvm.edu/~recspts/" 
               class="location">Burlington, VT</a>

            <span class="jobtitle">Intramural Sports</span>
            
            <p class="description"> I worked on campus rec intramural sports staff help the set and up the running of sports games organized, mostly as a score keeper</p>
                

            
            <li class="job" id="coName2">
            <span class="dates">2011-2013</span>
            <a href="http://www.mcdonalds.com/us/en/home.html" class="company">McDonalds Restaurant</a>, 

            <!-- notice i change the google maps url. everyplace it has a & made it &amp; so it would 
            validate -->
            <a href="https://www.google.com/maps/place/McDonald's/@40.86871,-73.830492,17z/data=!3m1!4b1!4m2!3m1!1s0x89c28cb77eb4d521:0xd5b849976e613fe7" 
               class="location">Bronx, NY</a>

            <span class="jobtitle">Crew Trainer</span>
            
            <p class="description">I was in charge of training newly employed kitchen crew and was manager of the kitchen when supervisors were not present. </p>
                
            <!-- past other jobs here, descending by dates -->



            <!-- list web sites and projects here -->
        <li class="job" id="workExamples"><span class="dates">2014 - present</span>
            Websites and Projects
            <ul class="websites">
                <li><a href="http://nantwi.w3.uvm.edu/cs008/assignment1.7/">Making The World A Better PLace</a> This website was created to spread awareness, of the mishaps the earth face and how we can make it better.</li>
                <li><a href="http://nantwi.w3.uvm.edu/cs008/assignment9.0/">Groovy UVConcerts</a> This website provide students of UVM with the latest 411 when it comes to entertainment</li>
            </ul>
        </li>
        

    </ol>		
</div> <!-- end of your Experience-->


<!-- Skill set section *********************************************-->
<div id="skills">
    <h2>Skills</h2>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>PHP</li>
        <li>PYTHON</li>
        <li>JAVA</li>
        <li>WORD PROCESSING</li>
    </ul>
</div> <!-- ends skill sets -->

<!-- Education section *********************************************

only list college education (high school education is not needed.
Always list most recent first 

change the id to the abbreviation for the school.

-->

<div id="education">
    <h2>Education</h2>

    <ol>
        <li class="school" id="uvm">
            <span class="dates">2013 - present</span>
            <a href="http://www.uvm.edu" class="institution">University of Vermont</a>, 
            <a href="http://maps.google.com/maps?q=+colchester+ave%2C+Burlington%2C+VT+05401%2C+United+States&amp;l=explore&amp;utm_campaign=en&amp;utm_medium=ha&amp;utm_source=en-ha-na-us-gns-lt&amp;utm_term=searchbox&amp;submit.x=116&amp;submit.y=23&amp;submit=Explore+this+place" 
               class="location">Burlington, VT</a>

            <span class="MajorDegree">Computer Science</span>
            <span class="MinorDegree">Economic</span>
            <span class="gpa">Cumulative GPA 4.0 (4.0)</span>

            <!-- List the most important courses for your major that you have taken (or will take). This gives you some common ground when interviewing and something to talk about. list the NAME not the number. If there is a link for your course put it in but be sure the link will always
            be available. -->
            <h3 class="subtitle">Course of Study </h3>
            <ul class="courses major">
                <li>Database Programming</li>
                <li>Digital Revolution</li>
                <li>Computer Programming</li>
                <li>Software Design</li>
                <li>Complex Structures</li>
            </ul>


            <ul class="courses minor">					
                <li>Micro Economics</li>
                <li>Macro Economics</li>
                <li>Supply and Demand</li>
            </ul>
        </li> <!-- end school  -->

        <!-- add another school here if you attended more than one. Same as with Experience
        just copy and paste the code changing the relevant info. -->




    </ol>
</div> <!-- end education division -->


<!-- Work History ***************************************************
This is just what you have been doing to make money, if it is related to your profession then it belongs up above in professional Experience.

Your work history goes here with the most recent first. However, if the work is related to your major then it belongs above in Professional Experience, if they were just jobs to help pay your way, list them here as Work Experience. this is the same as professional
experience only the work is not related to your career but shows that you can work  -->

<div id="experience">
    <h2>Work Experience</h2>
    <!-- Begin job -->

    <ol>
        <li class="job">
            <span class="dates">beginning year - present</span>
            <a href="http://www.sears.com/" class="company">Sears</a>,  
            <a href="https://www.google.com/maps/place/Sears/@44.4925904,-73.2266484,13z/data=!3m1!5s0x4cca7a338f5b2987:0x7edf0a3a6747c415!4m5!1m2!2m1!1ssears+burlington+vt!3m1!1s0x4cca7a33b46dbfd9:0x469a2df15087821f" class="location">Burlington, VT</a>

            <span class="jobtitle">Cashier</span>

            <p class="description"> </p>
        </li><!-- end of this job -->

        <!-- past other jobs here descending by dates -->


    </ol>		
</div> <!-- end of your Experience-->

<!-- Interests section *************************************************
You have to have something that interests you. This is to let everyone know that you have a life beyond working. -->
<div id="interests">
    <h2>Interests</h2>
    <ol><li class="int">I'm a open minded and very socially active person who enjoys the basic things in life's
            like sharing a meal my family and last some one always learning new things</li></ol>
</div> <!-- ends interests -->

<?php
include "footer.php";
?>

</body>
</html>

