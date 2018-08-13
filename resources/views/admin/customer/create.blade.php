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
                        <h3 class="card-header bg-primary text-white">
                            Create New Customer
                        </h3>
                        <div class="card-body">
                            <form action="{{route('customer.store')}}" method="post">
                                @csrf
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
                                    <input class="form-control" id="category" name="category" type="text">
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
                                        <input class="form-control" id="kyat" name="kyat" type="number">
                                        </input>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="pae">
                                            ပဲ
                                        </label>
                                        <input class="form-control" id="pae" name="pae" type="number">
                                        </input>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="yway">
                                            ေရြး
                                        </label>
                                        <input class="form-control" id="yway" name="yway" type="number">
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="loan">
                                        ထုတ္ေခ်းေသာေငြရင္း
                                    </label>
                                    <input class="form-control" id="loan" name="loan" type="number">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="customerName">
                                        ေပါင္သူအမည္
                                    </label>
                                    <input class="form-control" id="customerName" name="customerName" type="text">
                                    </input>
                                </div>
                                 <div class="form-group">
                                    <label for="created_at">
                                        ေန႔စြဲ
                                    </label>
                                    <input class="form-control" id="created_at" name="date" type="date">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="customerAddress">
                                        ေနရပ္လိပ္စာ
                                    </label>
                                    <textarea class="form-control" id="customerAddress" name="customerAddress" rows="3">
                                    </textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">
                                    Insert
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
