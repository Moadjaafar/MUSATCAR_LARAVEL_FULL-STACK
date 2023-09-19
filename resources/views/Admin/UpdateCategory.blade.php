@extends('Admin.layouts.template')
@section('pagetitle')
    Admin Dashboard
@endsection
@section('content')
    <div class="container">
        <div class="col-xxl mt-5">
            <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Update Marke</h5>

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
                <form action="{{route('Update_category_data')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{$category_info->id}}" name="category_id" id="category_id">
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Marke Name</label>
                    <div class="col-sm-10">
                      <input value="{{$category_info->Marke_name}}" type="text" class="form-control" name="Marke_name" id="Marke_name" />
                    </div>
                  </div>

                  <div class="row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">UPDATE CATEGORY</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection