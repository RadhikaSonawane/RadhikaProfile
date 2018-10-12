<?php /* Template Name: Contact Us*/?>

<?php
get_header(); // header.php
?>

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sach.radhika@gmail.com";
    $email_subject = "Your email subject line";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>

<div class="container contact">
            <div class="row">

                    <div class="col-sm-12 col-md-6 col-lg-6 card find">
                        <h1> Find us</h1> 
                            <!-- Embedded Google Map -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2255.9138721833797!2d12.992451715501785!3d55.56869828050456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4653a124c5d92efb%3A0xdd8bb190c17e8eda!2sVelandergatan+110%2C+215+65+Malm%C3%B6!5e0!3m2!1sen!2sse!4v1537276740777" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 card us ">
                            <h1>Contact us</h1>
                                <form class="" name="contactform" method="post" action="send_form_email.php">
                                        <table>
                                                <tr>
                                                <td valign="top">
                                                    <label for="first_name">First Name *</label>
                                                </td>
                                                <td valign="top">
                                                    <input  type="text" name="first_name" maxlength="50" size="30">
                                                </td>
                                                </tr>

                                                <tr>
                                                    <td valign="top">
                                                <label for="last_name">Last Name *</label>
                                                </td>
                                                <td valign="top">
                                                    <input  type="text" name="last_name" maxlength="50" size="30">
                                                </td>
                                                </tr>

                                                <tr>
                                                <td valign="top">
                                                    <label for="email">Email Address *</label>
                                                </td>
                                                <td valign="top">
                                                    <input  type="text" name="email" maxlength="80" size="30">
                                                </td>
                                                </tr>

                                                <tr>
                                                <td valign="top">
                                                    <label for="telephone">Telephone Number</label>
                                                </td>
                                                <td valign="top">
                                                    <input  type="text" name="telephone" maxlength="30" size="30">
                                                </td>
                                                </tr>

                                                <tr>
                                                <td valign="top">
                                                    <label for="comments">Comments *</label>
                                                </td>
                                                <td valign="top">
                                                    <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                                                </td>
                                                </tr>

                                                <tr>
                                                <td colspan="2" style="text-align:center">
                                                    <input type="submit" value="Submit"> 
                                                </td>
                                                </tr>
                                        </table>
                                </form>
                            </div>
        </div>  <!-- row-->  
                
</div> <!-- container-->    

<?php get_footer();?>