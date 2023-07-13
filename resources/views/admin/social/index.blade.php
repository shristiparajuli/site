@extends('layouts.admin')
  @section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Socials</h4>
        <a href="{{ route('socials.create') }}">
        <p class="card-description"> Add New Socials </p>
        </a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> Name </th>
                <th> Link </th>
                <th> Icon </th>
              </tr>
            </thead>
            <tbody>
              @foreach($socials as $social)
              <tr>
                <td class="py-1">
                  <img src="{{asset('storage/social/' . $social->icon)}}" alt="Image" class="img-thumbnail"  ">
                </td>
                <td> {{ $social->name}}  </td>
                <td> {{ $social->link}} </td>
                <td> {{ $social->icon}} </td>
                <td>
                  <form action="{{ route('socials.destroy', $social->id ) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mdi mdi-delete"> Delete </button>
                  </form>
                  <a href="{{ route ('socials.edit', $social->id ) }}" class="mdi mdi-table-edit"> </a>
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