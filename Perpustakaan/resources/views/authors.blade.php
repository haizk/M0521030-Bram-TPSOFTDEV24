<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./icon.png">
    <title>Perpustakaan - Authors</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body
    style="font-family: 'Varela Round'; background-image: url(./goddessrockstar.png); background-repeat: repeat; background-position: top center"
    class='mx-5 my-3'>
    <nav class="nav d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-dark" href="./index.php">
            <h1><b>Perpustakaan</b>
            </h1>
        </a>
        <div class="nav-item"><button class="btn btn-danger">Logout</button></div>
    </nav>

    <div>
        <button class="btn btn-warning">Book</button>
        <button class="btn btn-success">Author</button>
        <button class="btn btn-warning">Category</button>
    </div>

    <br>

    <table border="1" cellpadding="10" cellspacing="10" class="table table-striped">
        <thead class='thead-dark'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class='bg-light'>
            @foreach($data as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->first_name }}</td>
                    <td>{{ $data->last_name }}</td>
                    <td><button class="btn btn-warning">Edit</button><br><button class="btn btn-danger">Delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>