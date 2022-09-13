<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System Registration Page</title>

    <!-- Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
    crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST" 
            enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" 
                    name="username" placeholder="Username" 
                    required="required">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" 
                    name="phone" placeholder="Telephone" 
                    required="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" 
                    name="password" placeholder="Password" 
                    required="required">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" 
                    name="cpassword" placeholder="Confirm Password" 
                    required="required">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto" 
                    name="photo">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Register</button>
                <p>Already have account?Click here <a href="../" class="text-white">Login</a></p>
            </form>
        </div>
    </div>
    
</body>
</html>