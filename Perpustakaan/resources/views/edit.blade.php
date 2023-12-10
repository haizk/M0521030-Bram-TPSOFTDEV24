<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./icon.png">
    <title>Perpustakaan - Edit</title>
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
            <h1><b>Edit</b>
            </h1>
        </a>
        <div class="nav-item"><button class="btn btn-danger">Logout</button></div>
    </nav>

    <table border="1" cellpadding="10" cellspacing="10" class="table table-striped">
        <form action="/pegawai/store" method="post">
            {{ csrf_field() }}
            Nama <input type="text" name="nama" required="required"> <br/>
            Jabatan <input type="text" name="jabatan" required="required"> <br/>
            Umur <input type="number" name="umur" required="required"> <br/>
            Alamat <textarea name="alamat" required="required"></textarea> <br/>
            <input type="submit" value="Simpan Data">
        </form>
    </table>
</body>

</html>