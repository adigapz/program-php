
<script type="text/javascript">
    $(document).ready(function(){
        $(".table-saya").DataTable();
    });


    var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [
                    <?php
                    $desa = mysqli_query($conn,"SELECT * FROM desa");
                    while($pecah_desa = mysqli_fetch_array($desa)){
                    ?>

                    "<?php  echo$pecah_desa['desa_nama']; ?>",

                    <?php
                    }
                    ?>
                ],
                datasets: [{
					label: 'Jumlah Warga',
					data: [
                        <?php
                        $desa = mysqli_query($conn,"SELECT * FROM desa");
                        while($pecah_desa = mysqli_fetch_array($desa)){
                            $id_desa = $pecah_desa['desa_id'];
                            $warga = mysqli_query($conn,"SELECT * FROM warga WHERE warga_desa='$id_desa'");
                            $jumlah_warga = mysqli_num_rows($warga);
                        ?>

                        "<?php  echo $jumlah_warga; ?>",

                        <?php
                        }
                        ?>
                        ],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		})
</script>
</body>
</html>