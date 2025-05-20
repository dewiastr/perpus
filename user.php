<?php
session_start();
include 'koneksi.php';

// Proses hapus jika ada ID di URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    mysqli_query($koneksi, "DELETE FROM user WHERE id = $id");
    header("Location: user.php");
    exit;
}

// Ambil semua data user
$users = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">dewiw</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link active" href="user.php">Data User</a></li>
      </ul>
      <a href="index.php"><button class="btn btn-danger">Logout</button></a>
    </div>
  </div>
</nav>

<div class="container mt-4">
  <h3 class="text-center mb-4">Data User</h3>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; while($user = mysqli_fetch_assoc($users)): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($user['username']) ?></td>
          <td><?= htmlspecialchars($user['email']) ?></td>
          <td>
            <a href="edit_user.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="user.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm"
              onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

</body>
</html>
