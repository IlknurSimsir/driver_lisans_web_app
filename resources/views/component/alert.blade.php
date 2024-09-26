@if(session('success'))
<div id="success-alert" class="alert alert-success mt-4">
    {{ session('success') }}
</div>
@endif
@if(session('warning'))
<div id="warning-alert" class="alert alert-warning mt-4">
    {{ session('warning') }}
</div>
@endif

<!-- @if(session('error'))
<div id="error-alert" class="alert alert-danger mt-4">
    {{ session('error') }}
</div>
@endif -->
@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif