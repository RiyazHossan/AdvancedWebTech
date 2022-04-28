<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
    <div class = "container">
    <br><br>
     <h1>Delete User</h1>
    <form action= "{{route('deleteUser')}}" class "form-group" method = "post">
        {{csrf_field()}}
        <div class="col-md-4 form-group">
        <span>Id</span>
        <input type="text" name="id" value="{{$user->id}}" class="form-control" readonly>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

        <div class ="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value = "{{$user->name}}" class = "form-control" readonly><br>
            @error('name')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Id</span>
            <input type="text" name="user_id" value = "{{$user->user_id}}" class = "form-control" readonly><br>
            @error('id')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Date of Birth</span>
            <input type="text" name="dob" value = "{{$user->dob}}" class = "form-control" readonly><br>
            @error('id')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value = "{{$user->phone}}" class = "form-control" readonly><br>
            @error('id')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value = "{{$user->email}}" class = "form-control" readonly><br>
        @error('email')
            <span class = "text-danger">{{$message}}</span>
        @enderror
        </div>
        <input type = "submit" class="btn btn-primary" value = "Delete">
    </form>
    </div>
    </body>
    </html>
