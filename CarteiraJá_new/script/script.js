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

// Adicionar ouvintes de eventos para os checkboxes principais
checkboxesPrincipais.forEach((checkbox) => {
    checkbox.addEventListener('change', () => {
        filtrarVagas();
    });
});

// Adicionar ouvintes de eventos para os checkboxes secundários
checkboxesSecundarios.forEach((checkbox) => {
    checkbox.addEventListener('change', () => {
        filtrarVagas();
    });
});

function filtrarVagas() {
    // Criar arrays para armazenar os filtros principais e secundários selecionados
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

    // Exibir vagas que correspondem aos filtros principais e secundários selecionados
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
