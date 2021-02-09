<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

    <div class="navbar navbar-default">
        <div class="container">
            <span class="glyphicon glyphicon-home"></span>
            <h2>Bienvenue sur mon application</h2>
        </div>
    </div>

    <div class="container">
        <h3>Blog list</h3>
        <a href="<?= base_url('blog/add'); ?>" class="btn btn-primary">Add New</a>
        <table   table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <td>ID</td>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>description</td>
                    <td>created_at</td>
                    <td>
                        <a href="<?= base_url('blog/edit/'); ?>" class="btn btn-info">Edit</a>
                        <a href="<?= base_url('blog/delete/'); ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</body>
</html>