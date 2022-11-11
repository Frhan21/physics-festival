@extends('events-layout.main')
@section('container')
    <main>
        <div class="content p-0 mt-5 mb-5">
            <div class="row g-2">
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <img src="../img/poster.png" alt="" style="border: 1px solid tomato;">
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row px-1">

                                <!-- WAKTU DAN LOKASI -->
                                <div class="row g-0"> <!-- WAKTU DAN LOKASI -->
                                    <div class="col-6 col-lg-6 py-3 ps-3 pe-1">
                                        <div class="waktu ps-5 d-flex flex-row justiify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 248H128V192H48V248zM48 296V360H128V296H48zM176 296V360H272V296H176zM320 296V360H400V296H320zM400 192H320V248H400V192zM400 408H320V464H384C392.8 464 400 456.8 400 448V408zM272 408H176V464H272V408zM128 408H48V448C48 456.8 55.16 464 64 464H128V408zM272 192H176V248H272V192z"/></svg>
                                            <div class="d-flex flex-column ps-3">
                                                <div class="head fw-bold">
                                                    Waktu
                                                </div>
                                                <div class="sub">
                                                    xx/yy/zzzz
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-lg-6 ps-1 pe-3 py-3">
                                        <div class="waktu ps-5 d-flex flex-row justiify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
                                            <div class="d-flex flex-column ps-3">
                                                <div class="head fw-bold">
                                                    Lokasi
                                                </div>
                                                <div class="sub">
                                                    Lokasi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- KETERANGAN LOMBA -->
                                <div class="row g-0">
                                    <div class="col-12 px-3 mt-0">
                                        <div class="detail p-5">
                                            Keterangan lomba (aturan, dll)<br>

                                            <br><a name="" id="" class="btn btn-primary " href="#" role="button">Daftar sekarang!</a>
                                        </div>
                                    </div>
                                    <div class="col-12 px-3 mt-3">
                                        <div class="detail p-5">
                                            Keterangan lomba (aturan, dll)<br>

                                            <br><a name="" id="" class="btn btn-primary " href="#" role="button">Daftar sekarang!</a>
                                        </div>
                                    </div>
                                    <div class="col-12 px-3 mt-3">
                                        <div class="detail p-5">
                                            Keterangan lomba (aturan, dll)<br>

                                            <br><a name="" id="" class="btn btn-primary " href="#" role="button">Daftar sekarang!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SIDEBAR -->
                <div class="col-12 side mt-4 col-lg-2 px-3 py-4">
                    <div class="side p-2">
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

            </div>
        </div>
    </main>
@endsection
