<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css'>
    @vite('resources/sass/admin.scss')
    @vite('resources/js/app.js')

    <title>@yield('title')</title>
</head>

<body class="surface-800">
    
    <div class="flex flex-column flex-md-row  align-items-center p-3 px-md-4 mb-3 border-bottom-1 box-shadow justify-content-between">
        <h1 class="my-0 mr-md-auto font-weight-normal text-white">SMART OFFICE BOOKING</h1>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-white font-medium text-xl hover:text-blue-300" href="/admin">Home</a>
            <a class="p-2 text-white font-medium text-xl hover:text-blue-300" href="/roomList">Room</a>
            <a class="p-2 text-white font-medium text-xl hover:text-blue-300" href="/bookingList">Booking</a>
            <a class="p-2 text-white font-medium text-xl hover:text-blue-300" href="/logout">Log Out</a>
        </nav>
    </div>

    @yield('main_content')


    <script src='https://releases.jquery.com/git/jquery-3.x-git.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js'></script>

    <script id="rendered-js" >
        $(function () {
          $('#datepicker1').datepicker({
            format: 'yyyy-mm-dd'
          });
          $('#datepicker2').datepicker({
            format: 'yyyy-mm-dd'
          });
        });
    </script>
</body>

</html>