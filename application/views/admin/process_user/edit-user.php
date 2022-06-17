        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form Edit User </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Data User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Edit Data User</h4>
                    <p class="card-description"> Form ini bertujuan untuk merubah data user kafe Laine </p>
                    <?= form_open(); ?>
                      <div class="form-group">
                        <label for="id_user">Id User</label>
                        <input type="text" name="id_user" value="<?= set_value('id_user',$user['id_user']); ?>"  class="form-control" id="id_user" placeholder="Id User">
                      </div>
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?= set_value('username',$user['username']); ?>" class="form-control" id="username" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="level">Level</label>
                        <input type="text" name="level" value="<?= set_value('level',$user['level']); ?>" class="form-control" id="level" placeholder="Level">
                      </div>
                      <input type="submit" name="edit-user" class="btn btn-primary mr-2" value="Edit User">
                      <a type="reset" class="btn btn-danger" href="<?= base_url('Data-User')?>">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->