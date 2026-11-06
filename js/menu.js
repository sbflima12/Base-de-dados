document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const menuLista = document.getElementById("menu-lista");

    // Adiciona o evento de clique apenas se os elementos existirem na página
    if (menuToggle && menuLista) {
        menuToggle.addEventListener("click", function () {
            menuLista.classList.toggle("escondido");
        });
    }
});