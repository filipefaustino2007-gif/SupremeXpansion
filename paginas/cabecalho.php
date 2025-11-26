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

        <li><a href="index.php">INÍCIO</a></li>

        <li><a href="sobre.php">SOBRE</a></li>

        <!-- SERVIÇOS -->
        <li class="servicos-dropdown">
          <a href="servico.php">SERVIÇOS</a>

          <div class="servicos-menu">
            <b>
              <a href="servico1.php">Laser Scan e Levantamentos 3D</a>
              <a href="servico2.php">Desenho 2D e Modelação 3D</a>
              <a href="servico3.php">UAV/Drone Fotogrametria</a>
            </b>
          </div>
        </li>

        <!-- PORTFOLIO -->
        <li class="portfolio-dropdown">
          <a href="portfolio.php">PORTFOLIO</a>

          <div class="portfolio-menu">
            <b>
              <strong><a href="portfolio_res.php">Lev. Residenciais</a></strong>
              <strong><a href="portfolio_urb.php">Lev. Urbanos</a></strong>
              <strong><a href="portfolio_com.php">Lev. Comerciais</a></strong>
              <strong><a href="portfolio_ind.php">Lev. Industriais</a></strong>
            </b>
          </div>
        </li>

        <li><a href="contactos.php">CONTACTOS</a></li>

        <li class="login-btn"><a href="login.php">LOGIN</a></li>

      </ul>
    </nav>
  </header>
</body>
</html>
