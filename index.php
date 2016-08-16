<!DOCTYPE html>
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Jordan</title>
    </head>
    <body>
        <div>
            <header role="banner">
                <div>

                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
                </div>
            </header>
            <nav class="navbar-container" role="navigation">
                <div class="brand">
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
                </div>
                <div class="about">

                </div>
                <div class="projects">

                </div>
                <div class="contact">

                </div>
            </nav>
            <main role="main">
                <div class="intro-container">
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/main.php'; ?>
                    <div class="intro-head"> <h1>JordanBrinkerhoff.net</h1>


                    </div>
                    <div class="intro-body">
                        <p>This is a web site for a class, CIT 336 at BYU-Idaho!</p>
                    </div>
                </div>
                <div class="about-container">
                    <div class="about-me">
                        
                    </div>
                    <div class="about-me-image">
                        
                    </div>                  
                </div>
                <div>
                    
                </div>
                
            </main>
            
            <footer role="contentinfo">
                <div class="contact">
                    <!--turn site plan into working link-->
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>

                    <?php echo 'Last Updated ' . date('j M. Y', getlastmod()) ?>

                </div>
            </footer>
        </div>
        <script src="/javascript/analytics.js"></script>
    </body>

</html>



