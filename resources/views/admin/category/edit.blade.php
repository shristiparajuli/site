@extends('layouts.admin')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Category </h4>
            <form method="POST" action="{{ route('categories.update', $category->id )}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" name="name" aria-label="Username" value="{{$category->name}}">
                    </div>
                    <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Username" name="link" aria-label="Username" value="{{$category->link}}">
                    </div>
                    </div>
                    <input type="hidden" name="hidden_id" value="{{$category->id}}">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection