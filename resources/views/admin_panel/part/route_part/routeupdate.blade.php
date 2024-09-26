<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Güzergah Düzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" action="{{ route('routeupdate') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Güzergah Başlığı</label>
                        <input type="text" class="form-control" id="editTitle" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="editContent" class="form-label">İçerik</label>
                        <input type="text" class="form-control" id="editContent" name="content" required>
                    </div>
                    <div class="mb-3">
                        <label for="editVideoUrl" class="form-label">Video Linki (Zorunlu Değil)</label>
                        <input type="text" class="form-control" id="editVideoUrl" name="videoUrl">
                    </div>


                    <div class="mb-3">
                        <label for="editMapUrl" class="form-label">Harita Linki</label>
                        <input type="text" class="form-control" id="editMapUrl" name="mapUrl" required>
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
                var id = this.getAttribute('data-id');
                var title = this.getAttribute('data-title');
                var content = this.getAttribute('data-content');
                var videoUrl = this.getAttribute('data-videoUrl');
                var mapUrl = this.getAttribute('data-mapUrl');

                document.getElementById('editId').value = id;
                document.getElementById('editTitle').value = title;
                document.getElementById('editContent').value = content;
                document.getElementById('editVideoUrl').value = videoUrl;
                document.getElementById('editMapUrl').value = mapUrl;
            });
        });
    });
</script>
