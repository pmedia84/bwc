<!-- quote request from from services page -->

<!-- quote request from index page -->
<?php
include("../inc/settings.php");
//include php MAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mailer/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mailer/SMTP.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mailer/Exception.php';


$post = json_decode(file_get_contents('php://input'), true);


if (isset($_POST['token'])) {
        //Recaptcha security test
        $site_key = '6LcbZE8iAAAAADV2Np7Us0osEScWxYrChHvrFcKy'; //site key from recaptcha admin
        $secret_key = '6LevFFEiAAAAAGcp7T8l6jqZwV1zvsEQPpcfCeVF';//secret key from recaptcha admin file
        $url = "https://recaptchaenterprise.googleapis.com/v1/projects/boltonswindowcleaning/assessments?key=AIzaSyAEaMlBYNehfnIxTJ5ivJ3ehqyf-rBWGb0";
       
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['token']);//verify the response with the token generated from the user inout
    
    $verify_data = json_decode($verifyResponse, true);//decode the JSON file recieved from google
    $score = $verify_data['score'];//identify the score
if($score >=0.7){//if the score is above 0.7 then proceed with the form submission. If not then exit the file.
    //set up variables
    $fname = htmlspecialchars($_POST['fname'],);
    $lname = htmlspecialchars($_POST['lname'],);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['tel'], FILTER_SANITIZE_SPECIAL_CHARS);
    $service = filter_var($_POST['servicetype'], FILTER_SANITIZE_SPECIAL_CHARS);
    $furtherinfo = filter_var($_POST['furtherinfo'], FILTER_SANITIZE_SPECIAL_CHARS);
    // Email address verification.
    function isEmail($email)
    {
        return (preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
    }
    //check values from form and remove whitespace
    if (trim($fname) == '') { //first name
        echo '<div id="response"></div><div class="error_message">You must enter your name. Please try again.</div>';
        exit();
    } else if (trim($lname) == '') { //last name
        echo '<div id="response"></div><div class="error_message">You must enter your last name. Please try again.</div><br>';
        exit();
    } else if (!isEmail($email)) {
        echo '<div id="response"></div><div class="error_message">Invalid email address. Please try again.</div><br>';
        exit();
    } else if (trim($phone) == '') {
        echo '<div id="response"></div><div class="error_message">You must enter your phone number. Please try again.</div><br>';
        exit();
    } else if (trim($service) == '') {
        echo '<div id="response"></div><div class="error_message">Service Type Not Selected!</div>';
        exit();
    }

    //configure email to send to admins
    //stored in seperate file
    //From Server
    $fromserver    = $username;


    /////////////////////Admins auto reply/////////////////////////
    //email subject
    $subject = $fname . ' ' . $lname . ' has requested a quote for ' . $service;


    //body of email for website admins
    $body = '<div style="background-color:#3b4142; padding:16px;font-family:sans-serif;">
        <h1 style="text-align:center; color:white;">' . $fname . ' ' . $lname . ' has requested a free quotation from your services page!</h1>
        <div style="background-color: white; padding:16px; border: 10px solid #335a61; border-radius: 10px;">
            <h2>Quotation Details:</h2>
            <p style="border-bottom:1px solid;"><strong>Name</strong>: ' . $fname . ' ' . $lname . ' </p>
            <p style="border-bottom:1px solid;"><strong>Email</strong>: ' . $email . ' </p>
            <p style="border-bottom:1px solid;"><strong>Phone No</strong>.: ' . $phone . ' </p>
            <p style="border-bottom:1px solid; line-height: 1.7; "><strong>Further Information</strong>: ' . $furtherinfo . ' </p>
            <p style="border-bottom:1px solid;"><strong>Service Required</strong>: ' . $service . ' </p>
        </div>
    </div>';


    // Auto Reply email settings to send notifaction to admins
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->Host = $host; // Enter your host here
    $mail->SMTPAuth = true;
    $mail->Username = $username; // Enter your email here
    $mail->Password = $pass; //Enter your password here
    $mail->Port = 25;
    $mail->From = $from;
    $mail->FromName = $fromname;
    $mail->Sender = $fromserver; // indicates ReturnPath header
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->IsHTML(true);
    $mail->AddAddress($email_to);
    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "
            <p>Thank you <strong>$fname</strong>, for requesting a quotation for $service.<br>We will be in touch with you very soon! </p>"; //if this is all successful then send an auto reply to the client as well

        /////////////////////Client auto reply/////////////////////////
   //email subject
   $clientsubject = 'Thank you '.$fname . ' for requesting a quotation from Bolton\'s Window Cleaning';
        //body of email to send to client as an auto reply
        $clientbody = '
        <img src="'.$emailheaderlogo.'">
        <div style="padding:16px;font-family:sans-serif;">
    <h1 style="text-align:center;">Thank you '.$fname . '  for requesting a quotation from us!</h1>
    <div style="padding:16px; border: 10px solid #03b0fa; border-radius: 10px;">
        
        <h2>Here is a confirmation of what you have asked for:</h2>
        <p style="border-bottom:1px solid;"><strong>Name</strong>: ' . $fname . ' ' . $lname . ' </p>
        <p style="border-bottom:1px solid;"><strong>Email</strong>: ' . $email . ' </p>
        <p style="border-bottom:1px solid;"><strong>Phone No</strong>.: ' . $phone . ' </p>
        <p style="border-bottom:1px solid; line-height: 1.7; "><strong>Further Information</strong>: ' . $furtherinfo . ' </p>
        <p style="border-bottom:1px solid;"><strong>Service Requested</strong>: ' . $service . ' </p>
        <p>We always aim to respond to quotation requests within 24 to 48 hours. Should you wish to get hold of us sooner than this, please contact us on <strong>'.$contactnum.'</strong></p>
        <p><strong>Please note: This email account is not monitered, so please do not reply to this email.</strong></p>
        <p>Note: we do not store your email in any database, this email is a confirmation of what you have requested from us. If you would like to recieve no further emails from us, please inform us by emailing '.$emailaddress.'</p>
        <br><hr style="color:#03b0fa;">
        <p>Kind regards</p>
        <p><strong>Bolton\'s Window Cleaning</strong></p>

        </div>
</div>';

        //Auto reply to client
        $mail2 = new PHPMailer(true);
        $mail2->IsSMTP();
        $mail2->Host = $host; // Enter your host here
        $mail2->SMTPAuth = true;
        $mail2->Username = $username; // Enter your email here
        $mail2->Password = $pass; //Enter your password here
        $mail2->Port = 25;
        $mail2->From = $from;
        $mail2->FromName = $fromname;
        $mail2->Sender = $fromserver; // indicates ReturnPath header
        $mail2->Subject = $clientsubject;
        $mail2->Body = $clientbody;
        $mail2->IsHTML(true);
        $mail2->AddAddress($email);//clients email
        if (!$mail2->Send()) {
            echo "Mailer Error: " . $mail2->ErrorInfo;
        } else {
        }
    }
}else{
    echo "reCaptcha Error";
    exit;
}

    
}
?>