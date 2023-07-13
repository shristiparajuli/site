@extends('layouts.admin')
  @section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Services</h4>
        <a href="{{ route ('categories.create') }}">
        <p class="card-description"> Add New Category </p>
        </a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> Name </th>
                <th> Link </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td> {{ $category->name}}  </td>
                <td> {{ $category->link}} </td>
                <td>
                  <form action="{{route('categories.destroy', $category->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mdi mdi-delete"> Delete </button>
                  </form>
                  <a href="{{ route ('categories.edit', $category->id )}}" class="mdi mdi-table-edit"> </a>
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