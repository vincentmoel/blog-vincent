@extends('layout.main')

@section('jumbotron')
    <header class="masthead" style="background-image: url('assets/img/ragam-dialog.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>Ragam Dialog</h1>
                        <span class="meta">
                            16 April 2022
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
                    <h2>Apa itu Ragam Dialog?</h2>
                    <p>
                        Ragam dialog adalah cara pengorganisasian berbagai teknik dialog interaktif yang memungkinkan
                        terjadinya komunikasi antara manusia dengan komputer.
                    </p>

                </div>

            </div>

            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2>Sifat Penting yang Dimiliki Ragam Dialog</h2>
                    <p>
                    <ol>
                        <li>Inisiatif</li>
                        Inisiatif merupakan sifat dasar dari sembarang dialog, karena inisiatif akan menentukan keseluruhan
                        ragam komunikasi sehingga dapat ditentukan tipe-tipe pengguna yang dituju oleh sistem yang dibangun.

                        <li>Keluwesan</li>
                        Sistem yang luwes atau fleksibel adalah sistem yang mempunyai kemampuan untuk mencapai suatu tujuan
                        lewat sejumlah cara yang berbeda.

                        <li>Kompleksitas</li>
                        Seorang perancang sistem tidak perlu membuat atau menggunakan antarmuka lebih dari apa yang
                        diperlukan, karena tidak ada keuntungan yang dapat diperoleh, malahan akan menjadikan
                        implementasinya menjadi lebih sukar.

                        <li>Kekuatan</li>
                        Kekuatan didefinisikan sebagai jumlah kerja yang dapat dilakukan oleh sistem untuk setiap perintah
                        yang diberikan oleh pengguna.

                        <li>Beban Informasi</li>
                        Agar penyampaian informasi itu dapat berdaya guna dan berhasil guna, beban informasi yang terkandung
                        didalam suatu ragam dialog seharusnya disesuaikan dengan tingkat pengguna. Jika beban itu terlalu
                        tinggi, pengguna akan merasa sangat terbebani yang akan berakibat negatif dalam hal kemampuan
                        pengolahan kognitif dan tingkah laku pengguna akan merasa bahwa sistemnya seolah-olah menyembunyikan
                        kinerja penggunanya sendiri.

                        <li>Konsistensi</li>
                        Konsistensi harus diterapkan pada perancangan antarmuka pengguna. Contoh pada format pemasukan data
                        dan format tampilan data.

                        <li>Umpan Balik</li>
                        Pada program komputer yang tidak ramah, pengguna sering harus menunggu proses yang yang sedang
                        berjalan, sementara pengguna tidak mengetahui status proses saat itu, apakah sedang melakukan
                        komputasi, sedang mencetak hasil, atau bahkan komputernya macet (hang) karena suatu sebab. Program
                        yang baik akan selalu memberikan umpan balik kepada pengguna atas apa yang dikerjakan saat itu.

                        <li>Observabilitas</li>
                        Sistem dikatakan mempunyai sifat observabilitas apabila sistem itu berfungsi secara benar dan nampak
                        sederhana bagi pengguna meskipun sesungguhnya pengolahan secara internalnya sangat rumit.

                        <li>Kontrolabilitas</li>
                        Kontrolabilitas merupakan kebalikan dari observabilitas, dan hal ini berimplikasi bahwa sistem
                        selalu berada dibawah kontrol pengguna.

                        <li>Efisiensi</li>
                        Efisiensi dalam sistem komputer yang melibatkan unjuk kerja manusia dan komputer secara bersama-sama
                        adalah hasil yang diperoleh dari kerjasama antara manusia dan komputer.

                        <li>Keseimbangan</li>
                        Strategi yang diambil dalam perancangan sistem manusia komputer haruslah dapat membagi-bagi
                        pekerjaan antara manusia dan komputer seoptimal mungkin. Manusia dapat menangani persoalan yang
                        berurusan dengan perubahan lingkungan, pengetahuan yang tidak pasti dan tidak lengkap, sementara
                        komputer lebih cocok untuk pekerjaan yang bersifat perulangan dan rutin, penyimpanan dan pencarian
                        kembali data secara handal dan memberikan hasil komputasi yang sangat akurat dalam hal pengolahan
                        numerik dan logika.


                    </ol>
                    </p>

                </div>

            </div>

            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2>Kategori Ragam Dialog</h2>
                    <p>
                    <ol>
                        <li>Dialog Berbasis Perintah Tunggal (Command Line Dialogue)</li>
                        Perintah-perintah tunggal yang dapat dioperasikan biasanya tergantung dari sistem komputer yang
                        dipakai, dan berada dalam domain yang disebut bahasa perintah (command language). Bahasa perintah
                        harus dirancang sedemikian rupa shg mudah dipelajari dan diingat oleh kebanyakan pengguna, Contoh :
                        Perintah- perintah yang dimiliki oleh DOS dan UNIX.

                        <li>Dialog Berbasis Bahasa Pemrograman</li>
                        Dialog berbasis bahasa pemrograman merupakan ragam dialog yang memungkinkan pengguna untuk mengemas
                        sejumlah perintah kedalam suatu berkas yang sering disebut batch file. Perintah yang dituliskan
                        tidak harus menggunakan salah satu bahasa pemrograman baik aras rendah maupun aras tinggi seperti
                        assembler, Pascal, C, FORTRAN atau BASIC, tetapi tetap harus mengikuti aturan-aturan tertentu.

                        <li>Antarmuka Berbasis Bahasa Alami (Natural Language Interface)</li>
                        Dengan melihat pada perbedaan bahasa yang digunakan oleh manusia dan komputer, maka sebuah sistem yang mengimplementasikan dialog berbasis bahasa alami perlu mempunyai sebuah sistem penterjemah yang dapat menterjemahkan suatu kalimat pada dua arah.

                        <li>Sistem Menu</li>
                        Menu adalah daftar sejumlah pilihan dalam jumlah terbatas. Jenis menu ada tiga yaitu : menu tunggal, Linear Sequences dan Multiple Menus, Tree-structured Menus

                        <li>Dialog Berbasis Pengisian Borang</li>
                        Dialog berbasis pengisian borang (form filling dialogue) merupakan suatu penerapan langsung dari aktifitas pengisian borang dalam kehidupan sehari- hari ke dalam sistem komputer.

                        <li>Dialog Berbasis Ikon</li>
                        Antarmuka sering memanfaatkan simbol-simbol dan tanda-tanda dari kehidupan kita sehari-hari untuk memberitahukan pengguna akan kemampuan dan fasilitas yang dimiliki oleh suatu program aplikasi. Ragam dialog yang banyak menggunakan simbol-simbol dan tanda-tanda untuk menunjukkan suatu aktifitas tertentu disebut dengan antarmuka berbasis ikon (icon based user interface).

                        <li>Sistem Windows</li>
                        Sistem penjendelaan adalah sistem antarmuka yang memungkinkan pengguna untuk menampilkan berbagai informasi ke dalam bagian-bagian layar yang tidak saling mempengaruhi.

                        <li>Manipulasi Langsung</li>
                        Manipulasi langsung merupakan Ragam dialog yang menyajikan langsung suatu aktifitas oleh sistem kepada pengguna, sehingga aktifitas itu akan dikerjakan oleh sistem komputer. Ketika pengguna memberikan langsung instruksi lewat manipulasi langsung dari semacam kenyataan maya (virtual reality) yang terpampang lewat tampilan yang muncul di layar. 

                        <li>Dialog Berbasis Interaksi Grafik</li>
                        Dialog berbasis interaksi grafik (GUI) merupakan dialog yang menggunakan bentuk-bentuk visual, seperti grafik, ikon dan animasi. Contoh : Pada Microsoft Word ketika kursor mendekati suatu ikon akan muncul pesan yang menunjukkan arti ikon tersebut.
                    </ol>
                    </p>

                </div>

            </div>


        </div>
    </article>
@endsection
