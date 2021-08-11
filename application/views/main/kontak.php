<main>
    <div class="container">

        <?php
        $mail = "https://mail.google.com/mail/";
        $emailtujuan = "kkn79upnvjt2021@gmail.com";
        $subject = "Kritik dan Saran untuk peserta KKN 79 UPN V Jatim";
        $msg = "*Mohon sertakan nama, kritik, dan saran anda, agar kami dapat mengetahui serta dapat mengevaluasi kinerja kami selama ini, terima kasih";
        $send = "" . $mail . "?view=cm&fs=1&tf=1&to=" . $emailtujuan . "&subject?&su=" . $subject . "&body=" . $msg;
        ?>

        <!-- Kontak KKN -->
        <section class="title-content">
            <h4><i class="fas fa-phone fa-fw me-3"></i>Kontak</h4>
            <hr>
            <p>Halo, jangan lupa sampaikan kritik dan saran untuk kami melalui media di bawah ini!</p>
            <div class="row row-cols-1 row-cols-md-2 g-4 artikel-ilmiah">
                <div class="col-md-7" style="margin-top: 80px; line-height: 30px;">
                    <h1>Hubungi Kami</h1>
                    <hr style="width: 80%;">
                    <p style="font-size: 15px;">
                        Admin KKN 79 Kelurahan Tlogo Patut, Gresik
                        Universitas Pembangunan Nasional “Veteran” Jawa Timur Surabaya, Indonesia
                    </p>
                    <a class="sosmed" href="https://bit.ly/IGKKN79" target="_blank"><i class="fab fa-instagram-square instagram me-2"></i></a>
                    <a class="sosmed" href="https://bit.ly/FBKKN79" target="_blank"><i class="fab fa-facebook-square facebook me-2"></i></a>
                    <a class="sosmed" href="https://bit.ly/YTKKN79" target="_blank"><i class="fab fa-youtube-square youtube me-2"></i></a>
                    <a class="sosmed" href="https://bit.ly/TWKKN79" target="_blank"><i class="fab fa-twitter-square twitter me-2"></i></a>
                    <a class="sosmed" href="<?= $send; ?>" target="_blank"><i class="fas fa-envelope-square gmail me-2"></i></a>
                </div>
            </div>
        </section>

    </div>
</main>