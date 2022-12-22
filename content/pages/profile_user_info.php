
<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="./content/styles/utilities.css">
    <link rel="stylesheet" href="./content/styles/profile_user_info.css">
</head>

<body>

    <div class="user_data wrapper">
        <h1>Профиль</h1>
        <h2>Персональная информация</h2>
        
        <form method="post">


            <form>
            <div class="choice_sex">
                <input checked type="radio"
                name="sex"value="Женщина">
                <label>Женщина</label>

                <input type="radio" 
                name="sex" value="Мужчина">
                <label>Мужчина</label>
            </div>
            </form> 


            <div class="info_plase">
                <p>Имя</p>
                <input class="user_data_input" type="text" name="" id="" placeholder="Не указано">
            </div>

            <div class="info_plase">
                <p>Фамилия</p>
                <input class="user_data_input" type="text" name="" id="" placeholder="Не указано">
            </div>

            <div class="info_plase">
                <p>Дата рождения</p>
                
                <input class="user_data_input" type="date" min="1900-01-01" max="2022-12-31" >
            </div>  
            <div class="info_plase">
                <p>Телефон</p>
                <input class="user_data_input phone" type="tel" placeholder="Не указано">
            </div>

            <div class="info_plase">
                <p>Адрес элетронной почты</p>
                <input class="user_data_input" type="email" maxlength=40 name="" id="" placeholder="Не указано">
            </div>
            <br>
        </form>


        <form>
            <button class="exit">Выход</button>
        </form>

    </div>
    
    <br>   
    <br>   




</body>
</html>


