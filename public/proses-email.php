<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "arga.kencana@murgana.co.id";
    $subject = "Konfirmasi Password";
    $message = "Silakan klik link berikut untuk mengkonfirmasi password: https://www.google.com";
    $headers = "From: your-email@example.com"; // Ganti dengan alamat email Anda

    if (mail($to, $subject, $message, $headers)) {
        echo "Email konfirmasi telah dikirim.";
    } else {
        echo "Gagal mengirim email konfirmasi.";
    }
}
?>
