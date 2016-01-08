
            
<!-- mengambil data dari upload-materi.php -->    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main" style="padding-top:100px">
          <h1 class="page-header">List Materi</h1>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                </tr>
              </thead>

              <tbody>
              <?php

              while () {
                # code...
              }
                <tr>
                  <td><?php echo $data['no'];?></td>
                  <td><?php echo $data['judul'];?></td>
                  <td><?php echo $data['tanggal'];?></td>
                  <td><?php echo $data['konten'];?></td>
                  <!-- <td><?php echo $data['level'];?></td>
                  <a href="dashboard.php?page=data-sisqa&nis=<?php echo $data['nis']; ?>"
                    class="btn btn-warning btn-sm">Edit</a>
                  <a href="action_mhs.php?action=delete&nim=<?php echo $data['nim']; ?>"
                          class="btn btn-danger btn-sm">Delete</a> -->
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>