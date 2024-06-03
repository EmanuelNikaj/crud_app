       <?php include('include.header.php'); ?>
        <?php
        
            if(isset($_GET['message'])){
                echp "<h4>".$_GET['message']."<h4>";
            }
        
        ?>
    <form class="form" acation="inlcudes/login_process.php" method="post">
        <div class="form-group">
            <label for="uname">Username</label>
            <input type="text" name="uname" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" name="login" value="Login" class="btn btn-success">
        </div>

    </form>
    <?php include('include.footer.php'); ?>
    