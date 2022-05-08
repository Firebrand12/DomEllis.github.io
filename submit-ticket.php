<?php
 include_once 'header.php';
?>

<?php
$success=false;
$error=false;
require_once('helpsession.php');  
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $mobile=$_POST['mobile'];
    $message=$_POST['message'];

    $unid=random_bytes(10);
    $unid=bin2hex($unid);

    $db=new DB();

    $sql="INSERT INTO tickets (ticket_id,status,name,mobile,email,subject,message) VALUES ('$unid','0','$name','$mobile','$email','$subject','$message')";
    $inset=$db->conn->query($sql);
    if($inset){
        $success='Your ticket has been created. Your ticket id is '.$unid;
        $to = $email;
        $subject = "Support Ticket";
        $txt = "Dear $name your tickets has been sent to our support team and we will back you shortly. and here your ticket id $unid ";
        $headers = "From: iwantm8@gmail.com" . "\r\n";
        // mail($to,$subject,$txt,$headers);
    }else{
        $error='Ticket not sent to our team, please try again later';
    }
}
?>
<body>
    <form method="POST">
    <section class="contact">
        <div class="contact-heading">
            <div class="row">
               <div class="col-12">
                   <div class="card">
                       <div class="card-header"> Submit a Ticket</div>
                       <div class="card-body">
                       <?php 
                            if(isset($error) && $error != false){
                                echo '<div class="alert alert-danger">'.$error.'</div>';
                            }
                        ?>
                         <?php 
                            if(isset($success) && $success != false){
                                echo '<div class="alert alert-success">'.$success.'</div>';
                            }
                        ?>
                           <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Your name <span class="text-danger">*</span> </label>
                                        <input type="text" required name="name" id="name" placeholder="Your full name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Your E-Mail Address <span class="text-danger">*</span></label>
                                        <input type="email" required name="email" id="email" placeholder="Your Email Address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Subject <span class="text-danger">*</span></label>
                                        <input type="text" required name="subject" id="subject" placeholder="Subject About Support" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>You Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" required name="mobile" id="mobile" placeholder="Your Mobile Number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Enter your description about help"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="text-right">
                                        <input type="hidden" name="submit" value="form">
                                        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </form>
</body>