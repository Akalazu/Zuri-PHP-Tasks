<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>

<body>
    <form action="./user_data.php" method="post">
        <h2>Fill in the Form</h2>
        <div class="form-group">
            <label for="username"> Name</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <br>

        <div class="form-group">
            <label for="date">Date Of Birth</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <br>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <br>

        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" placeholder="Country">
        </div>
        <br>
        <center>
            <button class="submit" type="submit">Submit</button>
        </center>
    </form>
</body>

</html>