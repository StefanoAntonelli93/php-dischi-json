<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- css -->
    <link rel="stylesheet" href="./style.css">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>

<body class="bg-dark">
    <div id="app" v-cloak>
        <header class=" bg-warning vw-100 position-fixed top-0">
            <div class="container">

                <div class="content text-center p-3 d-flex justify-content-between align-items-center">
                    <img class="logo" src="./images/logo.png" alt="logo">
                    <h1 class="fw-semibold">{{ title }}</h1>
                </div>
            </div>
        </header>
        <main class="main">
            <section>
                <div class="container bg-warning-subtle">

                    <div class="content">
                        <ul class="d-flex flex-wrap gap-3 list-unstyled p-5 mt-5">
                            <li class="p-5 border border-5 border-secondary-subtle" v-for="disc in discs">
                                <img :src="disc.img" :alt="disc.name">
                                <div>{{ disc.name }}</div>
                                <div>{{ disc.artist }}</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <footer class="bg-warning">
            <div class="container">
                <div class="content p-2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto ">
                            <p>PHP dischi JSON</p>
                        </div>
                        <div class="col-auto ">
                            <p>Powered by Stefano</p>
                        </div>
                        <div class="col-auto">
                            <img class="footer-logo" src="./images/logo.png" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- axios cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- vue.js cdn-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- main js -->
    <script type="text/javascript" src="main.js"></script>
</body>

</html>