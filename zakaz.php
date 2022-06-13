<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro Sport</title>
    <link rel="stylesheet" href="./css/style5.css">
</head>

<body>

    <img src="./img/fon_saita.jpg"> 

    <header>

        <div class="Pro">Pro</div>
        <div class="Sport">Sport</div>
           <ul class="menu">
             <li> <a href="o nas.html" class="O_nas">О Нас</a></li>
             <li> <a href="/" class="Otzivi">Отзывы</a></li>
             <li> <a href="/" class="Kontakti">Контакты</a></li>
             <li> <a href="glavnaya.html" class="Glavnaya"> Главная</a></li>
             <li class="tovari_for_sport">товары для спорта</a></li>
           </ul>

         

         </header>

            <main>
              
              <div class="modal none">
                <div class="modal__inner">
                  <div class="modal__wrapper">
                    <div class="modal__title">Привет</div>
                    <div class="modal__close">закрыть</div>
                  </div>
                  
                  <div class="modal__text">Пока</div>
                </div>
              </div>
              <form id="main-form">

  <!-- ФИО -->
   <p class="fio_forma">ФИО</p>
    <input 
    type="text" 
    class="forma_fio_fon" 
    maxlength="100"
    id="fio"
    name="fio"
    placeholder="Ваше ФИО"
    data-reg="^[А-ЯЁ] [а-яё]*$"     
    />
    <!-- <label class="label" for="name">Только русские буквы</label> -->
  

    <!-- EMAIL -->
    <p class="email_forma">E-mail</p>
      <input 
      type="email" 
      class="email_fon" 
      maxlength="100"
      placeholder="Введите email"
      id="email"
      name="email"
      required
      data-reg="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$"
      />
      <!-- <label class="label1" for="email">В форматe: admin@mail.ru</label> -->
    

    <!-- ТЕЛЕФОН -->
    
      <p class="adres_forma">Номер телефона</p>
      <input 
      type="text" 
      class="adres_fon" 
      maxlength="100"
      placeholder="Введите телефон"
      id="phone"
      name="phone"
      data-reg="^((\+7|7|8)+([0-9]){10})$"
      />
      <!-- <label class="label2" for="phone">В формате: +7900..., 7900..., 8900...</label>  -->
     
    
    <!-- ДОСТАВКА -->
    <p class="nomer_tovara_forma">Адрес доставки/Номер товара/Размер, если имеется</p>
    <input type="text" 
    class="nomer_tovara_fon" 
    maxlength="100" 
    placeholder="Сообщение"
    id="adres"
    name="adres"
    />

    <!-- <div class="kupit_fon"></div>
    <a href="spasibo.html" class="kupit">Купить</a> -->

    <!-- КНОПКА КУПИТЬ -->
    <input type="submit" class="btn" 
    name="submit" value="Купить">
    </input>


    

    

    <!-- <div>
      
      <div class="black_card_fon"></div>             
      <div class="black_card_face"></div>
      

        <div class="card_face"></div>
       <div class="card_fon"></div>
       <div class="layer"></div>

       <input class="fio_fon" maxlength="20">

       <p class="nomer_card" >Номер карты</p>

       <input type="text" class="vladelec_fon" maxlength="30">

       <p class="vladelec_card">Владелец карты</p>
       <p class="visa">Visa</p>

       <input type="text" class="cvc_fon">

       <p class="cvc">CVC2/CVV2</p>
                                  

    </div> -->
    


              </form>

             
             

        

              </main>

              <footer>
                <p class="Podpisivaytes">подписывайтесь в соцсетях</p>
        
                <a href="https://vk.com/kreviks" class="vkk">
                  <img class="vk" src="img/svg/vk 1.svg">
                </a>
                   
                <a href="https://t.me/sportmasterofficial" class="tgg">
                 <img class="tg" src="/img/svg/telegram (1) 1.svg">
               </a>
                    
               <a href="https://www.youtube.com/c/smeshariki" class="youtubee">
                 <img class="youtube" src="/img/svg/youtube 1.svg">
               </a>
         
               <a href="https://vk.com/sportmaster" class="imsta">
                 <img class="instagram" src="/img/svg/instagram (1) 1.svg">
               </a>
          
               </footer>
        
    
               <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    </body>