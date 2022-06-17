        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form Tambah User </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Data User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Tambah Data User</h4>
                    <p class="card-description"> Form ini bertujuan untuk menambahkan data user kafe Laine </p>
                    <?= form_open(''); ?>
                      <div class="form-group">
                        <label for="id_user">Id User</label>
                        <input type="text" name="id_user"  value="<?= set_value('id_user'); ?>" class="form-control" id="id_user" placeholder="Id User" required>
                      </div>
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?= set_value('username'); ?>" class="form-control" id="username" placeholder="Username" required>
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="<?= set_value('password'); ?>" class="form-control" id="password" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                        <label for="level">Level</label>
                        <input type="text" name="level" value="<?= set_value('level'); ?>" class="form-control" id="level" placeholder="Level" required>
                      </div>
                      <input type="submit" name="tambah-user" class="btn btn-primary mr-2" value="Tambah User">
                      <button type="reset" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk me-reset data tersebut?')">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->