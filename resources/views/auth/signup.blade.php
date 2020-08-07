@include('templates.partials.navigation')

@extends('templates.defoult')



@section('content')


   <div class="row">
   <div class="col-lg-4 mx-auto">
   <h3> Инициация </h3>
    <form method = "POST" action = "{{route('auth.signup')}}" novalidate>
        @csrf
           <div class="form-group">
             <label for="Email1">Email </label>
           <input type="email" name="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" id="email1"
           value="{{Request::old('email')?:''}}" >
@if ($errors->has('email'))
 <span class="help-block text-danger">
         {{$errors->first('email')}}
         @endif
</span>
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Password</label>
             <input name="password"type="password" class="form-control {{$errors->has('password')? 'is-invalid':''}}" id="exampleInputPassword1">
             @if ($errors->has('password'))
             <span class="help-block text-danger">
                     {{$errors->first('password')}}
                     @endif
            </div>
           <div class="form-group">
            <label for="username">login</label>
            <input name="username" type="text" class="form-control {{$errors->has('username')? 'is-invalid':''}}" id="username"
            value="{{Request::old('username')?:''}}">
            @if ($errors->has('username'))
             <span class="help-block text-danger">
                     {{$errors->first('username')}}
                     @endif
        </div>

           <button type="submit" class="btn btn-primary">Войти в Дискурс</button>
         </form>
      </div>
   </div>


@endsection
