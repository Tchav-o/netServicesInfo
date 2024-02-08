<!DOCTYPE html>
<html>
<head>
    <title>Network Service Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="">

<div class="container w-30">
    <div class="row">
        <div class="col p-3 p-auto text-center">
            <a href="/">Back to all network services</a>
        </div>
    </div>

    @if($serviceInfo['error'] !=0)
        <div class="row">
            <div class="col p-3 p-auto text-center text-danger">
                <h4>Error {{$serviceInfo['error']}}. No such Service!</h4>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col p-3 p-auto text-center">
                <h3>{{$serviceInfo['name']}} - Network Service Info</h3>
            </div>
        </div>
        <div class="row">
            <div class="col p-3">
                <table class="table table-striped">

                    <tbody>
                    <tr>
                        <td>name</td>
                        <td class="font-weight-bold">{{ $serviceInfo['name'] }}</td>
                    </tr>
                    <tr class="">
                        <td>id</td>
                        <td class="font-weight-bold">{{ $serviceInfo['id'] }}</td>
                    </tr>
                    <tr class="">
                        <td>created</td>
                        <td class="font-weight-bold">{{ $serviceInfo['created'] }}</td>
                    </tr>
                    <tr class="">
                        <td>expires</td>
                        <td class="font-weight-bold">{{ $serviceInfo['expires'] }}</td>
                    </tr>
                    <tr class="">
                        <td>protected</td>
                        <td class="font-weight-bold">{{ $serviceInfo['protected'] }}</td>
                    </tr>
                    <tr class="">
                        <td>bandwidth</td>
                        <td class="font-weight-bold">{{ $serviceInfo['bandwidth'] }}</td>
                    </tr>
                    <tr class="">
                        <td>type</td>
                        <td class="font-weight-bold">{{ $serviceInfo['type'] }}</td>
                    </tr>
                    <tr class="">
                        <td>status</td>
                        <td class="font-weight-bold">{{ $serviceInfo['status'] }}</td>
                    </tr>
                    <tr class="">
                        <td>pricing_model</td>
                        <td class="font-weight-bold">{{ $serviceInfo['pricing_model'] }}</td>
                    </tr>
                    <tr class="">
                        <td>port id</td>
                        <td class="font-weight-bold">{{ $serviceInfo['port']['id'] }}</td>
                    </tr>
                    <tr class="">
                        <td>port name</td>
                        <td class="font-weight-bold">{{ $serviceInfo['port']['name'] }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>

</body>
</html>
