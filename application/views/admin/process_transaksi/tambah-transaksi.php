        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form Tambah Transaksi </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Transaksi</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Tambah Data Transaksi</h4>
                    <p class="card-description"> Form ini bertujuan untuk merubah data transaksi kafe Laine </p>
                    <?= form_open();  ?>
                      <div class="form-group">
                        <label for="id_transaksi">ID Transaksi</label>
                        <input type="text" name="id_transaksi" value="<?= set_value('id_transaksi'); ?>" class="form-control text-white" id="id_transaksi" placeholder="ID Transaksi" required>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama User</label>
                        <div class="col-md-12">   
                          <select class="form-control text-white" name="id_user" required>
                              <option disabled selected>Pilih User</option>
                            <?php foreach ($user as $usr) : ?>
                              <option value="<?= $usr['id_user'] ?>" <?= set_select('id_user', $usr['id_user']) ?>
                              ><?= $usr['username'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Menu</label>
                        <div class="col-md-12">
                          <select class="form-control text-white" name="id_menu" required>
                              <option disabled selected>Pilih Menu</option>
                            <?php foreach ($menu as $mn) : ?>
                              <option value="<?= $mn['id_menu'] ?>" <?= set_select('id_menu', $mn['id_menu']) ?>
                              ><?= $mn['nama_menu'] ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" name="qty" value="<?= set_value('qty'); ?>" class="form-control text-white" id="quantity" placeholder="Quantity" required>
                      </div>
                      <input type="submit" name="tambah-transaksi" class="btn btn-primary mr-2" value="Tambah Transaksi">
                      <button type="reset" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk me-reset data tersebut?')">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->