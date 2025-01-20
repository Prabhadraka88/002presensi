<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>002PRESENSI</title>
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link css pribasi -->
     <link rel="stylesheet" href="beranda.css">
  </head>
  <body>
    <!-- navbar akhir -->
    <div class="container2">
      <div class="sidebar">
        <img class="img" src="assets\image\aku.png">
        <p style="margin-top: 5%; font-size: 25px; font-family: 'Lucida Regular';">Lukman Nul Hakim <br> <span>221011402828 <i class="bi bi-check-circle-fill"></i></span></p>
        <div class="dashboard" style="display: flex; border-radius: 50px; background-color: white; margin-left: 10%; margin-top: 10%;width:100%; height:70px;">
          <i class="bi bi-microsoft" style="font-size: 35px; margin-left: 7.2%; margin-top: 6px;"></i>
          <p class="dash" style="font-size: 33px; margin-left: -25%; margin-top: 7.5px; width: 460px;">Dashboard</p>
        </div>
        <div class="pribadi-my-3" style="margin-left: 25.2%; margin-top: 0.5px;">
          <a href="pribadi.php"class="beranda">
          <i class="bi bi-person-fill" style="font-size: 45px; margin-left: 10.2%; "></i>
          <p class="dash" style="font-size: 33px; margin-left: -16%; margin-top: 11px; width: 350px; ">Data Pribadi</p>
          </a>
        </div>
        <div class="qr" style="margin-left: 15.2%; margin-top: -36.5px;">
          <a href="presensi.php" class="beranda" style="margin-top: 5px;">
          <i class="bi bi-qr-code-scan"  style="font-size: 40px; margin-left: 15.5%;"></i>
          <p class="dash" style="font-size: 33px; margin-left: -22%; margin-top: 5px; width: 350px;">Presensi</p>
          </a>
        </div>
        <div class="qr">
          <a href="login.php" class="beranda" style="margin-top: -33.5px;">
          <i class="bi bi-power"  style="font-size: 45px; margin-left: 17.5%; font-weight: 900;"></i>
          <p class="dash" style="font-size: 33px; margin-left: -24.5%; margin-top: 9px; width: 350px;">Logout</p>
          </a>
        </div>
      </div>
      <div class="conten" >
        <div class="content-atas" style="margin-top: 0%;">
          <img class="img2" src="sekolah.png">
          <div class="teks-smp">
          SMP SUKA SUKA
          </div>
          <div class="teks-ppdb">
          PPDB
          </div>
          <div class="teks-th" style="color: black; margin-top: 10.2%; font-size: 38px; font-style: italic; margin-left: 0.5%;">
          2024-2025
          </div>
        </div>
        <div class="container">
          <div class="kotak">
            <P style="font-size: 30px; margin-top: 15px; text-align: justify; margin-left: 10%; color: blue;">Riwayat</P>
            <P class="po" style="background-color: blue; width: -10px; margin: 15px 20px; padding: 10px 20px; border-radius: 10px;">Fisika Dasar<br>07:00 - 08:30 WIB</P>
            <P class="po" style="margin-top: -5%;">Matematika<br>08:30 - 10:00 WIB</P>
            <P class="po" style="margin-top: 5%;">Bahasa Indonesia<br>10:00 - 11:30 WIB</P>
            <P class="po" style="margin-top: 5%;">Kimia<br>11:30 - 12:15 WIB</P>
          </div>
          <div class="kotak">
            <div style="background-color: blue; color:white; width: 120px; font-size: 28px; border-radius: 50px; margin-left: 58%; margin-top: 7%;">View All</div>
            <div class="pie-chart">
              <p style="font-size: 35px; margin-top: -178%; margin-left: -73%; color: blue;">Presensi</p>
              <div class="label">
                
                <div class="percentage">70%</div>
              </div>
            </div>
          </div>
          <div class="kotak">
            <div class="container">
              <div class="kotak1"></div>
              <div class="kotak2"></div>
              <div class="kotak3"></div>
              <div class="kotak4"></div> 
              <div class="kotak5"></div>
              <div class="kotak6"></div>
              <p style="font-size: 35px; margin-top: -260%; margin-left: 57%; color: blue;">Presensi</p>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>