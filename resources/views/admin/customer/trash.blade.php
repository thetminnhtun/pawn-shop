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
				<div class="alert alert-success">{{session('status')}}</div>
			@endif
			<div class="card">
				<div class="card-header bg-primary text-white">
					Deleted Customer
					<span class="badge badge-light">{{$customers->count()}}</span>
				</div>
				<div class="card-body">
					<table class="table table-bordered text-center table-hover">
						<thead class="table table-sm">
							<tr>
								<th rowspan="2" class="align-middle">
									စဥ္
								</th>
								<th rowspan="2" class="align-middle">
									ပစၥည္းအမ်ိဳးအမည္
								</th>
								<th colspan="3">
									ေက်ာက္ပါအေလးခ်ိန္
									<th rowspan="2" class="align-middle">
										ထုတ္ေခ်းေသာေငြရင္း
									</th>
									<th rowspan="2" class="align-middle">
										ေပါင္သူအမည္
									</th>
									<th rowspan="2" class="align-middle">
										ID
									</th>
									<th rowspan="2" class="align-middle">
										ေနရပ္လိပ္စာ
									</th>
									<th rowspan="2" class="align-middle">
										ေန႔စြဲ
									</th>
									<th rowspan="2" class="align-middle">
										Restore
									</th>
									<th rowspan="2" class="align-middle">
										Delete
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
								<?php $num = 1; ?>
								@foreach($customers as $customer)
								<tr>
									<th> 
										{{$num++}} 
									</th>
									<td> {{$customer->category}} </td> 
 									<td> {{$customer->kyat}} </td>
									<td> {{$customer->pae}} </td> 
									<td> {{$customer->yway}}</td>
									<td> {{number_format($customer->loan)}} က်ပ္ </td> 
									<td> {{$customer->customer_name}} </td> 
									<td> 
										{{$customer->id}}
									 </td> 
									<td> {{$customer->customer_address}} </td>
									<td> {{$customer->created_at->format('d-m-Y')}} </td>
									<td> 
										<a href="{{url("customer/restore/{$customer->id}")}}" class="btn btn-sm btn-success" onclick="return confirm('Are you sure to restore ?')">Restore</a>
									</td>
									<td>
										<form action="{{url("customer/delete/{$customer->id}")}}" method="post">
			                                @csrf
			                                @method('DELETE')
			                                 <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure to delete ?')">
			                                    Delete
			                                </button>
			                            </form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- Section End -->
	</div>
</div>
@endsection