<?php
if ($this->session->flashdata('info')) {
    echo $this->session->flashdata('info');
}
?>

<link rel="stylesheet" type="text/css" href="<?= base_url('include/assets-fe/assets/login.css')?>">
<form class="form-signin shadow-lg p-4 rounded-lg bg-white" method="POST" action="<?= site_url('login/process')?>">
  <?php echo validation_errors('<script>swal({title: "Warning", text: "', '", timer: 10000, icon: "warning", button: false});</script>'); ?>
  <div class="text-center mb-4">
    <h1 class="text-2xl font-bold text-gray-800">E-MAGANG Kejari</h1>
    <h2 class="text-lg font-medium text-gray-600">Panel Mahasiswa | Login</h2>
  </div>
  <body class="hold-transition login-page" style="background:url(include/img/photo4.png) no-repeat center center fixed; background-size: cover;">
    <div class="form-group mb-3">
      <label class="block text-gray-700">Username</label>
      <input class="form-control rounded-lg border-gray-300 focus:ring-2 focus:ring-blue-500" placeholder="Username" type="text" name="username" value="<?= set_value('username'); ?>" required autofocus>
    </div>

    <div class="form-group mb-4">
      <label class="block text-gray-700">Password</label>
      <input class="form-control rounded-lg border-gray-300 focus:ring-2 focus:ring-blue-500" placeholder="Password" type="password" name="password" value="<?= set_value('password') ?>" required>
    </div>

    <button class="btn btn-info w-full py-2 rounded-lg bg-blue-500 hover:bg-blue-600 text-white font-semibold" type="submit" name="log">Login</button>

    <p class="mt-5 text-sm text-gray-500 text-center">&copy; 2026 E-Magang Kejari</p>
  </form>
</body>