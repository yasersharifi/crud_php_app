<?php include "config.php"; ?>
<?php $pageTitle = "List Of Users"; include("template/header.php"); ?>
<?php
$data = [];
$handle = fopen("components/data.csv", "r");
if ($handle !== false) {
    while (! feof($handle)) {
        $line = fgetcsv($handle);
        if (empty($line)) {
            continue;
        }
        array_push($data, $line);
    }
}
fclose($handle);

?>
<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <h1>List of User</h1>
            <a class="btn btn-success" href="<?= SITE_URL; ?>create.php">Add User</a>
        </div>
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Mobile</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $counter = 1; if (! empty($data)): foreach ($data as $item): ?>
                <tr>
                <th scope="row"><?= $counter ++; ?></th>
                <td><?= $item[0]; ?></td>
                <td><?= $item[1]; ?></td>
                <td><?= $item[2]; ?></td>
                <td><?= $item[3]; ?></td>
                <td>
                    <a href="view.html">
                        <button class="btn btn-outline-primary btn-sm"><i class="bi bi-eye"></i></button>
                    </a>
                    <a href="edit.html">
                        <button class="btn btn-outline-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                    </a>
                    <button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            <?php endforeach;endif; ?>
            </tbody>
        </table>
    </div>
</main>
<?php include("template/footer.php"); ?>