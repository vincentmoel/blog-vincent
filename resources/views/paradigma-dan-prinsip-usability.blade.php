@extends('layout.main')

@section('jumbotron')

<header class="masthead" style="background-image: url('assets/img/paradigma.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Paradigma dan Prinsip Usability</h1>
                    <span class="meta">
                        23 Maret 2022
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
                <h2>Apa itu Paradigma?</h2>
                <p>Paradigma adalah sistem interaktif yang berhasil /sukses yang pada umumnya diyakini akan meningkatkan dayaguna (usability) dari sistem tersebut.
                </p>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2>Jenis-jenis Paradigma</h2>
                <p>
                    <ol>
                        <li>Time Sharing</li>
                        Satu komputer yang mampu mendukung multiple user
                        
                        <li>Video Display Units(VDU)</li>
                        Dapat memvisualkan dan manipulasi informasi yang sama dalam representasi yang berbeda. 
                        
                        <li>Sistem Window dan Interface WIMP (Windows, Icons, Menu, Pointer)</li>
                        Sistem ini memungkinkan user untuk berinteraksi dengan komputer dalam beberapa aktivitas/topik yang berbeda

                        <li>Programming Toolkits</li>
                        Alat bantu pemrograman memungkinkan programmer meningkatkan produktivitas

                        <li>Komputer Pribadi</li>
                        Mesin kecil yang powerful dan dirancang untuk user tunggal

                        <li>Manipulasi Langsung</li>
                        Memungkinkan user mengubah keadaan internal sistem dengan cepat.

                        <li>Computer Supported Cooperative Work</li>
                        Memungkinkan untuk komunikasi antara beberapa mesin (PC) yang terpisah dalam satu kesatuan grup.
                    </ol>
                </p>
            </div>

            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2>Apa itu Usability?</h2>
                <p>Berasal dari kaya usable yang secara umum artinya adalah dapat digunakan dengan baik. Sesuatu dapat dikatakan berguna dengan baik apabila kegagalan dalam penggunaannya dapat dihilangkan atau diminimalkan serta memberi manfaat dan kepuasan pada pengguna. </p>
            </div>

            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2>Prinsip-prinsip Usability</h2>
                <p>
                    <ol>
                        <li>Learnability</li>
                        Kemudahan bagi pengguna untuk dapat menggunakan sistem secara optimal. Dapat mengurangi waktu dan biaya untuk mempelajari sistem.
                        
                        <li>Flexibility</li>
                        Variasi model bagi pengguna dan sistem dalam bertukar informasi. Memungkinkan untuk melakukan reorganisasi tugas maupun bisnis.

                        <li>Effectiveness</li>
                        Tingkat dukungan yang disediakan bagi pengguna untuk mencapai tujuannya dengan sukses dan memberikan penilaian tingkah laku yang diarakan oleh suatu tujuan
                    </ol>
                </p>
            </div>
        </div>
    </div>
</article>



@endsection
