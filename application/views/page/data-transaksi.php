        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header mt-5 pt-2">
              <h3 class="page-title"> Transaksi </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Data kafe</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <h4 class="card-title">Data Transaksi</h4>
                        <p class="card-description"> Tabel ini berisi data transaksi kafe Laine</p>
                      </div>
                      <div class="col-md-6 text-right">
                        <div class="btn-group">
                          <a class="btn btn-primary" href="<?= base_url('Tambah-Transaksi') ?>"><i class="mdi mdi-plus"></i>Tambah Transaksi</a>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="transaksi" class="table text-white py-4">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Id Transaksi</th>
                            <th>User</th>
                            <th>Nama Menu</th>
                            <th>Quantity</th>
                            <th>Jumlah Pemesanan</th>
                            <th>Waktu Transaksi</th>
                            <!-- <th>Settings</th> -->
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
                              <td>Rp. <?=$j['qty']*$j['harga']?></td>
                              <td><?=$j['waktu_transaksi']?></td>
                              <!-- <td>
                                <div class="btn-group">
                                  <button class="btn btn-outline-info" >Print</button>
                                </div>
                              </td> -->
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