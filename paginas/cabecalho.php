<?php include __DIR__ . '/i18n.php'; ?>
<?php if (!function_exists('t')) include __DIR__ . '/i18n.php'; ?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/cabecalho.css">
  <script defer src="../js/cabecalho.js"></script> 
</head>

<body>
  <header class="main-header">
    <div class="logo">
      <a href="index.php">
        <img src="../img/logo_branco.svg" alt="SupremeXpansion">
      </a>
    </div>

    <nav class="navbar">
      <ul>

        <li>
          <a href="index.php">
            <?= t('nav.home') ?>
          </a>
        </li>

        <li>
          <a href="sobre.php">
            <?= t('nav.about') ?>
          </a>
        </li>

        <!-- SERVIÇOS -->
        <li class="servicos-dropdown">
          <a href="servico.php">
            <?= t('nav.services') ?>
          </a>

          <div class="servicos-menu">
            <b>
              <a href="servico1.php">
                <?= t('nav.services.laser_scan') ?>
              </a>
              <a href="servico2.php">
                <?= t('nav.services.design_3d') ?>
              </a>
              <a href="servico3.php">
                <?= t('nav.services.uav_drone') ?>
              </a>
            </b>
          </div>
        </li>

        <!-- PORTFOLIO -->
        <li class="portfolio-dropdown">
          <a href="portfolio.php">
            <?= t('nav.portfolio') ?>
          </a>

          <div class="portfolio-menu">
            <b>
              <strong>
                <a href="portfolio_res.php">
                  <?= t('nav.portfolio.residential') ?>
                </a>
              </strong>
              <strong>
                <a href="portfolio_urb.php">
                  <?= t('nav.portfolio.urban') ?>
                </a>
              </strong>
              <strong>
                <a href="portfolio_com.php">
                  <?= t('nav.portfolio.commercial') ?>
                </a>
              </strong>
              <strong>
                <a href="portfolio_ind.php">
                  <?= t('nav.portfolio.industrial') ?>
                </a>
              </strong>
            </b>
          </div>
        </li>

        <li>
          <a href="contactos.php">
            <?= t('nav.contacts') ?>
          </a>
        </li>

        <li class="login-btn">
          <a href="login.php">
            <?= t('nav.login') ?>
          </a>
        </li>

      </ul>
    </nav>
  </header>
</body>
</html>
