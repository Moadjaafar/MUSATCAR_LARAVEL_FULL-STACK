@extends('Admin.layouts.template')
@section('pagetitle')
    Admin Dashboard
@endsection
@section('content')
  <div class="card radius-10 w-100">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <h6 class="mb-0">Products</h6>
        
      </div>
      <div class="table-responsive mt-2">
        <table class="table align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th>#ID</th>
              <th>Marke Name</th>
              <th>Cars in this Marke</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($category as $catt)
                <tr>
                <td>{{$catt->id}}</td>
                <td>{{$catt->Marke_name}}</td>
                <td>{{$catt->Cars_count}}</td>
                <td>Apr 8, 2021</td>
                <td>
                  <div class="d-flex align-items-center gap-3 fs-6">
                  <a href="{{route('Update_category',$catt->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      title="" data-bs-original-title="View detail" aria-label="Views">
                      <ion-icon name="eye-outline"></ion-icon>
                  </a>
                  <a href="{{route('Update_category',$catt->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      title="" data-bs-original-title="Edit info" aria-label="Edit">
                      <ion-icon name="pencil-outline"></ion-icon>
                  </a>
                  <a href="{{route('Delete_category',$catt->id)}}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      title="" data-bs-original-title="Delete" aria-label="Delete">
                      <ion-icon name="trash-outline"></ion-icon>
                  </a>
                  </div>
              </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
