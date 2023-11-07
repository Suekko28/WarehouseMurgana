<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModal" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Import Data</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="/perusahaan/detail" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="file" class="form-label">Pilih File</label>
                      <input name="file" type="file" class="form-control" id="file">
                  </div>
                  <div class="mb-3">
                      <label for="company_id" class="form-label">Pilih Perusahaan</label>
                      <select name="company_id" class="form-select" id="company_id">
                          <option value="{{ $data->id }}">{{ $data->name }}</option>
                          <!-- Add options for other companies if needed -->
                      </select>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Import</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
