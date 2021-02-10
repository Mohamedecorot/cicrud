
    <h3>Edition d'un article</h3>
    <a href="<?= base_url('blog/index'); ?>" class="btn btn-success">Retour</a>
    <form action="<?= base_url('blog/update'); ?>" method="post" class="form-horizonal">
        <input type="hidden" name="text_hidden_id" value="<?= $blog->id ?>">
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Titre</label>
            <div class="col-md-10">
                <input type="text" value="<?= $blog->title ?>" name="txt_title" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-md-2 text-right">Description</label>
            <div class="col-md-10">
                <textarea name="txt_description" class="form-control" required><?= $blog->description ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 text-right"></label>
            <div class="col-md-10">
                <input type="submit" name="btn_update" class="btn btn-primary" value="Mettre à jour">
            </div>
        </div>
    </form>

