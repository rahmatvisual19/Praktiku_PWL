<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('delete', $mahasiswa->id_mahasiswa) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Post</button>
</form>
</body>
</html>