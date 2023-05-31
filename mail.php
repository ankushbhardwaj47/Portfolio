<?php
// €the contact form work with live server only
if (isset($_REQUEST['submit'])) {
    // checking for empty feilds
    if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") ||
    ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")) {
        //msg displayed if required feild missing
        $msg = '<div class=""alert alert-warning col-sm-6 ml-5 mt-2 role="alert"> Fill all the feilds </div>';
    } else {
        $name = $_REQUEST['name'];
        $subject = $_REQUEST['subject'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
        
        $mailTo = "ankushbhardwaj0631@gmail.com";
        $headers = "From: ". $email;
        $txt = "You received an email from". $name . ".\n\n". $message;
        mail($mailTo, $subject, $txt, $headers);
        $msg = '<div class=""alert alert-success col-sm-6 ml-5 mt-2 role="alert"> Sent Successfully </div>';
    }
}
?>
