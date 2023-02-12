<?php include_once("validation.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once("head.php"); ?>
<body>
<?php include_once("form.php"); ?>
    <div class="container">
        <h2>Your Infoes Are</h2>
        <?php
            echo "Name: $name";
            echo "<br>";
            echo "Email: $email";
            echo "<br>";
            echo "Comment: $comment";
            echo "<br>";
            echo "Gender: $select";
            echo "<br>";
            echo "Password: $password";
            echo "<br>";
        ?>
    </div>

    


    <!-- ==================================BOOTSTRAP CDN================================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>