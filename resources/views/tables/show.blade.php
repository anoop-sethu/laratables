<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World Data - Datatables</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">
        <h1>{{ $country->Name }}</h1>
        <table class="table table-bordered table-hover">
            <tr>
                <th>Name</th>
                <td>{{ $country->Name }}</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>{{ $country->Code }}</td>
            </tr>
            <tr>
                <th>Continent</th>
                <td>{{ $country->Continent }}</td>
            </tr>
            <tr>
                <th>Population</th>
                <td>{{ $country->Population }}</td>
            </tr>
        </table>
        <a href="{{ route('index') }}">Back</a>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>