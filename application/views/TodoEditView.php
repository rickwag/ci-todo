<h3 class="title">edit</h3>

<?php echo validation_errors() ?>

<?php echo form_open('HomeController/edit') ?>
<input class="invisible" type="text" name="id" value="<?= $todo['id'] ?>">
<div class="due-date">
    <label for="due-date">due date</label>
    <input type="date" name="due-date" id="due-date" value="<?= $todo['duedate'] ?>">
</div>

<div class="note">
    <label for="note">note</label>
    <textarea name="note" id="note" cols="60" rows="8"><?= $todo['note'] ?></textarea>
</div>

<input type="submit" value="save">
</form>