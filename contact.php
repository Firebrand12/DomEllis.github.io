<?php
 include_once 'header.php';
?>

<section class="contact">
       <div class="contact-heading">
           <h1>Contact Information</h1>
           <h2>Have a important question?</h2>
           <h3>Fill out the form and we'll be in touch as quick as possible.</h3>
               <div class="contact-info-area">
               <div class="contact-info-item">
           
       </div>
       <form action="userinfo.php" method="post">
           <input type="text" name="user" placeholder="Your Full Name"/>
           <input type="email" name="email" placeholder="Your E-mail"/>
           <textarea name="message" placeholder="Type Your Message Here"></textarea>
           <button class="main-btn contact-btn" type="submit">Send</button>
       </form>
<?php
include_once 'footer.php';
?>