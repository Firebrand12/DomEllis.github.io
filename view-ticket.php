<?php 

$success=false;
$error=false;
require_once('helpsession.php');  

if(isset($_POST['id'])){
    $db=new DB();
    $ticket_q=$db->conn->query("SELECT * FROM tickets WHERE ticket_id='".$_POST['id']."'");
    if($ticket_q->num_rows > 0){
        while ($row  = $ticket_q->fetch_assoc()) {
            header("Location: ./ticket.php?id=".$row['id']);
        }
        //f,s9cXM,FWgL
    }else{
        $error="Invalid ticket id";
    }
}

?>
<body>
    <form method="POST">
        <div class="container mt-4">
            <div class="row justify-content-center">
               <div class="col-12 col-md-8">
                   <div class="card">
                       <div class="card-header"> View Your Ticket</div>
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
                           <div class="form-group">
                               <label>Enter Your Ticket ID</label>
                               <input type="text" name="id" id="id" required class="form-control">
                           </div>
                           <div class="form-group">
                               <button class="btn btn-primary btn-lg">Submit</button>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </form>
</body>