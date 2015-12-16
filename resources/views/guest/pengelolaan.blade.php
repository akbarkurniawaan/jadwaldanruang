@extends('guest.base')
@section('content')
			 <div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					
					<form class="form-horizontal" role="form" method="POST" action="{{ route('postpengelolan')}}">
					{!! csrf_field() !!}
						<div class="form-group">
							<label class="col-md-4 control-label">Username</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="http://localhost:81/kelompok2/public/password/email">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<br><br>


	<br/><br/>
</div>

@stop