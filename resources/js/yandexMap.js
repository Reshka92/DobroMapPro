document.addEventListener('DOMContentLoaded', function() {
    console.log('[YandexMap] DOM загружен, инициализация...');
    initMap();
});

async function initMap() {
    try {
        await ymaps3.ready;
        console.log('[YandexMap] Yandex Maps API v3 успешно готов!');

        const { YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapListener } = ymaps3;

        const mapContainer = document.getElementById('map');
        if (!mapContainer) {
            console.error('[YandexMap] Ошибка: Контейнер #map не найден в DOM!');
            return;
        }

        const map = new YMap(mapContainer, {
            location: {
                center: [33.5224, 44.6166],
                zoom: 10
            }
        });

        map.addChild(new YMapDefaultSchemeLayer());
        map.addChild(new YMapDefaultFeaturesLayer());

        const menu = document.getElementById('addMarkerMenu');

        // Слушатель событий карты
        const mapListener = new YMapListener({
            onContextMenu: (object, event) => {
                console.log('[YandexMap] ПКМ зафиксирован на карте!', event);

                if (event.domEvent) {
                    event.domEvent.preventDefault();
                }

                // Запоминаем географические координаты [lng, lat]
                window.currentClickCoords = event.coordinates;
                console.log('[YandexMap] Координаты точки:', window.currentClickCoords);

                // Показываем контекстное меню
                if (menu && event.domEvent) {
                    menu.style.left = event.domEvent.clientX + 'px';
                    menu.style.top = event.domEvent.clientY + 'px';
                    menu.classList.remove('hidden');
                } else {
                    console.warn('[YandexMap] Внимание: #addMarkerMenu не найден');
                }
            }
        });

        map.addChild(mapListener);
        console.log('[YandexMap] Карта и YMapListener успешно зарегистрированы');

    } catch (error) {
        console.error('[YandexMap] Критическая ошибка при загрузке карты:', error);
    }
}