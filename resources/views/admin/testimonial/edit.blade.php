@extends('layouts.admin')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">EDIT TESTIMONIAL </h4>
            <p class="card-description"> Add  </p>
            <form method="POST" action="{{route ('testimonials.update', $testimonial->id )}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="name"> Name </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ $testimonial->name}}">
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="designation" value="{{ $testimonial->designation }}">
                    </div>
                    <div class="form-group">
                        <label for="description"> Review </label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Write your review here" value="{{ $testimonial->description }}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection