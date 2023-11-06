            <!-- Modal -->
            <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Input File</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
  
                      <form action="/perusahaan/detail" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="file" class="form-label">File</label>
                          <input name="file" type="file" class="form-control w-100" id="file">
                        </div>
                        <div class="mb-3">
                          <input value="{{$item->id}}" name="company_id" type="hidden" class="form-control w-100" id="file">
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
            
  
  