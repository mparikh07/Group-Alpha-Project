<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>

<body>

    <div class="section">
        <div class="form-container">
            <div class="text-center">
                <p class="text-success" id="status"></p>
            </div>
            <h4 class="mt-0 mb-3">Log In</h4>
            <form action="new_user.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Work Email</label>
                    <input type="email" value="naginbanodha@gmail.com" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" value="123456" name="password" class="form-control">
                </div>


                <button type="submit" class="btn btn-primary">Login</button>

                <div class="text-center text-white mt-3">
                    don't have an account ? <a href="./signup.php" class="text-white">Sign Up</a>
                </div>
            </form>
        </div>
    </div>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $("form").on("submit", (e) => {
            e.preventDefault();
            $("#status").text("logging in...")
            let form_data = $("form").serializeArray();
            let user_data = {};
            form_data.map(data => {
                const {
                    name,
                    value
                } = data;
                user_data[name] = value;
            })


            $.ajax({
                type: "POST",
                url: "user_login.php",
                data: user_data,
                success: (data, success) => {
                    $("#status").text(data);
                    if (data !== "Incorrect Username or Password.")
                        window.location.href = "/formdemo/dashboard.php";
                    // localStorage.setItem("login", "true");
                }
            })
        })
    </script>
</body>

</html>