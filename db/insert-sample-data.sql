USE foodblogdb;

INSERT INTO users (username, password_hash, fullname) VALUES ('iuli', '$2y$10$QlKthcuYhn.XP/gy5A/OZeQdOzIznqxqOf/qBrSAnGpoW4labIL0W', 'IulainHristov');
INSERT INTO users (username, password_hash, fullname) VALUES ('rali', '$2y$10$XViubT.zSoBtskZmKl6kdOX8Yq7T7tLrcrLn/5dkAqbgjVACeFUGe', 'Ralica Ivanova');
INSERT INTO users (username, password_hash, fullname) VALUES ('mimi', '$2y$10$gzlpX/N5apTruTBajMJwM.0h9OgLVgQxk6N0YhGy2iY4BI73SYkKO', 'Maria Draganova');
INSERT INTO users (username, password_hash, fullname) VALUES ('ani', '$2y$10$9T9bN6ctJ4R.fdnLvzsdQOj0sk4mWqwohILMx60/jP1YEXtJguhD2', 'Ani Georgieva');
INSERT INTO users (username, password_hash, fullname) VALUES ('jonkata', '$2y$10$aIOC0qiNK1mjZdUUbuj/Teh49VI/g9xanuWCNYEUruwcvOGVaXOGK', 'Ivan Ivanov');
INSERT INTO users (username, password_hash, fullname) VALUES ('tasko810', '$2y$10$I5y7X1ZilitEZYOztOI5SuA2rBeRJUj/ZhlgmSZK32LPqaqh3Gy3q', 'Tasko Taskov');

INSERT INTO posts (title, content, date, authorid, category) VALUES ('Сандвичи с пуешко филе и черен хляб', '<p>Продукти:</p>
<p>(За 2  порции)</br> 4 филии черен хляб</br> 200 г пуешко филе</br> 1 с.л. горчица</br>80 г моцарела</br>Време за приготвяне:</br>10 минути</p>
<p><b>Рецепта:</b></p> <p>Филиите хляб (4 филии) се разрязват по диагонал и се намазват с малко количество горчица (1 с.л.). Между тях се поставят тънки резени пуешко филе (200 г) и моцарела (80 г). Затварят се и се поставят в тостер. Изпичат се, докато станат златисти. Сервират се веднага и са много апетитни.</p>
', '2016-08-30', 1, 'breakfasts');

INSERT INTO posts (title, content, date, authorid, category) VALUES ('Сладкиш Негърче', '<p>Продукти:</p>
<p>За 8  порции</br> За тестото:</br> <ul> <li> 1/2 кг брашно</li> <li>1 кофичка кисело мляко </li><li>1 с.л. сода бикарбонат</li><li>1 ч.ч. захар </li><li>1/2 к.ч. олио</li><li>1 ч.л. канела </li><li>4 с.л. какао </li></ul> </p>
 </br> За заливката: </br> <ul> <li>50 мл. вода </li> <li>1 ч.ч. пудра захар </li><li>100 г масло </li><li>1 с.л. какао  </li></p>
 <p><b>Рецепта:</b></p> <p>
Киселото мляко(1 кофичка) се разбива със содата(1 с.л.). Добавят се постепенно захарта(1 ч.ч.) и всички други съставки на тестото при непрекъснато разбиване. Сместта се изсипва в тавичка и се пече в предварително загрята до 180-200 градуса фурна.
Оставя се да изстине, нарязва се на парчета и се залива с горещата заливка.
Заливката се приготвя като всичките й съставки се оставят да поврат 3 минути. </p>
', '2016-08-31', 2, 'desserts');