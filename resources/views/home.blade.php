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

        .dropdown {
            margin-right: auto;
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
                @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif

               <h2>Hello {{ Auth::user()->name }} ,Welcome to Demo Blogs </h2>


               <img src="{{asset('images/' . Auth::user()->img_path)}}" alt="Profile Pic" style="width:160px; height:130px; top:10px; left:10px; border-radius:10%"> <br>
               <h3>Here you can share,create,view blog posts and news</h3><br>




                <h1 class="listofcust">People you may know..</h1> <br>
                <table border="1" class="table table-striped">
                    <tr class="tableheading">

                        <td>Name</td>

                        <td>Email</td>

                        <td>Profile Pic</td>

                        <td></td>

                        <td></td>


                    </tr>

                    @foreach($users as $rows)

                    <tr>

                        <td>{{$rows->name}}</td>
                        <td>{{$rows->email}}</td>

                        <td><img src="{{asset('images/' . $rows->img_path)}}" alt="Profile Pic" style="width:120px; height:120px; top:10px; left:10px; border-radius:10%"></td>

                            <td><a class="nav-link btn btn-success" href="{{ route('user.add', $rows->id) }}">Add Friend</a> </td>

                         <td>    <a class="nav-link btn btn-danger" href="{{ route('user.remove', $rows->id) }}">Remove</a> </td>

                    </tr>
                    @endforeach

                </table>
                {{ $users->links() }}


            </div>
        </div>
    </div>



    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>

    </script>

</body>

</html>
