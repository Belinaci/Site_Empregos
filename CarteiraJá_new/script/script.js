// NAVBAR

let active = true;
let menu = document.querySelector(".menu-container");
let menuToggle = document.querySelector(".menu-toggle");

menuToggle.addEventListener("click", ()=>{
    document.body.style.overflow = active ? 'hidden': 'initial';

    menu.classList.toggle("on", active);
    active = !active;
})

// FILTRO

const checkboxesPrincipais = document.querySelectorAll("input[type='checkbox']:not([id^='manha'], [id^='tarde'], [id^='noite'], [id^='integral'])");
const checkboxesSecundarios = document.querySelectorAll("input[type='checkbox'][id^='manha'], input[type='checkbox'][id^='tarde'], input[type='checkbox'][id^='noite'], input[type='checkbox'][id^='integral'], input[type='checkbox'][id^='burh'], input[type='checkbox'][id^='gupy'], input[type='checkbox'][id^='catho']");


checkboxesPrincipais.forEach((checkbox) => {
    checkbox.addEventListener('change', () => {
        filtrarVagas();
    });
});


checkboxesSecundarios.forEach((checkbox) => {
    checkbox.addEventListener('change', () => {
        filtrarVagas();
    });
});

function filtrarVagas() {

    const filtrosPrincipais = [];
    const filtrosSecundarios = [];

    checkboxesPrincipais.forEach((checkboxPrincipal) => {
        if (checkboxPrincipal.checked) {
            filtrosPrincipais.push(checkboxPrincipal.id);
        }
    });

    checkboxesSecundarios.forEach((checkboxSecundario) => {
        if (checkboxSecundario.checked) {
            filtrosSecundarios.push(checkboxSecundario.id);
        }
    });


    document.querySelectorAll('.item').forEach((vaga) => {
        const classesVaga = vaga.classList;
        const atendeFiltrosPrincipais = filtrosPrincipais.every(filtro => classesVaga.contains(filtro));
        const atendeFiltrosSecundarios = filtrosSecundarios.every(filtro => classesVaga.contains(filtro));

        if ((atendeFiltrosPrincipais || filtrosPrincipais.length === 0) && atendeFiltrosSecundarios) {
            vaga.style.display = "list-item";
        } else {
            vaga.style.display = "none";
        }
    });
}

// contador

function atualizarContadorVagas(numero) {
    const contadorVagas = document.getElementById("contador-vagas");
    contadorVagas.textContent = numero;
}


function contarVagas() {
    const vagas = document.querySelectorAll(".vaga"); // Suponha que todas as vagas têm a classe "vaga"
    atualizarContadorVagas(vagas.length);
}


setInterval(() => {
    contarVagas(); // 
}, 1000); // Adiciona uma vaga a cada 1 segundo (1000 milissegundos)

document.getElementById("adicionar-vaga-manual").addEventListener("click", () => {

    contarVagas();
});

// paginação
/*
const vagasContainer = document.getElementById('vagasContainer');
const vagas = document.querySelectorAll('.item'); // Todas as vagas
const itensPorPagina = 5; // Quantidade de itens por página
let paginaAtual = 1; // Página inicial

function mostrarItensPagina(pagina) {
    const inicio = (pagina - 1) * itensPorPagina;
    const fim = inicio + itensPorPagina;

    vagas.forEach((vaga, index) => {
        if (index >= inicio && index < fim) {
            vaga.style.display = 'list-item';
        } else {
            vaga.style.display = 'none';
        }
    });
}

function criarBotoesPaginacao(totalPaginas) {
    const paginaNumeros = document.getElementById('paginaNumeros');
    paginaNumeros.innerHTML = ''; // Limpa os números de página anteriores

    for (let i = 1; i <= totalPaginas; i++) {
        const numeroPagina = document.createElement('span');
        numeroPagina.textContent = i;
        numeroPagina.addEventListener('click', () => {
            paginaAtual = i;
            mostrarItensPagina(paginaAtual);
            atualizarPaginacao(totalPaginas);
        });
        paginaNumeros.appendChild(numeroPagina);
    }
}

function atualizarPaginacao(totalPaginas) {
    const paginacaoDiv = criarBotoesPaginacao(totalPaginas);
}

// Manipuladores de evento para os botões de páginação no HTML
const paginaAnterior = document.getElementById('paginaAnterior');
const paginaSeguinte = document.getElementById('paginaSeguinte');

paginaAnterior.addEventListener('click', () => {
    if (paginaAtual > 1) {
        paginaAtual--;
        mostrarItensPagina(paginaAtual);
        atualizarPaginacao(totalPaginas);
    }
});

paginaSeguinte.addEventListener('click', () => {
    if (paginaAtual < totalPaginas) {
        paginaAtual++;
        mostrarItensPagina(paginaAtual);
        atualizarPaginacao(totalPaginas);
    }
});

// Inicialize a página de exibição
mostrarItensPagina(paginaAtual);

// Atualize a paginação
const totalPaginas = Math.ceil(vagas.length / itensPorPagina);
atualizarPaginacao(totalPaginas);

function criarBotoesPaginacao(totalPaginas) {
    const paginaNumeros = document.getElementById('paginaNumeros');
    paginaNumeros.innerHTML = ''; // Limpa os números de página anteriores

    for (let i = 1; i <= totalPaginas; i++) {
        const numeroPagina = document.createElement('span');
        numeroPagina.textContent = i;
        numeroPagina.addEventListener('click', () => {
            paginaAtual = i;
            mostrarItensPagina(paginaAtual);
            atualizarPaginacao(totalPaginas);
        });

        // Adicione a classe "pagina-atual" à página atual
        if (i === paginaAtual) {
            numeroPagina.classList.add('pagina-atual');
        }

        paginaNumeros.appendChild(numeroPagina);
    }
}

// Resto do código permanece o mesmo
*/
