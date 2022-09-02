<h3 class="title">edit</h3>

<?php echo validation_errors() ?>

<?php echo form_open('HomeController/create') ?>
<input class="invisible" type="text" name="id" />
<div class="due-date">
    <label for="due-date">due date</label>
    <input type="date" name="due-date" id="due-date" />
</div>

<div class="note">
    <label for="note">note</label>
    <textarea name="note" id="note" cols="60" rows="8"></textarea>
</div>

<input type="submit" value="add">
</form>