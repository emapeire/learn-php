<?php
require_once './src/utils/data_fetcher.php';

use App\Utils\DataFetcher;

$config = require_once './src/config/index.php';

$dataFetcher = new DataFetcher($config);

$data = $dataFetcher->fetchData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Learning PHP by creating a web-page">
  <link rel="icon" href="https://www.php.net/images/logos/new-php-logo.svg" type="image/svg+xml">
  <title>When is the next MCU film?</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header>
    <h1>When is the next MCU film?</h1>
  </header>
  <main>
    <section>
      <h2><?= $data["title"]; ?> releases in <?= $data["days_until"]; ?> days!</h2>
      <hgroup>
        <p>Release Date: <?= $data["release_date"]; ?></p>
        <p>Production Type: <?= $data["type"] ?></p>
        <p>
          What's afterwards?
          <a><?= $data["following_production"]["title"]; ?></a>
        </p>
      </hgroup>
      <picture>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster of <?= $data["title"]; ?>" style="border-radius: 1rem;" />
      </picture>
    </section>
  </main>
</body>

</html>