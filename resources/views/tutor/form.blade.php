<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    </title>
</head>
<body>

    <h1>WELCOME TO FORM PEMBIMBING</h1>

    <form action="/tutor/form" method="post">
        @csrf
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="spesialisasi" placeholder="Spesialisasi">
        <button type="submit">Submit</button>
    </form>

</body>
</html>
