@extends('layouts.admin')
  @section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Striped Table</h4>
        <p class="card-description"> Add class <code>.table-striped</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> Image </th>
                <th> Name </th>
                <th> Post </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              @foreach($teams as $team)
              <tr>
                <td class="py-1">
                  <img src="{{asset('storage/team/' . $team->image)}}" alt="Image" class="img-thumbnail">
                </td>
                <td> {{$team->name}}  </td>
                <td> {{ $team->post}} </td>
                <td>
                  <form action="{{route('teams.destroy', $team->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mdi mdi-delete"> Delete </button>
                  </form>
                  <a href="{{ route ('teams.edit', $team->id )}}" class="mdi mdi-table-edit"> </a>
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