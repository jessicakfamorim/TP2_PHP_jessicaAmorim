<?php
// Define o titulo da pagina e identifica qual link do menu deve ficar ativo
$tituloPagina = "Contacto";
$paginaAtual = "contactos";
?>

<?php include 'content/head.php';?>
<?php include 'content/header.php';?>
<?php include 'content/nav.php';?>


    <main>
        <!-- HERO -->
        <div class="page-hero">
            <h1>
                Fala Connosco
            </h1>
            <div class="divider"></div>
            <p>Adoramos ouvir as tuas sugestões, dúvidas ou só para dizer olá!</p>
        </div>

        <!-- CARDS DE INFO -->
        <div class="container my-5">
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="info-card">
                        <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                        <h5>Email</h5>
                        <a href="mailto:jessica_amorim@hotmail.com">jessica_amorim@hotmail.com</a>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="info-card">
                        <div class="info-icon"><i class="fa-brands fa-whatsapp"></i></div>
                        <h5>WhatsApp</h5>
                        <a href="https://wa.me/351937646633" target="_blank">+351 937 646 633</a>
                        <p class="mt-1">Seg–Sex, 9h–18h</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <h5>Instagram</h5>
                        <a href="https://instagram.com/simpa.baker" target="_blank">@simpa.baker</a>
                        <p class="mt-1">Respondemos a DMs!</p>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="info-card">
                        <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
                        <h5>Resposta</h5>
                        <p>Respondemos em 24–48 horas nos dias úteis.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FORMULÁRIO + INFO -->
        <div class="container mb-5">
            <div class="row g-5 align-items-start">
                <!-- LADO ESQUERDO — texto + redes -->
                <div class="col-md-5">
                    <h2 class="titulo-secao">
                        Vamos conversar
                    </h2>
                    <div class="divider" style="margin: 0.8rem 0 1.2rem"></div>
                    <p>
                        Estamos sempre disponíveis para responder às tuas dúvidas,
                        colaborações ou simplesmente para partilhar o amor pela
                        pastelaria.
                    </p>
                    <p>
                        Preenche o formulário e entraremos em contacto o mais brevemente
                        possível!
                    </p>

                    <!-- Redes sociais -->
                    <p class="fw-bold mt-4 mb-2" style="
                color: #8b5a4a;
                font-size: 0.85rem;
                letter-spacing: 0.06em;
                text-transform: uppercase;
              ">
                        Segue-nos
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://instagram.com/simpa.baker" target="_blank" class="social-btn">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/351937646633" target="_blank" class="social-btn">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="mailto:jessica_amorim@hotmail.com" class="social-btn">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- LADO DIREITO — formulário -->
                <div class="col-md-7">
                    <div class="form-card">
                        <!-- FORMULÁRIO -->
                        <form id="formulario">
                            <h4 class="mb-1 titulo-formulario">
                                Envia uma mensagem
                            </h4>
                            <p class="mb-4 texto-formulario">
                                Preenche os campos abaixo e nós entramos em contacto contigo.
                            </p>

                            <div class="row g-3">
                                <!-- Nome -->
                                <div class="col-md-6">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" required
                                        placeholder="O teu nome completo" />
                                    <div class="invalid-feedback">
                                        Por favor indica o teu nome.
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" required
                                        placeholder="email@exemplo.com" />
                                    <div class="invalid-feedback">
                                        Por favor indica um email válido.
                                    </div>
                                </div>

                                <!-- Telefone -->
                                <div class="col-12">
                                    <label for="telefone">Telefone
                                        <span style="
                          color: #c49080;
                          font-weight: 300;
                          text-transform: none;
                          letter-spacing: 0;
                        ">(opcional)</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="
                          background: #f5ede6;
                          border: 1.5px solid #e8ddd9;
                          border-radius: 10px 0 0 10px;
                          color: #8b5a4a;
                          font-size: 0.88rem;
                        ">🇵🇹 +351</span>
                                        <input type="tel" class="form-control" id="telefone" placeholder="912 345 678"
                                            style="border-radius: 0 10px 10px 0" />
                                    </div>
                                </div>

                                <!-- Assunto -->
                                <div class="col-12">
                                    <label>Assunto</label>
                                    <div class="assunto-group mt-1">
                                        <input type="radio" name="assunto" id="a1" value="Dúvida" checked />
                                        <label for="a1">Dúvida</label>

                                        <input type="radio" name="assunto" id="a2" value="Sugestão" />
                                        <label for="a2">Sugestão</label>

                                        <input type="radio" name="assunto" id="a3" value="Colaboração" />
                                        <label for="a3">Colaboração</label>

                                        <input type="radio" name="assunto" id="a4" value="Imprensa" />
                                        <label for="a4">Imprensa</label>

                                        <input type="radio" name="assunto" id="a5" value="Outro" />
                                        <label for="a5">Outro</label>
                                    </div>
                                </div>

                                <!-- Mensagem -->
                                <div class="col-12">
                                    <label for="mensagem">Mensagem</label>
                                    <textarea class="form-control" id="mensagem" required
                                        placeholder="Escreve aqui a tua mensagem..."></textarea>
                                    <div class="invalid-feedback">
                                        Por favor escreve a tua mensagem.
                                    </div>
                                </div>

                                <!-- Botão -->
                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn btn-enviar" onclick="enviarFormulario()">
                                        <i class="fa-solid fa-paper-plane me-2"></i>Enviar
                                        Mensagem
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- MENSAGEM DE SUCESSO -->
                        <div id="sucesso">
                            <div class="sucesso-icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <h3 class="mb-2">Mensagem enviada!</h3>
                            <p>Obrigada pelo contacto. Vamos responder-te em breve 🩷</p>
                            <button class="btn btn-enviar mt-3" style="width: auto; padding: 0.7rem 2rem"
                                onclick="voltarFormulario()">
                                <i class="fa-solid fa-arrow-left me-2"></i>Enviar outra
                                mensagem
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <?php include 'content/footer.php'; ?>