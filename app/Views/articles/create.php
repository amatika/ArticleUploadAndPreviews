<?= $this->include('layouts/header') ?>
<div class="row">
    <div class="col-12">
        <h1>Create Article</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <form action="/articles/store" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" name="author" id="author" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="source" class="form-label">Source</label>
                <input type="text" name="source" id="source" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="pdf" class="form-label">PDF File</label>
                <input type="file" name="pdf" id="pdf" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save Article</button>
        </form>
    </div>
</div>

<?= $this->include('layouts/header') ?>