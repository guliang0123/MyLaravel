<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        {{--引入资源文件--}}
        <script src="{{ URL::asset('/js/jquery-3.2.1.min.js') }}"></script>
    </head>
    <body>

        <table cellspacing="0" border="1" cellpadding="0" width="600px" align="center">
            <caption style="color:darkred;">用户列表</caption>
            @foreach($users as $list)
            <tr>
                <td>{{$list->uid}}</td>
                <td>{{$list->username}}</td>
                <td>{{$list->password}}</td>
                <td>{{$list->lastloginip}}</td>
            </tr>
            @endforeach
        </table>

    </body>
    <script>
        alert($);
    </script>
</html>
