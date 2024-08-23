<?= $this->include('layouts/header') ?>

<div class="row">
    <div class="col-12">
        <h1><?= $article['title'] ?></h1>
        <p><strong>Author:</strong> <?= $article['author'] ?></p>
        <p><strong>Source:</strong> <?= $article['source'] ?></p>
        <!-- Back Button -->
        <a href="/articles" class="btn btn-primary mt-3 mb-2">Back to Articles List</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <embed src="/uploads/<?= $article['pdf'] ?>" type="application/pdf" width="100%" height="600px" class="border rounded shadow-sm">
    </div>
</div>

<!--
<div class="row">
    <div class="col-12">
        <embed src="/writable/uploads/<?//= $article['pdf'] ?>" type="application/pdf" width="100%" height="600px" class="border rounded shadow-sm">
    </div>
</div>-->

<?= $this->include('layouts/header') ?>
