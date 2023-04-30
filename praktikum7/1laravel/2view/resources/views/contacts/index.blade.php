<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
</head>
<body>
    <h1>All Contacts</h1>
    <div>
        <a href="{{ route('contacts.create') }}">Add Contact</a>
        <br>
        <a href="{{ route('contacts.show', 1) }}">Show Contact</a>
    </div>
</body>
</html>