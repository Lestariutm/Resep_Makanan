 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="margin-left: 10px; text-align: center; ">TAMBAHKAN RESEP MAKANAN</label>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/admin_minuman/save'); ?>" method="POST">
                <label>Judul Resep</label>
                <input type="text" name="Judul_minuman" placeholder="Judul_minuman" class="form-control"><br>
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" rows="5"></textarea>
                <label>Alat dan Bahan</label>
                <textarea class="form-control" name="alat_bahan" placeholder="alat dan bahan" rows="5"></textarea>
                <label>Langkah-Langkah</label>
                <textarea class="form-control" name="langkah_langkah" placeholder="langkah-langkah" rows="6"></textarea> 
                <br>
                <br>
                <button class="btn btn-success" style="margin-left: 770px;">Simpan</button>
                <br>.
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->