<h3 class='title'>stuff to do</h3>

<div class="todos">
    <?php foreach ($todos as $todo) : ?>
        <div class="todo">
            <p class="note"><?= $todo['note'] ?></p>
            <div class="links">
                <a href="<?= site_url('TodoDetails/' . $todo['id']) ?> " class="details">details</a>
                <a href="<?= site_url('TodoEdit/' . $todo['id']) ?> " class="edit">edit</a>
                <a href="<?= site_url('TodoDelete/' . $todo['id']) ?> " class="delete">delete</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<p class="button home"><a href="<?= site_url('TodoCreate') ?>">add</a></p>