@extends('layouts.app')
@section('content')
				<section class="material-half-bg">
								<div class="cover"></div>
				</section>
				<section class="login-content">
								<div class="logo ">
												<h1><strong>{{ config('app.name') }}</strong></h1>
								</div>
								<div class="col-md-8 col-xl-7 mx-auto">
												<div class="item">
																<label class="control-label">You have made a request</label>
																<br>
																<div class="row justify-content-center">
																				<a href="{{ route('services.index') }}" class="btn col-md-3 col-xl-3 btn-primary p-3 m-3 rounded-pill ">
																								View requests <i class="fa fa-eye  mx-auto"></i>
																				</a>
																				<a href="{{ route('services.create') }}"
																								class="btn col-md-3 col-xl-3 btn-secondary p-3 m-3 rounded-pill ">
																								Add another <i class="fa fa-eye  mx-auto"></i>
																				</a>
																</div>
																<br>
												</div>
								</div>
				</section>
@endsection
