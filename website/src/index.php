<?php
# Data
include 'secret-users.php';

# Router
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'login';

# 1. Login logic
if ($page === 'login' && isset($_REQUEST['name'], $_REQUEST['password'])) {
  $name = strtolower($_REQUEST['name']);
  $password = $_REQUEST['password'];
  $redirect = !empty(trim($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : '?page=profile&user=' . $name;

  if (isset($users[$name]) && $users[$name]['password'] === $password) {
    header('Location: ' . $redirect);
    exit;
  } else {
    echo '<h1>Login failed</h1>';
  }
}

# 2. Login form
if ($page === 'login' && $_SERVER['REQUEST_METHOD'] === 'GET') {
  $redirect = $_GET['redirect'] ?? '';
  echo '<h1>Login</h1>';
  echo '<form action="?page=login" method="get">';
  echo '<input type="hidden" name="redirect" value="' . $redirect . ' ">';
  echo '<input type="text" name="name" placeholder="Name">';
  echo '<input type="password" name="password" placeholder="Password">';
  echo '<input type="submit" value="Login">';
  echo '</form>';
}

# 3. Profile page
if ($page === 'profile') {
  $user = isset($_REQUEST['user']) ? strtolower($_REQUEST['user']) : '';
  if ($user === '') {
    echo '<h1>Profile</h1>';
    echo '<p>No user specified</p>';
  } else {
    echo '<h1>Profile for ' . $user . '</h1>';
  }
}