<?php require __DIR__ . '/../../header.php'; ?>

<?php
if (!isset($_SESSION['loggedIn'])) :
    redirect('/public/front/users/gui-ls-login.php');
endif; ?>

<article>
    <h1>Edit Your Comment</h1>

    <form action="/public/back/posts/change-post.php" method="post">
        <div class="form-group">
            <label for="article">Comment update:</label>
            <textarea class="form-control" type="text" name="post-update" id="post-update" rows="3" maxlength="300" required>
            </textarea>
            <small>(Maximum length is 300 characters long.)</small>
        </div><!-- /form-group -->

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</article>
