<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4 mt-5">
            <div class="card" style="width: 18rem;">
  <div class="card-body">
                <form action="{{route('do_todoap')}}" method="POST">
                    @csrf
                    <label>Title</label>
         <input type="text" name="tile" class="form-control" >

         <label>description</label>
         <input type="text" name="description" class="form-control" >

         <label>status</label>
         <input type="text" name="status" value="pending...." class="form-control" >
         <br>

         <button type="submit" class="btn btn-success" >submit</button>


                    
                  
                </form>
                </div>
</div>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>