<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        
        <div class="container">

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="text-right pt-5">
                @if(Route::has('login') && !session('access_token'))
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                @endif


                @if(session('access_token'))
                    <a href="{{route('employees')}}" class="btn btn-primary">Employees</a>
                @endif
            </div>
        </div>


    </body>
</html>
