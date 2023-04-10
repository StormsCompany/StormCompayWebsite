@extends('layouts.app')
@section('content')
				<section class="material-half-bg">
								<div class="cover"></div>
				</section>
				<section class="login-content">
								<div class="logo ">
												<h1><strong>{{ config('app.name') }}</strong></h1>
								</div>

								<div class="col-md col-xl">
												<div class="item">
																<a href="{{ route('services.index') }}" class="btn btn-sm col-md-1 col-xl-1 btn-primary m-3 rounded-pill ">
																				Back <i class="fa fa-eye  mx-auto"></i>
																</a>
																<a href="{{ route('services.edit', ['service'=>$service->id]) }}"
																				class="btn btn-sm col-md-1 col-xl-1 btn-info m-3 rounded-pill ">
																				Edit <i class="fa fa-eye  mx-auto"></i>
																</a>
																<a onclick="document.getElementById('service-delete-form').submit();"
																				class="btn btn-sm col-md-1 col-xl-1 btn-danger m-3 rounded-pill ">
																				Destroy <i class="fa fa-eye mx-auto"></i>
																				<div class="d-none">
																								<form action="{{ route('services.destroy', ['service'=>$service->id]) }}" method="POST"
																												id="service-delete-form">
																												@method('DELETE')
																												@csrf
																								</form>
																				</div>
																</a>
																<div class="card">
																				<div class="card-header">
																								<label class="control-label">Account Type :
																												<strong>{{ $service->user_description }}</strong></label>
																				</div>
																				<div class="card-body">
																								@if ($service->company_size)
																												<p>{{ $service->company_size }}</p>
																								@endif
																								<p>Email : {{ $service->email }}</p>
                                                                                                <p>Phone : {{ $service->phone_number }}</p>
																								<p>Service Required : {{ $service->requirement }}</p>
																								<p>Description: {{ $service->description }}</p>
																								@if ($service->admin_message)
																												<p>Admin Message: {{ $service->admin_message }}</p>
																								@endif
																				</div>
																				<div class="card-footer">
																								<div class="row">
																												@if ($service->status)
																																<h3 class="control-label"><span class="badge badge-success">Processed</span>
																																</h3>
																												@else
																																<h3 class="control-label"><span class="badge badge-warning">Pending</span></h3>
																												@endif
																								</div>
																				</div>
																</div>
												</div>
								</div>

				</section>
@endsection
