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
                <div class="col-md-8">
                    <div class="card">
                        <h3 class="card-header bg-primary text-white">
                            Search Customer Data
                        </h3>
                        <div class="card-body">
                            <form action="{{url('customer')}}">

                              <div class="form-group row">
                                <label for="customerName" class="col-sm-4 col-form-label">ေပါင္သူအမည္</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="customerName" name="customerName">
                                </div>
                              </div>
                                
                              <div class="form-group row">
                                <label for="category" class="col-sm-4 col-form-label">ပစၥည္းအမ်ိဳးအမည္</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="category" name="category">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="id" class="col-sm-4 col-form-label">ID</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="id" name="id">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="customerAddress" class="col-sm-4 col-form-label">ေနရပ္လိပ္စာ</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="customerAddress" name="customerAddress">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="created_at" class="col-sm-4 col-form-label">ေန႔စြဲ</label>
                                <div class="col-sm-8">
                                  <input type="date" class="form-control" id="created_at" name="created_at">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="loan" class="col-sm-4 col-form-label">ထုတ္ေခ်းေသာေငြရင္း</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="loan" name="loan">
                                </div>
                              </div>
                             
                              <div class="form-group row">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                              </div>

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
