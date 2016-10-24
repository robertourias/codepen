<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exemplos de uso com Materilize</title>

        <?php include "../inc/_styles.php"; ?>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?php include "../inc/_header.php"; ?>

        <section class="section">
            <div class="carousel carousel-slider center" data-indicators="true">
                <div class="carousel-item green white-text" href="#three!">
                    <h2>CSS</h2>
                </div>
                <div class="carousel-item amber white-text" href="#two!">
                    <h2>Components</h2>
                </div>
                <div class="carousel-item blue white-text" href="#four!">
                    <h2>Javascript</h2>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <span class="card-title">Seção CSS</span>
                            </div>
                            <div class="card-content">
                                <p>
                                    Área com exemplos de uso da seção CSS do Materialze
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="/css/">Acesse aqui</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <span class="card-title">Seção Components</span>
                            </div>
                            <div class="card-content">
                                <p>
                                    Área com exemplos de uso da seção Components do Materialze
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="/components/">Acesse aqui</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <span class="card-title">Seção Javascript</span>
                            </div>
                            <div class="card-content">
                                <p>
                                    Área com exemplos de uso da seção Javascript do Materialze
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="/javascript/">Acesse aqui</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php include "../inc/_footer.php"; ?>
        <?php include "../inc/_scripts.php"; ?>

    </body>
</html>
