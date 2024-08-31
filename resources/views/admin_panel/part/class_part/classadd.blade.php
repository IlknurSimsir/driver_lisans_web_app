<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Sınıf Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addForm" action="{{ route('classadd') }}" method="POST">
                    @csrf
                    <!-- @method('PUT') alanını kaldırıyoruz çünkü sadece POST kullanacağız -->

                    <div class="mb-3">
                        <label for="addName" class="form-label">Sınıf Adı</label>
                        <input type="text" class="form-control" id="addName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="addTerm" class="form-label">Dönem</label>
                        <input type="text" class="form-control" id="addTerm" name="term" required>
                    </div>
                    <div class="mb-3">
                        <label for="addLesson_teacher_id" class="form-label">Ders Hocası</label>
                        <input type="text" class="form-control" id="addLesson_teacher_id" name="lesson_teacher_id"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="addClass_size" class="form-label">Mevcutı</label>
                        <input type="text" class="form-control" id="addClass_size" name="class_size" required>
                    </div>
                    <div class="mb-3">
                        <label for="addStart_date" class="form-label">Başlama Tarihi</label>
                        <input type="text" class="form-control" id="addStart_date" name="start_date" required>
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
                document.getElementById('addTerm').value = term;
                document.getElementById('addLesson_teacher_id').value = lesson_teacher_id;
                document.getElementById('addClass_size').value = class_size;
                document.getElementById('addStart_date').value = start_date;

            });
        });
    });
</script>
