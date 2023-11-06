<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/users" method="post" enctype="multipart/form-data" id="formEdit">
          @csrf
          @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control w-100" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control w-100" id="email" aria-describedby="email" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control w-100" id="password" aria-describedby="password">
            </div>
            
            <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" class="form-control w-100" id="role2">
                <option value="">--Pilih Role--</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>      
      </div>
            <div class="mb-3" id="selectCompany2" hidden disabled>
            <label for="company" class="form-label" >Company</label>
            <select name="company" class="form-control w-100" id="company">
              <option value="">--Pilih Company--</option>
                @foreach($company as $comp)
                <option value="{{$comp->id}}">{{$comp->name}}</option>
                @endforeach
            </select>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
    </form>

    </div>
  </div>
</div>
</div>
<script>
  document.getElementById("role2").addEventListener("change", munculkan);

function keluarkan(id, userId) {
    var cells = document.getElementsByTagName("tr");
    let name = cells[id].children[1].innerHTML;
    let email = cells[id].children[2].innerHTML;
    let company = cells[id].children[3].innerHTML;
    let role = cells[id].children[4].innerHTML;
    let targetUrl = "/users/" + userId;
    document.getElementById("name").value = name;
    document.getElementById("email").value = email;
    document.getElementById("role2").value = role;
    munculkan(); // Memanggil fungsi munculkan untuk menyesuaikan tampilan perusahaan
    document.getElementById("formEdit").action = targetUrl;
}


  function munculkan() {
    var roleSelect = document.getElementById("role2");
    var selectCompany = document.getElementById("selectCompany2");

    if (roleSelect.value === "User") {
      selectCompany.hidden = false;
      selectCompany.disabled = false;
    } else {
      selectCompany.hidden = true;
      selectCompany.disabled = true;
    }
  }
</script>
