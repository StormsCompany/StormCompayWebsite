@extends('layouts.app')
@section('content')
				<section class="material-half-bg">
								<div class="cover"></div>
				</section>
				<section class="login-content ">
								<div class="logo ">
												<h1><strong>{{ config('app.name') }}</strong></h1>
								</div>
								<div class="col-md-8 col-xl-7 mx-auto">

												<form class="form-horizontal" id="regForm" action="{{ route('services.store') }}" method="POST">
																@csrf
																<h3>Lets break down your desire and we will walk you through.</h3>
																<br>
																<!-- One "tab" for each step in the form: -->
																<!-- identity tab -->
																<div class="tab">
																				<label class="control-label">What best describes you?</label>
																				<br>
																				<div class="row justify-content-center">
																								<button
																												onclick="event.preventDefault();document.getElementById('user_description').value = 'Company';  document.getElementById('company_size_tab').classList.add('tab'); document.getElementById('company_size_tab').classList.remove('d-none');"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class="mx-auto">
																																<div class="col">
																																				<i class="fa fa-home fa-4x mx-auto"></i>
																																				<br>
																																				<label class="control-label mt-2">Company</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault();document.getElementById('user_description').value = 'Government';document.getElementById('company_size_tab').classList.remove('tab');document.getElementById('company_size_tab').classList.add('d-none');"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<i class="fa fa-home fa-4x mx-auto"></i>
																																				<br>
																																				<label class="control-label mt-2">Government</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault(); document.getElementById('user_description').value = 'Individual';document.getElementById('company_size_tab').classList.remove('tab');document.getElementById('company_size_tab').classList.add('d-none');"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<i class="fa fa-user fa-4x mx-auto"></i>
																																				<br>
																																				<label class="control-label mt-2">Individual</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault(); document.getElementById('fill_user_desc').classList.remove('d-none');document.getElementById('company_size_tab').classList.remove('tab');document.getElementById('company_size_tab').classList.add('d-none');"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class="mx-auto">
																																<div class="col">
																																				<i class="fa fa-home fa-4x mx-auto"></i>
																																				<br>
																																				<label class="control-label mt-2">Other</label>
																																</div>
																												</div>
																								</button>
																								<div class="d-none" id="fill_user_desc">
																												<p>Enter your description</p>
																												<input id="user_description"
																																class="form-control  @error('user_description') is-invalid @enderror" type="text"
																																placeholder="Enter your description here" name="user_description"
																																value="{{ old('retailName') }}" autocomplete="user_description" required>
																												@error('user_description')
																																<span class="invalid-feedback" role="alert">
																																				<strong>{{ $message }}</strong>
																																</span>
																												@enderror
																								</div>

																				</div>
																				<br>
																</div>
																<!-- company_size_tab tab -->
																<div class="d-none" id="company_size_tab">
																				<label class="control-label">What is the size of your company</label>
																				<br>
																				<div class="row justify-content-center">
																								<button
																												onclick="event.preventDefault(); document.getElementById('company_size').value = 'small 0 to 10' "
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<label class="control-label mt-2">0 to 10 employees</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault(); document.getElementById('company_size').value = 'medium 10 to 100'; "
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<label class="control-label mt-2">10 to 100 employees</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault(); document.getElementById('company_size').value = 'large 100+'; "
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<label class="control-label mt-2">Over 100 employees</label>
																																</div>
																												</div>
																								</button>
																								<div class="d-none" id="fill-company-size">
																												<p>Enter your description</p>
																												<input id="company_size" class="form-control  @error('company_size') is-invalid @enderror"
																																type="text" placeholder="Enter your description here" name="company_size"
																																value="{{ old('company_size') }}" autocomplete="company_size" required>
																												@error('company_size')
																																<span class="invalid-feedback" role="alert">
																																				<strong>{{ $message }}</strong>
																																</span>
																												@enderror
																								</div>

																				</div>
																				<br>
																</div>
																<!-- contact tab -->
																<div class="tab">
																				<div>
																								<h3 class="text-display-4">Contact</h3>
																				</div>
																				<div class="form-group row">
																								<label class="control-label col-md-3">Email</label>
																								<div class="col-md-8">
																												<input class="form-control @error('email') is-invalid @enderror" type="email"
																																placeholder="Enter your email " name="email" value="{{ auth()->user()->email }}"
																																autocomplete="email" required>

																												@error('email')
																																<span class="invalid-feedback" role="alert">
																																				<strong>{{ $message }}</strong>
																																</span>
																												@enderror

																								</div>
																				</div>
																				<div class="form-group row">
																								<label class="control-label col-md-3">Phone <small>Format:254-712-123-763</small><br><br></label>
																								<div class="col-md-8">
																												<input class="form-control @error('phone_number') is-invalid @enderror" type="number"
																																id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}"
																																placeholder="Enter your phone number" name="phone_number"
																																value="{{ auth()->user()->phone_number }}" autocomplete="phone_number" required>

																												@error('phone_number')
																																<span class="invalid-feedback" role="alert">
																																				<strong>{{ $message }}</strong>
																																</span>
																												@enderror

																								</div>
																				</div>
																</div>
																<!-- service tab -->
																<div class="tab">
																				<label class="control-label">What service do you require</label>
																				<br>
																				<div class="row justify-content-center">
																								<button onclick="event.preventDefault(); document.getElementById('requirement').value = 'Website';"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<img class="images_client  w-75" src="{{ asset('assets/images/photography.png') }}" />
																																				<label class="control-label mt-2">Website</label>
																																</div>
																												</div>
																								</button>
																								<button onclick="event.preventDefault(); document.getElementById('requirement').value = 'Web App';"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<img class="images_client w-75" src="{{ asset('assets/images/webapp.png') }}" />
																																				<label class="control-label mt-2">Web App</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault(); document.getElementById('requirement').value = 'Mobile App';"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<img class="w-75" src="{{ asset('assets/images/mobileapplication.png') }}"
																																								alt="">
																																				<label class="control-label mt-2">Mobile App</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault(); document.getElementById('requirement').value = 'HR System';"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<img class="images_client w-100" src="{{ asset('assets/images/hrsystem.png') }}" />
																																				<label class="control-label mt-2">HR System</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault(); document.getElementById('requirement').value = 'E-commerce app';"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<img class="images_client w-75" src="{{ asset('assets/images/e-commerce.jpg') }} " />
																																				<label class="control-label mt-2">E-commerce app</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault(); document.getElementById('requirement').value = 'Consultancy';"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<img class="images_client w-100"
																																								src="{{ asset('assets/images/consultancy.png') }} " />
																																				<label class="control-label mt-2">Consultancy</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault(); document.getElementById('requirement').value = 'System Upgrade';"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class=" mx-auto">
																																<div class="col">
																																				<img class="images_client w-75"
																																								src="{{ asset('assets/images/testanalysis.png') }} " />
																																				<label class="control-label mt-2">System Upgrade & Testing</label>
																																</div>
																												</div>
																								</button>
																								<button
																												onclick="event.preventDefault(); document.getElementById('fill_other_requirement').classList.remove('d-none');"
																												class="col-md-3 col-xl-3 bg-light p-3 m-3 rounded-pill tab_btn">
																												<div class="mx-auto">
																																<div class="col"> <i class="fa fa-solid fa-check-double fa-4x mx-auto"></i>
																																				<br>
																																				<label class="control-label mt-2">Other</label>
																																</div>
																												</div>
																								</button>
																								<div class="d-none" id="fill_other_requirement">
																												<p>What service do you require</p>
																												<textarea id="requirement" class="form-control  @error('requirement') is-invalid @enderror" type="text"
																												    placeholder="Enter your service here" name="requirement" autocomplete="requirement" required>{{ old('requirements') }}</textarea>
																												@error('requirement')
																																<span class="invalid-feedback" role="alert">
																																				<strong>{{ $message }}</strong>
																																</span>
																												@enderror
																								</div>

																				</div>
																				<br>
																</div>
																<div class="tab">
																				<label class="control-label">
																								<p>Would you like to add a short description</p>
																				</label>
																				<br>
																				<div class="row justify-content-center">
																								<div class="form-input" id="fill_other_requirement">

																												<textarea id="requirement" class="form-control  @error('description') is-invalid @enderror" type="text"
																												    placeholder="Enter your description here" name="description" autocomplete="description" required>{{ old('description') }}</textarea>
																												@error('description')
																																<span class="invalid-feedback" role="alert">
																																				<strong>{{ $message }}</strong>
																																</span>
																												@enderror
																								</div>

																				</div>
																				<br>
																</div>
																<div style="overflow:auto;">
																				<div style="float:right;">
																								<button type="button" id="prevBtn" onclick="nextPrev(-1)"
																												class="btn btn-primary">Previous</button>
																								<button type="button" id="nextBtn" onclick="nextPrev(1)"
																												class="btn btn-secondary">Next</button>
																				</div>
																</div>
																<!-- Circles which indicates the steps of the form: -->
																<div style="text-align:center;margin-top:40px;">
																				<span class="step"></span>
																				<span class="step"></span>
																				<span class="step"></span>
																				<span class="step"></span>
																				<span class="step"></span>
																</div>
												</form>

								</div>

				</section>
				<script>
								function disableEmpInput() {
												var inputEmp = document.getElementById("inputEmp");
												inputEmp.disabled = true;
								}

								function enableEmpInput() {
												var inputEmp = document.getElementById("inputEmp");
												inputEmp.disabled = false;
								}

								var currentTab = 0; // Current tab is set to be the first tab (0)
								showTab(currentTab); // Display the current tab

								function showTab(n) {
												// This function will display the specified tab of the form...
												var x = document.getElementsByClassName("tab");
												x[n].style.display = "block";
												//... and fix the Previous/Next buttons:
												if (n == 0) {
																document.getElementById("prevBtn").style.display = "none";
												} else {
																document.getElementById("prevBtn").style.display = "inline";
												}
												if (n == (x.length - 1)) {
																document.getElementById("nextBtn").innerHTML = "Submit";
																document.getElementById("nextBtn").type = "submit";
												} else {
																document.getElementById("nextBtn").innerHTML = "Next";
												}
												//... and run a function that will display the correct step indicator:
												fixStepIndicator(n)
								}

								function nextPrev(n) {
												// This function will figure out which tab to display
												var x = document.getElementsByClassName("tab");
												// Exit the function if any field in the current tab is invalid:
												if (n == 1 && !validateForm()) return false;

												// Hide the current tab:
												x[currentTab].style.display = "none";
												// Increase or decrease the current tab by 1:
												currentTab = currentTab + n;
												// if you have reached the end of the form...
												if (currentTab >= x.length) {
																// ... the form gets submitted:
																document.getElementById("regForm").submit();
																return false;
												}
												// Otherwise, display the correct tab:
												showTab(currentTab);
								}

								function validateForm() {
												var x, y, i, z, valid = true;
												x = document.getElementsByClassName("tab");
												y = x[currentTab].getElementsByTagName("input");
												z = x[currentTab].getElementsByTagName("select");
												// A loop that checks every input field in the current tab:
												for (i = 0; i < y.length; i++) {
																// If a field is empty...
																if (z.length == 1) {

																				if (z[0].value == "") {
																								var retailGoodsLabel = document.getElementById("retailGoodsLabel");
																								retailGoodsLabel.innerHTML = " This field is required"
																								retailGoodsLabel.style.color = "red";
																								valid = false;
																				}

																} else if (y[i].value == "") {
																				//check if disabled
																				if (y[i].disabled == true) {
																								valid = true;
																				} else {
																								// add an "invalid" class to the field:
																								y[i].className += " invalid";
																								// and set the current valid status to false
																								valid = false;
																				}

																}
												}
												// If the valid status is true, mark the step as finished and valid:
												if (valid) {
																document.getElementsByClassName("step")[currentTab].className += " finish";
												}
												return valid
								}
								$('.tab_btn').on('click', function() {
												// remove the "active" class from all buttons
												$('.tab_btn').removeClass('active');
												// add the "active" class to the clicked button
												$(this).addClass('active');
								});

								function fixStepIndicator(n) {
												// This function removes the "active" class of all steps...
												var i, x = document.getElementsByClassName("step");
												for (i = 0; i < x.length; i++) {
																x[i].className = x[i].className.replace(" active", "");
												}
												//... and adds the "active" class on the current step:
												x[n].className += " active";
								}
				</script>
@endsection
