<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email tujuan
    $to = "TKJLAB81@GMAIL.COM";  // Ganti dengan email tujuan Anda
    $subject = "Pesan Kontak dari " . $name;

    // Membuat body email
    $body = "Nama: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Pesan:\n$message\n";

    // Header untuk pengirim email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Mengirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href = 'kontak.html';</script>";
    } else {
        echo "<script>alert('Gagal mengirim pesan. Coba lagi nanti.'); window.location.href = 'kontak.html';</script>";
    }
} else {
    echo "<script>alert('Metode pengiriman tidak didukung.'); window.location.href = 'kontak.html';</script>";
}
?>
