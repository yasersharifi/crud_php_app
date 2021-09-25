<?php include_once "config.php"; ?>
<?php $pageTitle = "Edit User Info"; include_once "template/header.php"; ?>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Edit User</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" value="Nama saya Pisyek" placeholder="Enter name">
                    <small class="form-text text-muted">Help message here.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
<?php include_once "template/footer.php"; ?>