<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // E-posta bilgileri
    $to = ""; // E-posta alıcısı
    $subject = "Yeni Mesaj: $name";
    $body = "Ad: $name\nE-posta: $email\nMesaj: $message";
    $headers = "From: $email";

    // E-posta gönderme
    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajınız başarıyla gönderildi!";
    } else {
        echo "Bir hata oluştu, lütfen tekrar deneyin.";
    }
}
?>
