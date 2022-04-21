@extends('layout.main')

@section('jumbotron')
    <header class="masthead" style="background-image: url('assets/img/interaksi.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>Interaksi</h1>
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
                    <h2>Apa itu Interaksi?</h2>
                    <p>
                        Dialog manusia dan sistem dipengaruhi oleh bentuk interface. Interaksi mengambil tempat antara sosial dan organisasi framework yang mempengaruhi user dan sistem.
                    </p>
                    
                </div>

            </div>
            
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2>Terminologi Interaksi?</h2>
                    <p>
                        <ol>
                            <li>Domain</li>
                            Area keahlian dan pengetahuan pada kegiatan dunia nyata
                            
                            <li>Goal</li>
                            Menginginkan hasil dari suatu task/tugas

                            <li>Task</li>
                            Merupakan operasi untuk memanipulasi muatan dari domain

                            <li>Intention</li>
                            Aksi khusus untuk menemukan tujuan yang diinginkan

                            <li>Task Analysis</li>
                            Identifikasi ruang masalah yang berkaitan dengan domain, tujuan, tugas, dan maksud

                            <li>System</li>
                            Aplikasi Komputer

                            <li>Task Language</li>
                            Bahasa user, menjelaskan atribut domain yang relevan terhadap kondisi pengguna

                            <li>Core Language</li>
                            Bahasa sistem yang menjelaskan atribut domain yang relevan terhadap kondisi sistem

                        </ol>
                    </p>

                </div>

            </div>

            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2>Siklus Interaksi</h2>
                    <p>
                        <img src="assets/img/siklus-interaksi.png" class="img-fluid" alt="">
                        <ol>
                            <li>Goal</li>
                            Menetapkan tujuan

                            <li>Execution</li>
                            <ol type="a">
                                <li>Membentuk intention</li>
                                <li>Menetapkan rangkaian aksi</li>
                                <li>Melaksanakan aksi</li>
                            </ol>
                            
                            <li>Evaluation</li>
                            <ol type="a">
                                <li>Melihat kondisi sistem</li>
                                <li>Menginterpretasian kondisi sistem</li>
                                <li>Mengebaluasi kondisi sistem sehubungan dengan goal dan intention</li>
                            </ol>
                        </ol>
                    </p>
                    
                </div>

            </div>
        </div>
    </article>
@endsection
