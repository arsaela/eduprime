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

    <section class="section_top">
        <div class="container">
            <div class="wrap_all_content_header_pemetaan row">               
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 wrap_left_header">
                    <h2 class="student_assessement_report_text">STUDENT ASSESSEMENT REPORT</h2>
                    <span class="pemetaan_kompetensi">Pemetaan Kompetensi</span>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wrap_right_header">
                    <div class="bg_top_header_right" style="background-image: url('assets/image/frame.png');">
                       <img class="img_logo_eduprime_text" src="assets/image/logo.jpg">
                    <div class="display_425">
                        <h2 class="student_assessement_report_text">STUDENT ASSESSEMENT REPORT</h2>
                        <span class="pemetaan_kompetensi">Pemetaan Kompetensi</span>
                    </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="profile_siswa">
        <div class="container">
            <div class="row">
                <div class="wrap_box_profile_siswa col-md-10 offset-md-1">
                    <div class="detail_profile_box row">

                        <div class="wrap_detail_profile_item left col-md-6">
                            <img class="logo_detail_profile_box" src="assets/image/Vector.png">
                            <div class="profile_text_box">
                                <span class="profile_name_text">Nama Sekolah</span> <br>
                                <span class="profile_name_data">Sma N 1 Eduprime Yogyakarta</span>
                            </div>

                            <img class="logo_detail_profile_box" src="assets/image/Vector1.png">
                            <div class="profile_text_box">
                                <span class="profile_name_text">Nama Siswa</span> <br>
                                <span class="profile_name_data">Muhammad Andi Riyadi</span>
                            </div>
                        </div>

                        <div class="wrap_detail_profile_item right col-md-6">
                            <img class="logo_detail_profile_box" src="assets/image/Vector2.png">
                            <div class="profile_text_box">
                                <span class="profile_name_text">Tanggal Pelaksanaan</span> <br>
                                <span class="profile_name_data">Selasa, 24-Maret-2022</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>    
    </section>


    <section class="chart_siswa">
        <div class="container">
            <div class="row">
                <!-- Bar Chart -->
                <div class="card shadow text-left card-analisa-card col-md-10 offset-md-1">
                    <div class="card-header card-analisa"><h5>Grafik Dan Tabel Pencapaian Kognitif</h5></div>
                    <div class="card-body col-md-4">
                        <div id="grafik_batang" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                    <div class="card-footer text-muted">Rata-Rata</div>
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
                    <div class="card-header card-analisa"><h5>hasil dan analisa learning style siswa</h5></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="box_progress col-md-4 col-sm-6 col-xs-12">
                                <span class="progressbar_text"> Visual (70)</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progressbar_text"> auditori (40)</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progressbar_text">kinestetik (80)</span>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div class="hasil_analisa_box">
                                    <div class="karakteristik_text">Karakteristik</div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/pencil.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Rapi dan Teratur </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/pencil.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Berbicara dengan cepat
                                            sedang belajar </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/pencil.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Lebih mudah mengingat apa yang dilihat daripada apa yang didengar  </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/pencil.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Biasanya tidak mudah terganggu oleh keributan atau suara berisik ketika
                                            sedang belajar </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/pencil.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Lebih suka membaca daripada dibacakan </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/pencil.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Lebih tertarik pada bidang seni (lukis, pahat, gambar) dari pada musik </span>
                                        </div>
                                    </div>

                                </div>




                                <div class="hasil_analisa_box">
                                    <div class="karakteristik_text">Saran Strategi Belajar</div>
                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/plus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Gunakan warna yang mencolok untuk menandai hal-hal yang penting. </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/plus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Gunakan gambar untuk merangkum materi. </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/plus.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Gunakan video pembelajaran untuk memahami materi.
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="hasil_analisa_box">
                                    <div class="karakteristik_text">saran untuk guru</div>
                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/note.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Ajarkan siswa siswi anda menggunakan mind map (peta konsep) dengan
                                                berbagai warna, karena siswa dengan kemampuan visual mudah mengingat
                                            dan memahami materi pada mind map dengan warna yang bervariasi. </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/note.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Jika memungkinkan, putarkan video pembelajaran.
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="hasil_analisa_box_bottom">
                                    <div class="karakteristik_text">saran untuk orang tua</div>
                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/checklist.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Jika putra-putri Anda suka menggambar di buku catatan mereka,
                                                jangan terburu-buru untuk memarahi atau melarang mereka.
                                                Kemungkinan menggambar adalah cara putra putri Anda memahami dan
                                            mengkonstruk materi yang diajarkan di sekolah. </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/checklist.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Bantulah putra-putri Anda untuk menandai dengan warna yang mencolok
                                                pada hal-hal yang penting dalam materi yang mereka pelajari.

                                            </span>
                                        </div>
                                    </div>

                                    <div class="wrap_karakteristik row">
                                        <div class="icon-hasil_analisa_box col-md-1">
                                            <img src="assets/image/checklist.png">
                                        </div>
                                        <div class="hasil_analisa_content col-md-11">
                                            <span class="hasil_analisa_ket">Bantulah putra-putri Anda untuk memilih video pembelajaran dan
                                                damping mereka dalam belajar.


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
                text: 'Grafik dan Tabel Pencapaian Kognitif'
            },
            subtitle: {
                text: ''
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
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y} </b></td></tr>',
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
                name: 'Bahasa Indonesia',
                data: [90]

            }, {
                name: 'Bahasa Inggris',
                data: [80]

            }, {
                name: 'Kimia',
                data: [85]

            }, {
                name: 'Matematika',
                data: [85]

            },{
                name: 'Fisika',
                data: [80]

            }, {
                name: 'Biologi',
                data: [80]

            },{
                name: 'Informatika',
                data: [90]

            },{
                name: 'Ekonomi',
                data: [85]

            }, {
                name: 'Geografi',
                data: [80]

            }, {
                name: 'Sosiologi',
                data: [75]

            },  {
                name: 'Prakarya',
                data: [80]
            }, {
                name: 'Seni dan Vokasi',
                data: [75]
            }, {
                name: 'TPA Verbal',
                data: [75]
            }, {
                name: 'TPA Numerik',
                data: [90]
            }, {
                name: 'TPA Spesial',
                data: [70]

  

            }]
        });
    </script>









    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>