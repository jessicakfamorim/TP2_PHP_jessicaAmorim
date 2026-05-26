//  ====== MAIN JS - SIMPA BAKER ======

// Espera o HTML carregar completamente antes de executar o JS
document.addEventListener("DOMContentLoaded", function () {


    //  ====== PESQUISA DE RECEITAS ======

    // Seleciona o input de pesquisa pelo ID
    const input = document.getElementById("pesquisaReceita");

    // Só executa se o input existir (evita erro em outras páginas)
    if (input) {

        // Seleciona todos os cards de receita
        const receitas = document.querySelectorAll(".receita");

        // Evento disparado sempre que o utilizador digita algo
        input.addEventListener("keyup", function () {

            // Pega o valor digitado e transforma em minúsculas
            const filtro = input.value.toLowerCase();

            // Percorre todas as receitas
            receitas.forEach(function (receita) {

                // Pega o título da receita (ex: "Bolo de Chocolate")
                const titulo = receita
                    .querySelector(".card-title")
                    .innerText
                    .toLowerCase();

                // Mostra ou esconde dependendo se corresponde ao filtro
                receita.style.display = titulo.includes(filtro) ? "" : "none";
            });
        });
    }



    // ====== BOTÃO "VER MAIS" ======

    // Seleciona todas as receitas
    const receitasLista = document.querySelectorAll(".receita");

    // Seleciona o botão "Ver mais"
    const botao = document.getElementById("verMais");

    // Só executa se existir botão e receitas
    if (botao && receitasLista.length > 0) {

        // Esconde todas as receitas a partir da 7ª (índice 6)
        for (let i = 6; i < receitasLista.length; i++) {
            receitasLista[i].style.display = "none";
        }

        // Quando clicar no botão
        botao.addEventListener("click", function () {

            // Mostra todas as receitas escondidas
            for (let i = 6; i < receitasLista.length; i++) {
                receitasLista[i].style.display = "block";
            }

            // Esconde o botão depois de expandir
            botao.style.display = "none";
        });
    }



    // ====== FILTROS DE TUTORIAIS ======

    // Seleciona todos os botões de filtro
    const botoesFiltro = document.querySelectorAll('.filtro-btn');

    // Só executa se houver filtros na página
    if (botoesFiltro.length > 0) {

        // Para cada botão de filtro
        botoesFiltro.forEach(btn => {

            btn.addEventListener('click', () => {

                // Remove classe ativa de todos os botões
                botoesFiltro.forEach(b => b.classList.remove('ativo'));

                // Adiciona classe ativa ao botão clicado
                btn.classList.add('ativo');

                // Pega o valor do filtro (ex: "bolo", "cookies", etc.)
                const filtro = btn.dataset.filtro;

                // Percorre todas as secções de categoria
                document.querySelectorAll('.categoria-section').forEach(sec => {

                    // Mostra se for "todos" ou se a categoria for igual
                    if (filtro === 'todos' || sec.dataset.categoria === filtro) {
                        sec.classList.remove('escondido');
                    } else {
                        // Caso contrário, esconde
                        sec.classList.add('escondido');
                    }
                });

            });
        });
    }



    //  ====== MODAL DE VÍDEO ======

    // Seleciona o modal pelo ID
    const videoModal = document.getElementById('videoModal');

    // Só executa se o modal existir
    if (videoModal) {

        // Evento do Bootstrap quando o modal vai abrir
        videoModal.addEventListener('show.bs.modal', function (event) {

            // Pega o card que foi clicado
            const card = event.relatedTarget;

            // Pega os dados personalizados do HTML (data-*)
            const titulo = card.dataset.titulo;
            const descricao = card.dataset.descricao;
            const duracao = card.dataset.duracao;
            const nivel = card.dataset.nivel;
            const videoSrc = card.dataset.video;

            // Atualiza o título do modal
            document.getElementById('videoModalLabel').textContent = titulo;

            // Atualiza a descrição
            document.getElementById('modalDescricao').textContent = descricao;

            // Atualiza as informações (duração e nível)
            document.getElementById('modalMeta').innerHTML = `
                <span><i class="fa-regular fa-clock"></i> ${duracao}</span>
                <span><i class="fa-solid fa-signal"></i> ${nivel}</span>
            `;

            // Container onde o vídeo será inserido
            const container = document.getElementById('videoContainer');

            // Se existir vídeo
            if (videoSrc) {

                // Cria iframe com o vídeo
                container.innerHTML = `
                    <iframe 
                        src="${videoSrc}" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                `;
            } else {

                // Caso não tenha vídeo ainda
                container.innerHTML = `
                    <div class="video-placeholder">
                        <i class="fa-solid fa-film"></i>
                        <p>Vídeo em breve!</p>
                    </div>
                `;
            }

        });

        // Evento quando o modal fecha
        videoModal.addEventListener('hide.bs.modal', function () {

            // Remove o vídeo (para parar reprodução)
            document.getElementById('videoContainer').innerHTML = '';
        });

    }

});


// ── FORMULÁRIO ──

// Função chamada ao clicar em "Enviar"
function enviarFormulario() {

    // Pega valores dos inputs
    const nome = document.getElementById('nome').value.trim();
    const email = document.getElementById('email').value.trim();
    const mensagem = document.getElementById('mensagem').value.trim();

    // Regex para validar email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validação: nome vazio
    if (!nome) {
        alert('⚠️ Por favor preenche o teu nome!');
        return;
    }

    // Validação: email inválido
    if (!email || !emailRegex.test(email)) {
        alert('⚠️ Por favor indica um email válido!');
        return;
    }

    // Validação: mensagem vazia
    if (!mensagem) {
        alert('⚠️ Por favor escreve a tua mensagem!');
        return;
    }

    // Esconde o formulário
    document.getElementById('formulario').style.display = 'none';

    // Mostra mensagem de sucesso
    document.getElementById('sucesso').style.display = 'block';
}


// Função para resetar o formulário
function voltarFormulario() {

    // Limpa os campos
    document.getElementById('nome').value = '';
    document.getElementById('email').value = '';
    document.getElementById('telefone').value = '';
    document.getElementById('mensagem').value = '';

    // Esconde sucesso
    document.getElementById('sucesso').style.display = 'none';

    // Mostra formulário novamente
    document.getElementById('formulario').style.display = 'block';
}