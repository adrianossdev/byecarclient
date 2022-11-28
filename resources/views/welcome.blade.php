<!DOCTYPE html>
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>ByeCar</title>
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4 text-center">
            <h1>ByeCar</h1>
            <form action="{{route('autenticar')}}" method="post">
                @csrf
                <input type="text" name="email" class="form-control">
                <br>
                <input type="senha" name="password" class="form-control">
                <button class="btn btn-primary mt-2">Autenticar</button>
            </form>

</div>
        </div>
    </div>
    </body>
</html>
