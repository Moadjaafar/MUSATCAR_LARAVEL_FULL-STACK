@extends('Admin.layouts.template')
@section('pagetitle')
    Admin Dashboard
@endsection
@section('content')
    <div class="card radius-10 w-100">
        <div class="card-body">
        <div class="d-flex align-items-center">
            <h6 class="mb-0">BOOKUNG</h6>
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
                <th>Actions</th>
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
                    @php
                        if($item->status==='Pending'){
                            $class='bg-warning';
                        }elseif($item->status==='confirmed'){
                            $class='bg-success';
                        }else{
                            $class='bg-danger';
                        }
                    @endphp
                    <td><span class="badge {{$class}}">{{$item->status}}</span></td>

                    <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="{{route('confrmd_Booking',$item->id)}}" style="cursor: pointer;" class="text-success btnstatusorder" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="" data-bs-original-title="Confirmed" aria-label="Confirmed">
                                <img src="{{asset('Dahsboard/assets/images/icons/check-mark.png')}}" alt="">
                            </a>

                            <a href="{{route('cancld_Booking',$item->id)}}" style="cursor: pointer;" class="text-danger btnstatusorder" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="" data-bs-original-title="Canceled" aria-label="Canceled">
                            <img src="{{asset('Dahsboard/assets/images/icons/cancel.png')}}" alt="">
                            </a>

                            <a href="{{route('delete_Booking',$item->id)}}" style="cursor: pointer;" class="text-danger btnstatusorder" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="" data-bs-original-title="Canceled" aria-label="Canceled">
                                <img src="{{asset('Dahsboard/assets/images/icons/delete.png')}}" alt="">
                                </a>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            {{ $Rent_Orders->links('vendor.pagination.custme') }}

        </div>
        </div>
    </div>
@endsection