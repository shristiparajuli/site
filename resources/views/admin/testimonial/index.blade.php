@extends('layouts.admin')
  @section('content')
      <div class="page-header">
        <h3 class="page-title"> TESTIMONIALS</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route ('testimonials.create')}}"> Add new </a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> TESTIMONIALS </h4>
              </p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Description</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($testimonials as $testimonial)
                      <tr>
                        <td>{{$testimonial->name}}</td>
                        <td>{{$testimonial->designation}}</td>
                        <td>{{$testimonial->description}}</td>
                        <td>
                          <form action="{{route('testimonials.destroy', $testimonial->id )}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mdi mdi-delete"> Delete </button>
                          </form>
                          <a href="{{route ('testimonials.edit', $testimonial->id )}}" class="mdi mdi-table-edit"> </a>
                          <a href="" class="mdi mdi-eye"> </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection