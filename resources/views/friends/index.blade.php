
@include('templates.partials.navigation')

@extends('templates.defoult')



@section('content')
<div class="row">
    <div class="col-lg-6">
         <h3>Ваши друзья</h3>
@if(!$friends->count())
<p> скоро здесь будут ваши друзья</p> 
 @else
 @foreach($riends as $user)
@include('user.partials.userblock')
@endforeach 
@endif
    </div>

  <div class="col-lg-6">

         <h3>Запросы в друзья</h3>
         @if(!$requests->count())
<p> скоро здесь будут ваши запросы в  друзья</p> 
 @else
 @foreach($requests as $user)
@include('user.partials.userblock')
@endforeach 
@endif
    </div>

</div>

@endsection
