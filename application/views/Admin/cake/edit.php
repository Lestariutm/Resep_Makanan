 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="margin-left: 10px; text-align: center; ">EDIT RESEP MAKANAN</label>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/Admin_cake/update'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $query->cake_id; ?>">
                <label>Judul Resep</label>
                <input type="text" name="judul" placeholder="Judul" class="form-control" value="<?php echo $query->judul; ?>"><br>
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
                <label>Alat dan Bahan</label>
                <textarea class="form-control" name="alat_bahan" placeholder="alat dan bahan" rows="5">value="<?php echo $query->alat_bahan; ?>"</textarea>
                <label>Langkah-Langkah</label>
                <textarea class="form-control" name="langkah_langkah" placeholder="langkah-langkah" rows="6">value="<?php echo $query->langkah_langkah; ?>"</textarea>
                <br>
                <br>
                <button class="btn btn-success" style="margin-left: 770px;">EDIT</button>
                <br>.
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->