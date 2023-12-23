<?php
session_start();
if(isset($_GET['sweetalert']))
{
    if(empty($_SESSION['save_contact']))
    {
        echo json_encode(['Count'=>0]);die;    
    }
    unset($_SESSION['save_contact']);

    echo json_encode(['Count'=>1]);die;
}

$field_name = $_POST['first_name'];
$field_company_name = $_POST['company_name'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_service = $_POST['service'];
$field_message = $_POST['message'];

// nishant.candi@outlook.com
$mail_to = 'nishant.joshi91@gmail.com';
$subject = 'Lead Enquiry';

$body_message = 'From: '.$field_name."\n";
$body_message .= 'Company name: '.$field_company_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Contact Number: '.$field_phone."\n";
$body_message .= 'Service Intersestd In: '.$field_service."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { 

$_SESSION['save_contact'] = '1';
?>
	<script language="javascript" type="text/javascript">
// 		alert('Sucess Message');
		window.location = 'contact.php';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Error Message');
		window.location = 'index.php';
	</script>
<?php
}
?>