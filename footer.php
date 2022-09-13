<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package museum
 */

?>

<footer class="footer">
    <div class="top-footer">
        <div class="wrapper">
            <div class="top-content">
                <div class="left-side">
                    <div class="col">
                        <h4 class="title">О музее</h4>
                        <nav class="nav">
                            <ul class="nav-list">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link" role="link">
                                        Главная
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/photo.html" class="nav-link" role="link">
                                        Фотогаллерея
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/history.html" class="nav-link" role="link">
                                        Исторический блок
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/contacts.html" class="nav-link" role="link">
                                        Контакты
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col">
                        <h4 class="title">Посетителям</h4>
                        <nav class="nav">
                            <ul class="nav-list">
                                <li class="nav-item">
                                    <a href="./pages/news.html" class="nav-link" role="link">
                                        Новости
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/expo.html" class="nav-link" role="link">
                                        Экспозиция
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pages/prices.html" class="nav-link" role="link">
                                        Экскурсии и цены
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col">
                        <nav class="nav">
                            <a href="./pages/r-center.html" class="nav-link nav-link-mo" role="link">Ресурсный центр
                                по
                                поддержке
                                добровольчества</a>
                        </nav>
                    </div>
                    <address>
                        <p class="street">214000, г.Смоленск, ул.Большая Советская, д.29/1</p>
                        <a href="tel:74812380917" class="tel">+7 (4812) 38-09-17</a>
                        <a class="mail" href="mailto:navy-museum@mail.ru">
                            navy-museum@mail.ru
                        </a>
                    </address>
                    <a href="#" class="mail-rating"></a>
                </div>
                <div class="col">
                    <h4 class="title">Мы в соц. сетях:</h4>
                    <ul class="socials-list">
                        <li class="social-item">
                            <a href="#" class="social-link icon telegram-icon">

                            </a>
                        </li>
                        <li class="social-item">
                            <a href="#" class="social-link icon vk-icon">

                            </a>
                        </li>
                        <li class="social-item">
                            <a href="#" class="social-link icon ok-icon">

                            </a>
                        </li>
                        <li class="social-item">
                            <a href="#" class="social-link icon trip-icon">

                            </a>
                        </li>
                    </ul>
                    <address>
                        <p class="street">214000, г.Смоленск, ул.Большая Советская, д.29/1</p>
                        <a href="tel:74812380917" class="tel">+7 (4812) 38-09-17</a>
                        <a class="mail" href="mailto:navy-museum@mail.ru">
                            navy-museum@mail.ru
                        </a>
                    </address>
                    <a href="#" class="mail-rating"></a>
                </div>
            </div>
            <div class="bottom-content">
                <a href="./index.html" class="logo-link">
                    <img src="./assets/img/white-logo.svg" alt="МОЛОДЁЖНЫЙ ЦЕНТР-МУЗЕЙ ИМЕНИ АДМИРАЛА НАХИМОВА"
                        class="logo">
                </a>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="wrapper">
            <div class="col">
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="#" class="nav-link" role="link">Юридическая информация</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" role="link">Политика конфинденциальности</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="copyrights">
                © СОГБУК «Молодёжный центр-музей имени адмирала Нахимова», 2022
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="<?php echo get_teamplate_directory_uri();?>/scripts/seeMore.js"></script>
<script type="module" src="<?php echo get_teamplate_directory_uri();?>/scripts/swiper.js"></script>
<script src="<?php echo get_teamplate_directory_uri();?>/scripts/openFindMenu.js"></script>
</body>

</html>