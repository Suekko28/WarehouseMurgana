<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Input Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <form action="/users" method="post" enctype="multipart/form-data">
            @csrf
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
            <select name="role" onChange="munculkan()" class="form-control w-100" id="role1">
                <option value="">--Pilih Role--</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
                
            </div>
            <div class="mb-3" id="selectCompany1" disabled hidden>
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
    function munculkan(){
        if(document.getElementById("role1").value=="User"){
            document.getElementById("selectCompany1").hidden = false;
            document.getElementById("selectCompany1").disabled = false;
        }
        else{
            document.getElementById("selectCompany1").hidden = true;
            document.getElementById("selectCompany1").disabled = true;
        }
    }
</script>

