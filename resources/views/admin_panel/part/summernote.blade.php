<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $companyName }}</title>

    <!-- Summernote Lite CSS/JS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>
    <!-- Form Yapısı -->
    <div class="editFormBorder">
        <form action="{{ route($route) }}" method="POST">
            @csrf
            <div class="editFormLabel">
                <label for="summernote" class="form-label"><b>{{ $label }}</b></label>
            </div>
            <textarea name="{{ $name }}" id="summernote">{{ $variable }}</textarea>
            <div class="editFormButtonBorder">
                <button type="submit" class="btn btn-dark editFormButton">Kaydet</button>
            </div>
        </form>
    </div>

    <!-- Summernote Initialization -->
    <script>
        $('#summernote').summernote({
            placeholder: '...',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
</body>

</html>
