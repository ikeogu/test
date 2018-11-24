@extends('layouts.app')

@section('content')

<section class="bg-light">
<div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{URL::asset('/img/1.jpg')}}" alt="" width="95" height="95">
        <div class="entry-content" itemprop="mainContentOfPage">
			
			<div class="section the_content has_content">
                <div class="section_wrapper">
                    <div class="the_content_wrapper">
                        <p style="text-align: center;">
                            <strong>THE NORTHERN SURVEYORS FORUM!!!</strong>
                        </p>
                        <p style="text-align: center;">
                            <strong>INVITATION TO THE 2018 ANNUAL , AGA AND GENERAL MEETING (AGM) AND J.D.J DASHE MEMERIAL LECTURE SERIES</strong>
                        </p>
                        <p style="text-align: center;">
                            <strong>THEME: BUILDING SMART, RESILENT AND SUSTAINABLE SOCITIES </strong>
                            
                        </p>
                        <p><strong>SUB-THEMES:</strong><br />
                            1.The Land Reform Agender<br />
                            2. Systematic Land Titling Registration<br />
                            3.The Survey and Geomatics Practice in the  Northen States<br />
                            4.Policy, Ethics and Standards<br />
                            5.The National House Policy</p>
                        <p><strong>VENUE</strong>: Arewa House by Rabah Road, Unguwar Sarki, Kaduna.</p>
<p><strong>Date</strong> 7th - 8th December, 2018<br />
<span style="color: red;"></label><strong>Closing Date</strong> Late Registration: From 16th - 8th December, 2018 at ₦20,000</p></span>
      <div class="container" style="background-color:#d1e0e0;">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header" style="background-color:#669999;">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<span style="color: red;">*</span></label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}<span style="color: red;">*</span></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }} <span style="color: red;">*</span></label>

                                <div class="col-md-6">
                                    <input id="phone" type="email" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount (NGN)') }} <span style="color: red;">*</span></label>

                                <div class="col-md-6">
                                    <input id="amount" type="hidden"  class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}"  value="{{ old('amount') }}" required autofocus>

                                    <select class="form-control" id="amount" name="amount">
                                        <option value="2000" data-name="Students ₦">Students ₦(2000)</option>
                                        
                                        <option value="15000" data-name=" Exhibition Stand ₦"> Full Members and Associates ₦(15,000)</option>
                                    </select>
                                     
				                        @if ($errors->has('amount'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="seat" class="col-md-4 col-form-label text-md-right">{{ __('Seat') }} <span style="color: red;">*</span></label>

                                <div class="col-md-6">
                                    <input id="seat" type="hidden" class="form-control{{ $errors->has('seat') ? ' is-invalid' : '' }}" name="name" value="{{ old('seat') }}" required autofocus>
                                    <select class="form-control" id="amount" name="seat">
                                        <option value="1" data-name="1">1</option>
                                        
                                        <option value="2" data-name=" 2"> 2</option>
                                        <option value="3" data-name="3">3</option>
                                        
                                        <option value="4" data-name=" 4"> 4</option>
                                        <option value="5" data-name="5">5</option>
                                     </select>

                                    @if ($errors->has('seat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('seat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div>

                            <small><span style="color: red;">*</span> are compulsory</small><br />
						<img src="https://geoson.org/wp-content/plugins/payment-forms-for-paystack/public/../images/logos@2x.png" alt="cardlogos"  class="paystack-cardlogos size-full wp-image-1096" />
                        </div>
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection                            