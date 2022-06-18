<?php
$koneksi    = mysqli_connect("localhost", "root", "", "eduprime");
$jumlah_siswa  = mysqli_query($koneksi, "SELECT jumlah FROM potensi_siswa order by id_potensi_siswa asc");
$potensi       = mysqli_query($koneksi, "SELECT nama_potensi FROM potensi_siswa order by id_potensi_siswa asc");


$jumlah_siswa_professional  = mysqli_query($koneksi, "SELECT jumlah FROM potensi_siswa WHERE nama_potensi='professional' order by id_potensi_siswa asc");
$potensi_professional       = mysqli_query($koneksi, "SELECT nama_potensi FROM potensi_siswa WHERE nama_potensi='professional' order by id_potensi_siswa asc");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>EduPrime</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EduPrime</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link href="assets/css/style.css" rel="stylesheet" />  
  <link href="assets/css/responsive.css" rel="stylesheet" /> 

  <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!--   <script src="assets/js/Chart.js"></script> -->
  <script src="assets/js/chart-bar-demo.js"></script>
  <script src="assets/js/easypiechart.js"></script>
  <script src="assets/js/easypiechart-data.js"></script>
</head>
    
<body>   
<section class="top_header">
    <div class="container">
        <div class="row">
            <div class="wrap_all_content_header">               
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


</body>
</html>