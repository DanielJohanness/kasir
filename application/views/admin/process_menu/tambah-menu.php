        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form Tambah Menu </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Data Menu</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Menu</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Tambah Data Menu</h4>
                    <p class="card-description"> Form ini bertujuan untuk menambahkan menu kafe Laine </p>
                    <?= form_open(''); ?>
                      <div class="form-group">
                        <label for="id_menu">Id Menu</label>
                        <input type="text" name="id_menu" value="<?= set_value('id_menu'); ?>" class="form-control" id="id_menu" placeholder="Id Menu" required>
                      </div>
                      <div class="form-group">
                        <label for="nama_menu">Nama Menu</label>
                        <input type="text" name="nama_menu" value="<?= set_value('nama_menu'); ?>" class="form-control" id="nama_menu" placeholder="Nama Menu" required>
                      </div>
                      <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" value="<?= set_value('harga'); ?>" class="form-control" id="harga" placeholder="Harga" required>
                      </div>
                      <input type="submit" name="tambah-menu" class="btn btn-primary mr-2" value="Tambah Menu">
                      <button type="reset" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk me-reset data tersebut?')">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->