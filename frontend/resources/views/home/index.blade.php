@extends('layouts.base')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
@stop

@section('content')
    @include('components.banner')

    @include('components.slides')

    <div id="services">
        <div class="container">
            <div class="col-1">
                <p>
                    <b>Kongsi OLE777</b> adalah program OLE777 Affiliate bola yang memberikan member dan non-member penghasilan dengan platform OLE777.<br /> Berdiri sejak tahun 2014, OLE777 memberikan hiburan online dengan kenyamanan, kualitas produk,
                    layanan pelanggan terbaik, dan keuntungan bagi untuk seluruh player, dan anggota Kongsi OLE777 Affiliate Bola.
                </p>
                <br />
                <p>
                    <b>Langkah-langkah mendapatkan komisi dengan menjadi Kongsi OLE777:</b>
                </p>
                <ul class="steps">
                    <li><span>1</span> Daftar dengan klik tombol " Daftar Sekarang" atau melalui link yang diberikan oleh tim kami.</li>
                    <li><span>2</span> Lakukan Pendaftaran</li>
                    <li><span>3</span> Sebarkan link khusus yang Anda dapat dari akun Anda.</li>
                    <li><span>4</span> Anda bisa menyebarkan link melalui akun-akun Sosial Media Anda, seperti Facebook, Instagram, YouTube, Twitter, dan lain-lain.</li>
                </ul>
            </div>
            <div class="col-1">
            </div>
            <div class="text-center col-4 first">
                <img src="{!! url('images/services/img-group.svg') !!}" alt="Group Icon">
                <h2>Tim Pembayaran<br />yang Profesional</h2>
                <p>
                    Metode pembayaran beragam dan terpercaya. Setiap dana pemain aman dan terjamin.
                </p>
            </div>
            <div class="text-center col-4">
                <img src="{!! url('images/services/img-domino.svg') !!}" alt="Domino Icon">
                <h2>Brand yang<br />Terkenal</h2>
                <p>
                    Anggaran pemasaran yang luar biasa. Biarkan Anda menikmati efek dari merek berkualitas.
                </p>
            </div>
            <div class="text-center col-4">
                <img src="{!! url('images/services/img-document.svg') !!}" alt="Document Icon">
                <h2>Sistem Laporan<br />Profesional</h2>
                <p>
                    Format pelaporan yang rapi & bersih. Lihat laporan harian & bulanan di satu titik
                </p>
            </div>
            <div class="text-center col-4">
                <img src="{!! url('images/services/img-settings.svg') !!}" alt="Settings Icon">
                <h2>Personalisasikan<br />Paket Pribadi</h2>
                <p>
                    Kami dapat menyesuaikan promosi khusus untuk Anda. Membuat promosi Anda menjadi Mudah
                </p>
            </div>
        </div>
    </div>

    <div id="app">
        <div class="container hidden-m">
            <div class="col-12">
                <a href="#">
                    <img src="{!! url('images/Sticker WhatsApp Gratis - Kongsi OLE777.gif') !!}" alt="Sticker WhatsApp Gratis - Kongsi OLE777">
                </a>
            </div>
        </div>

        <div class="visible-m">
            <div class="col-12">
                <a href="#">
                    <img src="{!! url('images/Sticker WhatsApp Gratis - Kongsi OLE777.gif') !!}" alt="Sticker WhatsApp Gratis - Kongsi OLE777">
                </a>
            </div>
        </div>
    </div>
@stop

@section('custom_js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

    <script>
        // $(document).ready(function() {
            $('.carousel').carousel({
                interval: 4000
            });
        // });
    </script>
@stop