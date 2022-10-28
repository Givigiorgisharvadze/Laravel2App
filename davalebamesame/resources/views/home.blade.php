<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<table border="1px">

<tr>


    <td>id</td>
    <td>title</td>
    <td>chanel</td>
    <td>url</td>
    <td>description</td>

</tr>
        @foreach($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->chanel}}</td>
                <td>{{$data->url}}</td>
                <td>{{$data->description}}</td>


            </tr>

            @endforeach

</table>

</body>
</html>