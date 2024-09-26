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

            <!-- İlk Summernote Alanı -->
            <div class="editFormLabel">
                <label for="summernote1" class="form-label"><b>{{ $label1 }}</b></label>
            </div>
            <textarea name="{{ $name1 }}" id="summernote1">{{ $variable1 }}</textarea>

            <!-- İkinci Summernote Alanı -->
            <div class="editFormLabel">
                <label for="summernote2" class="form-label"><b>{{ $label2 }}</b></label>
            </div>
            <textarea name="{{ $name2 }}" id="summernote2">{{ $variable2 }}</textarea>

            <!-- Üçüncü Summernote Alanı -->
            <div class="editFormLabel">
                <label for="summernote3" class="form-label"><b>{{ $label3 }}</b></label>
            </div>
            <textarea name="{{ $name3 }}" id="summernote3">{{ $variable3 }}</textarea>

            <!-- Dördüncü Summernote Alanı -->
            <div class="editFormLabel">
                <label for="summernote4" class="form-label"><b>{{ $label4 }}</b></label>
            </div>
            <textarea name="{{ $name4 }}" id="summernote4">{{ $variable4 }}</textarea>

            <!-- Kaydet Butonu -->
            <div class="editFormButtonBorder">
                <button type="submit" class="btn btn-dark editFormButton">Kaydet</button>
            </div>
        </form>
    </div>

    <!-- Summernote Initialization for all 4 editors -->
    <script>
        $('#summernote1').summernote({
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

        $('#summernote2').summernote({
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

        $('#summernote3').summernote({
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

        $('#summernote4').summernote({
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
