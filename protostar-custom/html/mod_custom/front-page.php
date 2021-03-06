<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$document = JFactory::getDocument();
$attribs  = array();
$attribs['style'] = 'none';
?>

<script type="text/javascript">
    if (!document.getElementById('id2iniqueid')) {
        var link = document.createElement('link');
        link.id = 'id2iniqueid';
        link.rel = 'canonical';
        link.href = 'https://studysnami.ru/';
        document.head.appendChild(link);
    }
</script>

<?php $cardHeaderText = '
<h3>АКЦИИ И ПРЕДЛОЖЕНИЯ</h3>
<p>Мы предлагаем самые интересные и стоящие <b><a href="/index.php/ru/ru-offers">акции и
            скидки</a></b> на курсы английского языка за границей. Сезонные распродажи, специальные акции от школ
    английского языка.</p>';
 require JModuleHelper::getLayoutPath('common-parts', 'card-header-text'); ?>

<?php
$hotOffersFeed = JModuleHelper::getModuleById("126");
echo JModuleHelper::renderModule($hotOffersFeed, $attribs);
?>

<?php $cardHeaderText = '
<h3>ОТЗЫВЫ</h3>
<p></p>';
 require JModuleHelper::getLayoutPath('common-parts', 'card-header-text'); 
?>

<?php
$feedbackFeed = JModuleHelper::getModuleById("133");
echo JModuleHelper::renderModule($feedbackFeed, $attribs);
?>

<?php
// $hotOffersFeed = JModuleHelper::getModuleById("126");
// echo JModuleHelper::renderModule($hotOffersFeed, $attribs);
?>

<?php $cardHeaderText = '
<p>Кто такие и как работают "агентства образовательных услуг"?</p>';
 require JModuleHelper::getLayoutPath('common-parts', 'card-header-text'); 
?>


<?php
$howItWorks = JModuleHelper::getModuleById("132");
echo JModuleHelper::renderModule($howItWorks, $attribs);
?>



<?php $cardHeaderText = '<h3 class="text-danger ">УЧИТЕ АНГЛИЙСКИЙ ЗА РУБЕЖОМ</h3>
    <ul style="list-style-image: url("images/315_SitePics/lists_tick_mark_004.png");">
        <li><b><a href="https://studysnami.ru/index.php/ru/15-3-ru/ru-studies/ru-business-studies">Карьерный</a></b> рост,
            перспективное будущее</li>
        <li>Неповторимый жизненный опыт и <b><a href="https://studysnami.ru/index.php/ru/26-3-ru/ru-locations/18-ru-locations">впечатления</a></b>, личный
            рост</li>
        <li>Новые друзья, расширение кругозора общения, эмоционального интеллекта</li>
    </ul>
    Ваши лучшие курсы английского языка - с нами. <b><a href="https://studysnami.ru/index.php/ru/ru-contacts" class="w3-medium">Связаться с нами</a></b>';
 require JModuleHelper::getLayoutPath('common-parts', 'card-header-text'); 
?>




<!-- END OF NEWS !!  -->

<!-- STUDIES AND COURSES -->

<?php $cardHeaderText = ' <h3>КУРСЫ АНГЛИЙСКОГО ЯЗЫКА И ПРОГРАММЫ</h3>
    <p>Мы предлагаем полный спектр <b><a href="https://studysnami.ru/index.php/ru/ru-studies">курсов английского
                языка</a></b> на Мальте. Програмы английского языка для любых целей и возрастов: для детей, для для поступления
        в магистратуру, для сдачи экзаменов, для работы - и других целей. Мы имеем долгий опыт работы на Мальте и наш
        консультат будет рад бесплатно <b><a href="https://studysnami.ru/index.php/ru/ru-contacts" class="w3-medium">ответить</a></b> на любые Ваши вопросы .</p>';
 require JModuleHelper::getLayoutPath('common-parts', 'card-header-text'); 
?>


<?php
$coursesFeed = JModuleHelper::getModuleById("131");
echo JModuleHelper::renderModule($coursesFeed, $attribs);
?>

<?php $cardHeaderText = '<h3>РАЗМЕЩЕНИЕ, ПРОЖИВАНИЕ И ТУРИЗМ</h3>
    <p>Мальта - лучшее направление в Европе для изучения английского языка. И одно из лучших - для туризма и пляжного
        отдыха. Здесь вы не только сможете выучить английский с нуля, но также и зарядиться морем, солнцем и южным
        европейским спокойствием "с нуля" и на весь год вперед. Мы находимся непосредственно на Мальте и поможем Вам выбрать
        оптимальный вариант проживания- <b><a href="https://studysnami.ru/index.php/ru/ru-contacts" class="w3-medium">
                обращайтесь</a></b> !</p> ';
 require JModuleHelper::getLayoutPath('common-parts', 'card-header-text'); 
?>



<div class="row no-gutters-sm ">

    <div class="col-4 user-animate-top01" style="margin-bottom:1em;margin-top:1em;">
        <div class="card">
            <a href="https://studysnami.ru/index.php/ru/ru-accommodation-and-locations">
                <img src="images/305_FrontPage/Accomodation_001.jpg" class="card-img-top w3-hover-sepia img-fluid" />
            </a>
            <div class="card-body user-text-dark-red  ">
                <b>ПРОЖИВАНИЕ</b>
            </div>
        </div>
    </div>

    <div class="col-4 user-animate-top01" style="margin-bottom:1em;margin-top:1em;">
        <div class="card">
            <a href="https://studysnami.ru/index.php/ru/26-3-ru/ru-locations/18-ru-locations">
                <img src="images/305_FrontPage/Locations_001.jpg" class="card-img-top w3-hover-sepia img-fluid" />
            </a>
            <div class="card-body user-text-dark-red  ">
                <b>ГОРОДА И РЕГИОНЫ</b>
            </div>
        </div>
    </div>


</div>


<div class="row no-gutters-sm">
    <a target="_blank" href="https://studysnami.ru/index.php/ru/ru-contacts" class="bckg_red_01 user-animate-top01" style="display:inline-block;">СВЯЗАТЬСЯ С НАМИ</a>

    <p></p>
</div>


<?php $cardHeaderText = '<h3>КУРСЫ АНГЛИЙСКОГО ЯЗЫКА ЗА ГРАНИЦЕЙ</h3>
    <p>Английский, английский и еще раз английский! Английский язык и знают и учат по всему миру. На Мальте Вы сможете
        найти любые необходимые лично Вам и вашим близким и друзьями курсы английского языка. Индивидуально подобранные
        уроки, профессионально разработанные учебные программы и планы. Школы европейского уровня. Квалифицированные и
        лицензированные педагоги. Английский для начинающих. Английский для профеессиональных нужд. Мы уверены, что Вы
        останетесь довольны проведенным на Мальте временем и затраченными силами. Английский на Мальте - отличный и
        эффективный способ изучения английского языка в общем случае, и один из лучших среди других вариантов изучения
        английского за рубежом! Любая поездка на дальнее расстояние - это существенная статья расходов для семейного
        бюджета. Покупая путевку на море мы едем за здоровьем, отдыхом и хорошими впечатлениями. Во время поездки на Мальту
        к этому списку добавляется ещё и польза изучения иностранного языка. Кто знает, возможно, когда-нибудь именно это
        финансовое вложение в изучение английского языка и обеспечит хороший "возврат инвестиций" от Вашей поездки на Мальту
        в виде продвижения по службе, трудоустройства или прибыльных сделок в бизнесе с иностранными партнерами Вам или
        членам Вашей семьи. Самыми популярными являются краткорочные курсы английского языка за рубежом. Доступные
        большинству по продолжительности. Расписание адаптировано к совмещению с семейным отдыхом. А учебные планы
        разработаны таким образом, чтобы в короткий срок преподать определенный объем устойчивых знаний и навыков.</p> ';
 require JModuleHelper::getLayoutPath('common-parts', 'card-header-text'); 
?>

<p></p>

<?php $cardHeaderText = '<h3>НУЖНО ЛИ ГОТОВИТЬСЯ К ПОЕЗДКЕ ДЛЯ ИЗУЧЕНИЯ АНГЛИЙСКОГО ЗА РУБЕЖОМ?</h3>
    <p>Зависит от Вашего бюджета, временных возможностей, целей и многих других факторов. Если вы рассматриваете изучение
        английского как дополнение к туристическому отдыху, а с бизнесом и карьерой у вас и так уже "все в порядке". То
        можете быть уверенным, что и безо всякой подготовки вы сможете получить существенный прогресс и в короткие сроки, и
        без предварительной подготовки. Даже с нуля. </p>
    <p>Если же изучение английского языка является главной целью. В таком случае - однозначно - чем больше домашней работы
        Вы проделаете, тем до более "высокой" ступени владения языком сможете добраться во время изучения в школах! </p> ';
 require JModuleHelper::getLayoutPath('common-parts', 'card-header-text'); 
?>
