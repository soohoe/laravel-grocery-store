<!DOCTYPE html>
<html>
    <head>
        <title>My Grocery Store</title>
    </head>
    <body>
        <h1>Welcome to My Grocery Store</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>

        <br>

        <form method="POST" action="{{ route('users.create') }}">

            @csrf

            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </body>
</html>
