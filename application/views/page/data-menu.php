        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header mt-5 pt-2">
              <h3 class="page-title"> Menu </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Data kafe</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Menu</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <h4 class="card-title">Data Menu</h4>
                        <p class="card-description"> Tabel ini berisi data menu kafe Laine</p>
                      </div>
                      <div class="col-md-6 text-right">
                        <div class="btn-group">
                          <a class="btn btn-primary" href="<?= base_url('Tambah-Menu') ?>"><i class="mdi mdi-plus"></i>Tambah Menu</a>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="menu" class="table text-white py-4">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Id Menu</th>
                            <th>Nama Menu</th>
                            <th>Harga Menu</th>
                            <th>Settings</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          foreach($menu as $mn) :
                          ?>
                            <tr>
                              <td><?=$no++?></td>
                              <td><?=$mn['id_menu']?></td>
                              <td><?=$mn['nama_menu']?></td>
                              <td><?=$mn['harga']?></td>
                              <td>
                                <div class="btn-group">
                                  <a class="btn btn-outline-info" href="<?=base_url()?>Edit-Menu/<?= $mn['id_menu'];?>">Edit</a>
                                  <a class="btn btn-outline-danger" href="<?= base_url()?>Admin/Process_Menu/Proses_Hapus_Menu/<?= $mn['id_menu'];?>" onclick="return confirm('Apakah anda yakin menghapus data dengan nama <?=$mn['nama_menu']?>?')">Hapus</a>
                                </div>
                              </td>
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