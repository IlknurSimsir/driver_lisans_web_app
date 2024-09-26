<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">SSS Sil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="deleteForm" action="{{ route('adminSSSdelete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="deleteId">
                    <div class="mb-3">
                        <label for="deleteQuestion" class="form-label">Soru</label>
                        <input type="text" class="form-control" id="deleteQuestion" name="question" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="deleteAnswer" class="form-label">Cevap</label>
                        <input type="text" class="form-control" id="deleteAnswer" name="answer" disabled>
                    </div>
                    <center>
                        <h6>Soru Cevabı silmek istediğinizden emin misiniz?</h6>
                        <button type="submit" class="btn btn-primary">Sil</button>
                    </center>

                </form>


            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var id = this.getAttribute('data-id');
                var question = this.getAttribute('data-question');
                var answer = this.getAttribute('data-answer');
                document.getElementById('deleteId').value = id;
                document.getElementById('deleteQuestion').value = question;
                document.getElementById('deleteAnswer').value = answer;

            });
        });
    });
</script>
