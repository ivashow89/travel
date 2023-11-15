<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <!-- Подключаем bootstrap локально -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
   <!-- Здесь добавляем ссылку на собственные стили -->
   <!-- Собственные стили -->
   <link rel="stylesheet" href="css/style.css">
    
    <!-- Создаем блок для области заголовка -->


  </head>

<!-- Используем стиль body-top по умолчанию для всего документа -->
<body class="body-top">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                    <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="close">
                         <span aria-hidden="true">&times</span>
                    </button>
                </div>
                <div class="modal-body" style="max-width: 600px;">
                    <!-- Начало формы -->
                    <form method="get" action="#" id="orderForm">
                        <div class="tour">
                            <label class="label" for="number">Выберите количество участников</label>
                            <select id="inp3">
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <label class="label" for="name">Выберите тур</label>
                            <select id="inp1">
                                <option value="Крым" selected>
                                    Крым
                                </option>
                                <option value="Кавказ" selected>
                                    Кавказ
                                </option>
                                <option value="Алтай" selected>
                                    Алтай
                                </option>
                            </select>
                        </div>
                        <div class="tour">
                            <label class="label" fot id="data">Выберите дату начала:</label>
                            <input type="date" id="inp2">
                        </div>    
                        <div class="tour">
                            
                        </div>
                        <div class="tour">
                            <label class="label" for="email">Ваш E-mail</label>
                            <input type="email" id="inp4" class="input-xlarge" style="width: 350px;" required="required">
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary" id="submit">Отправить</button>
                    </form>    
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Создаем блок для области заголовка -->
    <header class="container-fluid">
            <!-- Внутри горизонтальной области определяем первую колонку шириной 3/12 -->
            <div class="col-3">
                <!-- Внутри выводим логотип -->
                <img id="logo" src="img/logo.jpg">
                <!-- Завершаем первый столбец -->
            </div>
            <!-- Внутри горизонатьной области определяем вторую колонку, шириной 9/12 -->
            <div class="col-9">
                <!-- Внутри водим название -->
                <h1>Путешествуй с нами!</h1>
                <!-- Завершаем второй столбец -->
            </div>
            <!-- Завершаем строку -->
        </div>
        <!-- Завершаем описание области заголовка -->
    </header>
         <!-- Обертка для меню -->
         <div id="menu">
            <!-- Начало flex-menu -->
            <nav class="nav nav-pills flex-column flex-sm-row">
                <!-- Ссылка на главную страницу -->
                <a class="flex-sm-fill text-sm-center nav-link" href="index.html">Главная</a>
                <!-- Ссылка на страницу с информаией о турах -->
                <a class="flex-sm-fill text-sm-center nav-link" href="turs.html">Наши туры</a>
                <!-- Ссылка на страницу с контактами -->
                <a class="flex-sm-fill text-sm-center nav-link" href="contacts.html">О нас</a>
            </nav>
        </div>

<!-- Начало всего блока с содержимым -->
<main class="flex">
    <div class="row">
        <div class="col">
            Наши туры
        </div>
    </div>

        <div class="row">
            <div class="col">
                <div class="tour">
                    <img src="img/crimea.jpg" class="tour_img">
                    <p>Эта прекрасная возможность отдохнуть всей семьей</p>
                    <!-- Код компонента кнопки вызова модального окна bootstrap со своим значением -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Расчитать стоимость
                    </button>
                </div>
            </div>
        </div>
     
    <div class="row">               
        <div class="col">
            <div class="tour">
                <img src="img/kavkaz.jpg" class="tour_img">
                <p>Море, солнце и горы!</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Рассчитать стоимость
                </button>
            </div>
        </div>
    </div>
    <div class="row">               
        <div class="col">
            <div class="tour">
                <img src="img/altay.jpg" class="tour_img">
                <p>Незабываемые впечатления!</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Рассчитать стоимость
                </button>
            </div>
        </div>
    </div>
</main>    

     
        <!-- Начало блока "подвала" сраницы -->

    <footer class="footer">
    <footer class="footer">    
        <div class="row">
            <div class="col">
                Это сайт, предназначенный для обучения
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Подключаем библиотки JavaScript локально -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- Подключение JS файла bootstrap 5 -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script>
    $('#orderForm').on('submit', function ()
    {
        // Получаем название тура
        let tour = $("#inp1").val();
        // Получаем дату
        let date = new Date($("#inp2").val());
        // Получаем месяц из даты
        let month = date.getMonth();
        // Получаем количество участников тура и преобразуем его в число
        let kol = $("#inp3").val();
        kol = Number(kol);
        // Получаем email
        let email = $("inp4").val();
        // Выполняем некоторый условный расчет, например, если тур в Крым, то в опредеенные месяцы цена выше, а в остальные - ниже
        let stoim = 0;
        if (tour == 'Крым')
        {
            if((month == 5)||(month == 6)||(month == 7)||(month == 8))
            {stoim = kol*500;}
            else {stoim = kol*300;}
        }
        if (tour == 'Кавказ')
        {
            if((month == 12)||(month == 1)||(month == 2)||(month == 5)||(month == 6)||(month == 7)||(month == 8))
            {stoim = kol*300;}
            else {stoim = kol*250;}
        }
        if (tour == 'Алтай')
        {
            {stoim = kol*1000;}
        }
        // Выводим полученный результат
        alert ('Примерная стоимость вашего тура на '+ kol + ' человек составит '+ stoim +' y.e. Мы свяжемся с ВАМИ!!');
    }
    );
</script>
</body>
</html>
