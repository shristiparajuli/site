@extends('layouts.admin')
  @section('content')
      <div class="page-header">
        <h3 class="page-title"> USERS/CONTACT US PAGE </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> USER/ CONTACT FORM  </h4>
              </p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($contacts as $contact)
                      <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->description}}</td>
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