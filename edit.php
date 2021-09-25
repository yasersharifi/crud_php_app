<?php include "config.php"; ?>
<?php $pageTitle = "Edit New User";
include("template/header.php"); ?>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>Edit User Info</h1>
                        <a href="index.php" class="btn btn-info">Go Back</a>
                    </div>
                    <hr>
                    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text"  name="fname" class="form-control" id="fname">
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" name="lname" class="form-control" id="lname">
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                <label for="birthday" class="form-label">Birthday</label>
                                <input type="date" name="birthday" class="form-control" id="birthday">
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" name="mobile" class="form-control" id="mobile">
                            </div>
                        </div>
                        <hr>
                        <button type="submit" name="submit" value="edit" class="btn btn-success">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php include "template/footer.php"; ?>