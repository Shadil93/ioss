<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" action="{{route('do_search')}}" method="POST">
          @csrf
        <input class="form-control me-2" type="search" name="search"  placeholder="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>
    </div>
  </div>
</nav>

  <a href="{{route('todoap')}}" class="btn btn-success">back</a>
  
  <a href="{{route('title')}}" class="btn btn-success">title</a>
                    <a href="{{route('created_at')}}" class="btn btn-danger">created at</a>
  
  <table class="table table-danger table-bordered w-75">
                <tr>
                
                <th>#</th>
                    <th>title</th>
                    <th>description</th>
                    <th>status</th>
                    <th colspan="2">Action</th>
                    
                </tr>
                 @foreach($data as $datas)
                <tr>
                  <td>{{$datas->id}}</td>
                    <td>{{ $datas->title}}</td>
                    <td>{{ $datas->description}}</td>
                    <td>{{ $datas->status}}</td>           
                    <td><a href="{{ route('edit',$datas->id)}}" class="btn btn-success">edit</a></td>
                    <td><a href="{{ route('delete',$datas->id) }}" class="btn btn-danger">delete</a></td>
                 
                    
                </tr>
                
                @endforeach
            </table>
            <div class="gg d-flex justify-content-center">
            {{ $data->links() }}
            </div>
           

          

  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>