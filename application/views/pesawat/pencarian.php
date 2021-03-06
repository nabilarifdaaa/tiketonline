<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			
				
			<div class="c-rooms">
				<div class="p-table">
					<div class="p-table-grids">
					<?php foreach ($result as $data) { ?>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Pesawat</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="#"><img src="images/p2.jpg" alt=""></a>
								<div class="room-basic-info">
									<h6><?php echo $data['KodePesawat']; ?></h6>
									<h5><?php echo $data['Maskapai']; ?></h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Keterangan</h6>
							</div>
							<div class="rate-features">
								<ul>
									<li><?php echo $data['Landing']; ?></li>
									<li><?php echo $data['Boarding']; ?></li>
									<li><?php echo $data['KotaAsal']; ?></li>
									<li><?php echo $data['KotaTujuan']; ?></li>
									<li><?php echo $data['BandaraAsal']; ?></li>
									<li><?php echo $data['BandaraTujuan']; ?></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Harga</h6>
							</div>
							<div class="avg-rate">
								<h5><?php echo $data['Kelas']; ?></h5>
								<p>Harga:</p>
								<span class="p-offer">RP <?php echo $data['Harga']; ?></span>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Book</h6>
							</div>
							<div class="book-button-column">
								<a href="#">Book</a>
							</div>
						</div>

						<div class="clearfix"> </div>
						</div>
		            <?php } ?>
				</div>
				
			</div>
		</div>
		<!-- //container -->
	</div>