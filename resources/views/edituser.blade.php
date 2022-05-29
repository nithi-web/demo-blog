<!DOCTYPE html>
<html lang="en">
​

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    ​
    ​
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    ​
    ​
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    ​ <style>
        usebody {
            padding-top: 40px;
        }

        ​ .col-sm-6 {
            background: #ccc;
        }

        ​ .other {
            background: #a4a4a4;
        }

        ​ .p {
            text-align: center;
            padding-top: 120px;
        }

        ​ .p a {
            text-decoration: underline;
            color: blue;
        }

        .navsearch {
            margin-left: 600px;
        }

        body {
            margin-top: 0px;
            background-color: #f5f5f5;
        }

        .tableheading {
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            font-family: cursive;

        }

        .listofcust {
            font-size: 38px;
            font-weight: bold;
            font-family: Times New Roman", Times, serif;;

        }

        div.main {
            background-color: lightcyan;
            width: 600px;
            padding: 10px 60px 25px;
            border: 5px solid gray;
            border-radius: 10px;
            font-family: raleway;
            float: left;
            margin-top: 30px;
            margin-left: 160px;
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
            background: url("../public/img/about-img.jpg") no-repeat center center fixed;
            /* background-color: lightskyblue; */
            background-size: cover;
            font-size: 16px;
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            margin: 0;
            color: #666;
        }
    </style>
    ​
</head>
​

<body>
    @include('nav')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-4 col-md-6">

                <div class="main">
                    @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <h1 class="listofcust">My Profile</h1> <br>
                    <form action="{{ route('user.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">


                        <label for="name"><b>Name</b></label>
                        <input type="text" placeholder="Enter email" value="{{ $user->name }}" name="name" required>

                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter email" value="{{ $user->email }}" name="email" required>
                        <img src="{{asset('images/' . Auth::user()->img_path)}}" alt="Profile Pic" style="width:120px; height:120px; top:10px; left:10px; border-radius:10%"><br>

                        <label for="gender"><b>Change Profile Photo</b></label><br>
                        <input type="file" class="form-control" name="img_path"><br>



                        @csrf

                        <label for="psw"><b>Change Password</b></label>
                        <input type="password" placeholder="Enter new Password" name="password" id="pass">
                        <input type="checkbox" id="checkbox">Show Password<br><br>

                        <button type="submit">Update</button>
                    </form>
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
