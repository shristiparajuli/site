@extends('layouts.admin')
  @section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Services</h4>
        <a href="{{ route('services.create') }}">
        <p class="card-description"> Add New Service </p>
        </a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> Image </th>
                <th> Type </th>
                <th> Price </th>
                <th> Description </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              @foreach($services as $service)
              <tr>
                <td class="py-1">
                  <img src="{{asset('storage/' . $service->image)}}" alt="Image" class="img-thumbnail"  ">
                </td>
                <td> {{ $service->type}}  </td>
                <td> {{ $service->price}} </td>
                <td> {{ $service->description}} </td>
                <td>
                  <form action="{{route('services.destroy', $service->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mdi mdi-delete"> Delete </button>
                  </form>
                  <a href="{{ route ('services.edit', $service->id )}}" class="mdi mdi-table-edit"> </a>
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
  @endsection