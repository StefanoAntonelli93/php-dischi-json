<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>

<body class="bg-dark">

    <div id="app" v-cloak>
        <header class=" bg-warning vw-100 position-fixed top-0 z-3">
            <div class="container">

                <div class="content text-center py-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img class="logo" src="./images/logo.png" alt="logo">
                        <h1 class="fw-semibold m-0 ps-3">{{ title }}</h1>

                    </div>
                </div>
            </div>
        </header>
        <main class="main">

            <section>
                <div class="container ">

                    <div class="content">
                        <h2 class="text-warning fw-semibold">Top songs 1900-1999</h2>
                        <ul class="d-flex flex-wrap g-3 list-unstyled justify-content-between">
                            <!-- ciclo for su chiamata API -->
                            <li class="g-2 bg-dark mt-5" v-for="element in album" @click="showDetails(element)">
                                <img class="img-albums" style="width: 300px;" :src="element.img" :alt="element.name">
                                <div class="text-white text-center pt-3 fw-semibold">{{ element.name }}</div>
                                <div class="text-white text-center py-2 border-bottom border-warning">{{ element.artist }}</div>
                            </li>

                        </ul>
                    </div>
                    <div v-if="showModal" class="modal-overlay" @click="closeModal">
                        <!-- con click stop non si chiude il modale qunado ci clicchi sopra -->
                        <div class="modal-content d-flex" @click.stop>
                            <div class="row">
                                <div class="col-4"><img class="w-100" :src="selectedAlbum.img" :alt="selectedAlbum.name">
                                </div>
                                <div class="col-6">
                                    <h3>{{ selectedAlbum.name }}</h3>
                                    <p>Artist: {{ selectedAlbum.artist }}</p>
                                    <div class="description">
                                        <p>Description: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque nulla nostrum veritatis obcaecati eaque fuga quod minima iusto dignissimos laudantium cum repellendus alias nesciunt, facilis ullam similique, culpa, neque praesentium?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="border-2 border-warning btn btn-outline-dark text-white" @click="closeModal">X</button>
                    </div>



                </div>
            </section>
        </main>
        <footer class="bg-warning">
            <div class="container">
                <div class="content py-4">
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