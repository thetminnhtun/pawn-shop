@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Start -->
        @include('layouts/sidebar')
        <!-- Sidebar End -->
        <!-- Section Start -->
        <div class="col-md-10 bg-white">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white d-flex">
                            <h3 class="mr-auto">Edit Customer</h3>
                            <b class="">{{$customer->created_at->format('d-m-Y')}}</b>
                        </div>
                        <div class="card-body">
                            <form action="{{route('customer.update',['id'=>$customer->id])}}" method="post">
                                @csrf
                                @method('PUT')
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>
                                            {{ $error }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="customerAddress">
                                        ပစၥည္းအမ်ိဳးအမည္
                                    </label>
                                    <input class="form-control" id="category" name="category" type="text" value="{{$customer->category}}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="">
                                        ေက်ာက္ပါအေလးခ်ိန္
                                    </label>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="kyat">
                                            က်ပ္
                                        </label>
                                        <input class="form-control" id="kyat" name="kyat" type="number" value="{{$customer->kyat}}">
                                        </input>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="pae">
                                            ပဲ
                                        </label>
                                        <input class="form-control" id="pae" name="pae" type="number" value="{{$customer->pae}}">
                                        </input>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="yway">
                                            ေရြး
                                        </label>
                                        <input class="form-control" id="yway" name="yway" type="number" value="{{$customer->yway}}">
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="loan">
                                        ထုတ္ေခ်းေသာေငြရင္း
                                    </label>
                                    <input class="form-control" id="loan" name="loan" type="number" value="{{$customer->loan}}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="customerName">
                                        ေပါင္သူအမည္
                                    </label>
                                    <input class="form-control" id="customerName" name="customerName" type="text" value="{{$customer->customer_name}}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="created_at">
                                        ေန႔စြဲ
                                    </label>
                                    <input class="form-control" id="created_at" name="date" type="date" value="{{$customer->updated_at->toDateString()}}">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="customerAddress">
                                        ေနရပ္လိပ္စာ
                                    </label>
                                    <textarea class="form-control" id="customerAddress" name="customerAddress" rows="3">{{$customer->customer_address}}
                                    </textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section End -->
@endsection
