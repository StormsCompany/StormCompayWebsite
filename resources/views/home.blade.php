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
																<div class="d-flex justify-content-between">
																				<h3 class="control-label mx-auto">Have you made a request?</h3>
																</div>
																<br>
																<div class="row justify-content-center">
																				<a href="{{ route('services.index') }}"
																								class="btn btn-sm col-md-3 col-xl-3 btn-primary p-2 m-3 rounded-pill ">
																								View requests <i class="fa fa-eye  mx-auto"></i>
																				</a>
																				<a href="{{ route('services.create') }}"
																								class="btn btn-sm col-md-3 col-xl-3 btn-secondary p-2 m-3 rounded-pill ">
																								Add one now... <i class="fa fa-plus  mx-auto"></i>
																				</a>
																</div>
																<br>
												</div>
								</div>
				</section>
@endsection
