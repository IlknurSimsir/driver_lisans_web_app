<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Öğreci Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addForm" action="{{ route('studentadd') }}" method="POST">
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
                        <label for="addClass_id" class="form-label">Sınıf</label>
                        <input type="text" class="form-control" id="addClass_id" name="class_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="addLicense_type" class="form-label">Ehliyet Tipi</label>
                        <select class="form-select" id="addLicense_type" name="license_type" required>
                            <option value="" disabled selected>Ehiyet Tipi Seçin</option>
                            @foreach ($license as $license)
                                <option value="{{ $license->id }}">{{ $license->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="addCourse_status" class="form-label">Kurs Durumu</label>
                        <select class="form-select" id="addCourse_status" name="course_status" required>
                            <option value="" disabled selected>Kurs Durumu Seçin</option>
                            @foreach ($course as $courses)
                                <option value="{{ $courses->id }}">{{ $courses->status }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="addPassword" class="form-label">Parola</label>
                        <input type="password" class="form-control" id="addPassword" name="password" required>
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
                document.getElementById('addPassword').value = password;
                document.getElementById('addClass_id').value = class_id;
                document.getElementById('addLicense_type').value = license_type;
                document.getElementById('addCourse_status').value = course_status;
            });
        });
    });
</script>
