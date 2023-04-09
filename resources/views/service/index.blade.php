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
												<div class="item p-5">
																<a href="{{ route('services.index') }}" class="btn col-md-2 col-xl-2 btn-primary p-3 m-3 rounded-pill ">
																				View requests <i class="fa fa-eye  mx-auto"></i>
																</a>
																<a href="{{ route('services.create') }}" class="btn col-md-2 col-xl-2 btn-secondary p-3 m-3 rounded-pill ">
																				Add another <i class="fa fa-eye  mx-auto"></i>
																</a>
																<div class="row">
																				@forelse ($services as $service)
																								<div class="col-md-4 col-xl-4 m-2">
																												<div class="card">
																																<div class="card-header">
																																				<h3>{{ $service->requirement }}</h3>
																																</div>
																																<div class="card-body">

																																				<p class="control-label">{{ $service->requirement }}</p>
																																				<br>
																																				<p class="control-label">{{ $service->description }}</p>
																																</div>
																																<div class="card-footer">
																																				<div class="row">
																																								<div class="col">
																																												@if ($service->status)
																																																<h3><span class="badge badge-success">Processed</span></h3>
																																												@else
																																																<h3><span class="badge badge-warning">Pending</span></h3>
																																												@endif
																																								</div>
																																								<div class="col">
																																												<a class="btn btn-outline-success rounded-pill ml-3"
																																																href="{{ route('services.show', ['service' => $service->id]) }}">
																																																View <i class="fa fa-eye"></i></a>
																																								</div>
																																				</div>
																																</div>
																												</div>
																								</div>
																				@empty
																								<div class="col-md-8 col-xl-7 mx-auto">
																												<div class="item">
																																<label class="control-label">You have made no request</label>
																																<br>
																																<div class="row justify-content-center">
																																				<a href="{{ route('services.create') }}"
																																								class="btn col-md-3 col-xl-3 btn-secondary p-3 m-3 rounded-pill ">
																																								Add another <i class="fa fa-eye  mx-auto"></i>
																																				</a>
																																</div>
																																<br>
																												</div>
																								</div>
																				@endforelse
																</div>
												</div>
								</div>

				</section>
@endsection
