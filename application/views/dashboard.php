        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header mt-5 pt-2">
              <h3 class="page-title"> Dashboard </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </nav>
            </div>
            <?php if ($this->session->userdata('level') === '1') : ?>
            <div class="row">
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h1 class="mb-0"><?=$transaksi ?></h1>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-info">
                          <span class="mdi mdi-file-chart mdi-48px"></span>
                        </div>
                      </div>
                    </div>
                    <h4 class="text-muted font-weight-normal">Total Transaksi</h4>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h1 class="mb-0"><?= $menu ?></h1>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-warning">
                          <span class="mdi  mdi mdi-food mdi-48px"></span>
                        </div>
                      </div>
                    </div>
                    <h4 class="text-muted font-weight-normal">Total Menu</h4>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h1 class="mb-0"><?= $quantity ?></h1>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi mdi-basket icon-item mdi-48px"></span>
                        </div>
                      </div>
                    </div>
                    <h4 class="text-muted font-weight-normal">Total Menu Terjual</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Grafik Perbandingan</h4>
                    <canvas id="dashboardChart" style="height:250px" class="py-1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">User Log</h4>
                        <p class="card-description"> Tabel ini berisi riwayat login user kafe Laine</p>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="userlogdash" class="table text-white py-4">
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
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Transaksi</h4>
                    <div class="table-responsive">
                      <table id="dashboard" class="table text-white py-4">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Id Transaksi</th>
                            <th>Username</th>
                            <th>Nama Menu</th>
                            <th>Quantity</th>
                            <th>Waktu Transaksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        foreach ($joined as $j) :
                        ?>
                            <tr>
                              <td><?=$no++?></td>
                              <td><?=$j['id_transaksi']?></td>
                              <td><?=$j['username']?></td>
                              <td><?=$j['nama_menu']?></td>
                              <td><?=$j['qty']?></td>
                              <td><?=$j['waktu_transaksi']?></td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <?php endif; ?>

            <?php if ($this->session->userdata('level') === '2') : ?>
            <div class="row">
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h1 class="mb-0"><?=$transaksi ?></h1>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-info">
                          <span class="mdi mdi-file-chart mdi-48px"></span>
                        </div>
                      </div>
                    </div>
                    <h4 class="text-muted font-weight-normal">Total Transaksi</h4>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h1 class="mb-0"><?= $menu ?></h1>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-warning">
                          <span class="mdi  mdi mdi-food mdi-48px"></span>
                        </div>
                      </div>
                    </div>
                    <h4 class="text-muted font-weight-normal">Total Menu</h4>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h1 class="mb-0"><?= $quantity ?></h1>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi mdi-basket icon-item mdi-48px"></span>
                        </div>
                      </div>
                    </div>
                    <h4 class="text-muted font-weight-normal">Total Menu Terjual</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">User Log</h4>
                        <p class="card-description"> Tabel ini berisi riwayat login user kafe Laine</p>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="userlogdash" class="table text-white py-4">
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
            <?php endif; ?>

            <?php if ($this->session->userdata('level') === '3') : ?>
            <div class="row">
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h1 class="mb-0"><?=$transaksi ?></h1>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-info">
                          <span class="mdi mdi-file-chart mdi-48px"></span>
                        </div>
                      </div>
                    </div>
                    <h4 class="text-muted font-weight-normal">Total Transaksi</h4>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h1 class="mb-0"><?= $menu ?></h1>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-warning">
                          <span class="mdi  mdi mdi-food mdi-48px"></span>
                        </div>
                      </div>
                    </div>
                    <h4 class="text-muted font-weight-normal">Total Menu</h4>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h1 class="mb-0"><?= $quantity ?></h1>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi mdi-basket icon-item mdi-48px"></span>
                        </div>
                      </div>
                    </div>
                    <h4 class="text-muted font-weight-normal">Total Menu Terjual</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Grafik Perbandingan</h4>
                    <canvas id="dashboardChart" style="height:250px" class="py-1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Transaksi</h4>
                    <div class="table-responsive">
                      <table id="dashboard" class="table text-white py-4">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Id Transaksi</th>
                            <th>Username</th>
                            <th>Nama Menu</th>
                            <th>Quantity</th>
                            <th>Waktu Transaksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        foreach ($joined as $j) :
                        ?>
                            <tr>
                              <td><?=$no++?></td>
                              <td><?=$j['id_transaksi']?></td>
                              <td><?=$j['username']?></td>
                              <td><?=$j['nama_menu']?></td>
                              <td><?=$j['qty']?></td>
                              <td><?=$j['waktu_transaksi']?></td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <?php endif; ?>
          </div>
          <!-- content-wrapper ends -->