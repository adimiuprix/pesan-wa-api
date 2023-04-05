<?php
    // definisikan nomor Whatsapp tujuan
    $phone_number = '6285731199115';

    // ambil nilai isian form dari HTTP POST Request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // hubungkan ke Whatsapp menggunakan link API
    $base_url = 'https://api.whatsapp.com/send';
    $message_text = $message;

    // masukkan parameter untuk link API 
    $url = $base_url . '?phone=' . $phone_number . '&text=' . urlencode($message_text);

    // redirect ke link API
    header('Location: ' . $url);
    exit;
?>
