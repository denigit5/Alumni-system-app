@section('content')
<div class="container">
    <h2>Upload Avatar</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('upload.avatar') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="avatar">Select Avatar Image</label>
            <input type="file" name="avatar" id="avatar" class="form-control" required>
            @error('avatar')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
