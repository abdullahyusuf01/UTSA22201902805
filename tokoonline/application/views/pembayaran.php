<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total=0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
				echo "<h4>Total Belanja : Rp. ".number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>
			
			<h3>Masukkan Alamat Pengiriman Dan Pembayaran</h3>
			<form method="post" action="<?php echo base_url()?>dashboard/proses_pesanan">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
				</div>
				<div class="form-group">
					<label>No. Telepon</label>
					<input type="text" name="no_telp" placeholder="No. Telepon" class="form-control">
				</div>
				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control">
						<option>JNE</option>
						<option>JNT</option>
						<option>POS</option>
						<option>TIKI</option>
						<option>GRAB</option>
						<option>GOJEK</option>
					</select>
				</div>
				
				<div class="form-group">
					<label>Pilih Bank</label>
					<select class="form-control">
						<option>BCA - XXXXXXX</option>
						<option>BNI - XXXXXXX</option>
						<option>BRI - XXXXXXX</option>
						<option>MANDIRI - XXXXXXX</option>
					</select>
				</div>
				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
			</form>
			<?php 
			}else
			{
				echo " <h6>Anda Belum Mempunyai Keranjang Belanja";
			}
			?>
			
		</div>
		<div class="col-md-2"></div>
	</div>

</div>