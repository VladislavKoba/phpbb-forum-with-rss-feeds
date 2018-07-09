<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
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
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Администратор каждого форума может разрешить или запретить определённые типы вложений. Если вы не знаете, какие вложения разрешены, свяжитесь с администратором форума для получения помощи.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Какие вложения разрешены на этом форуме?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Чтобы найти список добавленных вами вложений, перейдите в ваш личный раздел и щёлкните по ссылке «Вложения».',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Как мне найти мои вложения?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Вложения',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Подписки и закладки',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Форматирование сообщений и типы создаваемых тем',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Друзья и недруги',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Уровни пользователей и группы',
	'HELP_FAQ_BLOCK_ISSUES'	=> '',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Вход на форум и регистрация',
	'HELP_FAQ_BLOCK_PMS'	=> 'Личные сообщения',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Создание сообщений',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Поиск по форумам',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Параметры и настройки пользователя',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'В phpBB 3.0 закладки были больше похожи на закладки в вашем веб-браузере. Вы не получали предупреждений о произошедших изменениях. В phpBB 3.1 закладки больше напоминают подписки на темы. Вы можете получать уведомления об обновлениях в теме, находящейся у вас в закладках. В случае подписки, вы будете получать уведомления об изменениях в теме или форуме. Настройки уведомлений для закладок и подписок можно задать на вкладке «Личные настройки» личного раздела.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Чем закладки отличаются от подписок?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Чтобы подписаться на определённый форум, щёлкните по ссылке «Подписаться на форум» в нижней части страницы просмотра соответствующего форума.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Как мне подписаться на определённый форум?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Для отказа от подписки перейдите в личный раздел и щёлкните по ссылке «Подписки».',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Как мне отказаться от подписки?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Вы можете создать закладку или подписаться на определённую тему, щёлкнув по соответствующей ссылке в меню «Управление темой», которое находится в верхней и нижней части страницы просмотра тем.<br />Отметив галочкой пункт «Сообщать мне о получении ответа» при отправке сообщения, вы также подпишетесь на соответствующую тему.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Как мне сделать закладку или подписаться на определённую тему?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Объявления чаще всего содержат важную информацию для форума, на котором вы находитесь в настоящий момент, и вы должны прочесть их по возможности. Объявления появляются вверху каждой страницы форума, в котором они созданы. Так же, как и с важными объявлениями, права на создание объявлений предоставляются администратором.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Что такое объявления?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode — это особая реализация HTML, предлагающая большие возможности по форматированию отдельных частей сообщения. Возможность использования BBCode определяется администратором, однако BBCode также может быть отключён на уровне сообщения в форме для его отправки. BBCode очень похож на HTML, но теги в нём заключаются в квадратные скобки [ и ], а не в &lt; и &gt;. За дополнительной информацией о BBCode обратитесь к руководству по BBCode, ссылка на которое доступна из формы отправки сообщений.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Что такое BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Эти объявления содержат важную информацию, и вы должны прочесть их по возможности. Они появляются вверху каждого из форумов и в вашем личном разделе. Права на создание важных объявлений предоставляются администратором форума.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Что такое важные объявления?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> '',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> '',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Значки тем — это выбранные авторами изображения, связанные с сообщениями и отражающие их содержание. Возможность использования значков тем зависит от разрешений, установленных администратором форума.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Что такое значки тем?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Да, вы можете размещать изображения в ваших сообщениях. Если администратор разрешил добавлять вложения, вы можете загрузить изображение на форуме. Если нет, вы должны указать ссылку на изображение, сохранённое на общедоступном веб-сервере. Пример ссылки: http://www.example.com/my-picture.gif. Вы не можете указывать ссылку ни на изображения, хранящиеся на вашем компьютере (если он не является общедоступным сервером), ни на изображения, для доступа к которым необходима аутентификация, как, например, на почтовые ящики Hotmail или Yahoo, защищённые паролями сайты и т. п. Для указания ссылок на изображения используйте в сообщениях тег BBCode [img].',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Могу ли я добавлять изображения к сообщениям?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Закрытые темы — это такие темы, в которых пользователи больше не могут оставлять сообщения, и все находящиеся в них опросы автоматически завершаются. Темы могут быть закрыты по многим причинам модератором форума или администратором форума. Вы также можете иметь возможность закрывать созданные вами темы, в зависимости от прав, предоставленных вам администратором форума.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Что такое закрытые темы?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Смайлики, или эмотиконы — это маленькие картинки, которые могут быть использованы для выражения чувств, например :) означает радость, а :( означает грусть. Полный список смайликов можно увидеть в форме создания сообщений. Только не перестарайтесь, используя их: они легко могут сделать сообщение нечитаемым, и модератор может отредактировать ваше сообщение или вообще удалить его. Администратор форума также может ограничить количество смайликов, которое можно использовать в сообщении.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Что такое смайлики?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Прилепленные темы в форуме находятся ниже всех объявлений и только на его первой странице. Они чаще всего содержат достаточно важную информацию, поэтому вы должны прочесть их по возможности. Так же, как и с объявлениями, права на создание прилепленных тем предоставляются администратором форума.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Что такое прилепленные темы?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Вы можете включать в эти списки других пользователей форума. Пользователи, добавленные в список друзей, будут указаны в вашем личном разделе для получения быстрого доступа к информации о том, находятся ли они сейчас в сети, и для отправки им личных сообщений. Сообщения от этих пользователей также могут выделяться, если это поддерживается стилем форума. Если вы добавили пользователей в список недругов, то любые отправленные ими сообщения будут скрыты по умолчанию.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Что означают списки друзей и недругов?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Вы можете добавлять пользователей в свой список двумя способами. В профиле каждого пользователя есть ссылка для его добавления в список друзей или недругов. Кроме того, вы можете сделать это прямо из вашего личного раздела, непосредственным вводом имени пользователя. Вы можете также удалять пользователей из соответствующих списков на той же странице.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Как мне добавлять/удалять пользователей в списках моих друзей и недругов?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Администраторы — это пользователи, наделённые высшим уровнем контроля над форумом. Они могут управлять всеми аспектами работы форума, включая разграничение прав доступа, отключение пользователей, создание групп пользователей, назначение модераторов и т. п., в зависимости от прав, предоставленных им создателем форума. Они также могут обладать всеми возможностями модераторов во всех форумах, в зависимости от настроек, произведённых создателем форума.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Кто такие администраторы?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Администратор форума может присваивать цвета участникам групп для того, чтобы их было проще отличать друг от друга.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Почему названия некоторых групп имеют разные цвета?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Если вы состоите более чем в одной группе, ваша группа по умолчанию используется для того, чтобы определить, какие групповые цвет и звание должны быть вам присвоены. Администратор форума может предоставить вам разрешение самому изменять вашу группу по умолчанию в личном разделе.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Что такое группа по умолчанию?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Модераторы — это пользователи (или группы пользователей), которые ежедневно следят за форумами. Они имеют право редактировать или удалять сообщения, закрывать, открывать, перемещать, удалять и объединять темы на форуме, за который они отвечают. Основные задачи модераторов — не допускать несоответствия содержания сообщений обсуждаемым темам (оффтопик), оскорблений.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Кто такие модераторы?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'На этой странице вы найдёте список администраторов и модераторов форума и другую информацию, такую как сведения о форумах, которые они модерируют.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Что означает ссылка «Наша команда»?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Группы пользователей разбивают сообщество на структурные части, управляемые администратором форума. Каждый пользователь может состоять в нескольких группах, и каждой группе могут быть назначены индивидуальные права доступа. Это облегчает администраторам назначение прав доступа одновременно большому количеству пользователей, например, изменение модераторских прав или предоставление пользователям доступа к приватным форумам.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Вы можете получить информацию обо всех существующих группах по ссылке «Группы» в вашем личном разделе. Если вы хотите вступить в одну из них, нажмите соответствующую кнопку. Однако не все группы общедоступны. Некоторые могут требовать одобрения для вступления в них, могут быть закрытыми или даже скрытыми. Если группа общедоступна, то вы можете запросить членство в ней, щёлкнув по соответствующей кнопке. Если требуется одобрение на участие в группе, вы можете отправить запрос на вступление, щёлкнув по соответствующей кнопке. Лидер группы должен будет одобрить ваше участие в группе и может спросить, зачем вы хотите присоединиться. Пожалуйста, не беспокойте лидера группы, если он отклонил ваш запрос; у него могут быть для этого свои причины.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Где находятся группы и как мне вступить в них?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Лидеры групп обычно назначаются при их создании администраторами форума. Если вы заинтересованы в создании группы, сначала свяжитесь с администратором; попробуйте отправить ему личное сообщение.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Как мне стать лидером группы?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Что такое группы пользователей?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Все пользователи данного форума могут использовать соответствующую форму на странице «Связаться с администрацией», если данная функция включена администратором.<br />Зарегистрированные пользователи также могут воспользоваться контактами на странице «Наша команда».',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Как мне связаться с администратором форума?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Существует несколько возможных причин. Прежде всего убедитесь, что вы правильно вводите имя пользователя и пароль. Если данные введены правильно, свяжитесь с администратором, чтобы проверить, не был ли вам закрыт доступ к форума. Также возможно, что допущена ошибка в конфигурации форума, свяжитесь с администратором для исправления настроек.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> '',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Сначала проверьте свои имя пользователя и пароль. Также требуется, чтобы все новые учётные записи были активированы пользователями или администратором до входа в систему. Эта информация отображается в процессе регистрации. Если вам было прислано email-сообщение, следуйте полученным инструкциям. Если email-сообщение не получено, то возможно, что вы указали неправильный адрес email либо он заблокирован спам-фильтром. Если вы уверены, что ввели правильный адрес email, попробуйте связаться с администратором.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> '',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Вы можете получить информацию обо всех существующих группах по ссылке «Группы» в вашем личном разделе. Если вы хотите вступить в одну из них, нажмите соответствующую кнопку. Однако не все группы общедоступны. Некоторые могут требовать одобрения для вступления в них, могут быть закрытыми или даже скрытыми. Если группа общедоступна, то вы можете запросить членство в ней, щёлкнув по соответствующей кнопке. Если требуется одобрение на участие в группе, вы можете отправить запрос на вступление, щёлкнув по соответствующей кнопке. Лидер группы должен будет одобрить ваше участие в группе и может спросить, зачем вы хотите присоединиться. Пожалуйста, не беспокойте лидера группы, если он отклонил ваш запрос; у него могут быть для этого свои причины.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> '',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Если вы не отметили флажком пункт <em>Запомнить меня</em>, вы сможете оставаться под своим именем на форуме только некоторое ограниченное время. Это сделано для того, чтобы никто другой не смог воспользоваться вашей учётной записью. Для того чтобы вам не приходилось вводить имя пользователя и пароль каждый раз, вы можете отметить флажком пункт <em>Запомнить меня</em> при входе на форум. Не рекомендуется делать это на общедоступном компьютере, например в библиотеке, интернет-кафе, университете и т. д. Если пункт <em>Запомнить меня</em> отсутствует, это значит, что администратор отключил эту функцию.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Почему мне периодически приходится повторять ввод имени и пароля?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Существует несколько возможных причин. Прежде всего убедитесь, что вы правильно вводите имя пользователя и пароль. Если данные введены правильно, свяжитесь с администратором, чтобы проверить, не был ли вам закрыт доступ к форума. Также возможно, что допущена ошибка в конфигурации форума, свяжитесь с администратором для исправления настроек.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Возможно, администратор по какой-то причине деактивировал или удалил вашу учётную запись. Кроме того, многие форумы периодически удаляют пользователей, длительное время не оставляющих сообщения, чтобы уменьшить размер базы данных. Если это произошло, попробуйте зарегистрироваться снова и активнее участвовать в дискуссиях.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Я давно зарегистрирован, но больше не могу войти!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Почему я не могу войти?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Возможно, администратор форума отключил регистрацию новых пользователей. Также возможно, что он заблокировал ваш IP-адрес или запретил имя, под которым вы пытаетесь зарегистрироваться. Обратитесь за помощью к администратору форума.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Почему я не могу зарегистрироваться?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> '<ol>
	<li>
		На сайте существует система банов. Бан – это доступ к сайту в режиме "только чтение", то есть без возможности зайти в свой профиль, оставлять сообщения, комментировать и т.д.<br>
		Предупреждения выдаются модераторами или админом при нарушении положений правил данного сайта. Пользователь может получить предупреждение:
		<ul>
			<li>при однократном нарушении правил;</li>
			<li>при трехкратном нарушении правил.</li>
		</ul>
	</li>
	<li>При получении трех предупреждений пользователь отправляется в бан (отключение учетной записи пользователя).</li>
	<li>Первый бан выдается сроком на 7 дней, второй бан – на 30 дней. Третий бан – удаление профиля пользователя на неопределенный срок на усмотрение администрации.</li>
	<li>После реактивации профиля пользователя по истечении срока временного бана количество предупреждений обнуляется.</li>
	<li>Текущие накопленные предупреждения будут отображаться в виде значков восклицательных знаков под аватаркой пользователя на страницах форума. </li>
	<li>При попытке обойти бан с помощью регистрации дополнительных аккаунтов будет внедряться фильтрация по IP-адресам и прочие технические ограничения (что может создать сложности с доступом к сайту и у прочих проживающих в квартире забаненного пользователя).</li>
	<li>Если с момента последнего нарушения правил прошло более 180 дней, количество предупреждений (отображаются в виде восклицательных знаков под аватаркой в сообщениях на форуме) может быть уменьшено по запросу пользователя. Запрос писать в личку админу с того аккаунта, для которого требуется уменьшить количество предупреждений.</li>
</ol>',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Временная блокировка',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> 'Она удаляет все созданные cookies, которые позволяют вам оставаться авторизованным на этой форума, а также выполняют другие функции, такие как отслеживание прочитанных сообщений, если эта возможность включена администратором. Если вы испытываете трудности с входом на форум или выходом с форума, возможно, удаление cookies может помочь.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Что делает функция «Удалить cookies форума»?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Не паникуйте! Хотя пароль нельзя восстановить, можно легко получить новый. Перейдите на страницу входа на форум и щёлкните на ссылку <em>Забыли пароль?</em>. Следуйте инструкциям, и скоро вы снова сможете войти на форум.<br />Если не удалось получить новый пароль, свяжитесь с администратором форума.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Я забыл пароль!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Вы можете этого и не делать. Всё зависит от того, как администратор настроил форум: должны ли вы зарегистрироваться, чтобы размещать сообщения, или нет. Тем не менее регистрация даёт вам дополнительные возможности, которые недоступны анонимным пользователям: аватары, личные сообщения, отправка email-сообщений, участие в группах и т. д. Регистрация займёт у вас всего пару минут, поэтому мы рекомендуем это сделать.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Сначала проверьте свои имя пользователя и пароль. Также требуется, чтобы все новые учётные записи были активированы пользователями или администратором до входа в систему. Эта информация отображается в процессе регистрации. Если вам было прислано email-сообщение, следуйте полученным инструкциям. Если email-сообщение не получено, то возможно, что вы указали неправильный адрес email либо он заблокирован спам-фильтром. Если вы уверены, что ввели правильный адрес email, попробуйте связаться с администратором.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Я только что зарегистрировался, но не могу войти!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Зачем мне нужно регистрироваться?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Это может быть вызвано тремя причинами: вы не зарегистрированы и/или не вошли на форум, администратор запретил отправку личных сообщений на всем форуме или же администратор запретил это вам лично. Свяжитесь с администратором форума для получения дополнительной информации.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Я не могу отправить личные сообщения!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Мы сожалеем об этом. Форма отправки email на данном форуме включает меры предосторожности и возможность отслеживания пользователей, отправляющих подобные сообщения. Отправьте email-сообщение администратору форума с полной копией полученного письма. Очень важно включить все заголовки, в которых содержится детальная информация об отправителе. Администратор форума сможет в этом случае принять меры.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Я получил спам или оскорбительный email от кого-то с этим форумом!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Вы можете автоматически удалять личные сообщения пользователей, используя правила для сообщений в вашем личном разделе. Если вы получаете оскорбительные личные сообщения от конкретного пользователя, отправьте жалобы на сообщения модераторам; они могут запретить пользователю отправку личных сообщений.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Я постоянно получаю нежелательные личные сообщения!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Щёлкнув по ссылке «Поднять тему» при просмотре темы, вы можете «поднять» её в верхнюю часть первой страницы форума. Если этого не происходит, то это означает, что возможность поднятия тем могла быть отключена, или время, которое должно пройти до повторного поднятия темы, ещё не прошло. Также можно поднять тему, просто ответив на неё, однако удостоверьтесь, что тем самым вы не нарушаете правила форума, на которой находитесь.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Как мне вновь поднять мою тему?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Для создания новой темы в форуме щёлкните по кнопке «Новая тема». Для размещения сообщения в теме щёлкните по кнопке «Ответить». Возможно, придётся зарегистрироваться, прежде чем отправить сообщение. Перечень ваших прав доступа находится внизу страниц форума или темы. Например: «Вы можете начинать темы», «Вы можете добавлять вложения» и т.п.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Как мне создать новую тему или сообщение?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Эта кнопка позволяет вам сохранять сообщения для того, чтобы закончить и отправить их позже. Для загрузки сохранённого сообщения перейдите в параграф «Черновики» личного раздела.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Что означает кнопка «Сохранить» при создании сообщения?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Если вы не являетесь администратором или модератором форума, вы можете редактировать и удалять только свои собственные сообщения. Вы можете перейти к редактированию, щёлкнув по кнопке <em>Правка</em> в соответствующем сообщении, иногда только в течение ограниченного времени после его создания. Если кто-то уже ответил на сообщение, то под ним появится небольшая надпись, которая показывает количество правок, а также дату и время последней из них. Эта надпись не появляется, если сообщение редактировал администратор или модератор, хотя они могут сами написать о сделанных изменениях по своему усмотрению. Учтите, что обычные пользователи не могут удалить сообщение, если на него уже кто-то ответил.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Как мне отредактировать или удалить сообщение?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Некоторые форумы доступны только определённым пользователям или группам пользователей. Чтобы просматривать такие форумы, создавать в них темы и оставлять сообщения, совершать другие действия, вам может потребоваться специальное разрешение. Свяжитесь с модератором или администратором форума для получения такого разрешения.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Почему мне недоступны некоторые форумы?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Право добавления вложений может быть предоставлено на уровне форума, группы или пользователя. Администратор форума может не разрешить добавление вложений в определённых форумах. Также возможно, что добавлять вложения разрешено только членам определённых групп. Если вы не знаете, почему не можете добавлять вложения, свяжитесь с администратором форума.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Почему я не могу добавлять вложения?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Ограничение количества вариантов ответа устанавливается администратором форума. Если вам нужно добавить количество вариантов, превышающее это ограничение, свяжитесь с администратором форума.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Почему я не могу добавить больше вариантов ответа?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'При создании темы или редактировании первого сообщения темы щёлкните на вкладке или перейдите в форму <em>Создать опрос</em> под основной формой для создания сообщения, в зависимости от используемого стиля; если вы не видите такой вкладки или формы, то вы не имеете прав на создание опросов. Укажите вопрос и как минимум два варианта ответа в соответствующих полях, убедившись, что каждый вариант находится на отдельной строке текстового поля. Вы также можете задать количество вариантов, которые могут выбрать пользователи при голосовании, с помощью опции «Вариантов ответа», период проведения опроса в днях (0 означает, что опрос будет постоянным) и возможность пользователей изменять вариант, за который они проголосовали.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Как мне создать опрос?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Так же, как и сообщения, опросы могут редактироваться только их создателями, модераторами или администраторами. Для редактирования опроса перейдите к редактированию первого сообщения в теме; опрос всегда связан именно с ним. Если никто не успел проголосовать, то вы можете удалить опрос или отредактировать любой из вариантов ответа. Однако если кто-то уже проголосовал, то только модераторы или администраторы могут отредактировать или удалить опрос. Это сделано для того, чтобы нельзя было менять варианты ответов во время голосования.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Как мне отредактировать или удалить опрос?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Администратор форума может решить, что сообщения требуют предварительного просмотра перед отправкой на форум. Возможно также, что администратор включил вас в группу пользователей, сообщения которых, по его или её мнению, должны быть предварительно просмотрены перед отправкой. Пожалуйста, свяжитесь с администратором форума для получения дополнительной информации.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Почему моё сообщение требует одобрения?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Рядом с каждым сообщением вы увидите кнопку, предназначенную для отправки жалобы на него, если это разрешено администратором форума. Щёлкнув по этой кнопке, вы пройдёте через ряд шагов, необходимых для оправки жалобы на сообщение.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Как мне пожаловаться на сообщения модератору?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Чтобы добавить подпись к сообщению, вы должны сначала создать её в личном разделе. После этого вы можете отметить флажком пункт <em>Присоединить подпись</em> в форме отправки сообщения, чтобы подпись добавилась. Вы также можете настроить добавление подписи по умолчанию ко всем вашим сообщениям, сделав соответствующий выбор в параграфе «Отправка сообщений» пункта «Личные настройки» в личном разделе. Несмотря на это, вы сможете отменить добавление подписи в отдельных сообщениях, убрав флажок <em>Присоединить подпись</em> в форме отправки сообщения.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Как мне добавить подпись к своему сообщению?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'На каждом форуме администраторы устанавливают свой собственный свод правил. Если вы нарушили правило, вы можете получить предупреждение. Учтите, что это решение администратора форума, и phpBB Limited не имеет никакого отношения к предупреждениям, вынесенным на данном сайте. Если вы не знаете, за что получили предупреждение, свяжитесь с администратором форума.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Почему я получил предупреждение?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Ваш поиск дал слишком большое количество результатов, которые веб-сервер не смог обработать. Используйте «Расширенный поиск», более точно задавайте условия поиска и форумы, на которых он должен быть осуществлён.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'В результате моего поиска я получил пустую страницу!',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Задайте условие поиска в соответствующем поле, расположенном на главной странице форума, страницах просмотра форума или темы. Вы можете осуществить расширенный поиск, щёлкнув по ссылке «Расширенный поиск», доступной на всех страницах форума. Способ доступа к поиску может зависеть от используемого стиля.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Как мне выполнить поиск по форуму или форумам?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Перейдите на страницу «Пользователи» и щёлкните по ссылке «Найти пользователя».',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Как мне найти пользователя форума?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Ваш поисковый запрос, возможно, был слишком неопределённым и включал много общих слов, поиск по которым в phpBB не осуществляется. Будьте более конкретны и используйте возможности расширенного поиска.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Почему мой поиск не даёт результатов?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Вы можете найти свои сообщения, щёлкнув по ссылке «Показать ваши сообщения» в личном разделе на главной странице, по ссылке «Найти сообщения пользователя» на странице вашего профиля на форуме или по ссылке «Ваши сообщения» в меню «Ссылки» на главной странице. Чтобы найти созданные вами темы, используйте страницу расширенного поиска, заполнив соответствующие поля.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Как мне найти свои сообщения и созданные мной темы?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Вместе с именем пользователя могут присутствовать два изображения. Одно из них может относиться к вашему званию, обычно это звёздочки, квадратики или точки, указывающие на то, сколько сообщений вы оставили, или на ваш статус на форума. Другое, обычно более крупное, изображение известно как «аватара» и обычно уникально для каждого пользователя.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'На вкладке «Профиль» личного раздела вы можете добавить аватару с использованием четырёх инструментов: «Граватар», «Галерея аватар», «Удалённая аватара» или «Загружаемая аватара». От администратора зависит, включена ли поддержка аватар, а также какие типы аватар могут быть доступны. Если вы не можете использовать аватары, свяжитесь с администратором форума для выяснения причин.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Как мне включить отображение аватары?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Что означают изображения рядом с моим именем пользователя?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Если вы являетесь зарегистрированным пользователем, все ваши настройки хранятся в базе данных форума. Чтобы изменить их, щёлкните на имени пользователя вверху страницы и перейдите по ссылке <em>Личный раздел</em>. Там вы можете изменить все свои настройки и предпочтения.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Как мне изменить мои настройки?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Только зарегистрированные пользователи могут отправлять email-сообщения другим пользователям через встроенную в форум форму, и только если администратор включил такую возможность. Это сделано для того, чтобы предотвратить злоупотребления почтовой системой анонимными пользователями.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Когда я щёлкаю по ссылке «email», от меня требуют войти на форум!',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'На вкладке «Личные настройки» в личном разделе вы найдёте опцию <em>Скрывать моё пребывание на форума</em>. Выберите <em>Да</em>, и вы будете видны только администраторам, модераторам и самому себе. Для всех остальных вы будете скрытым пользователем.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Как избежать появления моего имени в списке «Кто сейчас на форуме»?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> '',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> '',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Звания, отображаемые под вашим именем, отражают количество созданных вами сообщений или идентифицируют определённых пользователей: например, модераторов и администраторов. Обычно вы не можете напрямую изменять наименования званий на форума, так как они установлены её администратором. Пожалуйста, не засоряйте форум ненужными сообщениями только для того, чтобы повысить своё звание. На большинстве форумов это запрещено, и модератор или администратор понизят значение вашего счётчика сообщений.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Что такое звание и как я могу изменить его?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Если вы уверены, что правильно указали часовой пояс, но время отображается по-прежнему неверное, значит, неправильно установлено время на сервере. Уведомите администратора для устранения проблемы.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Я изменил часовой пояс, но время всё равно неправильное!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Возможно, отображается время, относящееся к другому часовому поясу, а не к тому, в котором находитесь вы. В этом случае измените в личных настройках часовой пояс на тот, в котором вы находитесь: Москва, Киев и т. д. Учтите, что изменять часовой пояс, как и большинство настроек, могут только зарегистрированные пользователи. Если вы не зарегистрированы, то сейчас удачный момент сделать это.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'На форуме неправильное время!',
));
