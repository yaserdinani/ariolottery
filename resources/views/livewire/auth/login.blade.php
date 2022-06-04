@section('styles')
    <style>
        #loginContainer{
            text-align:center;
            margin-top:8%;
        }
        #loginForm{
            background-color:#fff;
            border-radius:20px;
            text-align:center;
        }
        img{
            max-width:20%;
        }
        #loginFormHeader{
            display:flex;
            justify-content:center;
        }
        figcaption{
            color:black;
            margin-top:-3%;
        }
        input{
            width:40%;
            border-radius: 20px;
            margin:1%;
            padding:1%;
            border:1px solid gray;
            text-align:center;
        }
        button{
            background-color:#f9b233;
            color:#1d1d1b;
            padding-left:5%;
            padding-right:5%;
            padding-top:1%;
            padding-bottom:1%;
            border: none;
            border-radius:12px;
            margin-top:1%;
        }
        button:hover{
            background-color:#1d1d1b;
            color:#f9b233;
        }
    </style>
@endsection
@section('title','ورود به سامانه قرعه کشی')
<div class="container" id="loginContainer">
    <figure>
        <img src="{{ asset('images/logo.png')}}"/>
        <figcaption>{{env('APP_VERSION')}}</figcaption>
    </figure>
    <div id="loginForm">
        <form wire:submit.prevent='login'>
            <div>
                <input type="text" name="user_name" placeholder="نام کاربری" wire:model.lazy='user_name' autocomplete="off">
                @if($errors->has('user_name'))
                  <span class="mt-2 text-danger">{{ $errors->first() }}</span>
                @endif
            </div>
            <div>
                <input type="password"id="password" placeholder="رمز عبور" wire:model.lazy='password' autocomplete="off">
                @if($errors->has('password'))
                    <span class="mt-2 text-danger">{{ $errors->first() }}</span>
                @endif
            </div>
            <button type="submit">ورود</button>
        </form>
    </div>
</div>
