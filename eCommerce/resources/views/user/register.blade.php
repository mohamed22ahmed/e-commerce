@include('user._header')
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)), url(images/register.jpg); background-position: center; background-attachment: fixed;">
		<h2 class="l-text2 t-center">
			Create Account
		</h2>
	</section>

  <div class="rigister">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <form class="rigister-form shadow1" method="POST" action="/register">
            @csrf
            <h4>Rigister</h4>
            <i class="fas fa-user"></i>
            <input type="text" name="f_name" id="" placeholder="First Name"><br />
            @if($errors->has('f_name'))
               <span style="color:red"> {{$errors->first('f_name')}}</span><br>
            @endif
            <i class="fas fa-user"></i>
            <input type="text" name="l_name" id="" placeholder="Last Name"><br />
            @if($errors->has('l_name'))
               <span style="color:red"> {{$errors->first('l_name')}}</span><br>
            @endif
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="" placeholder="Email"><br />
            @if($errors->has('email'))
               <span style="color:red"> {{$errors->first('email')}}</span><br>
            @endif
            <i class="fas fa-key"></i>
            <input type="password" name="password" id="" placeholder="password"><br />
            @if($errors->has('password'))
               <span style="color:red"> {{$errors->first('password')}}</span><br>
            @endif
            <i class="fas fa-lock"></i>
            <input type="password" name="confirm" id="" placeholder="Confirm Password"><br />
            <a href="/login">Have an account ?</a><br />
            <button type="submit"class="btn btn-dark mt-5">Create account</button>
          </form>
        </div>
      </div>
    </div>
  </div>


@include('user._footer')
