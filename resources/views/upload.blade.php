<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('flash'))
        <p style='color:white; background-color:black; font-size:40px; text-align:center;'>{{session('flash')}}</p>

    @endif
    <form action="" method='post' enctype="multipart/form-data">
        @csrf
            <input type="file" name="file">
            <button type="submit">upload</button>
    </form>
</body>
</html>