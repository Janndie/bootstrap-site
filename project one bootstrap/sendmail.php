$fio = $_POST['name'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$fio = trim($name);
$email = trim($email);
echo $name;
echo "<br>";
echo $email;
if (mail("example@mail.ru", "Application", "Name:".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {
    echo "Message sent successfully";
} else {
    echo "There were errors while sending the message";
}
