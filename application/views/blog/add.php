
    <h3>Ajouter un article</h3>
    <a href="<?= base_url('blog/index'); ?>" class="btn btn-success">Retour</a>
    <form action="<?= base_url('blog/submit'); ?>" method="post" class="form-horizonal">
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Titre</label>
            <div class="col-md-10">
                <input type="text" name="txt_title" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-md-2 text-right">Description</label>
            <div class="col-md-10">
                <textarea name="txt_description" class="form-control" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 text-right"></label>
            <div class="col-md-10">
                <input type="submit" name="btn_save" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>

