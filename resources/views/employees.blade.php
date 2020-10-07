<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <div class="container pt-5">
            <a class="btn btn-primary" href="{{route('home')}}">Home</a>
        </div>
        <div class="container pt-5">
                @foreach($employees as $employee)
                    <ul class="pt-3 table-bordered">
                        <li><img class="rounded-circle" width="250" height="250" src="{{ $employee['image'] }}" alt="image"></li>
                        <li>Name: {{ $employee['title'] .' '. $employee['first_name'] .' '. $employee['last_name'] }}</li>
                        <li>Date of birth: {{ $employee['date_of_birth'] }}</li>
                        <li>Mail: {{ $employee['email'] }}</li>
                        <li>Address: {{ $employee['address'] }}</li>
                        <li>Country: {{ $employee['country'] }}</li>
                        <li>Bio: {{ $employee['bio'] }}</li>
                        <li>Rating: {{ $employee['rating'] }}</li>
                    </ul>
                @endforeach
        </div>


    </body>
</html>
