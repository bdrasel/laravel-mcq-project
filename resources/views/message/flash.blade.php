
@if(session('message'))
    <div class="alert alert-success mt-5" role="alert">
        <strong>{{ session('message') }}</strong>
    </div>
@endif