<?php



if(isset($_POST['submit']))
{    


    
     $name = $_POST['name']; 
     $email = $_POST['email'];
     $subject = $_POST['subject'];

     $message = $_POST['message']; 


     $dateis=date("Y/m/d");

 
    $user_id = 1;
    $fetch_user_id=1;
    $email_id='bullettech999@gmail.com';
   if($user_id==$fetch_user_id) {
                $to = $email_id;
                $subject = "sumit portfolio data ";
                $txt = 
                
                
                "Request form data are following \n
                 Date of Form Submited->$dateis.\n
                 
                 name->$name\n
                email->$email.\n
                message->$message\n
            
            
                $headers = "From: rms@sparrowrms.in" . "\r\n" .
                "CC: aakil.k@sparrowrms.in";
                mail($to,$subject,$txt,$headers);
            }
                else{
                    echo 'invalid userid';
                } 
    

 
}


?>
