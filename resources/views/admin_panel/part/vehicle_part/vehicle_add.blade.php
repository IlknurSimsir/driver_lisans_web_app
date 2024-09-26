<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Araç Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addForm" action="{{ route('vehicleadd') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="addBrand" class="form-label">Marka</label>
                        <input type="text" class="form-control" id="addBrand" name="brand" required>
                    </div>
                    <div class="mb-3">
                        <label for="addModel" class="form-label">Model</label>
                        <input type="text" class="form-control" id="addModel" name="model" required>
                    </div>
                    <div class="mb-3">
                        <label for="addYear" class="form-label">Yıl</label>
                        <input type="text" class="form-control" id="addYear" name="year" required>
                    </div>
                    <div class="mb-3">
                        <label for="addGear_type" class="form-label">Otomatik/Manuel</label>
                        <select class="form-select" id="addGear_type" name="gear_type" required>
                            <option value="Otomatik">Otomatik</option>
                            <option value="Manuel">Manuel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="addImg" class="form-label">Fotoğraf</label>
                        <input type="file" name="img" accept=".png,.jpg,.jpeg,.csv" class="form-control"
                            id="addImg">
                    </div>

                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>
