 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="margin-left: 10px; text-align: center; ">EDIT RESEP</label>
                <form class="forms-sample" style="margin-left: 20px; margin-right: 20px;" action="<?php echo base_url('index.php/admin_daging/update'); ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $query->daging_id; ?>">
                <label>Judul Resep</label>
                <input type="text" name="judul" placeholder="Judul" class="form-control" value="<?php echo $query->judul; ?>"> <br>
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" rows="5"><?php echo $query->deskripsi; ?></textarea>
                <label>Alat & Bahan</label>
                <textarea class="form-control" name="alat_bahan" placeholder="Deskripsi Artikel" rows="8"><?php echo $query->alat_bahan; ?></textarea>
                <label>Langkah-Langkah</label>
                <textarea class="form-control" name="langkah_langkah" placeholder="Deskripsi Artikel" rows="8"><?php echo $query->langkah_langkah; ?></textarea>
                <br>
                <br>
                <button class="btn btn-success" style="margin-left: 770px;">UPDATE</button>
                <br>.
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->