<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <title></title>

</head>

<body>

  <nav class="navbar navbar-expand-lg bg-white border-bottom py-2">
    <div class="container">

      <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php echo anchor(
        'blog/home',
        '<img height="32" src="data:image/png;base64,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">',
        'class="navbar-brand d-flex align-items-center me-4"'
      ); ?>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <?php echo anchor('blog/home', 'Home', 'class="nav-link"'); ?>
          </li>
          <?php foreach ($categories as $category): ?>
            <li class="nav-item">
              <?php echo anchor('blog/home/category/' . $category->id . '/' . str_slug($category->name), $category->name, 'class="nav-link"'); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="d-flex align-items-center">
        <?php echo anchor('blog/search', '🔍', 'class="me-3"'); ?>
        <?php echo anchor('auth/register', 'Register', 'class="btn btn-success me-2"'); ?>
        <?php echo anchor('auth/login', 'Log in', 'class="btn btn-outline-success"'); ?>
      </div>

    </div>
  </nav>

  <div class="container mt-2">
    <?php echo $content; ?>
  </div>

  <footer class="bg-light border-top mt-5 pt-4 pb-3">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fw-semibold" href="#">Home</a>
          </li>
          <?php foreach ($categories as $category): ?>
            <li class="nav-item">
              <?php echo anchor('blog/home/category/' . $category->id, $category->name, 'class="nav-link"'); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="d-flex flex-wrap justify-content-center mb-3">
        <?php foreach ($categories as $category): ?>
          <?php echo anchor('blog/home/category/' . $category->id, $category->name, 'class="nav-link px-2"'); ?>
        <?php endforeach; ?>
      </div>

      <div class="text-center mb-3">
        <select class="form-select d-inline w-auto">
          <option selected>
            <?php echo config_item('app_name'); ?> in other languages
          </option>
          <option value="tagalog">Tagalog</option>
          <option value="english">English</option>
        </select>
      </div>

      <div class="d-flex justify-content-center mb-3">
        <a href="#" class="text-dark me-3"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-dark me-3"><i class="bi bi-tiktok"></i></a>
        <a href="#" class="text-dark"><i class="bi bi-youtube"></i></a>
      </div>

      <div class="d-flex flex-wrap justify-content-center small text-muted mb-2">
        <a href="#" class="text-muted mx-2">Terms of Use</a>
        <a href="#" class="text-muted mx-2">Privacy Policy</a>
        <a href="#" class="text-muted mx-2">Cookies</a>
        <a href="#" class="text-muted mx-2">Contact</a>
        <a href="#" class="text-muted mx-2">Advertise</a>
        <a href="#" class="text-muted mx-2">Do not sell info</a>
      </div>

      <p class="text-center small text-muted mb-0">
        © <?php echo date('Y'); ?> <?php echo config_item('app_name'); ?>. All rights reserved.
        <br>
        <em>
          The <?php echo config_item('app_name'); ?> is not responsible for the content of external sites.
        </em>
      </p>
    </div>
  </footer>

</body>

</html>