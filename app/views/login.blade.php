<!doctype html>
<html>
	<head>
		<title>SUGER</title>
	</head>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<body>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-4">
					<br>
					<br>
					<br>
					<h1 class="col-sm-offset-4">SUGER</h1>

					{{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}
					<div class="panel panel-primary">
						<div class="panel-heading"> <h3 class="panel-title"><B>LOGIN</B></h3> </div>
						<div class="panel-body">
							<div class="form-group">
								<div class="col-sm-12">
									{{ $errors->first('email') }}
									{{ $errors->first('password') }}
								</div>
								<div class="col-sm-12">
									{{ Form::label('email', 'ENDEREÇO DE E-MAIL:', array('class'=>'control-label')) }}
									{{ Form::text('email', Input::old('email'), array('class'=>'form-control','placeholder' => 'user@suger.com')) }}
								</div>
								<div class="col-sm-12">
									{{ Form::label('password', 'SENHA:', array('class'=>'control-label')) }}
									{{ Form::password('password', array('class'=>'form-control','placeholder' => '************')) }}
								</div>
								<div class="col-sm-12">
									<br>
									{{ Form::submit('ENTRAR', array('class' => 'btn btn-primary')) }}
									{{ Form::close() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<body>
			<html>