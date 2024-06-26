<body class="d-flex align-items-center min-vh-100 bg-gradient-secondary">
  <div class="container">
    <div class="row justify-content-center">

      <div class="card o-hidden border-0 col-lg-7 shadow-lg">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 font-weight-bold text-gray-900 mb-4">
                    Register
                  </h1>
                </div>

                <!-- Status message -->
                <?php
                if (!empty($success_msg)) {
                  echo '<p class="status-msg success">' . $success_msg . '</p>';
                } elseif (!empty($error_msg)) {
                  echo '<p class="status-msg error">' . $error_msg . '</p>';
                }
                ?>

                <!-- Registration form -->
                <form action="" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="first_name" placeholder="Nama" value="<?php echo !empty($user['first_name']) ? $user['first_name'] : ''; ?>" required>
                    <?php echo form_error('first_name', '<p class="help-block">', '</p>'); ?>
                  </div>

                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" placeholder="Email" value="<?php echo !empty($user['email']) ? $user['email'] : ''; ?>" required>
                    <?php echo form_error('email', '<p class="help-block">', '</p>'); ?>
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                    <?php echo form_error('password', '<p class="help-block">', '</p>'); ?>
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="conf_password" placeholder="Confirm Password" required>
                    <?php echo form_error('conf_password', '<p class="help-block">', '</p>'); ?>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="phone" placeholder="Nomor Telepon" value="<?php echo !empty($user['phone']) ? $user['phone'] : ''; ?>">
                    <?php echo form_error('phone', '<p class="help-block">', '</p>'); ?>
                  </div>

                  <div class="send-button">
                    <input type="submit" class="form-control form-control-user btn btn-secondary btn-user btn-block" name="signupSubmit" value="Daftar">
                  </div>
                </form>

                <hr />
                <div class="text-center small">
                  Sudah Mempunyai Akun?
                  <a href="<?php echo base_url('users/login'); ?>">Login!</a>
                </div>
              </div>