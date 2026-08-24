@extends('layouts.main')
@section('content')
<div>
    <!-- Карта (убрали -z-10, чтобы она принимала клики мыши) -->
    <div id="map" class="fixed inset-0 w-screen h-screen"></div>

    <!-- Кнопка добавить дело -->
    <div id="addMarkerMenu" class="hidden fixed w-48 bg-white rounded-xl shadow-xl py-2 border border-gray-100 z-50">
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Добавить дело</a>
    </div>

    <!-- Добавить описание дела -->
    <div id="createMarkerModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-gray-900/50 backdrop-blur-sm p-4">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 border border-gray-100 relative">
            
            <!-- Заголовок и кнопка закрытия -->
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-gray-800">Добавить доброе дело</h3>
                <button type="button" id="closeModalBtn" class="text-gray-400 hover:text-gray-600 text-2xl font-bold leading-none">&times;</button>
            </div>

            <!-- Форма -->
            <form id="createMarkerForm" action="#" method="POST" class="space-y-4">
                @csrf
                
                <!-- Скрытые поля для передачи координат [lat, lng] в Laravel -->
                <input type="hidden" id="marker_lat" name="latitude">
                <input type="hidden" id="marker_lng" name="longitude">

                <!-- Название дела -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Название дела</label>
                    <input type="text" id="title" name="title" required
                        placeholder="Например: Уборка парка Победы"
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm transition">
                </div>

                <!-- Описание дела -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Опишите дело</label>
                    <textarea id="description" name="description" rows="3" required
                        placeholder="Расскажите, что нужно сделать и какой инвентарь брать..."
                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm resize-none transition"></textarea>
                </div>

                <!-- Кол-во волонтеров и Дата/Время -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label for="volunteers" class="block text-sm font-medium text-gray-700 mb-1">Сколько волонтеров</label>
                        <input type="number" id="volunteers" name="volunteers_needed" min="1" value="1" required
                            class="w-full px-3 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                    </div>

                    <div>
                        <label for="event_date" class="block text-sm font-medium text-gray-700 mb-1">Дата и время</label>
                        <input type="datetime-local" id="event_date" name="event_date" required
                            class="w-full px-3 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                    </div>
                </div>

                <!-- Кнопки действий -->
                <div class="flex justify-end gap-3 pt-3">
                    <button type="button" id="cancelModalBtn"
                        class="px-4 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-100 rounded-xl transition">
                        Отмена
                    </button>
                    <button type="submit"
                        class="px-5 py-2.5 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-xl shadow-md shadow-blue-500/20 transition">
                        Сохранить дело
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection