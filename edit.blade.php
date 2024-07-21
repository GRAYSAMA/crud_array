<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item['id']) }}" method="POST">
        @csrf
        <input type="text" name="name" value="{{ $item['name'] }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>
