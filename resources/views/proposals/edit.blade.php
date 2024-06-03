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
        <div class="row justify-content-center">
          <div class="col-sm-8">
            <div class="card mt-3 mb-3 p-3">
              <form action="/proposals/{{$proposal->id}}/update" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" value="{{old('name', $proposal->name)}}" name="name" class="form-control">
                  @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control" name="gender" id="">
                    <option></option>
                    <option value="Male" {{old('gender', $proposal->gender) == 'Male' ? 'selected' : ''}}>Male</option>
                    <option value="Female" {{old('gender', $proposal->gender) == 'Female' ? 'selected' : ''}}>Female</option>
                  </select>
                  @if($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>DOB</label>
                  <input type="date" value="{{old('dob', $proposal->dob)}}" class="form-control" name="dob">
                  @if($errors->has('dob'))
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Cast</label>
                  <input type="text" value="{{old('cast', $proposal->cast)}}" name="cast" class="form-control">
                  @if($errors->has('cast'))
                    <span class="text-danger">{{ $errors->first('cast') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Sect</label>
                  <input type="text" value="{{old('sect', $proposal->sect)}}" name="sect" class="form-control">
                  @if($errors->has('sect'))
                    <span class="text-danger">{{ $errors->first('sect') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Height</label>
                  <input type="number" value="{{old('height', $proposal->height)}}" name="height" class="form-control">
                  @if($errors->has('height'))
                    <span class="text-danger">{{ $errors->first('height') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Weight</label>
                  <input type="number" value="{{old('weight', $proposal->weight)}}" name="weight" class="form-control">
                  @if($errors->has('weight'))
                    <span class="text-danger">{{ $errors->first('weight') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Marital Status</label>
                  <select class="form-control" name="marital_status" id="">
                    <option></option>
                    <option value="Unmarried" {{old('marital_status', $proposal->m_status) == 'Unmarried' ? 'selected' : ''}}>Unmarried</option>
                    <option value="Married" {{old('marital_status', $proposal->m_status) == 'Married' ? 'selected' : ''}}>Married</option>
                  </select>
                  @if($errors->has('marital_status'))
                    <span class="text-danger">{{ $errors->first('marital_status') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Disability</label>
                  <select class="form-control" name="disability" id="">
                    <option></option>
                    <option value="Yes" {{old('disability', $proposal->disabilty_conf) == 'Yes' ? 'selected' : ''}}>Yes</option>
                    <option value="No" {{old('disability', $proposal->disabilty_conf) == 'No' ? 'selected' : ''}}>No</option>
                  </select>
                  @if($errors->has('disability'))
                    <span class="text-danger">{{ $errors->first('disability') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Skin tone</label>
                  <select class="form-control" name="skin_tone" id="">
                    <option></option>
                    <option value="Very Fair" {{old('skin_tone', $proposal->color) == 'Very Fair' ? 'selected' : ''}}>Very Fair</option>
                    <option value="Fair" {{old('skin_tone', $proposal->color)== 'Fair' ? 'selected' : ''}}>Fair</option>
                    <option value="Light Brown" {{old('skin_tone', $proposal->color) == 'Light Brown' ? 'selected' : ''}}>Light Brown</option>
                    <option value="Brown" {{old('skin_tone', $proposal->color) == 'Brown' ? 'selected' : ''}}>Brown</option>
                    <option value="Dark" {{old('skin_tone', $proposal->color) == 'Dark' ? 'selected' : ''}}>Dark</option>
                  </select>
                  @if($errors->has('skin_tone'))
                    <span class="text-danger">{{ $errors->first('skin_tone') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Others</label>
                  <textarea class="form-control" value="{{old('others')}}" name="others">{{$proposal->others}}</textarea>
                  @if($errors->has('others'))
                    <span class="text-danger">{{ $errors->first('others') }}</span>
                  @endif
                </div>
                <Button type="submit" class="btn btn-dark">Edit</Button>
              </form>
            </div>
          </div>
        </div>
    </div>
</body>
</html>