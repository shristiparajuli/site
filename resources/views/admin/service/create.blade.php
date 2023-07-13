@extends('layouts.admin')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add new Service </h4>
            <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" name="type" aria-label="Username">
                    </div>
                    <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" placeholder="Username" name="price" aria-label="Username">
                    </div>
                    <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Username" name="description" aria-label="Username">
                    </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="customFile">
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