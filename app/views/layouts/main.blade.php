<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Authentication App With Laravel 4</title>
        {{ HTML::style('packages/bootstrap3.1.1/css/bootstrap.min.css') }}
        {{ HTML::style('css/main.css')}}
    </head>
    <body>
        
        <ul class="nav nav-pills">
            
             @if(!Auth::check())
                    <li <?php if(isset($cls_active)) echo 'class="active"'; ?> >{{ HTML::link('users/register', 'Register') }}</li>   
                    <li <?php if(isset($cls_active)) echo 'class="active"'; ?> > {{ HTML::link('users/login', 'Login') }}</li>   
                @else
                    <li>{{ HTML::link('users/logout', 'Logout') }}</li>
                @endif
        </ul>
        <div class="container">
            
            @if(Session::has('message'))
            
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif

            {{ $content }}
        </div>

    </body>
</html>