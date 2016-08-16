<!DOCTYPE html>
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Home | JordanBrinkerhoff.net </title>
    </head>
    <body>
        <div>
            <header role="banner">
                <div>

                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
                </div>
            </header>
            <nav role="navigation">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
                </div>
            </nav>
            <main role="main">
                <div class="center">
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/main.php'; ?>
                    <h1>JordanBrinkerhoff.net</h1>

                    <p>This is a web site for a class, CIT 336 at BYU-Idaho!</p>
                    
                </div>
            </main>
            <aside role="complementary">
                <div></div>
            </aside>
            <footer role="contentinfo">
                <div>
                    <!--turn site plan into working link-->
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>

                    <?php echo 'Last Updated ' . date('j M. Y', getlastmod()) ?>

                </div>
            </footer>
        </div>
        <script src="/javascript/analytics.js"></script>
    </body>

</html>



