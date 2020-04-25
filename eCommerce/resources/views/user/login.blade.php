@include('user._header')
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)), url(images/login.jpg); background-position: left; background-attachment: fixed;">
        <h2 class="l-text2 t-center">
            Login
        </h2>
    </section>

    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form class="login-form shadow1" action="/login" method="post">
                        @csrf
                        <h4>Login</h4>
                        @if(session()->has('message'))
                            <span style="color:red"> {{session()->get('message')}}</span><br>
                        @endif
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" id="" placeholder="Email"><br />
                        @if($errors->has('email'))
                            <span style="color:red"> {{$errors->first('email')}}</span><br>
                        @endif
                        <i class="fas fa-key"></i>
                        <input type="password" name="password" id="" placeholder="password"><br />
                        @if($errors->has('password'))
                            <span style="color:red"> {{$errors->first('password')}}</span><br>
                        @endif
                        <a href="/register">create new account</a><br />
                        <button type="submit"class="btn btn-dark mt-5">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@include('user._footer')
