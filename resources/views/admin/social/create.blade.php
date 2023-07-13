@extends('layouts.admin')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add new Socials </h4>
            <form method="POST" action="{{ route('socials.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" name="name" aria-label="Username">
                    </div>
                    <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" placeholder="Username" name="link" aria-label="Username">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label> Upload icon </label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="icon" id="customFile">
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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