<br>
<div class="container mb-3">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <h2>Input Your Details</h2><br>
        <span class="error">* Required Area</span>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label> <span class="error"> * <?php echo $name_err; ?></span>
            <input type="text" value="<?php echo $name; ?>" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="text" class="form-label">Email address</label> <span class="error"> * <?php echo $email_err; ?></span>
            <input type="text" value="<?php echo $email; ?>" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label> <span class="error"> <?php echo $comment_err; ?></span>
            <textarea class="form-control" id="comment" name="comment" rows="3"><?php echo $comment; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Gender</label>
            <select class="form-select" name="select" aria-label="Default select example">
                <option selected ><?php echo $select; ?></option>
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Other</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Password</label> <span class="error"> * <?php echo $password_err; ?></span>
            <input type="password" class="form-control" id="password" value="<?php echo $password ?>" name="password">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
