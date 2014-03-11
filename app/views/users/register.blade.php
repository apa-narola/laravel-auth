{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
<h2 class="form-signup-heading">Please Register</h2>

<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
<div class="form-group">
<label for="firstname">First Name</label>    
{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
</div>
<div class="form-group">
<label for="lastname">Last Name</label>    
{{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
</div>
<div class="form-group">
<label for="email">Email Address</label>    
{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
</div>
<div class="form-group">
<label for="password">Password</label>    
{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
</div>
<div class="form-group">
<label for="password_confirmation">Confirm Password</label>    
{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
</div>
{{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}