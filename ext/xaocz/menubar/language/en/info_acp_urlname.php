<?php
/**
*
* @package menubar
* @copyright (c) 2015 xaocZ ( CabinetAdmina.ru )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_MENUBAR'						=> 'Горизонтальное меню',
	'ACP_MENUBAR_EXPLAIN'				=> 'Настройки',
	'ACP_MENUBAR_DESCRIPTION'			=> 'Горизонтальное адаптивное меню с выпадающим списком. Здесь вы можете настроить параметры расширения.',
	'ACP_MENUBAR_SUPPORT'				=> 'Обновление и поддержку вы можете найти <a style="font-weight: bold;" href="http://cabinetadmina.ru/viewtopic.php?f=149&t=4338" onclick="window.open(this.href);return false;">на странице расширения</a> на сайте автора.',
	'ACP_MENUBAR_ON'					=> 'Включить',
	'ACP_MENUBAR_ADD_CONTENT'			=> 'Добавить структуру меню',
	'ACP_MENUBAR_CONTENT'				=> 'Структура меню',
	'ACP_MENUBAR_CONTENT_EXPLAIN'		=> 'С помощью данной формы вы можете задать структуру для вашего меню. Пример структуры меню с одним пунктом и выпадающем списком:<br /> <code class="syntaxhtml"><br />&lt;li&gt;&lt;a href="#link">Пункт 1&lt;/a&gt;<br />&nbsp;&nbsp;&nbsp;&lt;ul&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="#link"&gt;Пункт 1.1&lt;/a&gt;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br />&lt;/li&gt;</code>',
	'ACP_MENUBAR_HEAD'					=> 'Стили',
	'ACP_MENUBAR_HEAD_EXPLAIN'			=> 'С помощью данной формы вы можете задать собственное стилевое оформление для вашего меню.<br /> Пример:<br /><code class="syntaxhtml">.menubar-black {<br />&nbsp;&nbsp;&nbsp;background-color: #111;<br />}</code>',
	'ACP_MENUBAR_NEW_CLASS'				=> 'Задать собственный класс',
	'ACP_MENUBAR_NEW_CLASS_EXPLAIN'		=> 'Вы можете задать собственный класс, либо воспользоваться дополнительными двумя доступными: <code class="syntaxhtml">menubar-black</code> или <code class="syntaxhtml">menubar-pro</code>. По умолчанию используется класс <code class="syntaxhtml">menubar-pro2</code>.',
	'ACP_MENUBAR_STYLES'				=> 'Включить введённые в поле стили',
	'ACP_MENUBAR_MORE_MANAGE'			=> 'Дополнительные настройки',
	'ACP_MENUBAR_INDEX'					=> 'Отобразить не сворачиваемую ссылку "Список форумов"',
	'ACP_MENUBAR_FIXED'					=> 'Включить фиксирование меню при прокрутке экрана',
	'ACP_MENUBAR_POSITION'				=> 'Расположение',
	'ACP_MENUBAR_POSITION_EXPLAIN'		=> 'Выберите расположение навигации.',
	'ACP_MENUBAR_POSITION_AFTER'		=> 'Перед navbar',
	'ACP_MENUBAR_POSITION_BEFORE'		=> 'После navbar',
	'ACP_MENUBAR_FIXED_SCROLL'			=> 'Отступ для фиксирования',
	'ACP_MENUBAR_FIXED_SCROLL_EXPLAIN'	=> 'Количество строк при которых происходит фиксирование меню. По умолчанию 186.<br />При выборе расположения "Перед navbar" количество строк по умолчанию будет ровно 116.',

	'ACP_MENUBAR_NOTE'					=> 'Пояснения к настройке',
	'ACP_MENUBAR_NOTE_EXPLAIN'			=> 'Создание меню.<br />Каждый пункт меню должен выглядеть следующим образом:<br /><code class="syntaxhtml">&lt;li&gt;&lt;a href="#link"&gt;Пункт 1&lt;/a&gt;&lt;/li&gt;</code><br />и, для удобства, начинаться с новой строки. Для создания выпадающего списка можно воспользоваться подсказкой напротив поля ввода.<br />Если вы хотите чтобы введённый вами пункт не сворачивался, при уменьшении экрана, добавьте к нему соответствующий код, как указано в следующем примере:<br /><code class="syntaxhtml">&lt;li data-skip-responsive="true"&gt;&lt;a href="#link"&gt;Пункт 1&lt;/a&gt;&lt;/li&gt;</code><br />Для задания собственного стилевого оформления нужно воспользоваться полем для ввода стилей, далее задать собственный класс и включить введённые в поле стили.',
));