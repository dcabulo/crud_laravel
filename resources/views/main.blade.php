<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Laravel 7 Home Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Add Your Product</h1>
            <a class="btn btn-success" href="{{ route('product.index') }}">Add Your Product</a>
        </div>
    </div>
</body>
</html>