<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    <form method="post" action="{{action('HomeController@postData')}}">
        @csrf

        <input type="text" name="desc">
        <button type="submit">送出</button>
    </form>

    <table class="table table-bordered">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
        <th>updated</th>
        </thead>
        <tbody>
        @foreach($user as $k=>$v)
            <tr>
                <td>{{$v['id']}}</td>
                <td>{{$v['name']}}</td>
                <td>{{$v['created_at']}}</td>
                <td>{{$v['updated_at']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">{{$year}}</a>
                </div>
            </div>
        </div>
    </body>
</html>
