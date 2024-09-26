<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Güzergah Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addForm" action="{{ route('routeadd') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="addTitle" class="form-label">Güzergah Başlığı</label>
                        <input type="text" class="form-control" id="addTitle" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="addContent" class="form-label">İçerik</label>
                        <input type="text" class="form-control" id="addContent" name="content" required>
                    </div>
                    <div class="mb-3">
                        <label for="addVideoUrl" class="form-label">Video Linki (Zorunlu Değil)
                        </label>
                        <input type="text" class="form-control" id="addVideoUrl" name="videoUrl">
                    </div>


                    <div class="mb-3">
                        <label for="addMapUrl" class="form-label">Harita Linki</label>
                        <input type="text" class="form-control" id="addMapUrl" name="mapUrl" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var addButtons = document.querySelectorAll('.add-btn');
        addButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                document.getElementById('addContent').value = content;
                document.getElementById('addVideoUrl').value = videoUrl;
                document.getElementById('addMapUrl').value = mapUrl;

            });
        });
    });
</script>
