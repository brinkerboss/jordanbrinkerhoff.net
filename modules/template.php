<!DOCTYPE html>
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>
    <body>
        <div>
            <header rol="banner">
                <div>

                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
                </div>
            </header>
            <nav rol="navigation">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
                </div>
            </nav>
            <main rol="main">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/main.php'; ?>

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

                </div>
            </footer>
        </div>
        <script src="/javascript/analytics.js"></script>
    </body>

</html>

