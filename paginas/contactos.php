<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos - SupremeXpansion</title>
    <link rel="icon" type="image/png" href="../img/icon.png">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/contactos.css">
</head>
<body>
    <?php include 'cabecalho.php'; ?>

    <!-- Topo -->
    <section class="contactos-topo">
        <img src="../img/index2.png" alt="Contactos SupremeXpansion" class="contactos-topo-img">
        <div class="contactos-topo-texto">
            <h1>CONTACTOS</h1>
        </div>
    </section>

    <!-- Conteúdo principal -->
    <section class="contactos-conteudo">
        <div class="contactos-texto">
            <h2>Fale connosco</h2>
            <p class="contactos-intro">
                Para entrar em contato connosco, pode utilizar o formulário disponível no nosso site, enviar um e-mail para o endereço indicado ou ligar por telefone. A nossa equipa estará pronta para o atender da melhor forma possível e responder a qualquer questão que possa surgir.
            </p>
        </div>

        <div class="contactos-form-wrapper">
            <form class="contactos-form" action="#" method="post">
                <!-- Linha 1: Name + Email -->
                <div class="contactos-form-row">
                    <div class="contactos-field">
                        <input type="text" id="nome" name="nome" placeholder="Name" required>
                    </div>

                    <div class="contactos-field">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>

                <!-- Linha 2: Telemóvel + Assunto -->
                <div class="contactos-form-row">
                    <div class="contactos-field">
                        <input type="tel" id="telemovel" name="telemovel" placeholder="Telemóvel">
                    </div>

                    <div class="contactos-field">
                        <input type="text" id="assunto" name="assunto" placeholder="Assunto">
                    </div>
                    </div>

                <!-- Motivos de contacto -->
                <div class="contactos-field full-width">
                    <select id="motivo" name="motivo" required>
                        <option value="" disabled selected>Motivo de contacto</option>
                        <option value="orcamento">Pedido de orçamento</option>
                        <option value="parceria">Proposta de parceria</option>
                        <option value="suporte">Suporte ao cliente</option>
                        <option value="outro">Outro motivo</option>
                    </select>
                </div>

                <!-- Mensagem -->
                <div class="contactos-field full-width">
                    <textarea id="mensagem" name="mensagem" rows="5" placeholder="Message" required></textarea>
                </div>


                <!-- Checkbox -->
                <div class="contactos-consent">
                    <input type="checkbox" id="consent" name="consent" required>
                    <label for="consent">
                        Eu concordo que este site armazene as minhas informações enviadas para que possam responder à minha pergunta.
                    </label>
                </div>

                <!-- Botão -->
                <button type="submit" class="btn-enviar-outline">Enviar</button>
                <p id="success-message" class="success-message">Enviado com sucesso!</p>
            </form>
        </div>

        <div class="contactos-info">
            <div class="contactos-info-blocos">
                <div class="contactos-bloco">
                    <h3>TELEFONE</h3>
                    <p class="contactos-phone">PT +351 935 584 011</p>
                    <p class="contactos-note">(Chamada para a rede móvel nacional)</p>
                    <p class="contactos-phone">UK +44 7557 795 968</p>
                    <div class="contactos-social-box">
                    </div>
                </div>
                <div class="contactos-bloco contactos-email-bloco">
                    <h3>EMAIL</h3>
                    <p class="contactos-email">info@supremexpansion.com</p>
                    <div class="contactos-social-box">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/supremexpansion2023/" target="_blank" rel="noopener noreferrer" class="social-icon">
                                <img src="../img/facebook.svg" alt="Facebook">
                            </a>
                            <a href="https://www.instagram.com/supremexpansion/" target="_blank" rel="noopener noreferrer" class="social-icon">
                                <img src="../img/instagram.svg" alt="Instagram">
                            </a>
                            <a href="https://pt.linkedin.com/company/supremexpansion" target="_blank" rel="noopener noreferrer" class="social-icon">
                                <img src="../img/linkedin.svg" alt="LinkedIn">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'rodape.php'; ?>
    <script src="../js/contactos.js"></script>
</body>
</html>
