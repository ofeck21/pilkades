<?php
$koneksi     = mysqli_connect("localhost", "root", "", "pilkades");
$vote = mysqli_query($koneksi, "SELECT * FROM caleg");

$hasil= mysqli_query($koneksi, "SELECT * FROM vote");
$jmlvote = mysqli_num_rows($hasil);
 ?>
            <canvas id="BarChart" width="100%" height="100%"></canvas>

      	<script  type="text/javascript">

    	  var ctx = document.getElementById("BarChart").getContext("2d");
    	  var data = {
    	            labels: [<?php while ($p = mysqli_fetch_array($vote)) { 
                    
                    echo '"' . $p['nama_caleg'] .'",';}?>],
    	            datasets: [
    	            {
    	              label: "Hasil Poling",
    	              data: [<?php while ($row = mysqli_fetch_array($hasil)) { 
                    $id=$row['no_urut'];
                    $cekhasil = mysqli_query($koneksi, "SELECT * FROM vote WHERE no_urut=$id");
                    $hsl =  mysqli_num_rows($cekhasil)-1;
                      echo '"' . $hsl .'",';}
                      ?>],
                    backgroundColor: [
                      "rgba(59, 100, 222, 1)",
                      "rgba(203, 222, 225, 0.9)",
                      "rgba(102, 50, 179, 1)",
                      "rgba(201, 29, 29, 1)",
                      "rgba(81, 230, 153, 1)",
                      "rgba(246, 34, 19, 1)"]
    	            }
    	            ]
    	            };

    	  var myBarChart = new Chart(ctx, {
    	            type: 'bar',
    	            data: data,
    	            options: {
    	            barValueSpacing: 20,
    	            scales: {
    	              yAxes: [{
    	                  ticks: {
    	                      min: 0,
    	                  }
    	              }],
    	              xAxes: [{
    	                          gridLines: {
    	                              color: "rgba(0, 0, 0, 0)",
    	                          }
    	                      }]
    	              }
    	          }
    	        });
    	</script>

  </body>
</html>
