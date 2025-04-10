
<!DOCTYPE html>
<html>

<head>
    <title>Activity6 - Page Layout</title>
    <link rel="stylesheet" type="text/css" href="Activity6.css">
</head>

<body>
    <form action="Activity6-preview.php" method="post">

        <h1>Registration Form</h1>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>

        <div class="form-group">
            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="">Please select</option>
                <option selected="america">America</option>
                <option value="america">France</option>
                <option value="america">Germany</option>
                <option value="america">England</option>
                <option value="america">Turkey</option>
                
            </select>
        </div>

        <div class="form-group">
            <label for="zip">ZIP Code:</label>
            <input type="text" id="zip" name="zip">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>

        <div class="form-group">
            <label>Sex:</label>
            <input type="radio" id="male" name="sex" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="sex" value="female">
            <label for="female">Female</label>
        </div>

        <div class="form-group">
            <label>Language:</label>
            <div>
                English <input type="checkbox" id="English" name="language[]" value="english">
            </div>
            <div>
                 French <input type="checkbox" id="French" name="language[]" value="french">               
            </div>
            <div>
                 German <input type="checkbox" id="German" name="language[]" value="german">             
            </div>
        </div>

        <div class="form-group">
            <label for="about">About:</label>
            <textarea id="about" name="about"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Submit">
        </div>

    </form>

</body>

</html>
