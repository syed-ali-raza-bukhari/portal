<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Portal</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="/">
          <img src="bird.jpg" alt="logo" style="width:40px;">
        </a>
        
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Proposals</a>
          </li>
        </ul>
    </nav>
          @if($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
              </div>
          @endif
    <div class=container>
        <div class="text-right">
            <a href="proposals/create" class="btn btn-dark mt-2">Add Proposal</a>
        </div>
        <h1>Proposals</h1>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Cast</th>
                <th>Sect</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Marital Status</th>
                <th>Disability</th>
                <th>Color</th>
                <th>Others</th>
                <th>Actions</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($proposals as $proposal)
              <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$proposal->name}}</td>
                <td>{{$proposal->gender}}</td>
                <td>{{$proposal->dob}}</td>
                <td>{{$proposal->cast}}</td>
                <td>{{$proposal->sect}}</td>
                <td>{{$proposal->height}}</td>
                <td>{{$proposal->weight}}</td>
                <td>{{$proposal->m_status}}</td>
                <td>{{$proposal->disabilty_conf}}</td>
                <td>{{$proposal->color}}</td>
                <td>{{$proposal->others}}</td>
                <td>
                  <a href="proposals/{{$proposal->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                  <a href="proposals/{{$proposal->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>