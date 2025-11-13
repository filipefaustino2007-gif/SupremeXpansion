<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cabecalho.css">
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
          <a href="index.php" class="<?php echo $current_page === 'index.php' ? 'active' : ''; ?>">INÍCIO</a>
        </li>

        <li>
          <a href="sobre.php" class="<?php echo $current_page === 'sobre.php' ? 'active' : ''; ?>">SOBRE</a>
        </li>

        <!-- SERVIÇOS com dropdown -->
        <li class="servicos-dropdown">
          <a href="servico.php" class="<?php echo $current_page === 'servico.php' ? 'active' : ''; ?>">SERVIÇOS</a>
          <div class="servicos-menu">
            <b>
              <!-- Ajusta os hrefs conforme os teus ficheiros reais -->
              <a href="servico1.php">Laser Scan e Levantamentos 3D</a>
              <a href="servico2.php">Desenho 2D e Modelação 3D</a>
              <a href="servico3.php">UAV/Drone Fotogrametria</a>
            </b>
          </div>
        </li>

        <!-- PORTFOLIO com dropdown -->
        <li class="portfolio-dropdown">
          <a href="portfolio.php" class="<?php echo $current_page === 'portfolio.php' ? 'active' : ''; ?>">PORTFOLIO</a>
          <div class="portfolio-menu">
            <b>
              <a href="portfolio_res.php">Lev. Residenciais</a>
              <a href="portfolio_urb.php">Lev. Urbanos</a>
              <a href="portfolio_com.php">Lev. Comerciais</a>
              <a href="portfolio_ind.php">Lev. Industriais</a>
            </b>
          </div>
        </li>

        <li>
          <a href="contactos.php" class="<?php echo $current_page === 'contactos.php' ? 'active' : ''; ?>">CONTACTOS</a>
        </li>

        <li class="login-btn">
          <a href="login.php">LOGIN</a>
        </li>
      </ul>
    </nav>
  </header>
</body>
</html>
