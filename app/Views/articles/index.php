<?= $this->include('layouts/header') ?>

<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-4">
        <h1>Articles</h1>
        <a href="/articles/create" class="btn btn-primary">Create New Article</a>
    </div>
</div>

<div class="row">
    <?php foreach ($articles as $article): ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $article['title'] ?></h5>
                    <p class="card-text"><strong>Author:</strong> <?= $article['author'] ?></p>
                    <p class="card-text"><strong>Source:</strong> <?= $article['source'] ?></p>
                    <a href="/articles/show/<?= $article['id'] ?>" class="btn btn-success">Read Article</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->include('layouts/footer') ?>
