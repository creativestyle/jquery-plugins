<form action="partials/popup.php">
    <div class="modal-body">
        <?php
            usleep(500000);
            $submitted = false;

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $submitted = true;
                $email = $_POST['email'];
                $valid = !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
            }
        ?>    
        <?php if($submitted && $valid): ?>
            <div class="alert alert-success">Success this is!</div>                
        <?php endif; ?>
        <div class="form-group <?php if($submitted && !$valid) echo 'has-error'; ?>">
            <label>Please fill this form!</label>
            <input type="text" name="email" placeholder="E-mail" class="form-control" value="<?php echo $email; ?>"/>
        </div>
        See something <a href="partials/works.html" class="modal-follow">else</a>.<br/>
        Wow, an <a href="partials/doesnotexist" class="modal-follow">error</a>.

        <?php if(isset($_POST['testParam'])): ?>
            <br/><br/>
            The <code>testParam</code> is: <span class="label label-info"><?php echo $_POST['testParam']; ?></span>
        <?php endif; ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger modal-close">Cancel</button>
        <button type="submit" class="btn btn-primary modal-submit">Submit</button>
    </div>
</form>