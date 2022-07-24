<form action="{{route('register-user')}}" method="post">
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    @csrf
    <div class="text-center">
        <h1>Register yourself here.</h1>
    </div>
    <div>
        <p>Enter Your First Name*</p>
        <input type="text" name="fname" placeholder="Enter Your First Name" value="{{old('fname')}}">
        <span class="text-danger">@error('fname') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Enter Your Last Name*</p>
        <input type="text" name="lname" placeholder="Enter Your Last Name" value="{{old('lname')}}">
        <span class="text-danger">@error('lname') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Enter Your Email*</p>
        <input type="text" name="mail" placeholder="Enter Your Email" value="{{old('mail')}}">
        <span class="text-danger">@error('mail') {{$message}} @enderror </span>
        </div>
    <div>
        <p>Enter Your Phone No.*</p>
        <input type="text" name="phone" placeholder="Enter Your Phone No." value="{{old('phone')}}">
        <span class="text-danger">@error('phone') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Enter Password*</p>
        <input type="password" name="password" placeholder="Enter Your Password">
        <span class="text-danger">@error('password') {{$message}} @enderror </span>
    </div>
    <div>
        <p>Re-enter Password*</p>
        <input type="password" name="password_confirmation" placeholder="Re-enter Password">
    </div>
    <div>
    <button type="submit" class="btn btn-block btn-primary"> Register</button>
    </div>
    <div class="text-center">
        <p>Already a user? <a href="login">Login!</a></p>
    </div>
</form>