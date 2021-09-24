<?php include "config.php"; ?>
<?php $pageTitle = "Create New User";
include("template/header.php"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $birthday = $_POST["birthday"];
        $mobile = $_POST["mobile"];

        $line = array($fname, $lname, $birthday, $mobile);

        $handle = fopen("components/data.csv", "a+");
            fputcsv($handle, $line);
        fclose($handle);

        header("Location: index.php");
        exit();
    }
}

?>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1>Create New User</h1>
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
                        <button type="submit" name="submit" value="add" class="btn btn-success">add</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php include "template/footer.php"; ?>