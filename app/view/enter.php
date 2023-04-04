<!DOCTYPE html>
<html>
    <head>
        <title>Haruproject</title>
        <link rel="icon" href="/assets/img/favicon.svg">
        <?php include "common/head.php" ?>
    </head>
    <body>
        <header>
            <div class="Schedulertoolbar">
                <div></div>
                <div>
                    <button>
                        <svg viewBox="0 0 512 512">
                            <path d="M344.367,379.396c-16.358-6.115-21.008-15.644-21.008-27.966c0-8.164,0-18.352,0-32.336
                                c2.42-5.007,12.244-28.845,17.487-58.563c12.238-4.37,19.233-11.358,27.965-41.949c4.856-17.009,0.82-24.794-4.142-28.39
                                c1.252-1.699,2.322-3.497,3.066-5.462c10.485-27.966,22.199-155.896-77.44-162.535c-28.231-26.577-59.785-29.9-99.639-6.646
                                c-39.854,23.254-49.217,66.424-53.138,96.316c-4.105,31.235,6.464,79.86,6.464,79.86l0.971,0.136
                                c-3.953,4.173-6.434,11.972-2.223,26.721c8.732,30.59,15.72,37.579,27.958,41.949c5.243,29.718,15.25,50.058,17.488,58.563
                                c0,13.984,0,24.172,0,32.336c0,12.321-6.123,22.723-21.001,27.966C138.556,389.487,37.179,419.06,44.941,512h422.121
                                C474.824,419.06,372.787,390.033,344.367,379.396z"/>
                        </svg>
                        <p>Войти</p>
                    </button>
                </div>
            </div>
        </header>
        <section class="Common">
            <h1><?= var_dump($router->path) ?></h1>
            <h1 class="CommonHeader">Новости проекта</h1>
            <div class="CommonEntry">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur alias sit blanditiis, nulla quidem dolores et odit optio doloremque sunt. Itaque voluptatum quod vero debitis? Sunt mollitia ex totam commodi nisi recusandae iste enim et omnis ullam exercitationem, repudiandae quas asperiores alias dolore esse porro, placeat, atque necessitatibus quis deserunt est reiciendis. Obcaecati atque cum, distinctio excepturi libero explicabo a ab aspernatur quod laudantium consequatur quos, pariatur dignissimos? Voluptates perspiciatis mollitia veritatis natus rerum fugiat odit? Fugiat obcaecati accusantium, vel adipisci minus mollitia harum! Culpa odio libero voluptatem odit, perspiciatis earum incidunt delectus, vero excepturi quibusdam magnam eum amet optio?</p>
            </div>
        </section>
        <main class="Enter">
            <form action="" method="POST">
                <div>
                    <label for="login">Логин</label>
                    <input type="text" name="login" autocomplete="off">
                </div>
                <div>
                    <label for="password">Пароль</label>
                    <input type="password" name="password" autocomplete="off">
                </div>
                <button onclick="changingAttribute(this.id)" id="login">Войти</button>
                <button onclick="changingAttribute(this.id)" id="registration">Зарегистрироваться</button>
            </form>
        </main>
        <script src="../js/buttons.js"></script>
    </body>
</html>