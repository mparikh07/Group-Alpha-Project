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
                <p id="status" class="text-success text-capitalize"></p>
            </div>
            <h4 class="mt-0 mb-3">Sign Up</h4>
            <form action="new_user.php">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" value="Nagin" name="firstname" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" value="Banodha" name="lastname" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Work Email</label>
                    <input type="email" value="naginbanodha@gmail.com" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" value="123456" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="confirmpassword" class="form-label">Confirm Password</label>
                    <input type="password" value="123456" name="confirmpassword" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <div class="text-center text-white mt-3">
                    already have an account ? <a href="./login.php" class="text-white">Login</a>
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
        // $(document).ready(() => {
        //     console.log("working")
        // })

        $("form").on("submit", (e) => {
            e.preventDefault();
            $("#status").text("signing up...")
            let form_data = $("form").serializeArray();
            let user_data = {};
            form_data.map(data => {
                const {
                    name,
                    value
                } = data;
                user_data[name] = value;
            })

            if (user_data.password !== user_data.confirmpassword)
                return $("#status").text("password and confirm password do not match")

            $.ajax({
                type: "POST",
                url: "new_user.php",
                data: user_data,
                success: (data, status) => {
                    console.log(status)
                    $("#status").text(data);
                }
            })
        })
    </script>
</body>

</html>