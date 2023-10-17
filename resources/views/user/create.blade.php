        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengguna</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="name" class="form-label">Nama</label>
                      <input type="text" class="form-control w-100" id="name" aria-describedby="name" value="">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control w-100" id="email" aria-describedby="email" value="">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control w-100" id="password">
                    </div>
                    <div class="mb-3">
                      <label for="role" class="form-label">Role</label>
                      <select name="role" class="form-control w-100" id="role">
                        <option value="">--Pilih Role--</option>
                        <option value="">Admin</option>
                        <option value="">User</option>
                      </select>
                  </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Simpan Data</button>
                </div>
              </div>
            </div>
          </div>