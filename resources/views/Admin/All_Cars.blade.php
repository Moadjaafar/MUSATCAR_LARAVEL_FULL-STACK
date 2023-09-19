@extends('Admin.layouts.template')
@section('pagetitle')
    Admin Dashboard
@endsection
@section('content')
    <div class="card radius-10 w-100">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <h6 class="mb-0">CARS</h6>
        <div class="fs-5 ms-auto dropdown">
          
        </div>
      </div>
      <div class="table-responsive mt-2">
        <table class="table align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th>#ID</th>
              <th>Car Image</th>
              <th>Model</th>
              <th>Year</th>
              <th>Price</th>
              <th>Availability</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($Cars as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                    <div class="product-box border">
                        <img src="{{ asset('storage/'.$item->car_images_First) }}" alt="">
                    </div>
                    <div class="product-info">
                        <h6 class="product-name mb-1">{{$item->marke_name}}</h6>
                    </div>
                    </div>
                </td>
                <td>{{$item->model}}</td>
                <td>{{$item->year}}</td>
                <td>{{$item->price_per_day}}</td>
                <td>{{$item->availability}}</td>
                <td>
                    <div class="d-flex align-items-center gap-3 fs-6">
                    <a href="{{route('Update_Car',$item->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="" data-bs-original-title="View detail" aria-label="Views">
                        <ion-icon name="eye-outline"></ion-icon>
                    </a>
                    <a href="{{route('Update_Car',$item->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="" data-bs-original-title="Edit info" aria-label="Edit">
                        <ion-icon name="pencil-outline"></ion-icon>
                    </a>
                    <a href="{{route('Delete_car',$item->id)}}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="" data-bs-original-title="Delete" aria-label="Delete">
                        <ion-icon name="trash-outline"></ion-icon>
                    </a>
                    </div>
                </td>
                </tr>
            @endforeach
            
          </tbody>

        </table>
        {{ $Cars->links('vendor.pagination.custme') }}

      </div>
      
    </div>
    

  </div>
@endsection
