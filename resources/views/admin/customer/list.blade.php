@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Start -->
        @include('layouts/sidebar')
        <!-- Sidebar End -->
        <!-- Section Start -->
        <div class="col-md-10 bg-white">
            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="row justify-content-between px-1 no-gutters">
                        <div class="d-inline">
                            All Customer
                            <span class="badge badge-light">
                                {{$customers->total()}}
                            </span>
                        </div>
                        <form class="d-inline col-md-3">
                            <div class="form-row">

                                <div class="col-8">
                                    <input name="q" class="form-control form-control-sm" placeholder="Search..." type="text">
                                    </input>
                                </div>

                                <div class="col-4">
                                    <button class="btn btn-warning btn-sm" type="submit">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center table-hover">
                        <thead class="table table-sm">
                            <tr>
                                <th class="align-middle" rowspan="2">
                                    စဥ္
                                </th>
                                <th class="align-middle" rowspan="2">
                                    ပစၥည္းအမ်ိဳးအမည္
                                </th>
                                <th colspan="3">
                                    ေက်ာက္ပါအေလးခ်ိန္
                                    <th class="align-middle" rowspan="2">
                                        ထုတ္ေခ်းေသာေငြရင္း
                                    </th>
                                    <th class="align-middle" rowspan="2">
                                        ေပါင္သူအမည္
                                    </th>
                                    <th class="align-middle" rowspan="2">
                                        ID
                                    </th>
                                    <th class="align-middle" rowspan="2">
                                        ေနရပ္လိပ္စာ
                                    </th>
                                    <th class="align-middle" rowspan="2">
                                        ေန႔စြဲ
                                    </th>
                                    <th class="align-middle" rowspan="2">
                                        Delete
                                    </th>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    က်ပ္
                                </th>
                                <th>
                                    ပဲ
                                </th>
                                <th>
                                    ေရြး
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = $customers->
                            firstItem(); ?>
								@foreach($customers as $customer)
                            <tr>
                                <th>
                                    {{$num++}}
                                </th>
                                <td>
                                    <a href="{{route('customer.edit',['id'=>$customer->id])}}">
                                        {{$customer->category}}
                                    </a>
                                </td>
                                <td>
                                    {{$customer->kyat}}
                                </td>
                                <td>
                                    {{$customer->pae}}
                                </td>
                                <td>
                                    {{$customer->yway}}
                                </td>
                                <td>
                                    {{number_format($customer->loan)}} က်ပ္
                                </td>
                                <td>
                                    {{$customer->customer_name}}
                                </td>
                                <td>
                                    {{$customer->id}}
                                </td>
                                <td>
                                    {{$customer->customer_address}}
                                </td>
                                <td>
                                    {{$customer->updated_at->format('d-m-Y')}}
                                </td>
                                <td>
                                    <form action="{{route('customer.destroy',['id'=>$customer->id])}}" method="post">
                                        @csrf
			                                @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete ?')" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{$customers->render()}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Section End -->
    </div>
</div>
@endsection
