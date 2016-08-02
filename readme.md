# Laravel Task

1) Завантажити себя локальний, через Git clone https://gitlab.com/kosovmax-developer/laravel_task.git;

2) Потрібно обновити composer.json, відкирити термінал composer update

3) Копіювати файл .env.example на .env

Там вже готове, заповнив коду(БД, Емайл, Соц.мережі), а ви самі заповини логін і пароль, id і т.д.

Заповнити свій gmail, потрібно дозволити доступ [Gmail access](https://www.google.com/settings/security/lesssecureapps?rfn=27&rfnc=1&asae=2&anexp=lbe2-R1_B)

І авторизація соц.мережі, потрібно стоврити client_id, client_secret:

 - [VK Deveroper](https://vk.com/apps?act=manage)
 
 - [Google+ Deveroper](https://console.cloud.google.com/)
 
 - [Facebook Deveroper](https://developers.facebook.com/)
 
 - [Twitter Deveroper](https://dev.twitter.com/)
 
 - [Linkedin Deveroper](https://developer.linkedin.com/)
 
 - [GitHub Deveroper](https://github.com/settings/applications)
 
 - [BitBucket Deveroper](https://bitbucket.org/account/)

4) Відкрити термінал, генератор ключ: php artisan key:generate; 

5) Запускити міграція: php artisan migrate

6) Запускити серве php artisan serve

Відкирит сайт [http://localhost:8000/](http://localhost:8000/)

Працює сайт)

