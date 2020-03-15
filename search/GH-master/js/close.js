$(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
       // PopUpHide();
       $('#popup1').css({
        visibility:"collapse"
       });
    });
    //Функция отображения PopUp
    function PopUpShow(){
        $("#popup1").show();
    }
    //Функция скрытия PopUp
    function PopUpHide(){
      //  document.getElementById('popup1').remove()
                $('#popup1').remove();
    }