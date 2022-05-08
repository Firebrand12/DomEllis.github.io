<?php
 include_once 'header.php';
?>

        <div class="main-heading">
            <h1>Having issues with your electronic device?</h1>
            <p>Our IT Helpdesk is here to help you with any issues as fast and efficient as possible. Create a account and login or submit a ticket right away for immediate assistance.</p>
            <a class="main-btn" href="signup.php">Sign Up</a>
            <a class="main-btn" href="login.php">Log in</a>
            <a class="main-btn" href="helpdesk.php">Submit Ticket</a>
        </div>
    </section>

    <section class="about">
        <div class="about-container">

            <div class="about-box">
                <div class="a-img">
                    <img src="images/itlogo4.png"/>
           </div>
           <div class="a-text">
               <h4>About Us</h4>
               <p>IT Helpdesk is a fast and efficient platform for all your technical issues</p>
               <a href="about.php" class="main-btn">Learn More</a>
           </div>
       </div>

       <div class="about-box">
                <div class="a-img">
                    <img src="images/itlogo6.png"/>
           </div>
           <div class="a-text">
               <h4>FAQ</h4>
               <p>Here are some solutions to frequent issues.</p>
               <a href="faq.php" class="main-btn">Learn More</a>
           </div>
       </div>

       <div class="about-box">
                <div class="a-img">
                    <img src="images/itlogo13.png"/>
           </div>
           <div class="a-text">
               <h4>Contact Us</h4>
               <p>Can't find the solution you need? Get in touch directly with us.</p>
               <a href="contact.php" class="main-btn">Learn More</a>
           </div>
       </div>

   </section>

   <section class="about">
       <div class="about-img">
           <img src="images/about6.png">
       </div>
       <div class="about-text">
           <h2>Get the support you deserve!<h2>
   </section>

   <section class="contact">
       <div class="contact-heading">
           <h1>Contact Information</h1>
           <h2>Need to contact us directly?</h2>
       </div>
       <form action="userinfo.php" method="post">
           <input type="text" name="user" placeholder="Your Full Name"/>
           <input type="email" name="email" placeholder="Your E-mail"/>
           <textarea name="message" placeholder="Type Your Message Here"></textarea>
           <button class="main-btn contact-btn" type="submit">Send</button>
       </form>
</body>
</html>
<?php
include_once 'footer.php';
?>