@extends('layout.main')

@section('jumbotron')
    <header class="masthead" style="background-image: url('assets/img/komputer.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>Komputer</h1>
                        <span class="meta">
                            08 April 2022
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection


@section('container')
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2>Apa itu Komputer?</h2>
                    <p>Sistem elektronik yang dapat dipergunakan untuk memanipulasi data dengan cepat dan tepat serta
                        dirancang dan diorganisasikan supaya secara otomatis menerima dan menyimpan data input,
                        memprosesnya, dan menghasilkan output di bawah pengawasan suatu langkah instruksi program yang
                        tersimpan di memori.

                    </p>
                </div>

            </div>

            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2>Komponen Komputer</h2>
                    <p>
                        <ol>
                            <li>Input Device</li>
                            <ol type="a">
                                <li>Keyboard</li>
                                <li>Mouse</li>
                                <li>Layar Sentuh</li>
                                <li>Pen</li>
                            </ol>

                            <li>Output Device</li>
                            <ol type="a">
                                <li>Layar</li>
                                <li>Scanner</li>
                                <li>Printer</li>
                            </ol>

                            <li>Memory</li>
                            <ol type="a">
                                <li>RAM (Random Access Memory)</li>
                                <li>CD</li>
                                <li>DVD</li>
                                <li>Harddisk</li>
                            </ol>

                        </ol>
                    </p>
                </div>

            </div>
            
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2>Macam-macam Keyboard</h2>
                    <p>
                        <ol>
                            <li>QUERTY</li>
                            <li>Alphabetic</li>
                            <li>DVORAK</li>
                            <li>Chord</li>
                            <li>Special Keyboard</li>
                            <li>Keyboard Proyeksi</li>
                            <li>Keyboard Jari</li>
                            <li>Keyboard Kitty</li>
                        </ol>
                    </p>
                    
                </div>

            </div>
        </div>
    </article>
@endsection
