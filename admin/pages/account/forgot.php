<div class="text-center my-5">
    <h2>Login</h2>
</div>
<div class="card shadow-lg">
    <div class="card-body p-5">
        <h1 class="fs-4 card-title fw-bold mb-4">Forgot Password</h1>
        <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
            <div class="mb-3">
                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                <div class="invalid-feedback">
                    Email is invalid
                </div>
            </div>

            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary ms-auto">
                    Send Link
                </button>
            </div>
        </form>
    </div>
    <div class="card-footer py-3 border-0">
        <div class="text-center">
            Remember your password? <a href="index.php" class="text-dark">Login</a>
        </div>
    </div>
</div>