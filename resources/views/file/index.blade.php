<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <table class="table table-bordered text-white">
        <thead>
            <tr class="bg-success text-bold text-white">
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Image</th>
                <th>City</th>
                <th>Company</th>
                <th>Phone</th>
                <th>PostCode</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $std )
            <tr>

                <td>{{$std->id}}</td>
                <td>{{$std->fname}}</td>
                <td>{{$std->lname}}</td>
                <td>{{$std->email}}</td>
                <td>{{$std->password}}</td>
                <td>{{$std->address}}</td>
                <td>{{$std->image}}</td>
                <td>{{$std->city}}</td>
                <td>{{$std->company}}</td>
                <td>{{$std->phone}}</td>
                <td>{{$std->post_code}}</td>
                <td>{{$std->created_at}}</td>
                <td>{{$std->updated_at}}</td>
                <td></td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <div class="d-flex justify-content-center align-content-center">
        <div>
            {{$data->links()}}
        </div>

    </div>


</body>
</html>
