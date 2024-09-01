<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Sınıf Düzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" action="{{ route('classupdate') }}" method="POST">
                    @csrf
                    <!-- @method('PUT') alanını kaldırıyoruz çünkü sadece POST kullanacağız -->
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Sınıf Adı</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="Term" class="form-label">Dönem</label>
                        <input type="text" class="form-control" id="editTerm" name="term" required>
                    </div>
                    <div class="mb-3">
                        <label for="editLesson_teacher_id" class="form-label">Ders Hocası</label>
                        <select class="form-select" id="editLesson_teacher_id" name="lesson_teacher_id" required>
                            <option value="" disabled selected>Ders Seçin</option>

                            @foreach($teacher as $teachers)

                            <option value="{{ $teachers->id }}">
                                {{ $teachers->name }} {{ $teachers->surname }}
                            </option>

                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Class_size" class="form-label">Mevcut</label>
                        <input type="text" class="form-control" id="editClass_size" name="class_size" required>
                    </div>
                    <div class="mb-3">
                        <label for="Start_date" class="form-label">Başlama Tarihi</label>
                        <input type="date" class="form-control" id="editStart_date" name="start_date" required>
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
                var name = this.getAttribute('data-name');
                var term = this.getAttribute('data-term');
                var lesson_teacher_id = this.getAttribute('data-lesson_teacher_id');
                var class_size = this.getAttribute('data-class_size');
                var start_date = this.getAttribute('data-start_date');

                document.getElementById('editId').value = id;
                document.getElementById('editName').value = name;
                document.getElementById('editTerm').value = term;
                document.getElementById('editClass_size').value = class_size;
                document.getElementById('editStart_date').value = start_date;
                document.getElementById('editLesson_teacher_id').value = lesson_teacher_id;


            });
        });
    });
</script>