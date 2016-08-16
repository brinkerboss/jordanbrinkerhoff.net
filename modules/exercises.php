<!DOCTYPE html>
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Exercises | JordanBrinkerhoff.net </title>
    </head>
    <body>
        <div>
            <header rol="banner">
                <div class="banner">

                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
                </div>
            </header>
            <nav rol="navigation">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
                </div>
            </nav>
            <main rol="main">
                <div class="center">
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/main.php'; ?>

                    <h1>JordanBrinkerhoff.net</h1>
                    <h2>Exercises</h2>
                    <ul>
                        <li>Exercise 1-1 - Completed</li>
                        <li>Exercise 1-2 - Completed</li>
                        <li>Exercise 1-3 - Completed</li>
                        <li>Exercise 2-1 - Completed</li>
                        <li>Exercise 3-1</li>
                        <li>Exercise 4-1</li>
                        <li>Exercise 5-1</li>
                        <li>Exercise 6-1</li>
                        <li>Exercise 6-2</li>
                        <li>Exercise 7-2</li>
                        <li>Exercise 8-2</li>
                        <li>Exercise 11-1</li>
                        <li>Exercise 13-1</li>
                        <li>Exercise 12-2</li>
                        <li>Exercise 15-1</li>
                    </ul>
                    <h2>Enhancements</h2>
                    <ul>
                        <li>Enhancement 2-1</li>
                        <li>Enhancement 4-1</li>
                        <li>Enhancement 5-1</li>
                        <li>Enhancement 7-2</li>
                        <li>Enhancement 11-1</li>
                        <li>Enhancement 13-1</li>
                        <li>Enhancement 12-2</li>
                    </ul>
                    
                </div>
            </main>
            <aside rol="complementary">
                <div></div>
            </aside>
            <footer rol="contentinfo">
                <div>
                    <!--turn site plan into working link-->
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>

                    <?php echo 'Last Updated ' . date('j M. Y', getlastmod()) ?>

                    <a href="/ch02_ex1_sol/index.html">Exercise 2-1</a>
                </div>
            </footer>
        </div>
        <script src="/javascript/analytics.js"></script>
    </body>

</html>



