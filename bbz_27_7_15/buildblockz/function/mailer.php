<?php
function mailer($to,$message){

		$to .= ', rkumar@buildblockz.com'; // note the comma
        //$to .= 'karan@buildblockz.com';     
        // subject
        $subject = 'New User Verification';
        // message
        /*
       	$msg = "
        <html>
          <body>
          <p>Builder Request from $city<br></br></p>
            Company Name : $cmp_name<br></br>Builder Name : $name<br></br>Email : $email<br></br>Contact Number : $contact<br></br>Place : $location<br></br>City : $city
        </body>
        </html>
        ";
		 * */
        // To send HTML mail, the Content-type header must be set
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // Additional headers
        $headers .= "From: BuildBlockz Builder Request".$email;
        // Mail it*/
          return mail($to, $subject, $message, $headers);
		
}