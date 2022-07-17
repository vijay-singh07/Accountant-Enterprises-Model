<form action="{{route('login-user')}}" method="POST">
@if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    @csrf
    <div class="text-center">
        <h1>Login</h1>
    </div>
    <div>
        <p>Enter Your Email*</p>
        <input type="text" name="mail" placeholder="Enter Your email" value="{{old('mail')}}">
        <span class="text-danger">@error('mail') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Enter Password*</p>
        <input type="password" name="password" placeholder="Enter Your password" value="{{old('password')}}">
        <span class="text-danger">@error('password') {{$message}} @enderror </span>
    </div>
    <div>
    <button type="submit" class="btn btn-block btn-primary">login</button>
    </div>
    <div class="text-center">
        <p>Not a user yet?<a href="register">Register now!</a></p>
    </div>
</form>
