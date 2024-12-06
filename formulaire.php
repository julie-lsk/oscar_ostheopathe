<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oscar - résultats de votre demande de RDV</title>
        <link rel="icon" type="image/x-icon" href="./img/icone_oscar.png">


        <style>
            *
            {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 1rem;

                @media (max-width: 400px)
                {
                    font-size: 0.95rem;
                }
            }

            body
            {
                height: 100vh;
                display: flex;
                flex-direction: column;
                max-width: 800px;
                margin: auto;
                background-color: #f9f9f9;
            }

            main
            {
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                max-width: 800px;
                background-color: #f9f9f9;
                margin: auto;
                padding: 30px;
                border-radius: 5px;
            }

            h2
            {
                font-size: 1.5rem;
                font-weight: 600;
                margin-bottom: 30px;

                @media (max-width: 400px)
                {
                    font-size: 1.1rem;
                }
            }

            #retour-accueil
            {
                margin-top: 30px;
                border-radius: 5px;
                border: none;
                background-color: #0f938d;
                color: white;
                font-weight: 600;
                padding: 5px 15px;
                text-decoration: none;
                max-width: fit-content;

                @media (max-width: 400px)
                {
                    width: 56%;
                }
            }


            /* Header */
            header
            {
                display: flex;
                justify-content: space-between;
                gap: 25px;
                margin-bottom: 20px;

                @media (max-width: 400px) 
                {
                    flex-direction: column;
                    align-items: center;
                }

                #logo-oscar
                {
                    height: 80%;
                    width: 80%;
                }

                #certification 
                {
                    text-align: center;
                    width: 100%;

                    img
                    {
                        width: 55%;
                        min-width: 150px;

                        @media (max-width: 400px)
                        {
                            width: 60%;
                        }
                    }

                    p
                    {
                        background-color: #0f938d;
                        color: white;
                        font-size: 0.6rem;
                        padding: 7px 0;
                        width: 100%;

                        @media (max-width: 400px)
                        {
                            font-size: 0.5rem;
                        }
                    }
                }
            }


            /* Footer */
            footer
            {
                background-color: #333947;
                width: 100%;
                padding: 15px;
                color: white;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                gap: 50px;

                @media (max-width: 400px)
                {
                    flex-direction: column; 
                    gap: 20px;
                    margin-top: 10px;
                }

                img
                {
                    width: 30%;

                    @media (max-width: 400px)
                    {
                        width: 70%; 
                    }
                }

                #coordonnees-footer
                {
                    font-size: 0.75rem;

                    h3, a, address, p
                    {
                        font-size: 0.75rem;
                        line-height: 1.75;
                    }

                    address
                    {
                        font-style: normal;
                    }
                
                    a
                    {
                        text-decoration: none;
                        color: white;
                    }
                    
                }
            }
        </style>

    </head>


    <body>

        <header>
            <img src="./img/logoCliniqueOscar.jpg" alt="Logo de la clinique osthéopatique Oscar à Strasbourg" id="logo-oscar">

            <div id="certification">
                <p>CERTIFICATION</p>
                <img src="./img/sante.jpg" alt="Image de l'agrégation du Ministère des Affaires sociales et de la santé">
                <p>PRENEZ RENDEZ-VOUS</p>
            </div>
        </header>
        
        <main>
            <?php
                // Vérifier si le formulaire a été soumis
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    // Afficher les données envoyées via POST
                    echo "<h2>Résultats des informations transmises pour votre demande de RDV :</h2>";
                    echo "<pre>";
                    print_r($_POST); // permets d'afficher les données
                    echo "</pre>";
                } else {
                    echo "<p>Aucune donnée n'a été soumise.</p>";
                }
            ?>

            <a href="./index.html" id="retour-accueil">Retourner à la page d'accueil</a>
        </main>

        <footer>

            <img src="./img/logoEcoleOscar.jpg" alt="Logo de l'école européenne d'ostéopathe Oscar à Strasbourg">

            <div id="coordonnees-footer">
                <h3>ÉCOLE OSCAR</h3> <br>
                <p>
                    Campus Privé d'Alsace <br>
                    <address>24a Rue des Magasins - 67000 Strasbourg</address>
                    Tel: <a href="tel:">+33 (0)3 88 23 14 14</a> - <a href="mailto:info@ecoleoscar.com">info@ecoleoscar.com</a>
                </p>
            </div>

        </footer>

    </body>

</html>
