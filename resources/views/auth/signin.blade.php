@include('templates.partials.navigation')

@extends('templates.defoult')



@section('content')


   <div class="row">
   <div class="col-lg-4 mx-auto">
   <h3> Войти </h3>
   <p>Да не войдет сюда не знающий геометрии</p>
    <form method = "POST" action = "{{route('auth.signin')}}" novalidate>
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
            <div class="form-group form-check mb-3">
                <input  name = "remember" type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="exampleCheck1">Запомнить</label>
              </div>

           <button type="submit" class="btn btn-primary">Войти в Дискурс</button>
         </form>
      </div>
   </div>


@endsection
