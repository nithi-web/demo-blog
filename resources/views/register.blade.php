<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>
        div.main {
            background-color: lightcyan;
            width: 600px;
            padding: 10px 60px 25px;
            border: 5px solid gray;
            border-radius: 10px;
            font-family: raleway;
            float: left;
            margin-top: 120px;
            margin-left: 220px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            height: 40px;
            padding: 8px;
            margin-bottom: 25px;
            margin-top: 5px;
            border: 2px solid #ccc;
            color: #4f4f4f;
            font-size: 16px;
            border-radius: 5px;
        }

        label {
            color: #464646;
            text-shadow: 0 1px 0 #fff;
            font-size: 14px;
            font-weight: bold;
        }

        body {

            /* background-color: lightskyblue; */
            background-size: cover;
            font-size: 16px;
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            margin: 0;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-4 col-md-6">



                <div class="main">
                    @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <form action="/register" method="post" enctype="multipart/form-data">
                        <h1>Demo App</h1>
                        <h3>Please Sign Up</h3><br>
                        <label for="name"><b>Name</b></label>
                        <input type="text" value="{{old('name', '')}}" placeholder="Enter email" name="name">

                        <label for="email"><b>Email</b></label>
                        <input type="text" value="{{old('email', '')}}" placeholder="Enter email" name="email">


                            <label for="gender"><b>Gender</b></label><br>
                            <input type="radio" name="gender" value="Male"> Male<br>
                            <input type="radio" name="gender" value="Female"> Female<br><br>

                            <label for="gender"><b>Profile Photo</b></label><br>
                            <input type="file" class="form-control" name="img_path">

                        @csrf
                        <br>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" id="pass">
                        <input type="checkbox" id="checkbox">Show Password<br><br>
                        <button type="submit">Sign Up</button><br>
                    </form><br>

                    <a href="/"> Back To Login </a>
                    @if ($errors->any())
                   <div class="alert alert-danger">
                   <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
        </ul>
    </div>
@endif
                    <br>


                </div>
            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>

        $(document).ready(function(){
            $('#checkbox').on('change', function(){
                $('#pass').attr('type',$('#checkbox').prop('checked')==true?"text":"password");
            });
        });
            </script>

</body>

</html>
