<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth', language 'ru', branch 'MOODLE_26_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Доступные плагины аутентификации';
$string['alternatelogin'] = 'Если Вы введете здесь адрес веб-страницы, то она будет использоваться в качестве страницы входа на сайт. Эта страница должна содержать форму, которая ведет на страницу <strong>«{$a}»</strong> и возвращает поля <strong>username</strong> и <strong>password</strong>.<br />Будьте внимательны, так как если Вы введете здесь неправильный адрес, то заблокируете себе доступ к сайту.<br />Для использования стандартной страницы входа в систему оставьте это поле пустым.';
$string['alternateloginurl'] = 'Адрес альтернативной страницы входа в систему';
$string['auth_changepasswordhelp'] = 'Подсказка о смене пароля';
$string['auth_changepasswordhelp_expl'] = 'Показать подсказку по смене пароля пользователям, которые забыли свой {$a} пароль. Она может отображаться как вместо, так и вместе со ссылкой на <strong>Адрес страницы смены пароля</strong> или внутренней страницей смены пароля системы Moodle.';
$string['auth_changepasswordurl'] = 'Адрес страницы смены пароля';
$string['auth_changepasswordurl_expl'] = 'Укажите URL станицы, на которую должны отправляться пользователи, забывшие свой {$a} пароль. Установите параметру <strong>Использовать стандартную страницу смены пароля</strong> значение <strong>Нет</strong>';
$string['auth_changingemailaddress'] = 'Вы запросили изменение адреса электронной почты, с {$a->oldemail} на {$a->newemail}. По соображениям безопасности мы посылаем сообщение по новому адресу, чтобы убедиться, что он принадлежит Вам. Ваш адрес электронной почты будет обновлен, как только Вы откроете ссылку в этом сообщении.';
$string['auth_common_settings'] = 'Основные установки';
$string['auth_data_mapping'] = 'Сопоставление данных';
$string['authenticationoptions'] = 'Настройка аутентификации';
$string['auth_fieldlock'] = 'Блокировка значения';
$string['auth_fieldlock_expl'] = '<p><b>Блокировка значения:</b> Если параметр включен, то поле будет недоступно для непосредственного редактирования пользователями и администраторами Moodle. Используйте эту опцию, если Вы управляете этими данными во внешней системе аутентификации. </p>';
$string['auth_fieldlocks'] = 'Блокировка полей пользователя';
$string['auth_fieldlocks_help'] = '<p>Вы можете запретить пользователям редактировать некоторые поля профиля. Это полезно для сайтов, где данные пользователей редактируются администратором вручную или загружаются с помощью команды «Загрузить пользователей». Если Вы блокируете поля, необходимые для работы Moodle, то убедитесь, что предоставляете всю информацию, необходимую для создания учетной записи, иначе учетная запись не будет работать.</p><p>Чтобы избежать подобных проблем, можно попробовать установить блокировку в режим «Разблокировано, если пусто»</p>';
$string['authinstructions'] = 'Здесь Вы можете написать свои инструкции пользователям для входа в систему. Если оставить поле пустым, то на странице входа будут отображаться инструкции по умолчанию.';
$string['auth_invalidnewemailkey'] = 'Ошибка: если Вы пытаетесь подтвердить смену адреса электронной почты, то сделали ошибку при копировании ссылки, направленной Вам по электронной почте. Пожалуйста, скопируйте адрес и повторите попытку.';
$string['auth_multiplehosts'] = 'Можно указать несколько имен компьютеров ИЛИ IP-адресов, например «host1.ru;host2.ru;host3.ru» или «ххх.ххх.ххх.ххх;ххх.ххх.ххх.ххх»';
$string['auth_outofnewemailupdateattempts'] = 'Вы исчерпали допустимое количество попыток для изменения своего адреса электронной почты. Ваш запрос отклонен.';
$string['auth_passwordisexpired'] = 'Ваш пароль устарел. Вы хотите поменять свой пароль сейчас?';
$string['auth_passwordwillexpire'] = 'Дней до окончания срока действия Вашего пароля: {$a}. Вы хотите установить новый пароль сейчас?';
$string['auth_remove_delete'] = 'Полностью удалить внутреннюю учетную запись';
$string['auth_remove_keep'] = 'Сохранить внутреннюю учетную запись';
$string['auth_remove_suspend'] = 'Заблокировать внутреннюю учетную запись';
$string['auth_remove_user'] = 'Укажите, что делать с внутренней учетной записью пользователя во время массовой синхронизации, если пользователь будет удален из внешнего источника. Только заблокированные учетные записи могут быть автоматически восстановлены, если они снова появятся во внешнем источнике.';
$string['auth_remove_user_key'] = 'При удалении пользователя во внешнем источнике';
$string['auth_sync_script'] = 'Скрипт синхронизации cron';
$string['auth_updatelocal'] = 'Обновление локальной учетной записи';
$string['auth_updatelocal_expl'] = '<p><b>Обновление локальной учетной записи:</b> если параметр включен, то значение поля будут заменяться данными из внешнего источника аутентификации как при каждом входе пользователя, так и при синхронизации пользователей. Поля, для которых включено обновление локальной учетной записи, следует заблокировать.</p>';
$string['auth_updateremote'] = 'Обновление внешней учетной записи';
$string['auth_updateremote_expl'] = '<p><b>Обновление внешней учетной записи:</b> если параметр включен, то информация во внешнем источнике авторизации будет обновлена при обновлении учетных записей пользователей в Moodle. Поля, для которых включено обновление внешней учетной записи, должны быть разблокированы.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Примечание:</b> Для обновления внешних данных на сервере LDAP в параметрах подключения следует указать пользователя с правами редактирования записей всех пользователей. В настоящее время при обновлении не сохраняются многозначные атрибуты и удаляются дополнительные значения.</p>';
$string['auth_user_create'] = 'Разрешить создание пользователей';
$string['auth_user_creation'] = 'Новые (анонимные) пользователи могут создавать учетные записи во внешнем источнике аутентификации и подтверждать их по электронной почте. Если Вы включаете этот параметр, не забудьте также настроить параметры конкретного модуля, необходимые для создания пользователей.';
$string['auth_usernameexists'] = 'Выбранный логин уже существует. Выберите другой.';
$string['auto_add_remote_users'] = 'Автоматически добавлять внешних пользователей';
$string['changepassword'] = 'Адрес страницы смены пароля';
$string['changepasswordhelp'] = 'Здесь Вы можете дать указать ссылку, по которой пользователи смогут восстановить или изменить свой логин или пароль, если его они забыли. Пользователи увидят соответствующую кнопку на странице входа в систему и на странице собственного профиля. Если Вы не заполните поле, эта кнопка выводится не будет.';
$string['chooseauthmethod'] = 'Выберите метод аутентификации';
$string['chooseauthmethod_help'] = 'Этот параметр определяет используемый метод аутентификации при входе пользователя в систему. Следует выбирать только включенные плагины аутентификации, в противном случае пользователь больше не сможет войти в систему. Чтобы заблокировать вход в систему для этого пользователя, выберите «Вход запрещен».';
$string['createpassword'] = 'Создать пароль и уведомить пользователя';
$string['createpasswordifneeded'] = 'Создавать пароль при необходимости';
$string['emailchangecancel'] = 'Отменить изменение адреса электронной почты';
$string['emailchangepending'] = 'Изменение еще не принято. Откройте ссылку, отправленную вам по адресу {$a->preference_newemail}.';
$string['emailnowexists'] = 'Ваш запрос на установку адреса электронной почты для своего профиля отклонен, так как этот адрес уже назначен для другого профиля. Попробуйте установить другой адрес.';
$string['emailupdate'] = 'Обновление адреса электронной почты';
$string['emailupdatemessage'] = 'Уважаемый пользователь {$a->fullname}!

Вы запросили изменение адреса электронной почты для своей учетной записи на сайте {$a->site}. Чтобы подтвердить это изменение, пройдите по следующей ссылке:

{$a->url}';
$string['emailupdatesuccess'] = 'Электронный адрес пользователя <em>{$a->fullname}</em> успешно изменен на <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Подтверждение изменения адреса электронной почты на сайте {$a->site}';
$string['enterthenumbersyouhear'] = 'Напишите цифры, которые Вы слышите';
$string['enterthewordsabove'] = 'Напишите слова, которые Вы видите выше';
$string['errormaxconsecutiveidentchars'] = 'Пароль не должен иметь более {$a} одинаковых последовательных символов.';
$string['errorminpassworddigits'] = 'Пароль должен содержать не менее {$a} цифр(ы).';
$string['errorminpasswordlength'] = 'Пароль не должен состоять из менее чем {$a} символов(а).';
$string['errorminpasswordlower'] = 'Пароль должен содержать не менее {$a} строчных(ой) букв(ы).';
$string['errorminpasswordnonalphanum'] = 'Пароль должен содержать не менее {$a} не буквенно-цифровых(ого) символов(а).';
$string['errorminpasswordupper'] = 'Пароль должен содержать не менее {$a} прописных(ой) букв(ы).';
$string['errorpasswordupdate'] = 'Ошибка при обновлении пароля; пароль не изменен';
$string['eventuserloggedinas'] = 'Пользователь вошел в систему от имени другого пользователя';
$string['forcechangepassword'] = 'Принудительная смена пароля';
$string['forcechangepasswordfirst_help'] = 'Заставить пользователей сменить пароль при первом входе в Moodle.';
$string['forcechangepassword_help'] = 'Заставить пользователей сменить пароль при следующем входе в Moodle.';
$string['forgottenpassword'] = 'Если вы введете здесь URL веб-страницы, она будет использоваться для восстановления забытого пароля сайта. Эта настройка предназначена для сайтов, где управление паролями осуществляется вне Moodle. Для использования стандартной процедуры восстановления пароля оставьте это поле пустым.';
$string['forgottenpasswordurl'] = 'Страница восстановления пароля';
$string['getanaudiocaptcha'] = 'Получить звуковую CAPTCHA (тест для различения людей и компьютеров)';
$string['getanimagecaptcha'] = 'Получить картинку CAPTCHA (тест для различения людей и компьютеров)';
$string['getanothercaptcha'] = 'Получить другой CAPTCHA (тест для различения людей и компьютеров)';
$string['guestloginbutton'] = 'Кнопка гостевого входа';
$string['incorrectpleasetryagain'] = 'Неправильно. Пожалуйста, попробуйте еще раз.';
$string['infilefield'] = 'Необходимое поле в файле';
$string['informminpassworddigits'] = 'цифр - не менее {$a}';
$string['informminpasswordlength'] = 'символов - не менее {$a}';
$string['informminpasswordlower'] = 'строчных букв - не менее {$a}';
$string['informminpasswordnonalphanum'] = 'символов, не являющихся буквами и цифрами - не менее {$a}';
$string['informminpasswordupper'] = 'прописных букв - не менее {$a}';
$string['informpasswordpolicy'] = 'Пароль должен содержать {$a}';
$string['instructions'] = 'Инструкции';
$string['internal'] = 'Внутренний';
$string['locked'] = 'Заблокировано';
$string['md5'] = 'MD5-шифрование';
$string['nopasswordchange'] = 'Пароль изменить нельзя';
$string['nopasswordchangeforced'] = 'Вы не можете продолжать работу без смены пароля, однако страница для его изменения не доступна. Пожалуйста, свяжитесь с администратором сайта.';
$string['noprofileedit'] = 'Профиль не может быть изменен';
$string['ntlmsso_attempting'] = 'Попытка аутентификации Single Sign On через NTLM ...';
$string['ntlmsso_failed'] = 'Автоматический вход не удался, попробуйте обычную страницу входа...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO отключен.';
$string['passwordhandling'] = 'Поле обработки пароля';
$string['plaintext'] = 'Текст';
$string['pluginnotenabled'] = 'Плагин аутентификации «{$a}» не включен.';
$string['pluginnotinstalled'] = 'Плагин аутентификации «{$a}» не установлен.';
$string['potentialidps'] = 'Войти с использованием учетной записи:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA служит для предотвращения злоупотреблений со стороны автоматизированных программ. Просто введите слова в поле, в том же порядке и разделенные пробелом.

Если Вы не можете разобрать слова, Вы можете попробовать другую CAPTCHA или аудио-CAPTCHA.';
$string['selfregistration'] = 'Самостоятельная регистрация';
$string['selfregistration_help'] = 'Если выбран такой плагин аутентификации, как самостоятельная регистрация по электронной почте, у потенциальных пользователей появляется возможность самостоятельно зарегистрироваться и создать учетную запись. Это может привести к тому, что спамеры начнут создавать учетные записи, чтобы использовать форумы, блоги и т.п. для распространения спама. Чтобы уменьшить риск, нужно отключить самостоятельную регистрацию или ограничить ее, заполнив поле <em>Разрешенные почтовые домены</em>';
$string['sha1'] = 'SHA-1-шифрование';
$string['showguestlogin'] = 'Вы можете выбрать: показывать или нет кнопку гостевого доступа в систему.';
$string['stdchangepassword'] = 'Использовать стандартную страницу смены пароля';
$string['stdchangepassword_expl'] = 'Если внешняя система аутентификации позволяет изменение пароля через Moodle - выберите Да. Этот параметр преобладает над параметром «Адрес страницы смены пароля».';
$string['stdchangepassword_explldap'] = 'ПРИМЕЧАНИЕ: рекомендуется подклюаться к серверу LDAP через зашифрованный SSL-туннель (ldaps://), если сервер LDAP установлен не на локальном компьютере.';
$string['suspended'] = 'Учетная запись заблокирована';
$string['suspended_help'] = 'Пользователь, учетная запись которого заблокирована, не может входить в систему и пользоваться веб-службами. Сообщения, адресованные таким пользователям, не доставляются.';
$string['testsettings'] = 'Проверка настроек';
$string['unlocked'] = 'Разблокировано';
$string['unlockedifempty'] = 'Разблокировано, если пусто';
$string['update_never'] = 'Никогда';
$string['update_oncreate'] = 'При создании';
$string['update_onlogin'] = 'При каждом входе';
$string['update_onupdate'] = 'При обновлении';
$string['user_activatenotsupportusertype'] = 'аутентификация: ldap user_activate() не поддерживает выбранный тип пользователя: {$a}';
$string['user_disablenotsupportusertype'] = 'аутентификация: ldap user_disable() не поддерживает выбранный тип пользователя (..еще)';
