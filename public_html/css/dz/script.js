function list() {
      const open = $('.list'); /* переменная открывает блок */

      open.on('click', function () {
         /* блок, на который мы тыкнули прячем в конец слайдера */
      $(this).parent().appendTo('.images').fadeOut;

         const parent = $(this);
         let prevOpen = $('section.open'),
           sectionItem = $('section.item'),
           slider = $('#slider'),
           nextSection = $('[data-id='+parent.attr('id')+']');

         /* Отодвигаем секцию сослайдами через 500мс на 75% по Х при клике на блок open */
         setTimeout(function () {
            slider.css({"transform": "translateX(75%)"});
         }, 600);
         /*Возвращаем секцию в начальное положение*/
         open.mouseenter(function () {
            slider.css({"transform": "translateX(0)"});
         });

         /* делаем я-index меньше, чем у активного, что бы не было проблем с появлением изображений */
         prevOpen.css({
            "z-index": "1"
         });

            /* Ставим ищем нужную секцию по дата атрибуту */
         if ( parent.attr('id') === nextSection.attr('data-id') ) {
            nextSection.removeClass('close').addClass('open ').css({
               "background-image": nextSection.attr("data-bg")
            });

            /* увеличиваем область видимости для эффекта появления секции */
            nextSection.css({"clip-path": "circle(70.9% at 50% 50%)", "transition" : "clip-path 1.5s"});

            /* прячем слайдер и отодвигаем его вправо */
            let wrapper = $('.wrapper');
            wrapper.css({"opacity" : "0", "transition" : "opacity 0.5s"});
            setTimeout(function () {
               wrapper.css({"opacity" : "1", "transition" : "opacity 1.5s"});
            }, 1500);
         }

         /* добавляем бэкграунд текущего блока обертке, что бы при смене активног элемента у нас не было белого фона */
         $('.sections').css({
            'background-image': prevOpen.attr("data-bg")
         });

         /* Всем секциям, не являющимся открытой мы меняем классы на нужные   */
         sectionItem.not(nextSection).removeClass('open ').addClass('close').css({"clip-path": "circle(7.9% at 50% 50%)", "transition" : "clip-path 3s"});


      });
   }
   list();

   /* Бесконечный слайдер с возможностью прокрутки колесом мыши (на счет тач устройств пока не известно) */
   function cut() {
    const speed = 500;
    let pictW,imgW,n,pict,img,currentM,end=true;
    pict = $('#slider .pict');
    img = $('#slider .images');
    pictW = parseInt(pict.width());
    n = pict.length;
    imgW=(n+1)*pictW;
    img.width(imgW);
    currentM = -pictW;

    /* Меняем слайды колесиком мыши */
    $('#slider').bind({
        mouseenter: function() {
            $(this).on('wheel', (function(e) {
                e.preventDefault();
                if (e.originalEvent.deltaY < 0) {
                    if(end) {
                        end=false;
                        currentM = currentM + pictW;
                        img.animate({
                            marginLeft: currentM
                        }, speed,  function () {
                            end = true;
                            $('.pict').last().prependTo('.images');
                            currentM = currentM - pictW;
                            img.css('marginLeft',currentM);
                        });
                    }
                } else {
                    if(end) {
                        end=false;
                        currentM = currentM - pictW;
                        img.animate({
                            marginLeft: currentM
                        }, speed,  function () {
                            end = true;
                            $('.pict').first().appendTo('.images');
                            currentM = currentM + pictW;
                            img.css('marginLeft',currentM);
                        });
                    }
                }
            }));
        }
    });
}
   cut ();