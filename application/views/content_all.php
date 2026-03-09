<?php
if ($this->session->flashdata('info')) echo $this->session->flashdata('info');
?>
<link rel="stylesheet" type="text/css" href="<?= base_url('include/assets-fe/assets/thememagang.css')?>">

<main role="main" id="home">
<section id="home" style="
    padding-top:9rem; 
    padding-bottom:12rem; 
    min-height:60vh; 
    background-image: url('<?= base_url('include/img/program magang pemerintah.png'); ?>'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat;
    background-attachment: fixed;">
  
<div class="container text-left">
    <h1 class="text-black">E-MAGANG</h1>
	<p>E-Magang Kejari adalah platform digital yang dirancang untuk memfasilitasi proses </p>
	magang secara online Melalui E-Magang Kejari.
    <p style="text-align: left;">
		<br>
        <a href="#tentang" id="pelajari" class="btn btn-success my-2 scroll">Pelajari Selengkapnya</a>
    </p>
</div>


  </div>
</section>


  <style>
.floatwa {
position:fixed;
bottom:0px;
right: 0px;
background-color:#ffffff;
width:100%;
z-index:1000;
padding:2px;
margin:auto;
text-align:center;
float:none;
box-shadow: 0px -2px 10px #c0c0c0;
}
.tombolwa {
border: 1px #56aa71 solid;
background-color:#2f7e49;
width:90%;
padding:4px;
text-align:center;
margin:0;
border-radius: 5px;
margin:auto;
text-align:center;
float:none;
}
.floatwa a{
color:white;
}
</style>
<div class="floatwa">
<a href="https://api.whatsapp.com/send?phone=6282260686031&amp;text=Halo%20kak,%20Saya%20mau%20tanya" target="_blank"><div class="tombolwa">Chat Customer Service</div></a></div>
  <div class="bg-light" id="tentang" style="padding-top:100px; padding-bottom:100px; height:100%;">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-5">
            <img src="<?= base_url('include/img/kejaksaan agung.jpg')?>" class="card-img-top hvr-grow" alt="...">
        </div>
        <div class="col-md-7">
            <div class="card-body">
                <h3>Kejaksaan Negeri Kabupaten Bogor</h3>
                <p><em>Kejaksaan Negeri Kabupaten Bogor dibentuk berdasarkan Surat Keputusan Presiden Republik Indonesia 
                      Nomor 34 Tahun 1993 tanggal 5 Mei 1993 tentang Pembentukan Kejaksaan Negeri Cibinong yang luas ruang 
                      lingkup wilayah hukumnya meliputi keseluruhan daerah Kabupaten Bogor. Kejaksaan Negeri Cibinong telah 
                      ditetapkan berdasarkan Surat Keputusan Jaksa Agung R.I. Nomor : III/J.A/11/1993 tanggal 10 November 1993 
                      tentang Penetapan Kejaksaan Negeri Cibinong sebagai Kejaksaan Negeri Tipe A. Berdasarkan Surat Keputusan 
                      Jaksa Agung Republik Indonesia Nomor : KEP-349/J.A/05/2016 tanggal 13 Mei 2016 tentang Perubahan nama 
                      Kejaksaan Negeri dan Cabang Kejaksaan Negeri, otomatisasi terhadap nama/nomenklatur Kejaksaan Negeri 
                      Cibinong berubah menjadi Kejaksaan Negeri Kabupaten Bogor. Dalam rangka pelaksanaan tugas-tugas pokok 
                      yustisial dan non yustisial, selama ini Kejaksaan Negeri Kabupaten Bogor telah melakukan koordinasi antar 
                      Instansi/Dinas terkait melalui forum rapat secara berkesinambungan, melalui forum konsultasi dan silaturahmi 
                      yang memungkinkan terciptanya suasana kerjasama yang harmonis dan kondusif.</em></p>

            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container slow" id="benefit" style="padding-top:50px;height:100%;">
      <div class="row py-5 no-gutters">
        <div class="col-md-12 text-center">
          <h2 class="text-center">Benefit</h2>
          <span class="text-center d-block m-auto">Star Digital Internship memberikan benefit untuk Mahasiswa yang sedang dalam masa Magang / PKL</span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="card mb-4 box-shadow hvr-float mb-4" style="border-bottom: 5px solid #32CD32;">
            <div class="card-body text-center">
              <i class="icofont-license icofont-5x text-aqua"></i>
              <h5>Sertifikat</h5>
              <p class="card-text mt-4">Kami memberikan sertifikat untuk mahasiswa yang telah menyelesaikan masa periode magang / PKL.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 box-shadow hvr-float" style="border-bottom: 5px solid #32CD32;">
            <div class="card-body text-center">
              <i class="icofont-food-basket icofont-5x text-aqua"></i>
              <h5>Meals & Drinks</h5>
              <p class="card-text mt-4">Kami menyediakan aneka minuman dan camilan untuk Mahasiswa jika ingin istirahat sejenak.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 box-shadow hvr-float" style="border-bottom: 5px solid #32CD32;">
            <div class="card-body text-center">
              <i class="icofont-laptop-alt icofont-5x text-aqua"></i>
              <h5>Laptop</h5>
              <p class="card-text mt-4">Kami menyediakan laptop khusus untuk Mahasiswa magang / PKL dalam proses belajar.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 box-shadow hvr-float" style="border-bottom: 5px solid #32CD32;">
            <div class="card-body text-center">
              <i class="icofont-graduate icofont-5x text-aqua"></i>
              <h5>Kerja Kontrak</h5>
              <p class="card-text mt-4">Kami memberikan kontrak kerja jika Mahasiswa tersebut melakukan pekerjaan dengan sangat baik.</p>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="container" id="faq" style="padding-top:50px;height:100%;">
      <div class="row py-5 no-gutters">
        <div class="col-md-12 text-center">
          <h2 class="text-center">Frequently Asked Question</h2>
          <span class="text-center d-block m-auto">Berikut adalah pertanyaan paling sering oleh Mahasiswa dalam menggunakan website ini</span>
        </div>
      </div>
      <!-- FAQ -->
      <div class="row">
        <div class="col-md-12">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-success">
        <div class="panel-bg" style="background-color: #28a745; border-color: #28a745; color: white; padding: 15px; width: 100%; border-radius: 4px;">
            <h4 class="panel-title" style="margin: 0;">
                <a class="first" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: white; text-decoration: none;">
                    Bagaimana cara mendaftarnya?
                </a>
            </h4>
        </div>

                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                              <p>Masuk ke halaman daftar kemudian isi pada form registrasi masukan nama lengkap, username dan password.</p>
                          </div>
                      </div>
                  </div>

                  <div class="panel panel-success">
        <div class="panel-bg" style="background-color: #28a745; border-color: #28a745; color: white; padding: 15px; width: 100%; border-radius: 4px;">
                          <h4 class="panel-title">
                  <a class="fcollapse" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="color: white; text-decoration: none;">
                                  Bagaimana untuk memulai pengajuan magang atau PKL ?
                                  <span> </span>
                              </a>
                          </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                              <p>Masuk ke menu Pengajuan Magang di panel Mahasiswa kemudian isi data-data yang tertera beserta foto surat pengantar dari masing-masing kampus.</p>
                          </div>
                      </div>
                  </div>


						                    <div class="panel panel-success">
        <div class="panel-bg" style="background-color: #28a745; border-color: #28a745; color: white; padding: 15px; width: 100%; border-radius: 4px;">
                          <h4 class="panel-title">
							                    <a class="fcollapse" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="color: white; text-decoration: none;">
                                  Berapa hari dalam proses verifikasi pengajuan Magang / PKL ?
                                  <span> </span>
                              </a>
                          </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                              <p>Proses pengajuan akan dilakukan oleh admin paling lambat 3 hari</p>
                          </div>
                      </div>
                  </div>

   						                    <div class="panel panel-success">
        <div class="panel-bg" style="background-color: #28a745; border-color: #28a745; color: white; padding: 15px; width: 100%; border-radius: 4px;">
                          <h4 class="panel-title">
							                    <a class="fcollapse" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="color: white; text-decoration: none;">
                                  Saya lupa password, bagaimana untuk mengembalikan nya ?
                                  <span> </span>
                              </a>
                          </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body">
                              <p>Hubungi admin dengan menggunakan widget WhatsApp di bawah</p>
                          </div>
                      </div>
                  </div>

                     						                    <div class="panel panel-success">
        <div class="panel-bg" style="background-color: #28a745; border-color: #28a745; color: white; padding: 15px; width: 100%; border-radius: 4px;">
                          <h4 class="panel-title">
							                    <a class="fcollapse" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="color: white; text-decoration: none;">
                                  Bagaimana saya mengetahui, pengajuan bahwa saya diterima atau tidak ?
                                  <span> </span>
                              </a>
                          </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="panel-body">
                              <p>Silahkan login ke halaman Panel Mahasiswa dan lihat status pengajuan, jika anda diterima silahkan datang ke kantor kami.</p>
                       
                            </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</main>