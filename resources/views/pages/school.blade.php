<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.bundle.css')}}">

</head>
<body>
<div class="container">
        <div class="navbar">
            <h1>Mater Dei College</h1>
            <nav>
                <ul>
                <li><a href="{{url('/')}}"><button>Home</button></a></li>
                <li><a href="{{url('/course')}}"><button>Course</button></a></li>
                <li><a><button>School</button></a></li>
                </ul>
            </nav>
        </div>
  
    <div class="col">
                <div class="card card1">
            </div>
            <h4>Mater Dei College</h4><br>
            <p>Mater Dei College as a Catholic institution that aims to develop students holistically.
                Mater Dei College or MDC is a Roman Catholic institution located in Tubigon, Bohol, Philippines. It is a private and co-educational school.
            </p>
    </div>
</div>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            height: 600px;
            margin-top: 35px;
            background-image: linear-gradient(rgba(39, 35, 35, 0.7),rgba(47, 118, 139, 0.7)), url('images/bg.jpg');
            background-position: center;
            background-size: cover;
            padding-left: 5%;
            padding-right: 5%;
            box-sizing: border-box;
            }
        .navbar {
            height: 12%;
            display: flex;
            align-items: center;
        }
        nav {
            flex: 1;
            text-align: right;
        }
        nav ul li {
            list-style: none;
            display: inline-block;
            margin-left: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 14px;
        }
        button {
            width: 180px;
            color: #000;
            font-size: 20px;
            padding: 12px 0;
            background: #fff;
            border: 0;
            border-radius: 20px;
            outline: none;
            margin-top: 30px;
        }
        .card {
            width: 220px;
            height: 250px;
            display: inline-block;
            border-radius: 10px;
            padding: 15px 25px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 50px 25px;
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
        }
        .card1 {
            background-image: url('/pic2.jpg');
        }
        h1 {
            font-weight: bolder;
        }
        h4 {
            color: black;
            text-shadow: 0 0 5px #999;
            font-size: 30px;
        }
        p {
            font-size: 20px;
            text-align: justify;
        }
        </style>
</body>
</html>