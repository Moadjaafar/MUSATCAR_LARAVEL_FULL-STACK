@extends('Admin.layouts.template')
@section('pagetitle')
    Admin Dashboard
@endsection
@section('content')
    <div class="card radius-10 w-100">
        <div class="card-body">
        <div class="d-flex align-items-center">
            <h6 class="mb-0">BOOKUNG</h6>
            <div class="fs-5 ms-auto dropdown">
            <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i
                class="bi bi-three-dots"></i></div>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </div>
        </div>
        <div class="table-responsive mt-2">
            <table class="table align-middle mb-0">
            <thead class="table-light">
                <tr>
                <th>#ID</th>
                <th>User name</th>
                <th>Phone number</th>
                <th>Car</th>
                <th>Pickup Date</th>
                <th>Return Date</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Rent_Orders as $item)
                    <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->user_name}}</td>
                    <td>{{$item->User_phone}}</td>

                    @php
                        $images_src =\App\Models\cars::where('id', $item->car_id)->value('car_images_First');
                    @endphp

                    <td>
                        <a href="{{route('Update_Car',$item->car_id)}}">
                        <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                                <img src="{{ asset('storage/'.$images_src) }}" alt="">
                            </div>
                        </div>
                        </a>
                    </td>

                    <td>{{$item->pickup_date . ' ' . $item->pickup_Time}}</td>
                    <td>{{$item->return_date . ' ' . $item->return_Time}}</td>

                    <td><span class="badge bg-success">{{$item->status}}</span></td>

                    
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection