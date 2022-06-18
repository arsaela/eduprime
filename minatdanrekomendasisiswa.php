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
                        <div class="card-header card-analisa"><h5>minat dan rekomendasi siswa</h5></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="box_progress col-md-12 col-sm-12 col-xs-12">



                                    <div class="hasil_analisa_box">
                                        <div class="karakteristik_text">Berdasarkan Minat</div>
                                        <span class="hasil_analisa_ket">Berdasarkan jawaban yang anda berikan pada kuisioner awal, menunjukan hasil bahwa anda berminat untuk
                                        mempelajari mata pelajaran sebagai berikut:</span>

                                        <div class="wrap_karakteristik_box_all">
                                            <div class="wrap_karakteristik row">
                                                <div class="icon-hasil_analisa_box col-md-1">
                                                    <img src="assets/image/checklist.png">
                                                </div>
                                                <div class="hasil_analisa_content col-md-11">
                                                    <span class="hasil_analisa_ket">Matematika </span>
                                                </div>
                                            </div>

                                            <div class="wrap_karakteristik row">
                                                <div class="icon-hasil_analisa_box col-md-1">
                                                    <img src="assets/image/checklist.png">
                                                </div>
                                                <div class="hasil_analisa_content col-md-11">
                                                    <span class="hasil_analisa_ket">Fisika
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="wrap_karakteristik row">
                                                <div class="icon-hasil_analisa_box col-md-1">
                                                    <img src="assets/image/checklist.png">
                                                </div>
                                                <div class="hasil_analisa_content col-md-11">
                                                    <span class="hasil_analisa_ket">Informatika
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="wrap_karakteristik row">
                                                <div class="icon-hasil_analisa_box col-md-1">
                                                    <img src="assets/image/checklist.png">
                                                </div>
                                                <div class="hasil_analisa_content col-md-11">
                                                    <span class="hasil_analisa_ket">Geografi
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="hasil_analisa_box">
                                        <div class="karakteristik_text">Berdasarkan Hasil Asesmen</div>
                                        <span class="hasil_analisa_ket">Berdasarkan hasil asesmen yang telah Anda kerjakan, menunjukan hasil bahwa anda berminat untuk
                                        mempelajari mata pelajaran sebagai berikut:</span>

                                        <div class="wrap_karakteristik_box_all">
                                            <div class="wrap_karakteristik row">
                                                <div class="icon-hasil_analisa_box col-md-1">
                                                    <img src="assets/image/checklist.png">
                                                </div>
                                                <div class="hasil_analisa_content col-md-11">
                                                    <span class="hasil_analisa_ket">Matematika </span>
                                                </div>
                                            </div>

                                            <div class="wrap_karakteristik row">
                                                <div class="icon-hasil_analisa_box col-md-1">
                                                    <img src="assets/image/checklist.png">
                                                </div>
                                                <div class="hasil_analisa_content col-md-11">
                                                    <span class="hasil_analisa_ket">Fisika
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="wrap_karakteristik row">
                                                <div class="icon-hasil_analisa_box col-md-1">
                                                    <img src="assets/image/checklist.png">
                                                </div>
                                                <div class="hasil_analisa_content col-md-11">
                                                    <span class="hasil_analisa_ket">Informatika
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="wrap_karakteristik row">
                                                <div class="icon-hasil_analisa_box col-md-1">
                                                    <img src="assets/image/checklist.png">
                                                </div>
                                                <div class="hasil_analisa_content col-md-11">
                                                    <span class="hasil_analisa_ket">Geografi
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="hasil_analisa_box bottom">
                                        <div class="karakteristik_text">Rekomendasi Rumpun Program Studi (Prodi)</div>
                                        <span class="hasil_analisa_ket">Berdasarkan minat yang Anda pilih dan berdasarkan hasil tes kompetensi yang telah Anda kerjakan,
                                            Rekomendasi pilihan  Program studi yang akan membawa Anda pada prestasi dan karir yang lebih optimal
                                        serta  masa depan gemilang adalah sebagai berikut:</span>

                                        <div class="wrap_karakteristik_box_all">
                                            <div class="wrap_karakteristik row">
                                                <div class="icon-hasil_analisa_box col-md-1">
                                                    <img src="assets/image/checklist.png">
                                                </div>
                                                <div class="hasil_analisa_content col-md-11">
                                                    <span class="hasil_analisa_ket">Ilmu Teknik </span>
                                                </div>
                                            </div>

                                            <div class="wrap_karakteristik row">
                                                <div class="icon-hasil_analisa_box col-md-1">
                                                    <img src="assets/image/checklist.png">
                                                </div>
                                                <div class="hasil_analisa_content col-md-11">
                                                    <span class="hasil_analisa_ket">Ilmu Kesehatan
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