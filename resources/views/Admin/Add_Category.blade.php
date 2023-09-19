@extends('Admin.layouts.template')
@section('pagetitle')
    Admin Dashboard
@endsection
@section('content')
    <div class="container">
        <div class="col-xxl">
            <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">ADD MARKE</h5>

                <small class="text-muted float-end">Marke Info</small>
              </div>
              
              <div class="card-body">
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
                <form action="{{route('create_marke')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Marke Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="Marke_name" id="Marke_name" placeholder="Nissane" />
                    </div>
                  </div>

                  <div class="row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">ADD MARKE</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection