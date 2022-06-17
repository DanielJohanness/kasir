        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header mt-5 pt-2">
              <h3 class="page-title"> User Log </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">User Log</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Log</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">User Log</h4>
                        <p class="card-description"> Tabel ini berisi riwayat aktifitas user kafe Laine</p>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="userlog" class="table text-white py-4">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Tipe Log</th>
                            <th>Deskripsi Log</th>
                            <th>Aktivitas Terakhir</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($log as $l) :
                        ?>
                            <tr>
                              <td><?=$no++?></td>
                              <td><?=$l['username']?></td>
                              <td><?=$l['log_type']?></td>
                              <td><?=$l['log_desc']?></td>
                              <td><?=$l['last_activity']?></td>
                            </tr>
                          <?php endforeach ?>
                        </tbody>  
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->