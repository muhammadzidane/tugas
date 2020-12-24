<?php 
include 'functions.php';

// Data Provinsi
$result   = get_curl('https://api.rajaongkir.com/starter/province?key=3da2e9db3312048380308f7edf001532');

$data_provinsi        = $result['rajaongkir']['results'];

// Data Kota 
$result   = get_curl('https://api.rajaongkir.com/starter/city?key=3da2e9db3312048380308f7edf001532');

$data_kota_kab        = $result['rajaongkir']['results'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Cek Ongkir Kurir</title>
	<link rel="stylesheet" type="text/css" href="global-css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="jquery-ui/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css">
</head>
<body>
	<div class="container">
		<h3 class="text-center m-3">Cek Ongkos Kirim Paket Di Seluruh Daerah Indonesiaaaa</h3>
		<div class="row mt-5">
			<div class="col">
				<div class="content">
					<div> 
						<h5>tes</h5>
					</div>
					<form method="post">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="kota-asal">Kota/ Kabupaten Asal</label>
										<input class="form-control" id="kota-kab-asal" type="text" name="kota-kab-asal">
                  </div>
                  <div class="form-group">
                    <label for="kota-asal">Kota/ Kabupaten Tujuan</label>
                    <input class="form-control" id="kota-kab-tujuan" type="text" name="kota-kab-tujuan">
                  </div>
                  <div class="form-group">
                    <label for="kota-asal">Berat Barang (kg)</label>
                    <input class="form-control" id="berat-barang" type="text" name="berat-barang">
                  </div>
                  <div>
                    <button class="btn btn-warning text-white" type="submit" name="submit">Cari</button>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="hasil">hasil</div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  'use strict';

  $(document).ready(function() {
    let test  = ['Bandung', 'Jakarta', 'Texas']

    $('#kota-kab-asal').autocomplete({
      source : test
    });
  });
</script>
</body>
</html>