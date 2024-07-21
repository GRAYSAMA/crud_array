<!DOCTYPE html>
<html>
<head>
    <title>Create Item</title>
</head>
<body>
    <h1>Create Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Item Name">
        <button type="submit">Save</button>
    </form>
</body>
</html>
