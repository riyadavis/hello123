<div class="container">
    <form action="<?php echo site_url('ExamApi/insertItems') ?>" method="post">
    <div class="form-group">
        <label for="itemName">Item Name:</label>
        <input type="text" class="form-control" id="itemName" name="itemName">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5" id="description" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>