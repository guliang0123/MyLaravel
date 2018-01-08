<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
            /*分页*/
            .pagination li {display: inline-block;margin-right: -1px;padding: 5px;border: 1px solid #e2e2e2;min-width: 20px;text-align: center;color:#000}
            .pagination li.active {background: #009688;color: #fff;border: 1px solid #009688;}
            .pagination li a {display: block;text-align: center;text-decoration: none;color:#000}
        </style>
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
        {{$users->links()}}
    </body>
</html>
