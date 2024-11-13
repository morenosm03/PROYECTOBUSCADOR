$(document).ready(function() {
    // Elementos del DOM
    const $searchInput = $('#searchInput'); // Campo de entrada de búsqueda
    const $resultsList = $('#results'); // Lista donde se mostrarán los resultados de búsqueda
    const $checkboxes = $('.category-checkbox'); // Checkboxes para filtrar por categorías
    const $dateFilters = $('input[name="date-filter"]'); // Radio buttons para filtrar por fecha
    const $clearFiltersButton = $('#clearFilters'); // Botón para limpiar todos los filtros

    // Datos de las páginas
    const pages = [
        { url: 'Recursos/Tecnologia.php', title: 'Tecnología General', category: 'Informes y documentos', date: '2024-06-30' },
        { url: 'Recursos/Innovacion.php', title: 'Innovación General', category: 'Artículos científicos', date: '2023-09-25' },
        { url: 'Recursos/Ciencia.php', title: 'Ciencia General', category: 'Recursos educativos', date: '2022-03-20' },
        { url: 'Recursos/Futuro.php', title: 'Futuro General', category: 'Estudios de caso', date: '2021-02-18' },
        { url: 'Recursos/Internet.php', title: 'Internet General', category: 'Recursos educativos', date: '2020-10-12' },
        { url: 'Recursos/Exploraciones Científicas.php', title: 'Exploraciones Científicas', category: 'Artículos científicos', date: '2019-04-15' },
        { url: 'Recursos/Revoluciones Científicas.php', title: 'Revoluciones Científicas', category: 'Artículos científicos', date: '2018-01-10' },
        { url: 'Recursos/Perspectivas Globales.php', title: 'Perspectivas Globales', category: 'Estudios de caso', date: '2017-06-05' },
        { url: 'Recursos/Tecnologías Emergentes.php', title: 'Tecnologías Emergentes', category: 'Estudios de caso', date: '2016-07-12' },
        { url: 'Recursos/Nuevas Ideas.php', title: 'Nuevas Ideas', category: 'Artículos científicos', date: '2015-08-20' },
        { url: 'Recursos/Transformación Digital.php', title: 'Transformación Digital', category: 'Informes y documentos', date: '2014-11-09' },
        { url: 'Recursos/La Red de Redes.php', title: 'La Red de Redes', category: 'Recursos educativos', date: '2013-05-25' },
        { url: 'Recursos/Seguridad y Privacidad.php', title: 'Seguridad y Privacidad', category: 'Recursos educativos', date: '2012-09-30' },
        { url: 'Recursos/Biodiversidad - Adaptación.php', title: 'Impactos en la biodiversidad', category: 'Informes y documentos', date: '2011-07-21' },
        { url: 'Recursos/Innovaciones Recientes.php', title: 'Innovaciones Recientes', category: 'Informes y documentos', date: '2010-03-14' }
    ];

    // Inicialización de variables para filtros
    let selectedCategories = new Set(); // Categorías seleccionadas
    let selectedDateFilter = 'all'; // Filtro de fecha seleccionado

    // Evento al escribir en el campo de búsqueda
    $searchInput.on('input', async function() {
        const searchTerm = $searchInput.val().toLowerCase().trim(); // Término de búsqueda ingresado
        const filteredPages = await filterPages(searchTerm); // Filtrar páginas según el término de búsqueda
        renderResults(filteredPages); // Renderizar los resultados filtrados
    });

    // Evento al cambiar los checkboxes de categorías
    $checkboxes.on('change', async function() {
        if ($(this).is(':checked')) {
            selectedCategories.add($(this).val()); // Añadir categoría seleccionada
        } else {
            selectedCategories.delete($(this).val()); // Eliminar categoría deseleccionada
        }
        const searchTerm = $searchInput.val().toLowerCase().trim(); // Término de búsqueda ingresado
        const filteredPages = await filterPages(searchTerm); // Filtrar páginas según el término de búsqueda y categorías seleccionadas
        renderResults(filteredPages); // Renderizar los resultados filtrados
    });

    // Evento al cambiar los radio buttons de filtros de fecha
    $dateFilters.on('change', async function() {
        selectedDateFilter = $('input[name="date-filter"]:checked').val(); // Actualizar el filtro de fecha seleccionado
        const searchTerm = $searchInput.val().toLowerCase().trim(); // Término de búsqueda ingresado
        const filteredPages = await filterPages(searchTerm); // Filtrar páginas según el término de búsqueda y filtro de fecha seleccionado
        renderResults(filteredPages); // Renderizar los resultados filtrados
    });

    // Evento para limpiar todos los filtros
    $clearFiltersButton.on('click', async function() {
        selectedCategories.clear(); // Limpiar categorías seleccionadas
        $checkboxes.prop('checked', false); // Deseleccionar todos los checkboxes
        selectedDateFilter = 'all'; // Resetear filtro de fecha a "Todo el tiempo"
        $('input[name="date-filter"][value="all"]').prop('checked', true); // Seleccionar radio button de "Todo el tiempo"
        const searchTerm = $searchInput.val().toLowerCase().trim(); // Término de búsqueda ingresado
        const filteredPages = await filterPages(searchTerm); // Filtrar páginas según el término de búsqueda sin filtros
        renderResults(filteredPages); // Renderizar los resultados filtrados
    });

    // Función para filtrar las páginas según los términos de búsqueda, categorías y fechas seleccionadas
    async function filterPages(searchTerm) {
        const currentYear = new Date().getFullYear(); // Año actual
        const filtered = [];
        for (const page of pages) {
            const pageContent = await fetchPageContent(page.url); // Obtener contenido de la página
            const pageTitle = pageContent.title.toLowerCase();
            const pageText = pageContent.text.toLowerCase();
            const pageDate = new Date(page.date);
            const matchesCategory = selectedCategories.size === 0 || selectedCategories.has(page.category); // Verificar coincidencia con categorías seleccionadas
            const matchesDate = selectedDateFilter === 'all' || 
                (selectedDateFilter === '1' && pageDate.getFullYear() === currentYear) ||
                (selectedDateFilter === '2' && pageDate >= new Date(currentYear - 2, 0, 1)) ||
                (selectedDateFilter === '5' && pageDate >= new Date(currentYear - 5, 0, 1)) ||
                (selectedDateFilter === '10' && pageDate >= new Date(currentYear - 10, 0, 1));
            if (pageTitle.includes(searchTerm) || pageText.includes(searchTerm)) { // Verificar coincidencia con el término de búsqueda
                if (matchesCategory && matchesDate) { // Incluir página si coincide con las categorías y la fecha seleccionada
                    filtered.push({ ...pageContent, ...page });
                }
            }
        }
        return filtered.sort((a, b) => new Date(b.date) - new Date(a.date)); // Ordenar los resultados por fecha
    }

    // Función para obtener el contenido de una página
    async function fetchPageContent(url) {
        try {
            const response = await fetch(url);
            const text = await response.text();
            const parser = new DOMParser();
            const doc = parser.parseFromString(text, 'text/html');
            const title = doc.querySelector('title').textContent; // Obtener título de la página
            const content = doc.body.textContent; // Obtener contenido de la página
            const dateMeta = doc.querySelector('meta[name="creation-date"]'); // Obtener fecha de creación de la página
            const date = dateMeta ? dateMeta.getAttribute('content') : '1970-01-01'; // Utilizar fecha predeterminada si no existe meta etiqueta
            return { title, text: content, date, url }; // Devolver los datos de la página
        } catch (error) {
            console.error('Error al obtener el contenido de la página:', error); // Manejo de errores
            return { title: '', text: '', date: '1970-01-01', url }; // Devolver valores predeterminados en caso de error
        }
    }

    // Función para renderizar los resultados en la lista
    function renderResults(results) {
        $resultsList.html(results.length > 0 ? results.map(item => 
            `<li class="animate__animated animate__headShake">
                <a href="${item.url}">${item.title}</a>
                <div class="date">${new Date(item.date).toLocaleDateString()}</div>
            </li>`
        ).join('') : '<li>No se encontraron resultados.</li>'); // Mostrar resultados o mensaje de "No se encontraron resultados"
    }
});
