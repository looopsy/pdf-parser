<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <main class="container col-12 col-sm-8 col-md-6">
    <h4 class="text-start">Конструктор формирования Карточки образцов подписей</h4>
    <form method='post' action='generate.php' class="form">
      <div class="inputs-group">
        <label for="test-select" class="input-block__label">
          <p class="input-block__text"> Выберите тип организации</p>
          <select name='type' class="input-block__input form-control form-select" id="option">
            <option selected></option>
            <option value="КУ/РБС">КУ/РБС</option>
            <option value="АУ/БУ/ЮЛ">АУ/БУ/ЮЛ</option>
            <option value="Обособленное подразделение – филиал АУ/БУ">Обособленное подразделение – филиал АУ/БУ</option>
            <option value="ГРБС">ГРБС</option>
          </select>
        </label>
        <label for="test1" class="input-block__label">
          <p class="input-block__text"> Номер карточки образцовой подписей: (!!!NOMER) </p>
          <input name="NOMER" required class="input-block__input form-control" type="text" id="test0">
        </label>
        <label for="test2" class="input-block__label">
          <p class="input-block__text">Дата составления документа:(!!!DATE)</p>
          <input name="DATE" class="input-block__input form-control" type="date" id="test2">
        </label>
        <label for="test3" class="input-block__label">
          <p class="input-block__text">Код организации по Сводному реестру (!!!REESTER_CODE) </p>
          <input name="REESTER_CODE" class="input-block__input form-control" type="text" maxlength="8" id="input-field">
        </label>
        <label for="test4" class="input-block__label">
          <p class="input-block__text">Код вышестоящей организации по Сводному реестру (!!!UPPED_CODE)</p>
          <input name="UPPER_CODE" class="input-block__input form-control" type="text" maxlength="8" id="test4">
        </label>
      </div>
      <h1 style="font-size:18px">Адрес организации</h1>
      <div class="inputs-group">
        <label for="index" class="input-block__label">
          <p class="input-block__text"> Индекс: </p>
          <input class="input-block__input form-control" type="tel" id="index" name="test">
        </label>
        <label for="subject" class="input-block__label">
          <p class="input-block__text"> Субъект РФ: </p>
          <select id="subject" class="input-block__input form-control form-select">
            <option selected></option>
            <option value="1">Республика Адыгея</option>
            <option value="2">Республика Алтай</option>
            <option value="3">Республика Башкортостан</option>
            <option value="4">Республика Бурятия</option>
            <option value="5">Республика Дагестан</option>
            <option value="6">Донецкая Народная Республика</option>
            <option value="7">Республика Ингушетия</option>
            <option value="8">Кабардино-Балкарская Республика</option>
            <option value="9">Республика Карелия</option>
            <option value="10">Республика Коми</option>
            <option value="11">Республика Крым</option>
            <option value="12">Луганская Народная Республика</option>
            <option value="13">Республика Марий Эл</option>
            <option value="14">Республика Мордовия</option>
            <option value="15">Республика Саха(Якутия)</option>
            <option value="16">Республика Северная Осетия-Алания</option>
            <option value="17">Республика Татарстан(Татарстан)</option>
            <option value="18">Республика Тыва</option>
            <option value="19">Удмуртская Республика</option>
            <option value="20">Республика Хакасия</option>
            <option value="21">Чеченская Республика</option>
            <option value="22">Чувашская Республика-Чувашия</option>
            <option value="23">Алтайский Край</option>
            <option value="24">Забайкальский Край</option>
            <option value="25">Камчатский Край</option>
            <option value="26">Краснодарский Край</option>
            <option value="27">Красноярский Край</option>
            <option value="28">Пермский Край</option>
            <option value="29">Приморский Край</option>
            <option value="30">Ставропольский Край</option>
            <option value="31">Хабаровский Край</option>
            <option value="32">Амурская область</option>
            <option value="33">Архангельская область</option>
            <option value="34">Астраханская область</option>
            <option value="35">Белгородская область</option>
            <option value="36">Брянская область</option>
            <option value="37">Владимирская область</option>
            <option value="38">Волгоградская область</option>
            <option value="39">Вологодская область</option>
            <option value="40">Воронежская область</option>
            <option value="41">Запорожская область</option>
            <option value="42">Ивановская область</option>
            <option value="43">Иркутская область</option>
            <option value="44">Калининградская область</option>
            <option value="45">Калужская область</option>
            <option value="46">Кемеровская область</option>
            <option value="47">Кировская область</option>
            <option value="48">Костромская область</option>
            <option value="49">Курганская область</option>
            <option value="50">Курская область</option>
            <option value="51">Ленинградская область</option>
            <option value="52">Липецкая область</option>
            <option value="53">Магаданская область</option>
            <option value="54">Московская область</option>
            <option value="55">Мурманская область</option>
            <option value="56">Нижегородская область</option>
            <option value="57">Новгородская область</option>
            <option value="58">Новосибирская область</option>
            <option value="59">Омская область</option>
            <option value="60">Оренбургская область</option>
            <option value="61">Орловская область</option>
            <option value="62">Пензенская область</option>
            <option value="63">Псковская область</option>
            <option value="64">Ростовская область</option>
            <option value="65">Рязанская область</option>
            <option value="66">Самарская область</option>
            <option value="67">Саратовская область</option>
            <option value="68">Сахалинская область</option>
            <option value="69">Свердловская область</option>
            <option value="70">Смоленская область</option>
            <option value="71">Тамбовская область</option>
            <option value="72">Тверская область</option>
            <option value="73">Томская область</option>
            <option value="74">Тульская область</option>
            <option value="75">Тюменская область</option>
            <option value="76">Ульяновская область</option>
            <option value="77">Херсонская область</option>
            <option value="78">Челябинская область</option>
            <option value="79">Ярославская область</option>
            <option value="80">Москва</option>
            <option value="81">Санкт-Петербург</option>
            <option value="82">Севастополь</option>
            <option value="83">Еврейская автономная область</option>
            <option value="84">Ненецкий автономный округ</option>
            <option value="85">Ханты-Мансийский автономный округ - Югра</option>
            <option value="86">Чукотский автономный округ</option>
            <option value="87">Ямало-Ненецкий автономный округ</option>



          </select>
        </label>
        <label for="place" class="input-block__label">
          <p class="input-block__text">Населенный пункт:</p>
          <input class="input-block__input form-control" placeholder="город Владикавказ, село Гизель..." type="text"
            id="place" name="test">
        </label>
        <label for="street" class="input-block__label">
          <p class="input-block__text">Улица:</p>
          <input class="input-block__input form-control" placeholder="проспект Мира, улица Ленина..." type="text"
            id="street" name="test">
        </label>
        <div class="twice-row">
          <label for="house" class="input-block__label">
            <p class="input-block__text">Дом:</p>
            <input class="input-block__input form-control" type="tel" id="house" name="test">
          </label>
          <label for="block" class="input-block__label">
            <p class="input-block__text">Корпус:</p>
            <input class="input-block__input form-control" type="tel" id="block" name="test">
          </label>
        </div>
        <label for="type" class="special-row">
          <p class="input-block__text">Помещение:</p>
          <select id="type" class="input-block__input form-control form-select">
            <option selected></option>
            <option value="1">Кабинет</option>
            <option value="2">Офис</option>
            <option value="3">Помещение</option>
            <option value="4">Комната</option>
            <option value="5">Иное</option>
          </select>
          <input class="input-block__input form-control" type="text" id="type-number" name="test">
      </div>
      <div class="inputs-group my-5">
        <h5>Сотрудник наделённый правом первой подписи</h5>
        <div id="firstSignContainer">
          <div id="firstSign">
            <label for="post" class="input-block__label">
              <p class="input-block__text">Должность</p>
              <input class="input-block__input form-control" type="text" id="post" name="test">
            </label>
            <label for="name" class="input-block__label">
              <p class="input-block__text">ФИО</p>
              <input class="input-block__input form-control" type="text" id="name" name="test">
            </label>
          </div>
        </div>
      </div>
      <input type="button" id="firstClone" class="btn btn-primary" value="Добавить">
      <div class="inputs-group my-5">
        <h5>Сотрудник наделённый правом второй подписи</h5>
        <div id="secondSignContainer">
          <div id="secondSign">
            <label for="post" class="input-block__label">
              <p class="input-block__text">Должность</p>
              <input class="input-block__input form-control" type="text" id="post" name="test">
            </label>
            <label for="name" class="input-block__label">
              <p class="input-block__text">ФИО -</p>
              <input class="input-block__input form-control" type="text" id="name" name="FIO">
            </label>
          </div>
        </div>
      </div>
      <input type="button" id="secondClone" class="btn btn-primary" value="Добавить">

      <div class="inputs-group my-5">
        <h5>Документ утверждается</h5>
        <p><b>Руководитель клиента (уполномоченное лицо)</b></p>
        <label for="post" class="input-block__label">
          <p class="input-block__text">Должность</p>
          <input class="input-block__input form-control" type="text" id="post" name="test">
        </label>
        <label for="name" class="input-block__label">
          <p class="input-block__text">ФИО</p>
          <input class="input-block__input form-control" type="text" id="name" name="test">
        </label>
        <p><b>Главный бухгалтер клиента(уполномоченное лицо)</b></p>
        <label for="post" class="input-block__label">
          <p class="input-block__text">Должность (!!!BUKH_RANK)</p>
          <input required name="BUKH_RANK" class="input-block__input form-control" type="text" id="post">
        </label>
        <label for="name" class="input-block__label">
          <p class="input-block__text">ФИО (!!!BUKH_FIO)</p>
          <input required name="BUKH_FIO" class="input-block__input form-control" type="text" id="name">
        </label>
      </div>
      </div>
      <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</body>

</html>