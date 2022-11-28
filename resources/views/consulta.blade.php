<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  


    <div class="row">
        <div class="col-6">
        <form action="{{route('consultar')}}">
            <input value="{{$token}}" class="form-control" name="token">
            <button class="btn btn-primary">Enviar</button>
        </form>
</div>
</div>