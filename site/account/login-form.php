<div class="text-center my-5">
</div>
<div class="card shadow-lg">
    <div class="card-body p-5">
        <h1 class="fs-4 card-title fw-bold mb-4 text-center">Login</h1>
        <form action="login.php" method="POST" class="needs-validation" novalidate="" autocomplete="off">
            <div class="mb-3">
                <label class="mb-2 text-muted" for="email">Username</label>
                <input id="username" type="" class="form-control" name="username" value="" required autofocus>
                <div class="invalid-feedback">
                    Username is invalid
                </div>
            </div>

            <div class="mb-3">
                <div class="mb-2 w-100">
                    <label class="text-muted" for="password">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" required>
                <div class="invalid-feedback">
                    Password is required
                </div>
            </div>
            <div class="mb-3">
                <a href="?btn_forgot" class="text-decoration-none">
                    Forgot Password?
                </a>
            </div>

            <div class="d-flex align-items-center mb-3">
                <div class="form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label for="remember" class="form-check-label">Remember Me</label>
                </div>
            </div>
            <div class="text-center">
                <button name="btn_login" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    <div class="card-footer py-3 border-0">
        <div class="text-center">
            Don't have an account? <a href="?btn_register" class="text-dark">Create One</a>
        </div>
    </div>
</div>
<!-- <div class="mb-3">
<label class="mb-2 text-muted" for="email">E-Mail Address</label>
<input id="email" type="email" class="form-control" name="email" value="" required>
<div class="invalid-feedback">
    Email is invalid
</div>
</div> -->