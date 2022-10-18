<x-header data="Users" />
<!-- <h1>Hello {{$name}}</h1> -->

@if($name === 'wirat')
<h1>Hello, {{$name}}</h1>
@elseif($name === 'sun')
<h1>Hi, {{$name}}</h1>
@else
<h1>Unknown user</h1>
@endif

@for($i = 0; $i < 5; $i++)
<h6>{{$i}}</h6>
@endfor

@foreach($users as $user)
<h4>{{$user}}</h4>
@endforeach