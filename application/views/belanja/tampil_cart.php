<div class="container">
    <div class="row  pt-2 pb-2">
        <div class="col-md-2 pt-6 text-center">
        <button type="button" class="btn karl-checkout-btn" onclick="window.location.href='<?= site_url('belanja/tampil_cart'); ?>'">1</button>
            <a class="text-center" href="<?= site_url('belanja/tampil_cart'); ?>"><br><br><B>KERANJANG BELANJA</B></a>
        </div>
        <div class="col-1"></div>
        <div class="col-md-2 pt-6 text-center">
        <button type="button" class="btn karl-btn" onclick="window.location.href='<?= site_url('pengiriman'); ?>'">2</button>
            <a class="text-center" href="<?= site_url('pengiriman'); ?>"><br><br>PENGIRIMAN</a>
        </div>
        <div class="col-1"></div>
        <div class="col-md-2 pt-6 text-center">
            <button type="button" class="btn karl-btn" onclick="window.location.href='<?= site_url('pembayaran'); ?>'">3</button>
            <a class="text-center" href="<?= site_url('pembayaran'); ?>"><br><br>PEMBAYARAN</a>
        </div>
        <div class="col-1"></div>
        <div class="col-md-2 pt-6 float-right text-center">
            <button type="button" class="btn karl-btn" onclick="window.location.href='<?= site_url('konfirmasi'); ?>'">4</button>
            <a class="text-center" href="<?= site_url('konfirmasi'); ?>"><br>KONFIRMASI</a>
        </div>
    </div>
    <br>

<form action="<?php echo base_url()?>belanja/ubah_cart" method="post" name="frmbelanja" id="frmbelanja" class="form-horizontal" enctype="multipart/form-data">
<?php
	if ($cart = $this->cart->contents())
		{
 ?>

<div class="cart_area section_padding_100 clearfix">
            <div class="container">
<div class="cart-table clearfix">
                            <table class="table table-responsive">
                            
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Banyaknya</th>
                                        <th>Total</th>
                                        <th>Hapus ?</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                      // Create form and send all values in "belanja/update_cart" function.
                                      $grand_total = 0;
                                      $i = 1;

                                      foreach ($cart as $item):
                                      $grand_total = $grand_total + $item['subtotal'];
                                      ?>
                                    <tr>
                                    <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
                                    <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
                                    <input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
                                    <input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
                                    <input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
                                    <input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
                                        <td><h6><?php echo $i++; ?></h6></td>
                                        <td><img src="<?php echo base_url() . 'assets/upload/produk/'.$item['gambar']; ?>" class="img-rounded" width="280" height="180" /></td>
                                        <td><h6><?php echo $item['name']; ?></h6></td>
                                        <td><h6>Rp. <?php echo number_format($item['price'], 0,",","."); ?></h6></td>
                                        <td class="cart_product_img"><input type="number" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /></td>
                                        <td class="total_price"><h6 style="color: red">Rp. <?php echo number_format($item['subtotal'], 0,",",".") ?></h6></td>
                                        <td><a href="<?php echo base_url()?>belanja/hapus/<?php echo $item['rowid'];?>" class="btn karl-checkout-btn">X</a></td>
                                        <?php endforeach; ?>
                                        
                                    </tr>
                                    
                                </tbody>
                                <td colspan="3"><h4 style="color: red"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></h4></td>
                              <td colspan="12" align="right">
                              <button class='btn karl-btn'  type="submit">Update Cart</button>
                              <a href="<?php echo base_url()?>pengiriman"  class ='btn karl-checkout-btn'>Check Out</a>
                            </table>
                        </div>
            </div>
</div>


<tr>


<?php
		}
	else
		{
			echo "<h3>Keranjang Belanja masih kosong</h3>";	
		}	
?>
</form>


  <!-- Modal Penilai -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
      	<form method="post" action="<?php echo base_url()?>belanja/hapus/all">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
			Anda yakin mau mengosongkan belanja Cart?
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-sm btn-default">Ya</button>
        </div>
        
        </form>
      </div>
      
    </div>
  </div>
  <!--End Modal-->