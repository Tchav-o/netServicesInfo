<!DOCTYPE html>
<html>
<head>
    <title>Network Services List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container w-50">
    <div class="row">
        <div class="col p-3 p-auto text-center">
            <h3>Network Services List</h3>
        </div>
    </div>
    <div class="row">
        <div class="col p-3">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">bandwidth</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($allServices as $key=>$value)
                    <tr class="">

                        <th scope="row"><a href="/{{ $value['id'] }}">{{ $value['id'] }}</a></th>
                        <td><a href="/{{ $value['id'] }}">{{ $value['name'] }}</a></td>
                        <td>{{ $value['type'] }}</td>
                        <td>{{ $value['bandwidth'] }}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>
