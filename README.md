<small>Проект создан на основе Wordpress Badrock</small>
<h1>Wordpress - Project</h1>

Бозовый репозиторий для создание сайтов на wordpress

<h2>Содержащиеся модули</h2>
<ul>
    <li>Composer</li>
    <li>Webpack</li>
</ul>

<h2>Установка</h2>

Клонируем репозиторий в рабочую папку проекта

После успешного клонирования репозитория выполняем команды

`
composer install && npm install
`

<h2>Работа с composer</h2>
Далее выполняем команду

`
composer config
`

Эта команда сделает копию файла `.env.exeple` и назавет его `.env`

В этом файле указываються все конфиги проекта, если нужно добавить какуюто переменную 
в файл `wp-config.php`, то все они добовляються через файл `.env`

<h3>Установка php пакетов</h3>
Все модули php устанавливаемые через composer автоматически подключаються в Wordpress 
в файле `web/wp-config.php`, дополнительно обьявлять их не нужно!

<h3>Установка плагинов и тем Wordpress</h3>
Большинство плагинов WordPress так же нужно устанавливать через composer
Пример команды установки плагина WordPress

`
composer require wordpress-plugin/wordpress-seo
`

Аналогично же можно устанавливать стороние темы 

`
composer require wordpress-theme/twentyeleven
`