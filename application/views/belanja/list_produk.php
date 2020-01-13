<?php
	foreach ($barang as $row) {
?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="kotak">
              <form method="post" action="<?php echo base_url();?>belanja/tambah" method="post" accept-charset="utf-8">
                <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'assets/upload/produk/'.$row['gambar']; ?>"/></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $row['nama_barang'];?></a>
                  </h4>
                  <h5>Rp. <?php echo number_format($row['harga_barang'],0,",",".");?></h5>
                  <p class="card-text"><?php echo $row['deskripsi_barang'];?></p>
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url();?>detailproduk/index/<?php echo $row['id_barang'];?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Detail</a> 
                  
                  <input type="hidden" name="id" value="<?php echo $row['id_barang']; ?>" />
                  <input type="hidden" name="nama" value="<?php echo $row['nama_barang']; ?>" />
                  <input type="hidden" name="harga" value="<?php echo $row['harga_barang']; ?>" />
                  <input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>" />
                  <input type="hidden" name="qty" value="1" />
                  <button type="submit" class="add-to-cart-btn"> Beli</button>
                </div>
                </form>
              </div>
            </div>
<?php
	}
?>