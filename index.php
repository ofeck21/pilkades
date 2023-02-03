<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E - Voting - Pilkades Gertagena</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Costum CSS -->
    <style type="text/css">

      .card-deck .card {
        min-width: 220px;
      }

      .border-top { border-top: 1px solid #e5e5e5; }
      .border-bottom { border-bottom: 1px solid #e5e5e5; }

      .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
    </style>
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow fixed-top">
      <h5 class="my-0 mr-md-auto font-weight-normal">Sistem Pemilihan Kepala Desa Gertagena</h5>
    </div>
    <br>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Hasil Poling Sementar</h1>
      <p class="lead">Berikut hasil poling pemilihan kepala desa Gertagena.</p>
    </div>

    <div class="container">
      <div class="vote">Memuat Hasil Poling....</div>
      </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto">
      <div class="rincian"></div>
    </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top text-center">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2018 - Millatul Islamiyah</small>
          </div>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        setInterval(function(){
          $('.vote').load('vote.php');
        }, 5000);

        setInterval(function(){
          $('.rincian').load('rincian.php');
        }, 1000);
      });
    </script>

  </body>

</html>
