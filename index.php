<?php 
session_start();
include_once "./read.php";
$sql = "SELECT name FROM Categories WHERE categories_id = 2";
$users = fetchDataFromDatabase($sql);

// Выводим информацию о каждом пользователе
foreach ($users as $user) {
    echo  $user['name'] . "<br>";
}
?>
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
    <div class="header">
      <div class="logo"><a href="index.php">
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
              <li><a href="search-by-filter.html?category=desktop&product=Игровые">Игровые</a></li>
              <li><a href="search-by-filter.html?category=desktop&product=Ноутбуки">Ноутбуки</a></li>
            </ul>
          </li>
          <li>
            Смартфоны и гаджеты
            <ul>
              <li><a href="search-by-filter.html?category=cpu&product=Процессоры">Процессоры</a></li>
              <li><a href="search-by-filter.html?category=gpu&product=Видеокарты">Видеокарты</a></li>
            </ul>
          </li>
          <li>
            Манга
            <ul>
              <li><a href="search-by-filter.html?category=cpu&product=Процессоры">Процессоры</a></li>
              <li><a href="search-by-filter.html?category=gpu&product=Видеокарты">Видеокарты</a></li>
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
  <main>
    <div class="main">
      <div class="menu">
        <div class="second-menu">          
        </div>
      </div>
      <div>
        <h1>Манга</h1>
        <div class="product-group">
          <ul class="products-group-test">
            
          </ul>
        </div>
        <h1>Смартфоны и гаджеты</h1>
        <div class="product-group2">
          <ul class="products-group-popular-product">
          
          </ul>
        </div>
        <h1><?php
       foreach ($users as $user) {
        echo  $user['name'] . "<br>";
    }
        ?></h1>
        <div class="product-group3">
          <ul class="products-clearfix">
         
          </ul>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="footer">
      <div class="about_project">
        <h2>О проекте</h2>
        <ul class="link-about">
          <li>Над данным проектом работало 300 человеко-часов донаты принимаем на карту: 2200 1523 3096</li>
          <li><a href="https://tusur.ru/ru/o-tusure/struktura-i-organy-upravleniya/departament-obrazovaniya/fakultety-i-kafedry/fakultet-vychislitelnyh-sistem">Связаться с нами можно через деканат КСУП</a></li>
          <li></li>
        </ul>
      </div>
    </div>
  </footer>
  <script>
    function openModal(modalId) {
      var modal = document.getElementById(modalId);
      modal.classList.add('active');
    }
    
    function closeModal(modal) {
      var parentModal = document.getElementById(modal);
      parentModal.classList.remove('active');
    }
    
    function closeCategoryPopup() {
      var popup = document.getElementById("popup-modal-compare");
      if (popup.style.display === "none" || popup.style.display === "") {
        popup.style.display = "block";
      } else {
        popup.style.display = "none";
      }
    }
    // Функция для увеличения счетчика
    function increaseCounter(type) {
      localStorage.removeItem(type+ '-count', count);
      // Получаем элемент счетчика по его id
      var counterElement = document.getElementById(type + '-count');
      // Получаем текущее значение счетчика
      var count = parseInt(counterElement.textContent);
      // Увеличиваем значение на 1
      count++;
      // Обновляем значение счетчика на странице
      counterElement.textContent = count;
      // Сохраняем значение в localStorage
      localStorage.setItem(type + '-count', count);
    }
     // Функция для загрузки и использования шаблона карточки товара
     function loadAndUseTemplate1() {
      fetch('sample.html')
          .then(response => response.text())
          .then(html => {
              const parser = new DOMParser();
              const templateDoc = parser.parseFromString(html, 'text/html');
              const template = templateDoc.querySelector('template');
              const productGroup = document.querySelector('.products-group-test');
              const productClearfix = document.querySelector('.product-clearfix');

              let nextNumber=1;
              // Клонируем шаблон и добавляем карточки товаров на страницу
              for (let i = 0; i <5; i++) { // пример: добавим 5 карточек
                  const clone = document.importNode(template.content, true);
                  const text = clone.querySelector('.product');
                  const elementId = clone.querySelector('.product-wrapper');
                  elementId.id = `product-card ${nextNumber}`;
                  text.textContent = `Товар ${nextNumber}`;
                  
                  nextNumber++;
                  productGroup.appendChild(clone);
              }
          })
    .catch(error => console.error('Ошибка загрузки шаблона:', error));
  }
  

  // Загружаем и используем шаблон при загрузке страницы
  document.addEventListener('DOMContentLoaded', loadAndUseTemplate1);

  function loadAndUseTemplate2() {
    fetch('sample.html')
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const templateDoc = parser.parseFromString(html, 'text/html');
            const template = templateDoc.querySelector('template');
            const productGroup = document.querySelector('.products-group-popular-product');
            const productClearfix = document.querySelector('.product-clearfix');

            let nextNumber=1;
            // Клонируем шаблон и добавляем карточки товаров на страницу
            for (let i = 0; i <6; i++) { // пример: добавим 5 карточек
                const clone = document.importNode(template.content, true);
                const text = clone.querySelector('.product');
                const elementId = clone.querySelector('.product-wrapper');
                elementId.id = `product-card ${nextNumber}`;
                text.textContent = `Электроника ${nextNumber}`;
                
                nextNumber++;
                productGroup.appendChild(clone);
            }
        })
  .catch(error => console.error('Ошибка загрузки шаблона:', error));
}


// Загружаем и используем шаблон при загрузке страницы
document.addEventListener('DOMContentLoaded', loadAndUseTemplate2);


function loadAndUseTemplate3() {
  fetch('sample.html')
      .then(response => response.text())
      .then(html => {
          const parser = new DOMParser();
          const templateDoc = parser.parseFromString(html, 'text/html');
          const template = templateDoc.querySelector('template');
          const productGroup = document.querySelector('.products-clearfix');
          const productClearfix = document.querySelector('.product-clearfix');
          let nextNumber=1;
          // Клонируем шаблон и добавляем карточки товаров на страницу
          for (let i = 0; i <6; i++) { // добавим 6 карточек
              const clone = document.importNode(template.content, true);
              productGroup.appendChild(clone);
          }
      })
.catch(error => console.error('Ошибка загрузки шаблона:', error));
}


// Загружаем и используем шаблон при загрузке страницы
document.addEventListener('DOMContentLoaded', loadAndUseTemplate3);



document.querySelectorAll('.product-link-desktop, .product-link-smart-phone, .product-link-smart-table, .product-link-cpu, .product-link-gpu').forEach(function(link) {
  link.addEventListener('click', function(event) {
      event.preventDefault(); // Отменяем стандартное действие ссылки

      var category = this.getAttribute('data-category'); // Получаем значение атрибута data-category
      localStorage.setItem('selectedProduct', category); // Сохраняем выбранную категорию в localStorage
      window.location.href = 'search-by-filter.html'; // Перенаправляем пользователя на другую страницу
  });
});
</script>    
</body>
</html>
