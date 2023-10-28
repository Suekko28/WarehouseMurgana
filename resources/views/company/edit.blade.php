<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Input Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/perusahaan/detail" method="post" enctype="multipart/form-data" id="formEdit">
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
        
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
    </form>

    </div>
  </div>
</div>
<script>
  function keluarkan(id,itemId,namaFile){
    var cells = document.getElementsByTagName("tr");
    let alat=cells[id].children[1].innerHTML;
    let lokasi=cells[id].children[2].innerHTML;
    let pabrik=cells[id].children[3].innerHTML;
    let seri=cells[id].children[4].innerHTML;
    let pengesahan=cells[id].children[5].innerHTML;
    let tgl_msk=cells[id].children[6].innerHTML
    let tgl_klr=cells[id].children[7].innerHTML
    let targetUrl="/perusahaan/detail/"+itemId;
    document.getElementById("alat").value=alat;
    document.getElementById("lokasi").value=lokasi;
    document.getElementById("pabrik").value=pabrik;
    document.getElementById("seri").value=seri;
    document.getElementById("pengesahan").value=pengesahan;
    document.getElementById("tgl_msk").value=tgl_msk;
    document.getElementById("tgl_klr").value=tgl_klr;
    document.getElementById("formEdit").action=targetUrl;
  }
</script>