        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header mt-5 pt-2">
              <h3 class="page-title"> User </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Data kafe</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <h4 class="card-title">Data User</h4>
                        <p class="card-description"> Tabel ini berisi data user kafe Laine</p>
                      </div>
                      <div class="col-md-6 text-right">
                        <div class="btn-group">
                          <a class="btn btn-primary" href="<?= base_url('Tambah-User') ?>"><i class="mdi mdi-plus"></i>Tambah User</a>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="user" class="table text-white py-4">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Id User</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Settings</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $usr) :
                        ?>
                            <tr>
                              <td><?=$no++?></td>
                              <td><?=$usr['id_user']?></td>
                              <td><?=$usr['username']?></td>
                              <td><?=$usr['password']?></td>
                              <td><?=$usr['level']?></td>
                              <td>
                                <div class="btn-group">
                                  <a class="btn btn-outline-info" href="<?=base_url()?>Edit-User/<?= $usr['id_user'];?>">Edit</a>
                                  <a class="btn btn-outline-danger" href="<?= base_url()?>Admin/Process_User/Proses_Hapus_User/<?= $usr['id_user'];?>" onclick="return confirm('Apakah anda yakin menghapus data dengan nama <?=$usr['username']?>?')">Hapus</a>
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