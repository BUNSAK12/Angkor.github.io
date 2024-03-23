
<!DOCTYPE html>
<html lang="en">

<head>
  <title>User List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>


  <div class="container">
  <nav class="navbar navbar-primary bg-primary fixed-top">
  <div class="container-fluid">
<button class="btn btn-success"><a class="navbar-brand " href="users/login.php">login</a></button>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-d" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>

        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
          
<a class="nav-link active" aria-current="page" href="users/add.php"><i class="bi bi-bag-plus-fill m-3">Add</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users/edit.php"><i class="bi bi-pencil-square m-3">Update</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users/delete.php"><i class="bi bi-archive m-3">Delete</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users/index.php"><i class="bi bi-card-list m-3">List</i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-tags"></i>Category Post </a>
            <ul class="dropdown-menu dropdown-menu-white">
              <li><a class="dropdown-item" href="posts/create.php"><i class="bi bi-postcard">Crete Post</i></a></li>
              <li><a class="dropdown-item" href="posts/list.php"><i class="bi bi-person-lines-fill ">List Post</i></a></li>
              <li><a class="dropdown-item" href="posts/edit.php"><i class="bi bi-pencil-square">Edit Post</i></a></li>
              <li><a class="dropdown-item" href="posts/edit.php"><i class="bi bi-trash3">Delete</i></a></li>


              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-tags"></i>Category</a>
            <ul class="dropdown-menu dropdown-menu-white">
              <li><a class="dropdown-item" href="category/add.php"><i class="bi bi-postcard">Crete Category</i></a></li>
              <li><a class="dropdown-item" href="category/index.php"><i class="bi bi-person-lines-fill ">List Category</i></a></li>
              <li><a class="dropdown-item" href="category/edit.php"><i class="bi bi-pencil-square">Edit Post</i></a></li>
              <li><a class="dropdown-item" href="category/delete.php"><i class="bi bi-trash3">Delete</i></a></li>


              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
  </div>
</body>

</html>