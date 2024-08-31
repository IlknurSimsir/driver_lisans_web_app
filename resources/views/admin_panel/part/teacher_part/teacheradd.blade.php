<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Eğitmen Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addForm" action="{{ route('teacheradd') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="addName" class="form-label">İsim</label>
                        <input type="text" class="form-control" id="addName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="addSurname" class="form-label">Soyisim</label>
                        <input type="text" class="form-control" id="addSurname" name="surname" required>
                    </div>
                    <div class="mb-3">
                        <label for="addPhone" class="form-label">Telefon</label>
                        <input type="number" class="form-control" id="addPhone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="addMail" class="form-label">Mail</label>
                        <input type="email" class="form-control" id="addMail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="addExplanation" class="form-label">Açıklama</label>
                        <input type="text" class="form-control" id="addExplanation" name="explanation" required>
                    </div>
                    <div class="mb-3">
                        <label for="addLesson_id" class="form-label">Ders</label>
                        <select class="form-select" id="addLesson_id" name="lesson_id" required>
                            <option value="" disabled selected>Ders Seçin</option>
                            @foreach($lesson as $lessons)
                            <option value="{{ $lessons->id }}">{{ $lessons->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="addPhoto" class="form-label">Fotoğraf</label>
                        <input type="file" accept=".png,.jpg,.jpeg,.csv" class="form-control" id="addPhoto" name="photo" required>
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
                document.getElementById('addId').value = id;
                document.getElementById('addName').value = name;
                document.getElementById('addSurname').value = surname;
                document.getElementById('addPhone').value = phone;
                document.getElementById('addMail').value = email;
                document.getElementById('addExplanation').value = explanation;
                document.getElementById('addLesson_id').value = lesson_id;
                document.getElementById('addPhoto').value = photo;
            });
        });
    });
</script>