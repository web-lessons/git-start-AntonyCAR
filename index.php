<?php
require_once "template/header.php";
?>

<main role="main" class="col-md-9 col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Главная</h1>
    </div>
</main>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
            <img src="img/panorama3.jpg" height='432px' width='100%' class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="2000">
            <img src="img/panorama2.jpg" height='10%' class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/panorama.jpg" height='432px' class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<table width="85%" height="100%" border="0" valign="top" align="center" cellpadding="3">
    <tr>
        <td valign="top" bgcolor="white" height="10%">
            <h4>
                <p>Показать Новосибирск деловым партнерам, коллегам, друзьям или родственникам-дело интересное, но
                    хлопотное.
                    Мы готовы предложить Вам профессиональных экскурсоводов,<br>
                    которые расскажут и покажут все достопримечательности Новосибирска
                </p>
            </h4>
        </td>
    </tr>
    <tr>
        <td valign="top" bgcolor="white" height="10%">
            <h4>
                <p>Если вы впервые оказались в столице Сибири или живете здесь, но не знаете историю, экскурсии по
                    Новосибирску– это как раз то, что может
                    вас заинтересовать. Ведь грамотный и дружелюбный проводник, как никто другой, способен
                    рассказать о любом месте всё самое интересное, раскрыть его загадки, развеять мифы и – кто
                    знает! – вызвать в госте города желание задержаться здесь…
                </p>
            </h4>
        </td>
    </tr>
    <tr>
        <td valign="top" bgcolor="white" height="10%">
            <h4>
                <p>Можно сказать с уверенностью: чтобы гости города могли разведать и изучить все
                    достопримечательности Новосибирска, экскурсии должны продолжаться несколько дней без перерыва на
                    отдых и еду! Пожалуй, экскурсии одного дня и даже экскурсий на выходные недостаточно, чтобы в
                    полной мере познакомиться с сердцем Сибири. С другой стороны, однодневные экскурсии по
                    Новосибирску для иностранцев и жителей других областей России хороши тем, что под вечер этого
                    дня вы непременно почувствуете желание вернуться в этот город!
                </p>
            </h4>
        </td>
    </tr>
    <tr>
        <td valign="top" bgcolor="white" height="10%">
            <img src="smt.png" alt="">
        </td>
    </tr>
</table>
<?php
require_once "template/menu.php";
require_once "template/footer.php";
?>