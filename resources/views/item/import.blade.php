<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Import Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('import_data', ['id' => $data->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- ... -->
                    <div class="mb-3">
                        <label for="file" class="form-label">Select File</label>
                        <input name="file" type="file" class="form-control" id="file" accept=".xlsx, .xls">
                    </div>
                    <!-- ... -->
                    <button type="submit" class="btn btn-primary">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>
