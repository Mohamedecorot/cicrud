
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
            <?php
                if($blogs){
                    foreach($blogs as $blog){
            ?>
                <tr>
                    <td><?= $blog->id; ?></td>
                    <td><?= $blog->title; ?></td>
                    <td><?= $blog->description; ?></td>
                    <td><?= $blog->created_at; ?></td>
                    <td>
                        <a href="<?= base_url('blog/edit/'); ?>" class="btn btn-info">Edit</a>
                        <a href="<?= base_url('blog/delete/'); ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
                    </td>
                </tr>
            <?php
                    }
                }
            ?>
            </tbody>
        </table>
