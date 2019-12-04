<?php
// set page title
$pageTitle = 'Yale School of Art | Login';

// set meta description
$metaDescription = 'Login to your Yale School of Art account';

// includes
include "includes/head.php";
include "includes/nav.php";

?>

<div class="login">
    <div class="login-box">
        <h1>Please sign in to your account</h1>
        <form>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <a href="authhome.php" class="btn btn-primary">Submit</a>
        </form>
    </div>
</div>

<?php
include "includes/footer.php";
?>