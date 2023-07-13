@extends('layouts.admin')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Social </h4>
            <form method="POST" action="{{ route('socials.update', $social->id )}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label> Name</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" name="name" aria-label="Username" value="{{$social->name}}">
                    </div>
                    <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" placeholder="Username" name="link" aria-label="Username" value="{{$social->link}}">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>File upload</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="icon" id="customFile">
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="hidden_id" value="{{$social->id}}">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fileInput = document.querySelector('.custom-file-input');
        const fileLabel = document.querySelector('.custom-file-label');

        fileInput.addEventListener('change', function () {
            if (fileInput.files.length > 0) {
                fileLabel.textContent = fileInput.files[0].name;
            } else {
                fileLabel.textContent = 'Choose file';
            }
        });
    });
</script>
@endsection