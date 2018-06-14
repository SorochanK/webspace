<?php
include_once 'ini.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';


try {
    $dbh = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME, USER, PASS);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$statement = $dbh->prepare("INSERT INTO messages(name, email, phone,site_type,comment,form_name)
    VALUES(:name, :email, :phone,:site,:comment,:form_name)");


$data = $_POST['data'];

$statement->execute([
    'name' => $data['name'],
    'email' => $data['email'],
    'phone' => $data['phone'],
    'site' => $data['site_type'],
    'comment' => $data['comment'],
    'form_name' => $data['form_name'],

]);
$rowsAffected = $statement->rowCount();

echo $statement->rowCount();

if ($rowsAffected) {
    $data = $_POST['data'];

    $comment = isset($data['comment']) ? $data['comment'] : 'нет комментария';
    $email = isset($data['email']) ? $data['email'] : 'нет Emaila';
    $site = isset($data['site_type']) ? $data['site_type'] : 'не выбран тип сайта';
    $name = $data['name'];
    $phone = $data['phone'];
    $is_saleform = $data['form_name'] == 'first-large-form' ? ' ДА' : "НЕТ";

    $message = "<p>Новый  пользователь: $name</p>
<p>Телефон: $phone</p>
<p>Комментарий: $comment</p>
<p>Email: $email</p>
<p>Тип сайта: $site</p>
<p>Есть скидка:$is_saleform</p>
";

    $mail = new PHPMailer();                              // Passing `true` enables exceptions
    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.timeweb.ru';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'mail@webspace.net.ua';                 // SMTP username
        $mail->Password = 'kostyakolya1';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 2525;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('mail@webspace.net.ua', 'Webspace');
        $mail->addAddress(FIRST_MAIL);     // Add a recipient
        $mail->addAddress(SECOND_MAIL);               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'new user';
        $mail->Body = $message; //'<b>ВЫ замечены в просмотре childrenPorn</b>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
        //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

}








