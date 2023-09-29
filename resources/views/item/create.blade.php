            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Input Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori Alat</label>
                        <input name="alat" type="text" class="form-control w-100" id="kategori" aria-describedby="name" value="">
                      </div>
                      <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input name="lokasi" type="text" class="form-control w-100" id="lokasi" aria-describedby="email" value="">
                      </div>
                      <div class="mb-3">
                        <label for="pabrik" class="form-label">Pabrik Pembuatan</label>
                        <input name="pabrik" type="text" class="form-control w-100" id="pabrik">
                      </div>
                      <div class="mb-3">
                        <label for="seri" class="form-label">No.Seri</label>
                        <input name="seri" type="text" class="form-control w-100" id="seri">
                      </div>
                      <div class="mb-3">
                        <label for="pengesahan" class="form-label">No.Pengesahan</label>
                        <input name="pengesahan" type="text" class="form-control w-100" id="pengesahan">
                      </div>
                      <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input name="keterangan" type="text" class="form-control w-100" id="keterangan">
                      </div>
                      <div class="mb-3">
                        <label for="file" class="form-label">File</label>
                        <input name="file" type="file" class="form-control w-100" id="file" accept=".pdf">
                      </div>
                      <div class="mb-3">
                        <label for="company_id" class="form-label">File</label>
                        <input name="company_id" type="text" class="form-control w-100" id="company_id">
                      </div>
                      
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                  </div>
                </form>

                </div>
              </div>
            </div>