<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <header>
        <header>
            <div class="header">
              <div class="logo"><a href="index.html">
                YEV
              </a>
              <button class="catalog-product"  onclick="closeCategoryPopup()">Каталог товара</button>
              </div>
              <div class="search-container">
                <input type="text" placeholder="Поиск товара..." class="search-box" id="searchBox">
                <button class="search-button" onclick="search()">Поиск</button>
              </div>
              <nav class="menu-header">
                <ul class="list-interface">
                  <li><button class="header-button-compare" id="compare-btn" onclick="openModal('modal-compare')">Сравнение<span class="count-compare" id="compare-count"> 0 </span></button></li>
                  <li><button class="header-button-basket" id="basket-btn">Корзина<span class="count-basket" id="basket-count"> 0 </span></button></li>
                  <li><button onclick="openModal('modal')" class="header-button">Вход/Регистрация</button></li>
                </ul>
              </nav>
            </div>
            <div id="basket" class="modal-basket">
        
            </div>
            <div id="popup-modal-compare" class="popup-modal-compare">
              <div class="popup-compare-content">
                <button class="close-popup" onclick="closeCategoryPopup()">&times;</button>
                <h3>Выберите категрию товара</h3>
                <ul>
                  <li>
                    Ноутбуки
                    <ul>
                      <li><a href="search-by-filter.html" class="product-link-desktop">Игровые</a></li>
                      <li><a href="search-by-filter.html" class="product-link-desktop">Ноутбуки</a></li>
                    </ul>
                  </li>
                  <li>
                    Смартфоны и гаджеты
                    <ul>
                      <li><a href="search-by-filter.html" class="product-link-smart-phone">Смартфоны</a></li>
                      <li><a href="search-by-filter.html" class="product-link-smart-table">Планшеты</a></li>
                    </ul>
                  </li>
                  <li>
                    Комплектующие для ПК
                    <ul>
                      <li><a href="search-by-filter.html" class="product-link-cpu">Процессоры</a></li>
                      <li><a href="search-by-filter.html" class="product-link-gpu">Видеокарты</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div id="modal-compare" class="modal-compare">
              <h3>Сравнение товара</h3>
              <div class="area-compare">
                <div class="area-compare-product">
        
                </div>
                <div class="area-compare-product-characteristics">
        
                </div>
              </div>
            </div>
            <div id="modal" class="modal">
              <h3>Вход в систему</h3>
                 <form  method="post" action="src/scripts/php/login.php">                                 
                 <input name="mail" placeholder="Почта" id="input-mail1" required class="rounded-input"/>
                 <input name="password" placeholder="Пароль" id="input-password1" required class="rounded-input"/>
                 <p>
                     <button type="submit" class="rounded-button">Войти</button>
                     <button type="button"class="rounded-button" onclick="closeModal('modal')">Закрыть</button>
                 </p>
                 </form>
                 <p>
                      <a href="#registrationModal" class="rounded-button" onclick="openModal('registrationModal')">Регистрация</a>
                 </p>
         </div>
         <div id="registrationModal" class="modal-registration">
             <h3>Регистрация</h3>
             <form  method="post" action="src/scripts/php/login_signup_controller.php">
                 <p><input name="full_name" type="text" placeholder="ФИО" id="input-fullname" class="rounded-inp"/></p>
                 <p>
                     <input name="mail" type="text" placeholder="Почта" id="input-mail" required class="rounded-input"/>
                     <input name="password" placeholder="Пароль" id="input-password" required class="rounded-input" type="password"/>
                 </p>
                 <p>
                     <input name="phone" placeholder="Телефон" id="input-phone" class="rounded-input"/>
                     <select name="type_user" title="list" type="text"placeholder="Тип пользователя" id="type_user" class="rounded-input">
                         <option value="Пользователь">Пользователь</option>
                         <option value="Персонал">Персонал</option>
                         <option value="Администратор сайта">Администратор сайта</option>
                     </select>
                       
                 </p>
                 <p><input name="adress" placeholder="Адрес" id="input" class="rounded-inp"/></p>
                <p>
                     <button type="submit" class="rounded-button">Зарегистрироваться</button>
                     <button type="reset" class="rounded-button">Очистить</button>
                     <input type="button" value="Назад" class="rounded-button" onclick="closeModal('registrationModal')">
                 </p>
             </form>
             </div>
         </div>       
    </header>
    <main class="main-filter">
        <h1 id="product-title"></h1>
        <div>
          <div class="zone-filter">

          </div>
          <div class="zone-card-product">

          </div>
        </div>
    </main>
    <footer>

    </footer>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Получаем параметры из URL
        const urlParams = new URLSearchParams(window.location.search);
        const category = urlParams.get('category');
        const product = urlParams.get('product');

        // Устанавливаем текст из ссылки в качестве заголовка на странице
        document.getElementById('product-title').innerText = product;

        // Загружаем соответствующий шаблон в зависимости от категории
        fetchTemplate(category);
    });

    function fetchTemplate(category) {
        let templateName;
        switch(category) {
            case 'desktop':
                templateName = 'desktop-template.html';
                break;
            case 'smart-phone':
                templateName = 'smart-phone-template.html';
                break;
            case 'smart-table':
                templateName = 'smart-table-template.html';
                break;
            case 'cpu':
                templateName = 'cpu-template.html';
                break;
            case 'gpu':
                templateName = 'gpu-template.html';
                break;
            default:
                templateName = 'default-template.html';
        }

        fetch(templateName)
            .then(response => response.text())
            .then(html => {
                document.getElementById('zone-filter').innerHTML = html;
            })
            .catch(error => console.error('Ошибка загрузки шаблона:', error));
    }
        document.addEventListener('DOMContentLoaded', function() {
            // Получаем сохраненное значение счетчика и отображаем его на странице
            var basketCount = localStorage.getItem('basket-count');
            if(basketCount) {
                document.getElementById('basket-count').textContent = basketCount;
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Получаем сохраненное значение счетчика и отображаем его на странице
            var compareCount = localStorage.getItem('compare-count');
            if(compareCount) {
                document.getElementById('compare-count').textContent = compareCount;
            }
        });

        function resetFilters() {
            var selects = document.querySelectorAll('.filter-template select');
            selects.forEach(select => {
                select.selectedIndex = 0; // Устанавливаем первый вариант выбранным
            });
      }
      function closeCategoryPopup() {
        var popup = document.getElementById("popup-modal-compare");
        if (popup.style.display === "none" || popup.style.display === "") {
          popup.style.display = "block";
        } else {
          popup.style.display = "none";
        }
      }
    </script>
</body>
</html>