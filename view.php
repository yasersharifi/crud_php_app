<?php include_once "config.php"; ?>
<?php $pageTitle = "View User Info";
include_once "template/header.php"; ?>
<?php
$data = [];
$handle = fopen("components/data.csv", "r");

    if ($handle !== false) {
        while (! feof($handle)) {
            $line = fgetcsv($handle);
            if (!empty($line)) {
                if ($line[0] == $_GET["fname"] && $line[1] == $_GET["lname"]) {
                    $data = $line;
                }
            }
        }
    }

fclose($handle);
?>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1>View User Information</h1>
                                <a class="btn btn-info" href="index.php"><i class="bi bi-arrow-left-short"></i> Go Back</a>
                            </div>
                            <hr>
                            <p>First Name: <?= $data[0]; ?></p>
                            <p>Last Name: <?= $data[1]; ?></p>
                            <p>Birthday: <?= $data[2]; ?></p>
                            <p>Mobile: <?= $data[3]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include_once "template/footer.php"; ?>