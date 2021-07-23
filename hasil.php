<html>
    <?php
        include "phpqrcode/qrlib.php";    // Ini adalah letak pemyimpanan plugin qrcode
        $nama = $_POST['nama'];

        $tempdir = "qrcode-img/";        // Nama folder untuk pemyimpanan file qrcode
        
        if (!file_exists($tempdir))        //jika folder belum ada, maka buat
        mkdir($tempdir);
        
        // berikut adalah parameter qr code

        $namafile       = $nama;
        $teks_qrcode    = "profile.php?nama=$nama";
        $quality        ="H"; // ini ada 4 pilihan yaitu L (Low), M(Medium), Q(Good), H(High)
        $ukuran         =5; // 1 adalah yang terkecil, 10 paling besar
        $padding        =1;

        QRCode::png($teks_qrcode, $tempdir.$namafile, $quality, $ukuran, $padding);
        $src = "qrcode-img/$nama";
    ?>

    <img src="<?php echo $src; ?>" alt="">
    <p><?php echo $nama ?></p>

</html>