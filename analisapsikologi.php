<?php
$koneksi    = mysqli_connect("localhost", "root", "", "eduprime");
$jumlah_siswa  = mysqli_query($koneksi, "SELECT jumlah FROM potensi_siswa order by id_potensi_siswa asc");
$potensi       = mysqli_query($koneksi, "SELECT nama_potensi FROM potensi_siswa order by id_potensi_siswa asc");


$jumlah_siswa_professional  = mysqli_query($koneksi, "SELECT jumlah FROM potensi_siswa WHERE nama_potensi='professional' order by id_potensi_siswa asc");
$potensi_professional       = mysqli_query($koneksi, "SELECT nama_potensi FROM potensi_siswa WHERE nama_potensi='professional' order by id_potensi_siswa asc");

?>

<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link href="assets/css/style.css" rel="stylesheet" />  

    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> 

    <!--  <script src="assets/js/chart-bar-demo.js"></script> -->
    <script src="assets/js/Chart.js"></script>
    <script src="assets/js/easypiechart.js"></script>
    <script src="assets/js/easypiechart-data.js"></script>

    <!-- high charts chart-->
    <script src="assets/js/highcharts.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

    <title>Eduprime</title>
</head>
<body>

    <section class="pemetaan_kurikulum">
        <div class="container">
            <div class="wrap_kurikulum row">
                <div class="bg_pemetaan_kurikulum" style="background-image: url('assets/image/bg_kurikulum.png');">
                    <div class="wrap_hasil_pemetaan_kurikulum row">
                        <div class="col-md-8 wrap_kurikulum_content">
                            <h3 class="hasil_pemetaan_kurikulum_text">hasil pemetaan kurikulum merdeka belajar</h3>
                            <span class="nama_siswa">Muhammad Ardi Timantaka</span>
                        </div>

                        <div class="col-md-4">
                            <button type="button" class="btn btn-outline-light btn-siswa">Siswa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_hasil_analisa">
        <div class="container">
            <div class="row">
                <!-- Bar Chart -->
                <div class="card shadow text-left card-analisa-card col-md-10 offset-md-1">
                    <div class="card-header card-analisa"><h5>hasil dan analisa psychology potential siswa</h5></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="box_analisa col-md-4 col-sm-6 col-xs-12">
                                <span class="analisa_psikologi_content"> adversity qoutient</span>
                                <div class="btn_content">
                                    <button type="button" class="btn btn-primary btn-analisa btn-lg" disabled>Diatas Rata-Rata</button>
                                </div>
                                <span class="analisa_psikologi_content"> emotional qoution</span>
                                <div class="btn_content">
                                    <button type="button" class="btn btn-danger btn-analisa btn-lg" disabled>Dibawah Rata-Rata</button>
                                </div>
                                <span class="analisa_psikologi_content">achievement motivation</span>
                                <div class="btn_content">
                                    <button type="button" class="btn btn-success btn-analisa btn-lg" disabled>Rata-Rata</button>
                                </div>
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div class="hasil_analisa_box">
                                    <div class="karakteristik_text">Adversity Qoutient
                                        <span class="karakteristik_indo">(Daya Juang)</span>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/minus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Memiliki kendali yang baik terhadap kesulitan yang  dihadapi, </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/minus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Mampu mengendalikan diri untuk tidak menyalahkan diri sendiri. </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/minus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Memiliki kemampuan yang baik untuk menempatkan tanggung jawab
                                            pada tempatnya.  </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hasil_analisa_box">
                                    <div class="karakteristik_text">Emotional qoutient
                                        <span class="karakteristik_indo">(Kecerdasan Emosi)</span>
                                    </div>
                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/minus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Memiliki toleransi yang kurang terhadap pendapat orang lain. </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/minus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Memiliki kemampuan yang kurang mengontrol emosi diri. </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/minus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Memiliki teknik persuasi yang kurang.
                                            </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/minus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Memiliki kesadaran yang kurang terhadap kekurangan diri dan
                                                berusaha keras memperbaikinya
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="hasil_analisa_box_bottom psikologi">
                                    <div class="karakteristik_text">Achievement Motivation
                                        <span class="karakteristik_indo">(Motivasi Berprestasi)</span>
                                    </div>
                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/minus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Memiliki keinginan yang cukup terhadap prestasi belajar. </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/minus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Mengikuti kemandirian yang cukup dalam belajar.
                                            </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/minus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Memiliki kesadaran yang cukup untuk mendapatkan pencapaian yang baik.
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>


    <section class="footer_eduprime">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap_footer">
                    <img class="img_logo_footer" src="assets/image/logo.jpg">
                </div>
            </div>
        </div>
    </section>

    <section class="pemetaan_kurikulum">
        <div class="container">
            <div class="wrap_kurikulum row">
                <div class="bg_pemetaan_kurikulum" style="background-image: url('assets/image/bg_kurikulum.png');">
                    <div class="wrap_hasil_pemetaan_kurikulum row">
                        <div class="col-md-8 wrap_kurikulum_content">
                            <h3 class="hasil_pemetaan_kurikulum_text">hasil pemetaan kurikulum merdeka belajar</h3>
                            <span class="nama_siswa">Muhammad Ardi Timantaka</span>
                        </div>

                        <div class="col-md-4">
                            <button type="button" class="btn btn-outline-light btn-siswa">Siswa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_hasil_analisa">
        <div class="container">
            <div class="row">
                <!-- Bar Chart -->
                <div class="card shadow text-left card-analisa-card col-md-10 offset-md-1">
                    <div class="card-header card-analisa"><h5>hasil dan analisa survei karakater siswa</h5></div>
                    <div class="card-body">
                        <div class="row analisa_survei_karakter">
                            <div class="wrap_img_analisa_psikologi col-md-2 col-sm-6 col-xs-12">
                                <img src="assets/image/bulanbintang.png">
                            </div>
                            <div class="wrap_box_analisa_survei_karakter col-md-10 col-sm-6 col-xs-12">
                                <div class="analisa_survei_karakter_title"> Beriman, Bertaqwa, dan Berakhlak Mulia</div>

                                <div class="content_analisa_survei_karakter row">
                                    <div class="col-md-2 col-sm-2 xol-xs-6 skor">
                                        <div class="skor_kategori_title"> Skor </div>
                                        <div class="sub_skor_kategori">18</div>
                                    </div>

                                    <div class="col-md-10 col-sm-10 xol-xs-6 kategori">
                                        <div class="skor_kategori_title"> Kategori </div>
                                        <div class="sub_skor_kategori">Membudaya</div>
                                    </div>
                                </div>

                                <div class="analisa_survei_karakter_detail">Sangat memahami ajaran agama dan kepercayaannya serta menerapkan pemahaman tersebut dalam
                                kehidupannya sehari-hari.</div>
                            </div>
                        </div>


                        <div class="row analisa_survei_karakter">
                            <div class="wrap_img_analisa_psikologi col-md-2 col-sm-6 col-xs-12">
                                <img src="assets/image/boladunia.png">
                            </div>
                            <div class="wrap_box_analisa_survei_karakter col-md-10">
                                <div class="analisa_survei_karakter_title"> Berkebhinekaan Global</div>

                                <div class="content_analisa_survei_karakter row">
                                    <div class="col-md-2 skor">
                                        <div class="skor_kategori_title"> Skor </div>
                                        <div class="sub_skor_kategori">15</div>
                                    </div>

                                    <div class="col-md-10 kategori">
                                        <div class="skor_kategori_title"> Kategori </div>
                                        <div class="sub_skor_kategori">Membudaya</div>
                                    </div>
                                </div>

                                <div class="analisa_survei_karakter_detail">Sangat mampu mempertahankan budaya luhur, lokalitas dan identitasnya, dan tetap berpikiran terbuka dalam
                                    berinteraksi dengan budaya lain, sehingga menumbuhkan rasa saling menghargai dan kemungkinan
                                terbentuknya budaya baru yang positif dan tidak bertentangan dengan budaya luhur bangsa.</div>
                            </div>
                        </div>

                        <div class="row analisa_survei_karakter">
                            <div class="wrap_img_analisa_psikologi col-md-2 col-sm-6 col-xs-12">
                                <img src="assets/image/human.png">
                            </div>
                            <div class="wrap_box_analisa_survei_karakter col-md-10">
                                <div class="analisa_survei_karakter_title"> Gotong Royong</div>

                                <div class="content_analisa_survei_karakter row">
                                    <div class="col-md-2 skor">
                                        <div class="skor_kategori_title"> Skor </div>
                                        <div class="sub_skor_kategori">19</div>
                                    </div>

                                    <div class="col-md-10 kategori">
                                        <div class="skor_kategori_title"> Kategori </div>
                                        <div class="sub_skor_kategori">Membudaya</div>
                                    </div>
                                </div>

                                <div class="analisa_survei_karakter_detail">Sangat mampu berkolaborasi, memiliki kepedulian yang sangat baik, dan mampu berbagi dengan sesama.</div>
                            </div>
                        </div>

                        <div class="row analisa_survei_karakter">
                            <div class="wrap_img_analisa_psikologi col-md-2 col-sm-6 col-xs-12">
                                <img src="assets/image/defense.png">
                            </div>
                            <div class="wrap_box_analisa_survei_karakter col-md-10">
                                <div class="analisa_survei_karakter_title"> Mandiri</div>

                                <div class="content_analisa_survei_karakter row">
                                    <div class="col-md-2 skor">
                                        <div class="skor_kategori_title"> Skor </div>
                                        <div class="sub_skor_kategori">12</div>
                                    </div>

                                    <div class="col-md-10 kategori">
                                        <div class="skor_kategori_title"> Kategori </div>
                                        <div class="sub_skor_kategori">Berkembang</div>
                                    </div>
                                </div>

                                <div class="analisa_survei_karakter_detail">Memiliki kesadaran akan diri dan situasi yang dihadapi dengan kategori baik serta mampu mengontrol diri
                                dalam mencapai tujuan.</div>
                            </div>
                        </div>

                        <div class="row analisa_survei_karakter">
                            <div class="wrap_img_analisa_psikologi col-md-2 col-sm-6 col-xs-12">
                                <img src="assets/image/atom.png">
                            </div>
                            <div class="wrap_box_analisa_survei_karakter col-md-10">
                                <div class="analisa_survei_karakter_title"> Bernalar Kritis</div>

                                <div class="content_analisa_survei_karakter row">
                                    <div class="col-md-2 skor">
                                        <div class="skor_kategori_title"> Skor </div>
                                        <div class="sub_skor_kategori">10</div>
                                    </div>

                                    <div class="col-md-10 kategori">
                                        <div class="skor_kategori_title"> Kategori </div>
                                        <div class="sub_skor_kategori">Berkembang</div>
                                    </div>
                                </div>

                                <div class="analisa_survei_karakter_detail">Mampu memperoleh dan memproses informasi dan gagasan, menganalisis dan mengevaluasi,
                                merefleksi pemikiran dan proses berpikir, serta mampu mengambil keputusan.</div>
                            </div>
                        </div>


                        <div class="row analisa_survei_karakter">
                            <div class="wrap_img_analisa_psikologi col-md-2 col-sm-6 col-xs-12">
                                <img src="assets/image/lampu.png">
                            </div>
                            <div class="wrap_box_analisa_survei_karakter col-md-10">
                                <div class="analisa_survei_karakter_title"> Kreatif</div>

                                <div class="content_analisa_survei_karakter row">
                                    <div class="col-md-2 skor">
                                        <div class="skor_kategori_title"> Skor </div>
                                        <div class="sub_skor_kategori">11</div>
                                    </div>

                                    <div class="col-md-10 kategori">
                                        <div class="skor_kategori_title"> Kategori </div>
                                        <div class="sub_skor_kategori">Baik</div>
                                    </div>
                                </div>

                                <div class="analisa_survei_karakter_detail">Sangat mampu memodifikasi dan menghasilokan sesuatu yang orisinil, bermakna, bermanfaat, dan
                                berdampak.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>


    <section class="footer_eduprime">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap_footer">
                    <img class="img_logo_footer" src="assets/image/logo.jpg">
                </div>
            </div>
        </div>
    </section>


        <!-- Script untuk membuat grafik batang -->
        <script type="text/javascript">

            Highcharts.chart('grafik_batang', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Grafik Mahasiswa Aktif'
                },
                subtitle: {
                    text: '3 Tahun Terakhir'
                },
                xAxis: {
                    categories: [
                    'Mata Pelajaran'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} Mhs Aktif</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Fakultas Ilmu Komputer',
                    data: [515]

                }, {
                    name: 'Fakultas Ekonomi',
                    data: [530]

                }, {
                    name: 'Fakultas Kesehatan',
                    data: [340]

                }, {
                    name: 'Fakultas Pertanian',
                    data: [200]

                },  {
                    name: 'Fakultas KIP',
                    data: [370]

                }]
            });
        </script>









        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>