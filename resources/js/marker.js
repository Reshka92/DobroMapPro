// Скрытие меню при левом клике мимо[cite: 3]
document.addEventListener('click', function() {
    const menu = document.getElementById('addMarkerMenu');
    if (menu) {
        menu.classList.add('hidden');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const addBtn = document.querySelector('#addMarkerMenu a');
    const modal = document.getElementById('createMarkerModal');
    const closeBtn = document.getElementById('closeModalBtn');
    const cancelBtn = document.getElementById('cancelModalBtn');
    const contextMenu = document.getElementById('addMarkerMenu');

    if (addBtn) {
        // Добавлен пропущенный addEventListener
        addBtn.addEventListener('click', function(e) {
            e.preventDefault();

            if (contextMenu) contextMenu.classList.add('hidden');

            const coords = window.currentClickCoords;
            if (coords) {
                const lngInput = document.getElementById('marker_lng');
                const latInput = document.getElementById('marker_lat');

                if (lngInput) lngInput.value = coords[0];
                if (latInput) latInput.value = coords[1];
            }

            if (modal) modal.classList.remove('hidden');
        });
    }

    function closeModal() {
        if (modal) modal.classList.add('hidden');
    }

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (cancelBtn) cancelBtn.addEventListener('click', closeModal);
});