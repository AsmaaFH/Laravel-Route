<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('saveData')}}" method="post">
        @csrf
        <input type="text" name="title">
        <input type="text" name="desc">
        <input type="text" name="email">
        <button type="submit" name="insert_post">Submit</button>
    </form>
</body>

</html>