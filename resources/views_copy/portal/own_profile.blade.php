@extends('portal.app')

@section('title', 'Dashboard | ')

@section('header_css')

<!-- end of plugin styles -->
@endsection

@section('content')
<!-- Page Header-->
<header class="page-header">
	<div class="container-fluid">
		<h2 class="no-margin-bottom">@lang('Profile')</h2>
	</div>
</header>
<style type="text/css">
	#xButton {
		float: right;
		position: absolute;
		/* top: 50%; */
		left: 8%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		background-color: #b3b3b3;
		color: white;
		font-size: 12px;
		/* padding: 12px 24px; */
		border: none;
		cursor: pointer;
		border-radius: 5px;
	}
	.cms-image {
		border: 1px solid;
		border-radius: 5px;
	}

	.file-image {
		position: relative;
		width: 100%;
		max-width: 80px;
	}

	.cms-image {
		display: block;
		width: 80px;
		height: 80px;
	}

	.overlay {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		height: 80px;
		width: 80px;
		opacity: 0;
		transition: .3s ease;
		background-color: #c5c5c5d9;
	}

	.file-image:hover .overlay {
		opacity: 1;
	}

	.icon {
		color: white;
		font-size: 20px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		text-align: center;
	}

	.fa-close:hover {
		color: #c10c2d;
	}
	.icon{
		color: #d92b4b !important;
	}

</style>
<section> 
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header d-flex align-items-center">
					<h3 class="h4">Edit Profile</h3>
				</div>
				<div class="card-body">
					<p></p>
					
					<form method="POST" action="{{route('admin.profile.update')}}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label class="form-control-label">First Name</label>
							<input type="text" placeholder="Name" class="form-control" name="first_name" value="{{($user) ? $user->first_name : ''}}">
							<?php if($errors->has('first_name')){?><span style='color:red'> {{$errors->first('first_name')}}</span> <?php }?>
						</div>
						<div class="form-group">
							<label class="form-control-label">Last Name</label>
							<input type="text" placeholder="Name" class="form-control" name="last_name" value="{{($user) ? $user->last_name : ''}}">

							<?php if($errors->has('last_name')){?><span style='color:red'> {{$errors->first('last_name')}}</span><?php }?>
						</div>
						<div class="form-group">       
							<label class="form-control-label">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Email" value="{{($user) ? $user->email : ''}}">

							<?php if($errors->has('email')){?><span style='color:red'> {{$errors->first('email')}}</span><?php }?>
						</div>
						<div class="form-group">       
							<label class="form-control-label">Contact Number</label>
							<input type="text" name="contact_number" class="form-control" placeholder="Contact Number" value="{{($user) ? $user->contact_number : ''}}" maxlength="10">

							<?php if($errors->has('contact_number')){?><span style='color:red'> {{$errors->first('contact_number')}}</span><?php }?>
						</div>
						<div class="form-group">       
							<label class="form-control-label">Date of Birth</label>
							<input type="date" name="dob" class="form-control" placeholder="DOB" value="{{($user) ? $user->dob : ''}}">

							<?php if($errors->has('dob')){?><span style='color:red'> {{$errors->first('dob')}}</span><?php }?>
						</div>
						<div class="form-group">       
							<label class="form-control-label">Gender</label><br/>
							@if($user)
							<input type="radio" value="male" name="gender" {{($user->gender == 'male') ? 'checked' : ''}}> Male
							<input type="radio" value="female" name="gender" {{($user->gender == 'female') ? 'checked' : ''}}> Female
							<input type="radio" value="other" name="gender" {{($user->gender == 'other') ? 'checked' : ''}}> Other
							@else
							<input type="radio" value="male" name="gender"> Male
							<input type="radio" value="female" name="gender"> Female
							<input type="radio" value="other" name="gender"> Other
							@endif
							<br/>
							<?php if($errors->has('gender')){?><span style='color:red'> {{$errors->first('gender')}}</span><?php }?>
						</div>
						<div class="form-group">       
							<label class="form-control-label">Address</label>
							<textarea class="form-control" name="address_1">{{($user) ? $user->address_1 : ''}}</textarea>

							<?php if($errors->has('address_1')){?><span style='color:red'> {{$errors->first('address_1')}}</span><?php }?>
						</div>
						<div class="form-group">       
							<label class="form-control-label">City</label>
							<input type="text" name="city" class="form-control" placeholder="City" value="{{($user) ? $user->city : ''}}">

							<?php if($errors->has('city')){?><span style='color:red'> {{$errors->first('city')}}</span><?php }?>
						</div>
						<div class="form-group">       
							<label class="form-control-label">State</label>
							<input type="text" name="state" class="form-control" placeholder="State" value="{{($user) ? $user->state : ''}}">

							<?php if($errors->has('state')){?><span style='color:red'> {{$errors->first('state')}}</span><?php }?>
						</div>
						<div class="form-group">       
							<label class="form-control-label">Country</label>
							<input type="text" name="country" class="form-control" placeholder="Country" value="{{($user) ? $user->country : ''}}">

							<?php if($errors->has('country')){?><span style='color:red'> {{$errors->first('country')}}</span><?php }?>
						</div>
						<div class="form-group">       
							<label class="form-control-label">Password</label>
							<input type="password" placeholder="Password" class="form-control" name="password"  value="">

							<?php if($errors->has('password')){?><span style='color:red'> {{$errors->first('password')}}</span><?php }?>
						</div>
						<div class="form-group">       
							<label class="form-control-label">Confirm Password</label>
							<input type="text" placeholder="Confirm Password" class="form-control" name="confirm-password"  value="">

							<?php if($errors->has('confirm-password')){?><span style='color:red'> {{$errors->first('confirm-password')}}</span><?php }?>
						</div>
						@if(!Auth::user()->hasRole('Super Admin'))
						<!-- <div class="form-group">       
							<label class="form-control-label">Roles</label>
							@if(!isset($userRole))
							<select class="form-control" name="roles[]">
								@foreach($roles as $key => $role)
								@if($role != 'Super Admin')
								<option value="{{$role}}">{{$role}}</option>
								@endif
								@endforeach
							</select>
							@else
							<select class="form-control" name="roles[]">
								@foreach($roles as $key => $role)
								@if($role != 'Super Admin')
								@if(in_array($role,$userRole))
								<option value="{{$role}}" selected>{{$role}}</option>
								@else
								<option value="{{$role}}">{{$role}}</option>
								@endif
								@endif
								@endforeach
							</select>
							@endif

							<?php if($errors->has('roles')){?><span style='color:red'> {{$errors->first('roles')}}</span><?php }?>
						</div> -->
						@endif
						<div class="form-group">
							<label class="form-control-label">Profile Image</label>
							<input type="file" name="profile_image" class="form-control">

							<?php if($errors->has('profile_image')){?><span style='color:red'> {{$errors->first('profile_image')}}</span><?php }?>
						</div>
						@if($user)
						<input type="hidden" value="{{base64_encode($user->id)}}" name="id">
						<input type="hidden" value="{{$user->profile_image}}" name="profile">
						<div class="form-group">
							@if($user->profile_image)
							<span class="file-image" id="image">
								<img src="{{asset('profile/').'/'.$user->profile_image}}" height="80px" width="80px" class="cms-image"/>
								<div class="overlay" onclick="removeImage()" title="Remove" >
									<a class="icon">
										<i class="fa fa-close"></i>
									</a>
								</div>
							</span>
							@endif
						</div>
						@endif
						<div class="form-group">       
							<input type="submit" value="{{($user) ? 'Update' : 'Save'}}" class="btn btn-primary">
							<a href="{{url('/admin')}}"> <input type="button" value="Cancel" class="btn btn-danger"> </a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('footer_script')
<script type="text/javascript">
	function removeImage(){
		$('#image').hide();
		$('input[type="file"]').val('');
	}
</script>
<!-- end of plugin scripts -->
@endsection