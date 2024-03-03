<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <form action="{{ url('/users/store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" class"form-control" id="firstName" name="firstName" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" class"form-control" id="lastName" name="lastName" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class"form-control" id="email" name="email" required>
        </div> 
        <button type="submit" class="btn btn-primary">
            Create User
        </button> 
    </form>
</body>
</html>