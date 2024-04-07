<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>Task
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<h1>Task</h1>
<dl>
    <dt>ID</dt>
    <dd>
        <?= $task['id'] ?>
    </dd>
    <dt>Description</dt>
    <dd>
        <?= $task['description'] ?>
    </dd>
    <dt>Created at</dt>

    <dt>Updated at</dt>

</dl>
<?= $this->endSection() ?>