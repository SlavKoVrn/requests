Репозиторий
[https://github.com/SlavKoVrn/requests](https://github.com/SlavKoVrn/requests) <br/>
Демо сайт
[http://requests.kadastrcard.ru/requests](http://requests.kadastrcard.ru/requests) <br/>
Админка
[http://requests.kadastrcard.ru/admin](http://requests.kadastrcard.ru/admin) <br/>
```
login:admin
password:123456
```
Поиск
```
http://requests.kadastrcard.ru/requests?s[status]=Resolved
```
Страничный вывод
[http://requests.kadastrcard.ru/requests?page=2](http://requests.kadastrcard.ru/requests?page=2) <br/>

Тесты
```
установить дополнительные компоненты:

composer require codeception/module-rest
composer require codeception/module-phpbrowser

настроить тестовую базу данных:
common/config/test-local.php

запустить тестовый сервер:
php -S 127.0.0.1:8080 -t frontend/web

сгенерировать классы тестов:
php vendor/bin/codecept build

запустить тесты:
php vendor/bin/codecept run frontend/tests/api/RequestsCest.php
```

<div class=WordSection1>

<h1><a name="_fre7g47m36oq"></a><span lang=ru>Тестовое задание</span></h1>

<h2><a name="_bvr8e4dt29n2"></a><span lang=ru>Общие положения:</span></h2>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ru>Данное тестовое задание не
направлено на полноценную реализацию задачи, сколько на возможность <span
class=GramE>продемонстрировать уровень понимая</span> в таких вопросах, как:
PHP, REST API, работа с СУБД, основы безопасности. <b style='mso-bidi-font-weight:
normal'><u>Помните</u></b>, у задания не существует единственно правильного
решения, но каждому вашему решению должно находиться объяснение</span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ru>Постарайтесь показать свои лучшие
практики написания кода</span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ru>В процессе выполнения можно
использовать любые библиотеки и <span class=SpellE>фреймворки</span>, если они
позволяют реализовать задачу качественно и быстрее, но в случае использования
библиотек будьте готовы объяснить, почему используется конкретная библиотека,
если появятся таковые вопросы</span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ru>Тем не менее, предпочтительна
реализация на <span class=SpellE>Laravel</span> (8+), Yii2 (последняя
стабильная версия), <span class=SpellE>Symfony</span> 5+. В качестве СУБД можно
использовать <span class=SpellE>MySQL</span> 5.7 или <span class=SpellE>PostgreSQL</span>
актуальной стабильной версии</span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ru>Предпочтительно выложить сайт в <span
class=SpellE>GIt</span> <span class=SpellE>репозиторий</span>. По возможности,
ведите историю <span class=SpellE>коммитов</span>, чтобы мы могли отследить Ваш
процесс разработки\</span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ru>По возможности и при наличии
времени, очищайте неиспользуемый шаблонный код</span></p>

<h2><a name="_9fth8vbywzbm"></a><span lang=ru>Общее описание:</span></h2>

<p class=MsoNormal style='text-indent:36.0pt'><span lang=ru>Необходимо
реализовать систему принятия и обработки заявок пользователей с сайта. Любой
пользователь может отправить данные по <span class=GramE>публичному</span> API,
реализованному нами, оставив заявку с каким-то текстом,. Затем заявка
рассматривается ответственным лицом и ей устанавливается статус Завершено.
Чтобы установить этот статус, ответственное лицо должно оставить комментарий.
Пользователь должен получить свой ответ по <span class=SpellE>email</span>.</span></p>

<p class=MsoNormal style='text-indent:36.0pt'><span lang=ru>При этом<span
class=GramE>,</span> ответственное лицо должно иметь возможность получить
список заявок, отфильтровать их по статусу и по дате, а также иметь возможность
ответить задающему вопрос через <span class=SpellE>email</span>.</span></p>

<p class=MsoNormal style='text-indent:36.0pt'><span lang=ru><o:p>&nbsp;</o:p></span></p>

<h2><a name="_8pszer1ynw6y"></a><span lang=ru>Сущности:</span></h2>

<p class=MsoNormal><span lang=ru><o:p>&nbsp;</o:p></span></p>

<table class=a border=1 cellspacing=0 cellpadding=0 width=903 style='border-collapse:
 collapse;mso-table-layout-alt:fixed;border:none;mso-border-alt:solid black 1.0pt;
 mso-yfti-tbllook:1536;mso-padding-alt:5.0pt 5.0pt 5.0pt 5.0pt;mso-border-insideh:
 1.0pt solid black;mso-border-insidev:1.0pt solid black'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.0pt'>
  <td width=903 colspan=2 valign=top style='width:451.4pt;border:solid black 1.0pt;
  padding:5.0pt 5.0pt 5.0pt 5.0pt;height:21.0pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=ru
  style='font-size:15.0pt;line-height:115%'>Заявка<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=451 valign=top style='width:225.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black 1.0pt;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  class=SpellE><span lang=ru>id</span></span></p>
  </td>
  <td width=451 valign=top style='width:225.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
  padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  lang=ru>Уникальный идентификатор</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=451 valign=top style='width:225.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black 1.0pt;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  class=SpellE><span lang=ru>name</span></span></p>
  </td>
  <td width=451 valign=top style='width:225.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
  padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  lang=ru>Имя пользователя - строка, обязательная</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=451 valign=top style='width:225.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black 1.0pt;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  class=SpellE><span lang=ru>email</span></span></p>
  </td>
  <td width=451 valign=top style='width:225.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
  padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  class=SpellE><span lang=ru>Email</span></span><span lang=ru> пользователя -
  строка, обязательная</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=451 valign=top style='width:225.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black 1.0pt;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  class=SpellE><span lang=ru>status</span></span></p>
  </td>
  <td width=451 valign=top style='width:225.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
  padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  lang=ru>Статус - <span class=SpellE>enum</span>(“<span class=SpellE>Active</span>”,
  “<span class=SpellE>Resolved</span>”)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=451 valign=top style='width:225.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black 1.0pt;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  class=SpellE><span lang=ru>message</span></span></p>
  </td>
  <td width=451 valign=top style='width:225.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
  padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  lang=ru>Сообщение пользователя - текст, обязательный</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=451 valign=top style='width:225.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black 1.0pt;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  class=SpellE><span lang=ru>comment</span></span></p>
  </td>
  <td width=451 valign=top style='width:225.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
  padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  lang=ru>Ответ ответственного лица - текст, обязательный, если статус <span
  class=SpellE>Resolved</span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=451 valign=top style='width:225.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black 1.0pt;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  class=SpellE><span lang=ru>created_at</span></span></p>
  </td>
  <td width=451 valign=top style='width:225.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
  padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  lang=ru>Время создания заявки - <span class=SpellE>timestamp</span> или <span
  class=SpellE>datetime</span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes'>
  <td width=451 valign=top style='width:225.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black 1.0pt;padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  class=SpellE><span lang=ru>updated_at</span></span></p>
  </td>
  <td width=451 valign=top style='width:225.7pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
  padding:5.0pt 5.0pt 5.0pt 5.0pt'>
  <p class=MsoNormal style='line-height:normal;mso-pagination:none;border:none;
  mso-padding-alt:31.0pt 31.0pt 31.0pt 31.0pt;mso-border-shadow:yes'><span
  lang=ru>Время ответа на заявку </span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=ru><o:p>&nbsp;</o:p></span></p>

<h2><a name="_8otii4cdun0n"></a><span class=SpellE><span lang=ru>Endpoints</span></span><span lang=ru> API:</span></h2>

<p class=MsoNormal><span lang=ru>Методы API должны быть документированы
каким-нибудь средством документации на ваш выбор. Предпочтительно, с наличием
песочницы.</span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l2 level1 lfo1'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=ru>GET /<span class=SpellE>requests</span>/ </span></b><span lang=ru>-
получение заявок ответственным лицом, с фильтрацией по статусу<b
style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l2 level1 lfo1'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=ru>PUT /<span class=SpellE>requests</span>/{<span class=SpellE>id</span>}/
</span></b><span lang=ru>- ответ на конкретную задачу ответственным лицом<b
style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l2 level1 lfo1'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=ru>POST /<span class=SpellE>requests</span>/ </span></b><span lang=ru>-
отправка заявки пользователями системы<b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>

<p class=MsoNormal style='margin-left:36.0pt'><span lang=ru><o:p>&nbsp;</o:p></span></p>

<h2><a name="_mgjiwqs93kj8"></a><span lang=ru>Дополнения:</span></h2>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l0 level1 lfo3'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ru>Вы можете дополнять задачу
отдельными методами и расширять объем входящих параметров, если посчитаете <span
class=GramE>нужным</span></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l0 level1 lfo3'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ru>Вы можете сделать <span
class=GramE>авторизацию</span> как и для публичного пользователя, так и для
ответственного лица так, как вы посчитаете нужным</span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l0 level1 lfo3'><![if !supportLists]><span
lang=ru><span style='mso-list:Ignore'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ru>Вы можете сами рассмотреть
особенности безопасности входящих запросов, чтобы избежать <span class=SpellE>кроссдоменных</span>
запросов или же наоборот, разрешить их безопасно</span></p>






<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](https://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
