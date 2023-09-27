<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('update',['id' => $student->id])}}">
        @method("put")
        @csrf
        <input placeholder="Name" name="name" value="{{$student->name}}"></input>
        <input placeholder="Roll no" name="rollno" value="{{$student->rollno}}"></input>
        <button type="submit" >submit</button>
    </form>
</body>
</html>