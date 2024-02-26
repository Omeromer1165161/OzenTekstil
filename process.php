<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri işleyin
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $contactOption = $_POST["contactOption"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Burada verileri kullanarak istediğiniz işlemleri gerçekleştirebilirsiniz

    // Örneğin, e-posta gönderimi:
    $to = "ozentekstil44@gmail.com";
    $subject = "Yeni İletişim Formu Mesajı";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // İşlem başarılı ise bir geri bildirim gönderilebilir
    echo "Form başarıyla gönderildi. Teşekkür ederiz!";
} else {
    // Doğrudan erişim engelle
    header("HTTP/1.1 403 Forbidden");
    exit;
}

?>
