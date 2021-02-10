
        <h3>Blog list</h3>

        <?php
            if($this->session->flashdata('success_msg')){
        ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success_msg'); ?>
            </div>
        <?php
            }
        ?>


        <?php
            if($this->session->flashdata('error_msg')){
        ?>
            <div class="alert alert-error">
                <?php echo $this->session->flashdata('error_msg'); ?>
            </div>
        <?php
            }
        ?>

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
                        <a href="<?= base_url('blog/edit/'.$blog->id); ?>" class="btn btn-info">Edit</a>
                        <a href="<?= base_url('blog/delete/'.$blog->id); ?>" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette donnée ?');">Delete</a>
                    </td>
                </tr>
            <?php
                    }
                }
            ?>
            </tbody>
        </table>
