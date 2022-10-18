<h1>Log in form</h1>

@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif

<form action="/saveLogin" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user name" value="{{ old('username') }}"/>
    <br />
    <span style="color: red">@error('username'){{$message}}@enderror</span>
    <br />
    <input type="password" name="userpassword" placeholder="enter user password"/><br />
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span>
    <br />
    <button type="submit">Login</button>
</form>