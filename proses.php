<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nama = $_POST['nama'];

    $email = $_POST['email'];

    $pesan = $_POST['pesan'];

    // Lakukan apa yang Anda inginkan dengan data yang dikirimkan, seperti mengirim email, menyimpan ke database, dll.

    // Contoh: Mengirim email

    $tujuan_email = "tujuan@example.com";

    $subjek_email = "Pesan Baru";

    $isi_email = "Nama: " . $nama . "\n";

    $isi_email .= "Email: " . $email . "\n";

    $isi_email .= "Pesan: " . $pesan . "\n";

    // Mengirim email menggunakan fungsi mail()

    mail($tujuan_email, $subjek_email, $isi_email);

    // Setelah pesan dikirim, Anda dapat mengarahkan pengguna ke halaman lain atau menampilkan pesan konfirmasi di halaman yang sama.

    echo "Pesan Anda telah dikirim. Terima kasih!";

}

?>

