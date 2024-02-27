<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAR - IMPAR</title>

    {{-- css cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Input Numeru</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="numeru">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Submit</button>


            @isset($message)
            <h1>{{ $message }}</h1>
            @endisset
          </form>
    </div>

    
    
</body>
</html>