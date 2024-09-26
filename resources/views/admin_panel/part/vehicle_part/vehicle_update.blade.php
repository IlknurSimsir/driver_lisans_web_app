<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Şube Düzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" action="{{ route('vehicleupdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label for="editBrand" class="form-label">Marka</label>
                        <input type="text" class="form-control" id="editBrand" name="brand" required>
                    </div>
                    <div class="mb-3">
                        <label for="editModel" class="form-label">Model</label>
                        <input type="text" class="form-control" id="editModel" name="model" required>
                    </div>
                    <div class="mb-3">
                        <label for="editYear" class="form-label">Yıl</label>
                        <input type="text" class="form-control" id="editYear" name="year" required>
                    </div>
                    <div class="mb-3">
                        <label for="editGear_type" class="form-label">Otomatik/Manuel</label>
                        <select class="form-select" id="editGear_type" name="gear_type" required>
                            <option value="Otomatik">Otomatik</option>
                            <option value="Manuel">Manuel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editImg" class="form-label">Fotoğraf</label>
                        <input type="file" name="img" accept=".png,.jpg,.jpeg,.csv" class="form-control"
                            id="editImg">
                    </div>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>


            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Düzenleme butonundaki data-* attributelerinden değerleri al
                var id = this.getAttribute('data-id');
                var brand = this.getAttribute('data-brand');
                var model = this.getAttribute('data-model');
                var year = this.getAttribute('data-year');
                var gear_type = this.getAttribute('data-gear_type');

                // Modal içindeki form elemanlarına bu değerleri ata
                document.getElementById('editId').value = id;
                document.getElementById('editBrand').value = brand;
                document.getElementById('editModel').value = model;
                document.getElementById('editYear').value = year;
                document.getElementById('editGear_type').value = gear_type;
            });
        });


    });
</script>
