<?php include("template/header.php"); ?>
<body class="d-flex flex-column h-100">

<div class="container pt-4 pb-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="#">HTML CRUD Template</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.html">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://pisyek.com/contact">Help</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav>
</div>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1>List of User</h1>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <a href="view.html">
                        <button class="btn btn-primary btn-sm">View</button>
                    </a>
                    <a href="edit.html">
                        <button class="btn btn-outline-primary btn-sm">Edit</button>
                    </a>
                    <button class="btn btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>
                    <a href="view.html">
                        <button class="btn btn-primary btn-sm">View</button>
                    </a>
                    <a href="edit.html">
                        <button class="btn btn-outline-primary btn-sm">Edit</button>
                    </a>
                    <button class="btn btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>
                    <a href="view.html">
                        <button class="btn btn-primary btn-sm">View</button>
                    </a>
                    <a href="edit.html">
                        <button class="btn btn-outline-primary btn-sm">Edit</button>
                    </a>
                    <button class="btn btn-sm">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</main>
<?php include("template/footer.php"); ?>