<title>News</title>
<link rel='stylesheet' href='css/index.css'>
<script>

    $(document).ready(function(){
            //Скрипт бокового меню jQuery
        $('#menu_button').click(function(){

            if($('#side_menu').css('left') == '-180px') {
                $('#menu_button').css('transform', 'rotate(-90deg)');
                $('#side_menu').stop().animate({
                    left : '0'
                },500);

                if($('#login_div').css('opacity') == '1'){
                        $('#login_div').stop().animate({
                        opacity:'0'
                    },500);
                }

            } else {
                $('#menu_button').css('transform', 'rotate(0deg)');
                $('#side_menu').stop().animate({
                    left : '-180px'
                },500);
            }

        });

        //Скрипт который закрывает боковое меню при клике по любой точке
        $('body').click(function(){
            if($('#side_menu').css('left') == '0px'){
                $('#menu_button').css('transform', 'rotate(0deg)');
                $('#side_menu').stop().animate({
                    left : '-180px'
                },500);
            }

            if($('#login_div').css('opacity') == '1'){
                $('#login_div').stop().animate({
                    opacity:'0'
                },500);
            }
        })

        //Скрипт для всплывающего меню входа
        $('#open_singn_up').click(function(evt){
            evt.preventDefault();
            if($('#login_div').css('opacity') == '0'){

                //$('#login_div').css('display','inline-block');

                $('#login_div').stop().animate({
                    opacity:'1'
                },500);

            }else{
                $('#login_div').stop().animate({
                    opacity:'0'
                },500);
            }
            //$('#login_div').css('display','none');
        });

        //Проверка форм на заполненость
        $('#main_login').validate();
    });
</script>
<!--Лента с новостями, обертка div-->
<div id='main_news'>

    <!--<h3>Новости</h3>-->


        <div>
            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <p class="more"><a href="#" class="main_button">Перейти</a></p>
        </div>

        <div>
            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <p class="more"><a href="#" class="main_button">Перейти</a></p>
        </div>

        <div>
            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>

            <p class="more"><a href="#" class="main_button">Перейти</a></p>
        </div>

        <div>
            <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
            <p class="more"><a href="#" class="main_button">Перейти</a></p>
        </div>


</div>

<!--Лента популярные, правый sidebar-->
<div id='most_popular'>

    <h3>Популярное</h3>

    <div>
        Информации в сети становится всё больше, взаимодействие пользователей с сайтами всё короче, а их требования к страницам в интернете всё выше. Приёмы и инструменты веб-дизайна, которые казались новыми и интересными ещё год назад, сегодня уже не вызывают былого восторга, а зачастую и вовсе раздражают.
        В связи с этим веб-дизайнеры постоянно работают над усовершенствованием пользовательского опыта, опираясь на технологические возможности мобильных устройств, аналитику и пользовательский фидбек.
    </div>

    <div>
        Карточный дизайн уходит в прошлое
        Уже несколько лет дизайнерами активно эксплуатируется карточная структура сайта. Такая визуализация получила широкое распространение из-за сайта Pinterest и благодаря развитию адаптивных сайтов. Блоки действительно очень удобно адаптировать под любой размера экрана. Пик развития карточного дизайна наблюдается сейчас, но, скорее всего, он постепенно станет терять свои позиции. На смену ему будет приходить уникальный чистый дизайн с простой или же наоборот более оригинальной структурой.
    </div>

    <div>
        В связи с этим веб-дизайнеры постоянно работают над усовершенствованием пользовательского опыта, опираясь на технологические возможности мобильных устройств, аналитику и пользовательский фидбек.
        Вот шесть трендов веб-дизайна, которые, скорее всего, получат своё развитие в 2017 году.
    </div>

</div>
