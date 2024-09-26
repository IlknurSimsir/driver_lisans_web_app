<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Soru Cevap Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addForm" action="{{ route('adminSSSadd') }}" method="POST">
                    @csrf


                    <div class="mb-3">
                        <label for="addQuestion" class="form-label">Soru</label>
                        <input type="text" class="form-control" id="addQuestion" name="question" required>
                    </div>
                    <div class="mb-3">
                        <label for="addAnswer" class="form-label">Cevap</label>
                        <input type="text" class="form-control" id="addAnswer" name="answer" required>
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
                document.getElementById('addQuestion').value = question;
                document.getElementById('addAnswer').value = answer;

            });
        });
    });
</script>
