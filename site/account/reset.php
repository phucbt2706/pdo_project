<div class="text-center my-5">
    <!-- header -->
</div>
<div class="card shadow-lg">
    <div class="card-body p-5">
        <h1 class="fs-4 card-title fw-bold mb-4">Reset Password</h1>
        <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
            <div class="mb-3">
                <label class="mb-2 text-muted" for="password">New Password</label>
                <input id="password" type="password" class="form-control" name="password" value="" required autofocus>
                <div class="invalid-feedback">
                    Password is required
                </div>
            </div>
            <div class="mb-3">
                <label class="mb-2 text-muted" for="password">New Password</label>
                <input id="password" type="password" class="form-control" name="password" value="" required autofocus>
                <div class="invalid-feedback">
                    Password is required
                </div>
            </div>

            <div class="mb-3">
                <label class="mb-2 text-muted" for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirm" required>
                <div class="invalid-feedback">
                    Please confirm your new password
                </div>
            </div>

            <div class="d-flex align-items-center">
                <div class="form-check">
                    <input type="checkbox" name="logout_devices" id="logout" class="form-check-input">
                    <label for="logout" class="form-check-label">Logout all devices</label>
                </div>
                <button type="submit" class="btn btn-primary ms-auto">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
</div>