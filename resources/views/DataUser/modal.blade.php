      <div class="modal fade" id="formModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form method="POST" action="user" class="form-horizontal">
                @csrf
                <div id="method"></div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username </label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                  </div>
                  {{-- <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori">
                    </div>
                  </div> --}}
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hak_akses" class="col-sm-2 col-form-label">Hak Akses</label>
                      <div class="col-sm-10">
                          <select class="form-control" id="hak_akses" name="hak_akses">
                              <option value="admin">admin</option>
                              <option value="operator_Guru">operator_Guru</option>
                              <option value="rpl">rpl</option>
                              <option value="operator_Siswa">operator_Siswa</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                      <div class="col-sm-10">
                          <select class="form-control" id="role" name="role">
                              <option value="admin">admin</option>
                              <option value="Guru">Guru</option>
                              <option value="Siswa">Siswa</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">status</label>
                      <div class="col-sm-10">
                          <select class="form-control" id="status" name="status">
                              <option value="aktif">aktif</option>
                              <option value="suspend">suspend</option>
                              <option value="tidak_aktif">tidak_aktif</option>
                          </select>
                      </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
