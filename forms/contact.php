<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "jarapkerja@gmail.com"; // Alamat email tujuan
    $subject = "Langganan Newsletter"; // Subjek email
    $message = $_POST["email"]; // Isi pesan, dalam hal ini, email pengguna

    // Header email
    $headers = "From: jarapkerja@gmail.com"; // Ganti dengan alamat email Anda

    // Kirim email
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Email telah berhasil dikirim!";
    } else {
        echo "Gagal mengirim email. Silakan coba lagi.";
    }
}
?>