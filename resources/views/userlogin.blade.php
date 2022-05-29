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
                    <form action="/" method="post">
                        <h1>Demo App</h1>
                        <h3>Please Login</h3><br>
                        <label for="uname"><b>Email</b></label>
                        <input type="text" placeholder="Enter email" name="email" required>
                        @csrf
                        <br><br>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required id="pass">
                        <input type="checkbox" id="checkbox">Show Password<br><br>
                        <button type="submit">Login</button>
                    </form>
                    <br>

                    <p> Or</p>

                    <h4><a class="button" href="/register">Sign Up</a><h4>
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
