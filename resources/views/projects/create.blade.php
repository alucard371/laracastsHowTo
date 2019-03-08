<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a new project</title>
</head>
<body>
    <h1>Create a new project</h1>

    <form method="POST" action="/projects">
        @csrf

        <div>
            <input type="text" name="title" id="title" placeholder="title">
        </div>
        <div>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Create object</button>
        </div>

    </form>
</body>
</html>