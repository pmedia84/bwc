<?php
//check for config file, if it is not present, stop loading website
$config_file = $_SERVER['DOCUMENT_ROOT'] . "/config.json";
if (!file_exists($config_file)) {
    http_response_code("500");
    exit("Error, config file not found");
} else {
    $config = file_get_contents($config_file);
    //decode json file
    $file = json_decode($config, TRUE);
}

//email settings for contact forms
//Settings for all form scripts
/// Define who the emails get sent to from forms filled out
$email_to = $file['email_config']['email_to'];


$host = $file['email_config']['host']; /// Hostname
$username = $file['email_config']['username']; ///Username
$pass = $file['email_config']['pw']; /// Password
$from =$file['email_config']['fromname']; ///Email address

$fromname = "Webmaster - Bolton's Window Cleaning"; /// Username and how you want your name to be displayed on emails
$emailheaderlogo = "https://www.boltonswindowcleaning.co.uk/assets/img/logo/logo-primary-col.png"; //logo url for inserting into the top of email bodies

//Contact details: Phone number, email address etc
$contactnum = $file['contact']['contactnum'];
$emailaddress = $file['contact']['email'];
$facebookurl = $file['contact']['facebookurl'];
$domain_name = $file['contact']['domain_name'];

//recaptcha key details
$site_key = $file['recaptcha']['site_key']; //site key from recaptcha admin
$secret_key = $file['recaptcha']['secret_key']; //secret key from recaptcha admin file
$url = $file['recaptcha']['url'];
