<!-- Modal -->
<div class="modal fade" id="exampleModal {{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Perusahaan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      
      <div class="modal-body">
        <form action="{{ url('perusahaan')}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nama Perusahaan</label>
            <input name="name" type="text" class="form-control w-100" id="name" aria-describedby="name" value="{{$data->name}}">
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