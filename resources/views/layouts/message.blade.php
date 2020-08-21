@if(session('success'))
    <div class="alert alert-dismissible alert-danger">
        <strong>Success!!</strong> {{ session('success') }}
    </div>
@endif