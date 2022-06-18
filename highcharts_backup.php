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

    <title>Tutorial Bootstrap 4 - www.malasngoding.com</title>
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
                <div class="card shadow text-left grafik-siswa-card col-md-10 offset-md-1">
                    <div class="card-header grafik-siswa"><h5>Grafik Dan Tabel Pencapaian Kognitif</h5></div>
                    <div class="card-body col-md-4">
                        <div id="grafik_batang" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                    <div class="card-footer text-muted">2 days ago</div>
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
                    '2016',
                    '2017',
                    '2018'
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
                data: [515,540,610]

            }, {
                name: 'Fakultas Ekonomi',
                data: [530,567,613]

            }, {
                name: 'Fakultas Kesehatan',
                data: [340,360,395]

            }, {
                name: 'Fakultas Pertanian',
                data: [200,230,180]

            },  {
                name: 'Fakultas KIP',
                data: [370,420,450]

            }]
        });
    </script>






  <section class="top_header">
        <div class="container">
            <div class="wrap_all_content_header row">               
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 wrap_left_header">
                    <img class="img_logo_brain_header" src="assets/image/brain.png"/>
                    <p class="detail_logo">
                        <span class="label_report_sekolah">REPORT SEKOLAH</span><br>
                        <span class="label_sta_header_kiri">Specific Talent Analysis - SMK</span>
                    </p>
                </div>

                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 wrap_right_header">
                    <div class="bg_peta_indonesia" style="background-image: url('assets/image/peta_indonesia.png');">

                        <div class="wrap_detail_right_header col-lg-5 col-md-6 col-md-offset-1 col-sm-6 col-xs-6">
                            <img class="img_logo_sta_right_header" src="assets/image/logo_sta_putih.png">
                        </div>                       

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                            <img class="img_logo_eduprime" src="assets/image/logo_eduprime.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="persentase_potensi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap_box_persentase_potensi">
                    <div class="list_persentase_potensi">
                        <span class="label_persentase_potensi"> PERSENTASE KECENDERUNGAN POTENSI SISWA </span>
                    </div>
                    <div class="col-md-12 wrap_detail_persentase_potensi row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 eduprime_graduate">
                            <img class="img_logo_graduate" src="assets/image/graduate.png">
                            <div class="label_smk_1_eduprime">
                                SMK N 1 EDUPRIME
                                <img class="img_line" src="assets/image/line.png">
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wrap_chart">
                            <div class="panel panel-default chart_percentase_potensi_siswa">
                                <div class="panel-body easypiechart-panel">
                                    <div class="easypiechart" id="easypiechart-blue" data-percent="30" >
                                        <div class="label_persentase_potensi_chart">
                                            <span class="persentase_potensi">30%</span><br>
                                            <span class="jumlah_siswa">3000 siswa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wrap_chart">
                            <div class="panel panel-default chart_percentase_potensi_siswa">
                                <div class="panel-body easypiechart-panel">
                                    <div class="easypiechart" id="easypiechart-teal" data-percent="30" >
                                        <div class="label_persentase_potensi_chart">
                                            <span class="persentase_potensi">70%</span><br>
                                            <span class="jumlah_siswa">7000 siswa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wrap_chart">
                            <div class="panel panel-default chart_percentase_potensi_siswa">
                                <div class="panel-body easypiechart-panel">
                                    <div class="easypiechart" id="easypiechart-orange" data-percent="30" >
                                        <div class="label_persentase_potensi_chart">
                                            <span class="persentase_potensi">55%</span><br>
                                            <span class="jumlah_siswa">5500 siswa</span>
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

    <section class="persentase_potensi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wrap_box_daftar_potensi_siswa">
                    <div class="list_daftar_potensi">
                        <span class="label_daftar_potensi">DAFTAR KECENDERUNGAN POTENSI SISWA </span>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover data_siswa_tabel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Professional</th>
                                    <th>Entrepreneur</th>
                                    <th>Lanjut Study</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td><i class="fa fa-minus" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-check entrepreneur" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-check lanjut_study" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Arsaela</td>
                                    <td><i class="fa fa-check professional" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-minus" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-check lanjut_study" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td><i class="fa fa-minus" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-check entrepreneur" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-minus" aria-hidden="true"></i></td>
                                </tr> 
                                <tr>
                                    <td>4</td>
                                    <td>Michele</td>
                                    <td><i class="fa fa-check professional" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-check entrepreneur" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-minus" aria-hidden="true"></i></td>
                                </tr> 
                                <tr>
                                    <td>5</td>
                                    <td>Jacob</td>
                                    <td><i class="fa fa-check professional" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-minus" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-check lanjut_study" aria-hidden="true"></i></td>
                                </tr>
                            </tbody>
                        </table>            
                    </div>
                </div>
            </div>
        </div>
    </section>













    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>