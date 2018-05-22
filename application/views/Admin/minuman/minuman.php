 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <br>
                <label style="margin-left: 10px; ">Resep Kita</label>
                 <button class="btn btn-info btn-md" style="width: 120px; height: 30px; margin-left: 10px;"><a href="<?php echo base_url().'index.php/admin_minuman/tambah' ?>" class="fa fa-plus" style="text-decoration: none;color: white;"> Tambahkan</a></button>
                <br>
                <table id="table_id" class="table table-stripped table-bordered">
                  <thead style="text-align: center;" class="table-danger">
                    <th>No.</th>
                    <th>User_id</th>
                    <th>Judul Resep</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody style="text-align: center;" class="table-info">
                    <?php 
                     if ($query->num_rows()>0) {
                     $no=0; 
                    foreach ($query->result() as $row) {
                    $no++;
                    echo' 
                       <tr>     
                          <td>'.$no.'</td>
                          <td>'.$row->minuman_id.'</td>
                          <td>'.$row->deskripsi.'</td>
                          <td>'.$row->judul_minuman.'</td>
                          <td><button class="btn btn-primary"><a href="'.base_url('index.php/Admin_daging/edit/'.$row->minuman_id).'" class="fa fa-pencil-square-o" style="text-decoration: none; color: white;">Edit</a></button>
                            <a href="'.base_url('index.php/Admin_daging/hapus/'.$row->daging_id).'" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a></td>
                      </tr>';
                       }
                    } 

                    ?>

                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
    