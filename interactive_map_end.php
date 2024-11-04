<?php
/*
Template Name: end Интерактивная карта
Template Post Type: page
*/
?>

            </div>
        </div>
    </main>




    <script>
        // Пример работы с событием "щелчка" по области
        document.querySelectorAll('.region').forEach(function (region) {
            region.addEventListener('mouseover', function () {
                console.log('Навели на область: ' + this.id);
            });

            region.addEventListener('click', function () {
                // Добавляем или убираем класс active при клике
                this.classList.toggle('active');
            });
        });
    </script>

    <script>
        // Маппинг для названий районов без цифр
        const regionNames = {
            'region-id-1': 'Архаринский',
            'region-id-2': 'Белогорский',
            'region-id-3': 'Благовещенский',
            'region-id-4': 'Бурейский',
            'region-id-5': 'Завитинский',
            'region-id-6': 'Зейский',
            'region-id-7': 'Ивановский',
            'region-id-8': 'Константиновский',
            'region-id-9': 'Магдагачинский',
            'region-id-10': 'Мазановский',
            'region-id-11': 'Михайловский',
            'region-id-12': 'Октябрьский',
            'region-id-13': 'Ромненский',
            'region-id-14': 'Свободненский',
            'region-id-15': 'Селемджинский',
            'region-id-16': 'Серышевский',
            'region-id-17': 'Сковородинский',
            'region-id-18': 'Тамбовский',
            'region-id-19': 'Тындинский',
            'region-id-20': 'Шимановский'
        };

        const elements = [
            { id: 'g-zeya', regionId: 'region-id-6', popupContent: 'Popup content for g-zeya', totalPlaces: <?= ([cpc id=14] + [cpc id=23])?>, freePlaces: 138 },
            { id: 'g-tynda', regionId: 'region-id-19', popupContent: 'Popup content for g-tynda', totalPlaces: <?= ([cpc id=15] + [cpc id=36])?>, freePlaces: 138 },
            { id: 'g-skovorodino', regionId: 'region-id-17', popupContent: 'Popup content for g-skovorodino', totalPlaces: <?= ([cpc id=34])?>, freePlaces: 138 },
            { id: 'g-magdagachi', regionId: 'region-id-9', popupContent: 'Popup content for g-magdagachi', totalPlaces: <?= ([cpc id=26])?>, freePlaces: 138 },
            { id: 'g-shimanovsk', regionId: 'region-id-20', popupContent: 'Popup content for g-shimanovsk', totalPlaces: <?= ([cpc id=13] + [cpc id=37])?>, freePlaces: 138 },
            { id: 'g-mazan', regionId: 'region-id-10', popupContent: 'Popup content for g-mazan', totalPlaces: <?= ([cpc id=27])?>, freePlaces: 138 },
            { id: 'g-selem', regionId: 'region-id-15', popupContent: 'Popup content for g-selem', totalPlaces: <?= ([cpc id=32])?>, freePlaces: 138 },
            { id: 'g-svobodny', regionId: 'region-id-14', popupContent: 'Popup content for g-svobodny', totalPlaces: <?= ([cpc id=10] + [cpc id=31])?>, freePlaces: 55 },
            { id: 'g-seryshevo', regionId: 'region-id-16', popupContent: 'Popup content for g-seryshevo', totalPlaces: <?= ([cpc id=33])?>, freePlaces: 55 },
            { id: 'g-romny', regionId: 'region-id-13', popupContent: 'Popup content for g-romny', totalPlaces: <?= ([cpc id=30])?>, freePlaces: 55 },
            { id: 'g-belogorsk', regionId: 'region-id-2', popupContent: 'Popup content for g-belogorsk', totalPlaces: <?= ([cpc id=11] + [cpc id=19])?>, freePlaces: 55 },
            { id: 'g-blag', regionId: 'region-id-3', popupContent: 'Popup content for g-blag', totalPlaces: <?= ([cpc id=9] + [cpc id=20])?>, freePlaces: 55 },
            { id: 'g-ivan', regionId: 'region-id-7', popupContent: 'Popup content for g-ivan', totalPlaces: <?= ([cpc id=24])?>, freePlaces: 55 },
            { id: 'g-october', regionId: 'region-id-12', popupContent: 'Popup content for g-october', totalPlaces: <?= ([cpc id=29])?>, freePlaces: 55 },
            { id: 'g-tambovka', regionId: 'region-id-18', popupContent: 'Popup content for g-tambovka', totalPlaces: <?= ([cpc id=35])?>, freePlaces: 55 },
            { id: 'g-konstantin', regionId: 'region-id-8', popupContent: 'Popup content for g-konstantin', totalPlaces: <?= ([cpc id=25])?>, freePlaces: 55 },
            { id: 'g-mikhail', regionId: 'region-id-11', popupContent: 'Popup content for g-mikhail', totalPlaces: <?= ([cpc id=28])?>, freePlaces: 55 },
            { id: 'g-zavitinsk', regionId: 'region-id-5', popupContent: 'Popup content for g-zavitinsk', totalPlaces: <?= ([cpc id=22])?>, freePlaces: 55 },
            { id: 'g-arhara', regionId: 'region-id-1', popupContent: 'Popup content for g-arhara', totalPlaces: <?= ([cpc id=18])?>, freePlaces: 7 },
            { id: 'g-bureya', regionId: 'region-id-4', popupContent: 'Popup content for g-bureya', totalPlaces: <?= ([cpc id=21])?>, freePlaces: 72 }
        ];

        // Глобальная переменная для отслеживания текущего открытого попапа
        let currentPopup = null;

        elements.forEach((element) => {
            const regionElement = document.getElementById(element.id);

            regionElement.addEventListener('click', function (event) {
                event.stopPropagation(); // Останавливаем распространение события, чтобы оно не вызвало закрытие нового попапа сразу после открытия

                // Закрытие текущего попапа при новом клике
                if (currentPopup) {
                    currentPopup.remove();
                    currentPopup = null;
                }

                // Создание нового попапа
                const popup = document.createElement('div');
                popup.className = 'popup';

                // Вставляем название района на основе regionId
                const regionName = regionNames[element.regionId] || 'Название не найдено';

                popup.innerHTML = `
            <div class="wrapper-pop-up">
                <h3>${regionName}</h3> <!-- Здесь отображаем название района -->
                <p>${element.totalPlaces} площадок</p>
                <p>${element.freePlaces} свободных мест</p>
                <button href="#" class="close-btnn">X</button>
                <a href="<?php echo get_permalink(2943, false)?>"><button href="<?php echo get_permalink(2943, false)?>" class="btn-pop-up-inner">К списку</button></a>
                
                

            </div>
        `;

                // Получаем координаты клика и размеры окна
                const clickX = event.clientX;
                const clickY = event.clientY;
                const popupWidth = 250;  // Предполагаемая ширина попапа
                const popupHeight = 150; // Предполагаемая высота попапа

                // Получаем ширину и высоту окна браузера
                const windowWidth = window.innerWidth;
                const windowHeight = window.innerHeight;

                // Корректируем позицию попапа, если он выходит за пределы окна
                let popupX = clickX;
                let popupY = clickY;

                // Если попап выходит за правый край, сдвигаем его влево
                if ((popupX + popupWidth) > windowWidth) {
                    popupX = windowWidth - popupWidth - 10; // Минус небольшой отступ
                }

                // Если попап выходит за нижний край, сдвигаем его вверх
                if ((popupY + popupHeight) > windowHeight) {
                    popupY = windowHeight - popupHeight - 10; // Минус небольшой отступ
                }

                // Устанавливаем позицию попапа в соответствии с координатами
                popup.style.top = `${popupY}px`;
                popup.style.left = `${popupX}px`;

                // Добавляем обработчик для закрытия попапа по нажатию на кнопку "X"
                popup.querySelector('.close-btnn').addEventListener('click', function () {
                    popup.remove();
                    currentPopup = null;
                });

                // Добавляем попап на страницу
                document.body.appendChild(popup);

                // Устанавливаем текущий попап как активный
                currentPopup = popup;

                // Закрытие попапа при клике вне его области
                document.addEventListener('click', function onClickOutside(event) {
                    if (currentPopup && !popup.contains(event.target) && !regionElement.contains(event.target)) {
                        popup.remove();
                        currentPopup = null;
                        document.removeEventListener('click', onClickOutside); // Убираем слушатель после закрытия
                    }
                }, { once: true });
            });
        });

        // Обработка эффекта наведения (bold) на регионы
        elements.forEach((element) => {
            const regionElement = document.getElementById(element.id);

            regionElement.addEventListener('mouseover', function () {
                document.getElementById(element.regionId).style.fontWeight = 'bold';
            });

            regionElement.addEventListener('mouseout', function () {
                document.getElementById(element.regionId).style.fontWeight = '';
            });
        });




    </script>

<?php get_footer(); ?>