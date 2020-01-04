<div class="container">
            <div class="row  pt-2 pb-2">
                <div class="col-3 md-3 pt-6 text-center">
                    <button type="button" class="btn btn-danger">1</button>
                    <a class="text-center" href="<?= site_url('keranjang'); ?>">keranjang belanja</a>
                </div>
                <div class="col-3 md-4 pt-6 text-center">
                     <button type="button" class="btn btn-danger">2</button>
                     <a class="text-center" href="<?= site_url('pengiriman'); ?>">pengiriman</a>
                </div>
                <div class="col-3 md-4 pt-6 text-center">
                    <button type="button" class="btn btn-danger">3</button>
                    <a class="text-center" href="<?= site_url('pembayaran'); ?>">pembayaran</a>
                </div>
                <div class="col-3 md-3 pt-6 float-right text-center">
                    <button type="button" class="btn btn-danger">4</button>
                    <a class="text-center" href="<?= site_url('konfirmasi'); ?>">konfirmasi</a>
                </div>
            </div>
            <br><br>
<div class="container">
  <h3>DATA & ALAMAT PENERIMA</h3>
  <div class="row">
                <div class="col ml-1">
                    <div class="text-top">
                        <p>Isi data dengan benar! </p>
                    </div>
                </div>
    </div>
  <form>
  <div class="form-row">
  <div class="form-group col-md-6">
			<label for="contoh1">Nama Lengkap</label>
			<input type="text" class="form-control" id="contoh1" placeholder="ID">
		</div>
        <div class="form-group col-md-6">
			<label for="contoh1">Provinsi</label>
			<input type="text" class="form-control" id="contoh1" placeholder=" ">
		</div>
        </div>
    <div class="form-row">
                <div class="form-group col-md-6">
                <label for="nama">Nomor Handphone </label>
                    <input type="" name="" class="form-control" id="" placeholder="" data-rule=""
                        data-msg="Please enter at least 4 chars" required/>
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                <label for="nama">Kota/Kabupaten</label>
                    <input type="" class="form-control" name="" id="" placeholder="" data-rule=""
                        data-msg="Please enter a valid email" required/>
                    <div class="validation"></div>
                </div>
            </div>
        
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="contoh1">E-mail</label>
			<input type="text" class="form-control" id="contoh1" placeholder="">
		</div>
		<div class="form-group col-md-6">
			<label for="contoh2">Kecamatan</label>
			<input type="text" class="form-control" id="contoh2" placeholder="">
		</div>
	</div>
    <div class="form-row">
		<div class="form-group col-md-6">
			<label for="contoh1">Catatan Pengiriman</label>
			<input type="text" class="form-control" id="contoh1" placeholder="">
		</div>
        <!-- <div class="form-row"> -->
            <div class="form-group col-md-6">
                <label for="contoh1">Kode Pos</label>
                <input type="text" class="form-control" id="contoh1"placeholder="">
            </div>
		</div>                               
             
	<!-- </div> -->
        </div>
   

   
    <div class="text-center mb-3"><button type="submit" name="inputkk">Lanjut ke Pembayaran </button></div>
  </form>
</div>


    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url(); ?>/assets/js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url(); ?>/assets/js/active.js"></script>

</body>

</html>