@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Testimonial</h4>
                <p class="card-description">Add</p>
                <form class="forms-sample" action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
                    </div>
                    <div class="form-group">
                        <label for="description">Review</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Write your review here">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title">Testimonials</h4>
                    <p class="text-muted mb-1 small"><a href="{{ route('testimonials.index') }}">View all</a></p>
                </div>
                <div class="preview-list">
                    @foreach($testimonials as $testimonial)
                        <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                        <h6 class="preview-subject">{{ $testimonial->name }}</h6>
                                        <p class="text-muted text-small">{{ $testimonial->created_at->diffForHumans() }}</p>
                                    </div>
                                    <p class="text-muted">{{ $testimonial->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
