@extends('events-layout.main')
@section('container')
    <main>
        <div class="content p-0 mt-5 mb-5">
            <div class="judul fw-bold fs-1">Lomba Karya Tulis Ilmiah</div>

            <div class="row g-2">
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <img src="../../img/poster-lomba/Slice 11.png" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">

                            <div class="row px-1">

                                <!-- WAKTU DAN LOKASI -->
                                <div class="row g-0 ket">
                                    <!-- WAKTU DAN LOKASI -->
                                    <div class="col-6 col-lg-6 pb-1 pt-0 ps-3 pe-1">
                                        <div class="waktu ps-5 py-5 d-flex flex-row align-items-center"
                                            data-aos="fade-right" data-aos-anchor-placement="top-bottom"
                                            data-aos-offset="300" data-aos-duration="1000">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 248H128V192H48V248zM48 296V360H128V296H48zM176 296V360H272V296H176zM320 296V360H400V296H320zM400 192H320V248H400V192zM400 408H320V464H384C392.8 464 400 456.8 400 448V408zM272 408H176V464H272V408zM128 408H48V448C48 456.8 55.16 464 64 464H128V408zM272 192H176V248H272V192z" />
                                            </svg>
                                            <div class="d-flex flex-column ps-3">
                                                <div class="head fw-bold">
                                                    Waktu
                                                </div>
                                                <div class="sub">
                                                    1 Februari 2023
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-lg-6 ps-1 pe-3 pb-1 pt-0">
                                        <div class="lokasi ps-5 py-5 d-flex flex-row align-items-center"
                                            data-aos="fade-left" data-aos-anchor-placement="top-bottom"
                                            data-aos-offset="300" data-aos-duration="1000">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                                            </svg>
                                            <div class="d-flex flex-column ps-3">
                                                <div class="head fw-bold">
                                                    Lokasi
                                                </div>
                                                <div class="sub">
                                                    Auditorium
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-3 pb-1 pt-1">
                                        <div class="peserta ps-5 py-5 d-flex flex-row align-items-center" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-offset="300"
                                            data-aos-duration="1000">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                            </svg>
                                            <div class="d-flex flex-column ps-3 ">
                                                <div class="head fw-bold">
                                                    Kelompok
                                                </div>
                                                <div class="sub">
                                                    SMA sederajat dan Perguruan Tinggi (3 orang/tim)
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-3 pb-1 pt-1">
                                        <div class="peserta ps-5 py-5 d-flex flex-row align-items-center" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-offset="300"
                                            data-aos-duration="1000">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                            </svg>
                                            <div class="d-flex flex-column ps-3">
                                                <div class="head fw-bold">
                                                    Tema
                                                </div>
                                                <div class="sub">
                                                    Linking Global Challenge and Conservation For Sustainable Development
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- KETERANGAN LOMBA -->
                                <div class="row g-0">
                                    <div class="col-12 px-3 py-1 mt-0">
                                        <div class="detail px-5 py-4" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-offset="300"
                                            data-aos-duration="1000">
                                            Lomba karya tulis ilmiah (LKTI) merupakan kompetisi yang memuat hasil pemikiran
                                            siswa/i sma sederajat dan mahasiswa/I yang kritis serta kreatif yang berhubungan
                                            dengan konsep fisika dan penerapannya. Sehingga menghasilkan ciptaan kreatif
                                            anak bangsa yang dapat dijadikan acuan bagi generasi berikutnya. Tiga kelompok
                                            yang lolos seleksi akan mempresentasikan karya ilmiahnya di auditorium
                                            Universitas Andalas
                                        </div>
                                    </div>

                                    <!-- OPSIONAL -->
                                    <div class="col-12 px-3 py-1">
                                        <div class="detail px-5 py-4" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-offset="300"
                                            data-aos-duration="1000">
                                            <div class="fw-bold text-uppercase">Syarat dan ketentuan</div><br>

                                            <ul>
                                                <li>Tema: Linking Global Challenge and Conservation For Sustainable
                                                    Development.</li>
                                                <li>Siswa/I SMA sederajat dan Mahasiswa se-Indonesia.</li>
                                                <li>Melakukan pendaftaran secara online/offline. </li>
                                                <li>Melakukan uang pendaftaran sebesar Rp.120.000 ke:<br>
                                                    <strong>Nama/Rekening : Chairul Nisa Syahputri<br>
                                                    No. rekening : 169201003109508<br>
                                                    Bank : BRI</strong> </li>
                                                <li>Lomba dalam bentuk tim, dimana satu tim terdiri atas 3 orang. Untuk pendaftaran dilakukan oleh ketua tim/kelompok.</li>
                                                <li>Karya tulis dikirim ke Website Physics Festival dalam bentuk PDF dengan format : <strong>Nama
                                                    tim peserta_Asal Sekolah/Kampus_Judul tulisan.</strong> </li>
                                                <li>Pengiriman dimulai sejak 1 Desember 2022 – 15 Januari 2023.</li>
                                                <li>Naskah yang lolos ke tahap selanjutnya akan diumumkan di (web pf) dan
                                                    media sosial PF XXIV pada tanggal 20 Januari 2023 dan dipresentasikan
                                                    pada tanggal 1 Februari 2023 di Auditorium Universitas Andalas.</li>
                                                <li>Bagi peserta lomba yang tidak jadi mengikuti lomba LKTI, uang
                                                    pendaftaran tidak akan dikembalikan.</li>
                                                <li>Perlengkapan dari presentasi karya tulis dibawa langsung oleh peserta
                                                    lomba.</li>
                                                <li>Kwitansi atau struk pembayaran asli tidak boleh hilang dan harus dibawa
                                                    saat registrasi lomba.</li>
                                                <li>Keputusan dewan juri bersifat mutlak dan tidak bisa diganggu gugat</li>
                                            </ul><br>




                                        </div>
                                    </div>
                                    <div class="col-12 px-3 py-1">
                                        <div class="detail px-5 py-4" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-offset="300"
                                            data-aos-duration="1000">
                                            <div class="fw-bold text-uppercase">ketentuan penulisan</div><br>
                                            <ul>
                                                <li>Format penulisan karya tulis dapat dilihat di Website Physics Festival</li>
                                                <li>Berkas yang dikirimkan berupa hardcopy kesekretariatan Physics Festival
                                                    Himafi Unand, Kampus Limau Manis, atau softcopy saat pendaftaran online.
                                                </li>
                                                <li>Karya tulis/naskah/foto yang dilombakan belum pernah diikut sertakan
                                                    dalam perlombaan lain dan tidak meniru atau menjiplakkarya orang lain.
                                                    Jika terjadi pelanggaran maka peserta akan didiskualifikasi.</li>
                                            </ul><br>
                                            <a name="" id="" class="btn btn-primary" href="{{ route('dashboard') }}"
                                                role="button">Daftar sekarang!</a>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SIDEBAR -->
                <div class="col-12 col-lg-2 px-3">
                    <div class="row">
                        <div class="side p-4">
                            <div class="head fw-bold mb-3">
                                Kamu mungkin juga butuh ini:
                            </div>
                            <div class="sub">
                                <ul>
                                    <li><a href="">Item 1</a></li>
                                    <li><a href="">Item 2</a></li>
                                    <li><a href="">Item 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-end text-muted pt-1">contact us</div>
                        <div class="col-12 d-flex sosial d-flex ps-0 py-2 justify-content-end">
                            <a href="https://wa.me/082283012363/" target="_blank"><i
                                    class="fa-brands fa-whatsapp pe-3"></i></a>
                            <a href="https://www.instagram.com/physicsfestivalunand/" target="_blank"><i
                                    class="fa-brands fa-instagram pe-3"></i></a>
                            <a href="https://mail.google.com/mail/u/6/#inbox?compose=GTvVlcSHxTqXQQtTzwJbnJJWvzzMZRRSLVhGdvpqxQQMPHDlTvSTgkHMtgFQQZSCsTptZpmDmvLzg"
                                target="_blank"><i class="fa-brands fa-google-plus-g"></i>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>
@endsection
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                