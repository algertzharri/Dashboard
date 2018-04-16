	@include('dashboard.header')
	
	<section class="box-with-image-right section-top-space">
		
	</section>
	
	@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                
						@guest
						<div class="card-body">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-8">
										<div class="card">
											<div class="card-header" style="font-size:15px;">{{ __('Login') }}</div>

											<div class="card-body">
												<form method="POST" action="{{ route('login') }}">
													@csrf

													<div class="form-group row">
														<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

														<div class="col-md-6">
															<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

															@if ($errors->has('email'))
																<span class="invalid-feedback">
																	<strong>{{ $errors->first('email') }}</strong>
																</span>
															@endif
														</div>
													</div>

													<div class="form-group row">
														<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

														<div class="col-md-6">
															<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

															@if ($errors->has('password'))
																<span class="invalid-feedback">
																	<strong>{{ $errors->first('password') }}</strong>
																</span>
															@endif
														</div>
													</div>

													<div class="form-group row">
														<div class="col-md-6 offset-md-4">
															<div class="checkbox" style="border:none;">
																<label>
																	<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
																</label>
															</div>
														</div>
													</div>

													<div class="form-group row mb-0">
														<div class="col-md-8 offset-md-4">
															<button type="submit" class="btn btn-primary">
																{{ __('Login') }}
															</button>

															<a class="btn btn-link" href="{{ route('password.request') }}">
																{{ __('Forgot Your Password?') }}
															</a>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						 </div>
                        @else
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-xs-12">
									<div class="card">
										<div class="card-header" style="text-align:right;">
											 Hello {{ Auth::user()->name }}, <a href="{{ route('logout') }}"
												onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
												{{ __('Logout?') }}
											</a>
								
										</div> 
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="container" style="padding-top:5%;">
							<div class="row">
								<div class="col-sm-12">
									<center><h4>Lista e Car Quote:</h4></center>
									<br/>
									<table class="table table-striped">
										<thead>
											<tr>
												<th scope="col">#</td>
												<th scope="col">Full Name</td>
												<th scope="col">Age</td>
												<th scope="col">Phone Number</td>
												<th scope="col">E-mail</td>
												<th scope="col">Manufacturer</td>
												<th scope="col">Model</td>
												<th scope="col">Registrationyear</td>
											</tr>
										</thead>
										<tbody>
											@foreach($data as $value)
											<tr>
												<th scope="row">{{ $value->id }}</td>
												<th scope="row">{{ $value->fullname }}</td>
												<th scope="row">{{ $value->age }}</td>
												<th scope="row">{{ $value->phonenumber }}</td>
												<th scope="row">{{ $value->email }}</td>
												<th scope="row">{{ $value->manufacturer }}</td>
												<th scope="row">{{ $value->model }}</td>
												<th scope="row">{{ $value->registrationyear }}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
						
                        @endguest
					
        </div>
    </div>
</div>
@endsection
	
@include('dashboard.footer')