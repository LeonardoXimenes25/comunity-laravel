<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-striped">
            {{-- head section --}}
            <thead>
                <tr>
                    <th scope="col">Numeru</th>
                    <th scope="col">naran</th>
                    <th scope="col">Tinan</th>
                    <th scope="col">Hela-Fatin</th>
                </tr>
            </thead>
            {{-- head end section --}}
    
    
            {{-- body section --}}
            <tbody>
                @foreach ($dadus as $item => $value)
                    <tr>
                        <th scope="row">{{ $item }}</th>
                        <td>{{ $value['naran'] }}</td>
                        <td>{{ $value['tinan'] }}</td>
                        <td>{{ $value['hela_fatin'] }}</td>
                    </tr>
                @endforeach
            </tbody>
            {{-- end body section --}}
        </table>
    </div>
</body>
</html>


