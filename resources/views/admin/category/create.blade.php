@extends('layouts.admin')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add new Category </h4>
            <form method="POST" action="{{ route ('categories.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Name" name="name" aria-label="Username">
                    </div>
                    <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" placeholder="Link" name="link" aria-label="Username">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection