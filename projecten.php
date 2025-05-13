<?php require 'assets/header.php'; ?>
<div class="css-selector">

    <body class="bg-gradient-blue-dark-blue">
        <div class="fluid-container py-1">
            <div class="container py-1">
                <div class="col col-auto ms-5 me-5 p-5 my-5 text-center text-black-pearl">
                    <h1 class="display-1"><strong>Projecten</strong></h1>
                </div>
            </div>
            <div class="container my-5 text-black-pearl">
                <h2>Projecten Vooropleiding</h2>
                <p>
                    Hier staan projecten die ik in mijn vorige opleiding heb gedaan.
                </p>
                <div id="accordion">
                    <div class="card my-4">
                        <div class="card-header">
                            <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                IoT water sensor
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                Bij dit project werd mijn projectgroep gevraagd om als opdracht te laten zien
                                wat voor informatie de EXO2 Multiparameter Sonde opneemt uit het water. Die informatie
                                moesten we laten zien aan het eind van het project en daarbij uitleg over geven waarom
                                het
                                gebruik van
                                een Multiparameter sonde handig is in het gebruik bij meetingen verzamelen van het ph,
                                zuurstofgehalte, zoutgehalte, diepte en allerlei andere meetingen door andere sensoren
                                te
                                gebruiken.
                                <img src="images/7-Port-Multiparameter-Water-Quality-Sonde-for-Unattended-Monitoring.jpg"
                                    class="img-fluid mt-4" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card my-4">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                Zeelenberg Architectuur sustainability website
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                In dit project was de opdracht op een website te maken met vragenlijst. #
                                Deze vragenlijst kregen we van de klant in de vorm van een Excel document dat door een
                                vorige student was gemaakt. Mijn projectgroep kreeg de opdracht om het van Excel naar
                                een
                                website om te bouwen. En met die website kan de klant architectuur projecten beoordelen
                                op
                                hun sustainability aan de hand van de vragenlijst.
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                Collapsible Group Item #3
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="container my-5 text-black-pearl">
                <h2>Projecten Intervance</h2>
                <p>
                    Hier komen de projecten te staan binnen Intervance.
                </p>
                <!-- Adding a new accordion you have to give it another name -->
                <div id="accordion2">
                    <div class="card my-4">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse"
                                href="#collapseThree"><!-- Change href when adding new accordion -->
                                LAN party
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion2">
                            <div class="card-body">
                                In dit project was de opdracht een LAN party geven met als doel 3 verschillende games te
                                kunnen
                                spelen zonder toegang van het internet. In onze projectgroep hebben we gekozen om arcade
                                games te doen.
                                Hier hadden we spellen als Tetris, Pacman, 2048, Space Invaders en Snake in gezet en kon
                                je ook de score zijn
                                van spelers die aan het spelen waren.
                                <div>
                                    <img src="images/tertris-in-cmd.png" alt="" class="img-fluid rounded mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-4">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
                                LAN party v2
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-bs-parent="#accordion2">
                            <div class="card-body">
                                Bij dit project moesten we opnieuw een LAN party opstellen maar dan met een andere spel.
                                Dit keer hebben we gekozen voor het spel SuperTuxKart.
                                <div>
                                    <img src="images/SuperTuxKart.jpg" alt="" class="img-fluid rounded mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-4">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFive">
                                Home Assistant
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-bs-parent="#accordion2">
                            <div class="card-body">
                                In dit project kregen we de opdracht om te werken met smartlampen en zonnenschermen. De
                                smartlampen moesten we zo programmeren dat ze automatisch van kleur veranderen op
                                specifieke tijden.
                                Voor de zonneschermen geld het ook dat ze geautomatiseerd worden. Ze moeten aan de hand
                                van het weerdata opengaan of dichtgaan. Dit hebben we allemaal gedaan binnen Home
                                Assistant.
                                Home Assistant is een sofware waarmee je al je smartapparaten kunt koppelen en samen kan
                                laten communiseren om alles in je huis te automatiseren.
                                <div>
                                    <img src="images/home-assistant-logo.png" alt="" class="image-fluid mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-4">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseSix">
                                K3S Server op Virtual Machines
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-bs-parent="#accordion2">
                            <div class="card-body">
                                Bij dit project kregen we de opdracht om een K3S server op te zetten met Virtual
                                Machines.
                                Dit hebben we gedaan met VMWare en k3s. We hebben een K3S server opgezet met 3 virtual
                                machines. Eén van deze machines is de master en de andere twee zijn de workers. De
                                master node is verantwoordelijk voor het aansturen van de worker nodes en het verdelen
                                van
                                de taken. De workers zijn verantwoordelijk voor het uitvoeren van de taken die door de
                                master zijn toegewezen. Bij dit project moesten we monitoring software installeren op de
                                Prometheus is een monitoring tool die gegevens verzamelt en opslaat in een
                                tijdreeksdatabase. Grafana is een visualisatietool waarmee je dashboards kunt maken om
                                de gegevens van Prometheus te bekijken. We hebben Prometheus ingesteld om de prestaties
                                van de K3S server te monitoren, zoals CPU-gebruik, geheugen en netwerkverkeer.
                                Vervolgens hebben we Grafana gebruikt om deze gegevens te visualiseren in de vorm van
                                grafieken en diagrammen.
                                <div>
                                    <!-- Insert k3s monitoring -->
                                    <!-- <img src="images/home-assistant-logo.png" alt="" class="image-fluid mt-4"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </body>
</div>


<?php require 'assets/footer.php'; ?>
<!-- end footer -->
<?php require 'assets/stt.php'; ?>
<?php require 'assets/scripts.php'; ?>