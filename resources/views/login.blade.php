<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="{{ asset('/css/stylelogin.css') }}" rel="stylesheet">
    </head>
  <body style="background-image : url('{{ asset('/img/bg1.jpg') }}')">
    <div class="container">

      <div class="login-wrap mt-5">
          <div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
            <form method="POST" action="{{ url('signin') }}">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Usuario</label>
					<input id="user" name="email" type="text" class="input">
				</div>
				<div class="group">
                    <label for="pass" class="label">Contraseña</label>
					<input id="pass" name="password" type="password" class="input" data-type="password">
				</div>
				{{-- <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div> --}}
				<div class="group">
                    <input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
                    <a href="#forgot">Olvido contraseña?</a>
				</div>
			</div>
        </form>
        <form method="POST" action="{{ url('/login') }}">

			<div class="sign-up-htm">
                <div class="group">
                    <label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
                    <label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
                    <label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
                    <label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
                    <input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
                    <label for="tab-1">Already Member?</a>
                    </div>
                </div>
            </div>
        </form>

        </div>
    </div>
    </div>

</body>  
    </html>