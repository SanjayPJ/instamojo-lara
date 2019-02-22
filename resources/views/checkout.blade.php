<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <title>INSTAMOJO LARA</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato');
        body{
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>

<body>
    <br>
    <div class="container">
        <div class="col-lg-offset-4 col-lg-4">
        <form action="{{ route('checkout') }}" method="post">
                @csrf
                <input type="text" name="purpose" id="" class="form-control" value="Test For INSTAMOJO LARA">
                <br>
                <input type="text" name="amount" id="" class="form-control" value="1000">
                <br>
                <input type="text" name="phone" id="" class="form-control" value="9999999999">
                <br>
                <input type="text" name="username" id="" class="form-control" value="samsmith">
                <br>
                <input type="email" name="email" id="" class="form-control" value="samsmith@gmail.com">
                <br>
                <button type="submit" class="btn btn-primary text-uppercase">SUBMIT</button>
            </form>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
