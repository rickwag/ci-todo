<h3 class="title">Details</h3>

<main class="details">
    <div class="id">
        <span id='id'>id</span>
        <span id='id-value'><?= $todo['id'] ?></span>
    </div>

    <div class="due-date">
        <span id='due-date'>due date</span>
        <span id='due-date-value'><?= $todo['duedate'] ?></span>
    </div>

    <p><?= $todo['note'] ?></p>

    <p class="button details"><a href="<?= site_url() ?>">back</a></p>
</main>