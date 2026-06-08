<html>
<head>
    <title>Test CI/CD</title>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>
    <div class="container mt-5">
        <h1>Welcome to Test CI/CD Project</h1>
        <p>This is a simple Laravel application to demonstrate CI/CD pipeline.</p>
    </div>
<h1>login form</h1>
    <form method="POST" action="/login">
        @csrf
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required> 
        
<input type="submit" class="btn btn-primary" value="Login"name='submit'>
</form>

</html>