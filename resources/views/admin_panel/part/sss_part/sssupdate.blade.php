<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">SSS Düzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" action="{{ route('adminSSSupdate') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label for="editQuestion" class="form-label">Soru</label>
                        <input type="text" class="form-control" id="editQuestion" name="question" required>
                    </div>
                    <div class="mb-3">
                        <label for="editAnswer" class="form-label">Cevap</label>
                        <input type="text" class="form-control" id="editAnswer" name="answer" required>
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
                var question = this.getAttribute('data-question');
                var answer = this.getAttribute('data-answer');

                document.getElementById('editId').value = id;
                document.getElementById('editQuestion').value = question;
                document.getElementById('editAnswer').value = answer;
            });
        });
    });
</script>
