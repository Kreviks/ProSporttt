const btn = document.querySelector('.btn');

const fio = document.querySelector('.forma_fio_fon');
const mail = document.querySelector('.email_fon');
const phone = document.querySelector('.adres_fon');
const message = document.querySelector('.nomer_tovara_fon');

const modal = document.querySelector('.modal');
const title = document.querySelector('.modal__title');
const text = document.querySelector('.modal__text');
const closeModal = document.querySelector('.modal__close');

btn.addEventListener("click", function(e){
  e.preventDefault()
  // если не все поля заполнены
  if(fio.value=='' || mail.value =='' || phone.value=='' || message.value==''){
    title.innerHTML = "Погодите-ка"
    text.innerHTML = "Все поля должны быть заполнены!"
    modal.classList.remove('none');
  }
  // если все поля заполнены
  if (fio.value!='' && mail.value !='' && phone.value!='' && message.value!=''){
    //если у email нет собачки @
    if (!mail.value.includes('@')){
      title.innerHTML = "Стоп..."
      text.innerHTML = "Некорректный email"
      modal.classList.remove('none');
    }
    // иначе если длина телефона не равна 11
    else if(phone.value.length != 11){
      title.innerHTML = "Стоп..."
      text.innerHTML = "Некорректный телефон"
      modal.classList.remove('none');
    }
    // иначе проверяем телефон с помощью регулярного выражения чтобы он состоял только из цифр
    else if (!/^[0-9]+$/.test(phone.value)){
      title.innerHTML = "Стоп..."
      text.innerHTML = "Некорректный телефон"
      modal.classList.remove('none');
    }
    // когда всё хорошо
    else{

      $.ajax({
        url: 'ajax.php',
        type: 'POST',
        cache: false,
        data: {'fio': fio.value, 'email': mail.value, 'phone': phone.value, 'address': message.value},
        dataType: 'html',
        beforeSend: function(){
            $("#btn").prop("disabled", true);
        },
        success: function(){
            title.innerHTML = "Спасибо!"
            text.innerHTML = "Ваши данные успешно отправлены"
            modal.classList.remove('none');
            // сбрасываем введеные данные с инпутов
            fio.value = '';
            mail.value ='';
            phone.value = '';
            message.value = '';
            $("#btn").prop("disabled", false);
        }            
    });

      
    }
  }

});

window.onclick = function(e){
  if(e.target==modal) modal.classList.add('none');
}

closeModal.onclick = function(e){
  modal.classList.add('none');
}