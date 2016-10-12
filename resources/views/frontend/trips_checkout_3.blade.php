@extends('frontend.layout.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6 payment">
				<form action="{{ url('/transaction') }}" method="POST" id="checkout-form">
					<div id="charge-error" class="red {!! !Session::has('error') ? 'hidden' : '' !!}">
						{{ Session::get('error') }}
					</div>
					<div class="row">
					<div class="form-group">
						<h3 class="text-left">{{ trans('lang_user.trip.trip3_header')}}</h3>						
					</div>
					<div class="form-group radio-toolbar">
						<div class="radio_paypal">		
							<div class="row">			
								<div class="col-md-10">	
									<label class="control control--radio ">
										<span>{{ trans('lang_user.trip.payPal')}}</span>
										<input type="radio" name="radio" class="radio_btn" value="paypal" />
										<div class="control__indicator"></div><br>
										<div class="row">
											<div class="col-lg-10">
												<p>{{ trans('lang_user.trip.text_paypal')}}</p>
											</div>
											<div class="col-lg-2"></div>
										</div>								
									</label>
								</div>
								<div class="col-md-2">
									<div class="pull-right" style="margin-right: 30px;background:url(frontend/images/icon-paypal.png)"></div>
								</div>
							</div>

						</div>
						<div class="radio_credit">
							<label class="control control--radio">{{ trans('lang_user.trip.credit_card')}}
								<input type="radio" name="radio" checked="checked" value="credit_card"/>
								<div class="control__indicator"></div>
								<div class="row">
									<div class="col-lg-10">
										<p>{{ trans('lang_user.trip.text_credit')}}</p>
									</div>
									<div class="col-lg-2"></div>
								</div>
								
							</label>
						</div>
					</div>
					<div class="form-group credit_card">
						<label> {{ trans('lang_user.trip.credit_card_number')}}</label>
						<input type="text" name="credit_card" class="form-control form_payment" id="card-number">
						<span class="pull-right"><i class="fa fa-check"></i></span>
					</div>
					<div class="col-lg-12 text_payment">
						<div class="col-lg-6" align="left">
							<p>{{ trans('lang_user.trip.expiry_date')}}</p>
						</div>
						<div class="col-lg-6" align="left">
							<p>{{ trans('lang_user.trip.cVV_code')}}</p>
						</div>
					</div>
					<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-6">
							<div class="col-lg-6">
							<select class="form_payment" name="expire_month" id="card-expiry-month">
								@for($i=1;$i<=12;$i++)
								<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
							</div>
							<div class="col-lg-6">
							<select class="form_payment" name="expire_year" id="card-expiry-year">
								@for($i=16;$i<=99;$i++)
								<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
							</div>
						</div>
						<div class="col-lg-6 payment_end">
							<input type="text" name="code" class="form-control form_payment" id="card-cvc">
						</div>
					</div>
					</div>
					<div class="form-group payment_end payment_card">
						<label> {{ trans('lang_user.trip.name_on_card')}}</label>
						<input type="text" name="name_card" class="form-control form_payment" id="card-name">
					</div>
					
					<div class="btn-group patment_btn">
						<a href="{{ asset('/trip2') }}" class="btn btn-default" style="width:50%;">{{ trans('lang_user.trip.return_to_detail')}}</a>
						<button class="btn btn-default complete" style="width:50%;height:60px;font-size:26px;">{{ trans('lang_user.trip.complete_order')}} <i class="fa fa-arrow-right"></i></button>
					</div>
					
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection