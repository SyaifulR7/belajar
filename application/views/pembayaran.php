<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
                 ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman Dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>">
            
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nomor Telfon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>POS INDONESIA</option>
                        <option>JNT</option>
                        <option>SI CEPAT</option>
                        <option>GOJEK</option>
                        <option>GRAB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih BANK</label>
                    <select class="form-control">
                        <option>BCA - XXXXXXXXXX</option>
                        <option>BNI - XXXXXXXXXX</option>
                        <option>BRI - XXXXXXXXXX</option>
                        <option>MANDIRI - XXXXXXXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>
            <?php 
        }else
        {
            echo "<h4> Keranjang Belanja Anda Masih Kosong";
        }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>