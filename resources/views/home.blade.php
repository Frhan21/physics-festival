@extends('layouts.main')

@section('container')
    <main>
        <!-- HOME -->
        <section id="home" class="m-auto position-relative">
            <div class="home-header position-absolute px-5">
                <h1>Touching Physics <br>by Invisible Light</h1>
                <span>Dengan Cahaya yang Memberi Warna dalam kehidupan</span>
            </div>
            <!-- <img src="img/paslon-10.png" alt="" class="float-end"> -->
            <!-- <div class="home-img h-100 w-100 position-relative">
                <img src="img/paslon-10.png" alt="" class="float-end">
              </div> -->
        </section>

        <!-- ABOUT -->
        <section id="about" class="mx-auto my-4 mb-5">
            <div class="about text-center">ABOUT</div>
            <div class="about-sub text-center">WHAT WE DO</div>
            <div class="about-isi pt-3"><span class="fw-bold">Physics Festival</span> adalah <span
                    class="fst-italic">event</span> tahunan oleh Himpunan Mahasiswa Fisika Universitas Andalas yang telah
                diikuti oleh puluhan ribu siswa dari ratusan sekolah di seluruh Indonesia

                <br><br>Buang jauh-jauh stigma soal fisika itu hanya rumus, guru <span class="fst-italic">killer</span> dan
                'hadeh remedial lagi'. Melalui berbagai keseruan di Physics Festival ke-24, kamu akan sadar kalau fisika itu
                ternyata sangat menyenangkan sekali

                <br><br>Dengan tantangan dan semangat baru, dan demi menyebarkan keseruan fisika hingga ke seluruh
                Indonesia, kami melandasi Physics Festival tahun ini dengan tema "<span class="fw-bold">Touching Physics by
                    Invisible Light</span>"
            </div>
        </section>

        <div class="container h-100 mx-auto px-5">
            {{-- <div class="gallery py-4 text-center">
                GALERY
            </div>
            <div class="gallery-sub position-absolute">
                W<br>H<br>A<br>T<br><br>W<br>E<br><br>D<br>I<br>D
            </div>
            <div class="gambar container-md mx-auto ">
                <div class="row">
                    <div class=".gambar-kecil col-4">
                        <div class="row">
                            <div class="col-6 p-1 mx-0">
                                <img src="img/galeri.png" alt="">
                            </div>
                            <div class="col-6 p-1 mx-0">
                                <img src="img/galeri.png" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 p-1 mx-0">
                                <img src="img/galeri.png" alt="">
                            </div>
                            <div class="col-6 p-1 mx-0">
                                <img src="img/galeri.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-4 p-1 mx-0">
                        <img src="img/galeri.png" alt="">
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6 p-1 mx-0">
                                <img src="img/galeri.png" alt="">
                            </div>
                            <div class="col-6 p-1 mx-0">
                                <img src="img/galeri.png" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 p-1 mx-0">
                                <img src="img/galeri.png" alt="">
                            </div>
                            <div class="col-6 p-1 mx-0">
                                <img src="img/galeri.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div> --}}
        </div>
        </section>

        <!-- EVENTS -->
        <section id="events" class="mx-auto">
            <div class="events text-center">EVENTS</div>
            <div class="events-sub text-center">TOUCH THE UNTOUCHABLE</div>

            <!-- Grid card -->
            <div class="row d-flex justify-content-center">
                <!-- Baris 1 -->
                <div class="col-lg-4 col-6 my-4">
                    <div class="card position-relative">
                        <img src="img/poster-lomba/Slice 0.png" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <h3 class="card-title position-absolute">
                                <a>Grand Opening</a>
                            </h3>
                            <div class="card-text pe-1 position-absolute top-100">
                                <small class="text-muted">30 Januari 2023 - Auditorium UNAND</small><br>
                                <div class="detail-acara">Grand opening merupakan salah satu acara Physics Festival ke-24
                                    yang bersifat ceremonial<br>
                                </div>

                                <!-- <a href="" class="text-muted">Lihat selengkapnya ...</a><br> -->

                                <!-- <br><button type="button" class="btn btn-primary">Daftar Sekarang!</button> -->

                            </div>
                            <div class="bar-bawah position-absolute rounded-bottom w-100 bg-dark bottom-0 start-0"></div>
                        </div>
                    </div>
                </div>
                @foreach ($events as $event)
                    <div class="col-lg-4 col-6 my-4">
                        <div class="card position-relative">
                            <img src="img/poster-lomba/Slice {{ $loop->iteration }}.png" alt="" class="card-img">
                            <div class="card-img-overlay">
                                <h4 class="card-title position-absolute text-center">
                                    <a target="_blank">{{ $event->title }}</a>
                                </h4>
                                <div class="card-text pe-1 position-absolute top-100">
                                    {{-- <small class="text-muted">30 Januari 2023 - Auditorium UNAND</small><br>
                                <div class="detail-acara">Lomba adu kebolehan peserta lomba dalam menyelesaikan persoalan
                                    fisika pada kehidupan sehari-hari<br>
                                </div>

                                <a href="detail-events/2lomba-fisika/index.html" target="_blank"class="text-muted">Lihat
                                    selengkapnya ...</a><br> --}}

                                    <a href="/events-layout?title={{ $event->title }}" type="button"
                                        class="btn btn-primary">Lihat Selengkapnya</a>

                                </div>
                                <div class="bar-bawah position-absolute rounded-bottom w-100 bg-dark bottom-0 start-0">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-4 col-6 my-4">
                    <div class="card position-relative">
                        <img src="img/poster-lomba/Slice 8.png" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <h3 class="card-title position-absolute">
                                <a href="" target="_blank">Diskusi Guru</a>
                            </h3>
                            <div class="card-text position-absolute top-100">
                                <small class="text-muted">30 Januari 2023</small><br>
                                <div class="detail-acara pe-2">Dosen Fisika UNAND dan guru-guru pembimbing berkumpul
                                    membahas suatu topik fisika<br>
                                </div>
                            </div>
                            <div class="bar-bawah position-absolute rounded-bottom w-100 bg-dark bottom-0 start-0"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 my-4">
                    <div class="card position-relative">
                        <img src="img/poster-lomba/Slice 9.png" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <h3 class="card-title position-absolute">
                                <a href="" target="_blank">Physics Product</a>
                            </h3>
                            <div class="card-text position-absolute top-100">
                                <small class="text-muted">30 Januari 2023</small><br>
                                <div class="detail-acara pe-2">Physics product adalah salah satu bentuk penyajian dari
                                    panitia yang didalamnya memuat hasil kreativitas para kontestan lomba madding
                                    competition,</div>

                            </div>
                            <div class="bar-bawah position-absolute rounded-bottom w-100 bg-light bottom-0 start-0"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 my-4">
                    <div class="card position-relative">
                        <img src="img/poster-lomba/Slice 10.png" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <h3 class="card-title position-absolute">
                                <a href="" target="_blank">Physics Inventor</a>
                            </h3>
                            <div class="card-text position-absolute top-100">
                                <small class="text-muted">30 Januari 2023</small><br>
                                <div class="detail-acara pe-2">Physics inventor adalah salah satu acara pf 24 yang
                                    mengenakan pakaian beserta aksesoris yang berhubungan dengan fisika.</div>
                            </div>
                            <div class="bar-bawah position-absolute rounded-bottom w-100 bg-light bottom-0 start-0"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 my-4">
                    <div class="card position-relative">
                        <img src="img/poster-lomba/Slice 12.png" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <h3 class="card-title selfie position-absolute">
                                <a href="detail-events/13selfie-groufie/index.html" target="_blank">Selfie and Groufie
                                    Competition</a>
                            </h3>
                            <div class="card-text position-absolute top-100">
                                <div class="detail-acara pe-2">Selfie adalah sebuah trend masa kini, dimana seseoang
                                    memotret dirinya sendiri, sedangkan groufie adalah kegiatan memotret yang dilakuka
                                    oleh...<a href="events-layouts/13selfie-groufie/index.html" target="_blank"
                                        class="text-muted"> lihat selengkapnya</a><br>
                                </div>
                                <br>
                                <a href="/events-layout?title=Selfie%20and%20Groufie%20Competition" type="button"
                                    class="btn btn-primary">Lihat Selengkapnya</a>

                            </div>
                            <div class="bar-bawah position-absolute rounded-bottom w-100 bg-dark bottom-0 start-0"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 my-4">
                    <div class="card position-relative">
                        <img src="img/poster-lomba/Slice 11.png" alt="" class="card-img">
                        <div class="card-img-overlay">
                            <h3 class="card-title position-absolute">
                                <a href="" target="_blank">Closing</a>
                            </h3>
                            <div class="card-text position-absolute top-100">
                                <small class="text-muted">1 Februari 2023</small><br>
                                <div class="detail-acara pe-2">Closing adalah acara yerakhir dari rangkaian pf 24, berisi
                                    pengumuman dan pembagian hadiah pemenang semua lomba.</div>
                            </div>
                            <div class="bar-bawah position-absolute rounded-bottom w-100 bg-light bottom-0 start-0"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- CONTACTS -->
        <section id="contacts" class="mx-auto my-0">
            <div class="container-lg">
                <div class="row h-100 position-relative overflow-hidden">
                    <div class="contact-latar col-5 p-0 position-relative text-end overflow-hidden">
                        <div
                            class="contact-brand px-3 mx-3 d-flex flex-column position-absolute top-50 end-0 translate-middle-y">
                            <div class="brand ">
                                <img src="./img/PF24(3).png" alt="">
                            </div>
                            <div class="detail position-absolute end-0">
                                <div class="alamat">Kesekretariatan HIMAFI, Fakultas MIPA, Universitas Andalas</div>
                                <div class="email">physicsfestivalunand@gmail.com</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 p-0 ps-5">
                        <div class="contact-menu pt-5">
                            <div class="header pb-3">
                                Connect
                            </div>
                            <div class="menu d-flex flex-column">
                                <a href="https://wa.me/082284946656">WhatsApp</a>
                                <a href="https://www.instagram.com/physicsfestivalunand/">Instagram</a>
                                <a href="https://www.youtube.com/channel/UC2Rvg9-UGQIFmhkH_kRGTAQ">YouTube</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-2 p-0 mx-4">
                        <div class="contact-menu kanan pt-5">
                            <div class="header pb-3">
                        Other
                      </div>
                      <div class="menu d-flex flex-column">
                        <a href="">FAQ</a>
                        <a href="">Aturan lomba</a>
                        <a href="">Cara daftar akun</a>
                      </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </main>
@endsection
