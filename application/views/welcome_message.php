<!-- Latest compiled and minified CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
});
</script>
<style type="text/css">
#custom_carousel .item {

    color:#000;
    background-color:#eee;
    padding:20px 0;
}
#custom_carousel .controls{
    overflow-x: auto;
    overflow-y: hidden;
    padding:0;
    margin:0;
    white-space: nowrap;
    text-align: center;
    position: relative;
    background:#ddd
}
#custom_carousel .controls li {
    display: table-cell;
    width: 1%;
    max-width:90px
}
#custom_carousel .controls li.active {
    background-color:#eee;
    border-top:3px solid orange;
}
#custom_carousel .controls a small {
    overflow:hidden;
    display:block;
    font-size:10px;
    margin-top:5px;
    font-weight:bold
}
</style>
<div class="container">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="imagenes/ce1.jpg" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Consulta los catálogos de las bibliotecas UANL</h2>
                            <p>Consulta de libros, tesis, mapas, artículos y otros tipos de documentos de la UANL en línea.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="imagenes/ae1.jpg" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Acervos electrónicos</h2>
                            <p>Contienen herramientas de búsqueda e información sobre los fondos bibliográficos universitarios, patrimonio documental de nuestras bibliotecas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="imagenes/bd1.jpg" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Bases de Datos de la UANL</h2>
                            <p>Colección de Bases de Datos seleccionada para apoyar la investigación teórica y aplicada de la Universidad.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="imagenes/cd1.jpg" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Colección Digital</h2>
                            <p>Documentos de interés para la investigación editados durante los siglos XVI al XIX, en español, italiano, francés y latín y tesis de postgrado generadas en la UANL.</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="imagenes/mv1.jpg" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Museo Virtual</h2>
                            <p>Exhibición virtual de la obra de arte plástico, exposiciones itinerantes y temporales que posee la UANL.</p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <div class="controls">
            <ul class="nav">
                <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img src="imagenes/thumb_ce1.jpg"><small>Consulta los catálogos de las bibliotecas UANL</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="imagenes/thumb_ae1.jpg"><small>Acervos electrónicos</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="imagenes/thumb_bd1.jpg"><small>Bases de Datos de la UANL</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img src="imagenes/thumb_cd1.jpg"><small>Colección Digital</small></a></li>
                 <li data-target="#custom_carousel" data-slide-to="4"><a href="#"><img src="imagenes/thumb_mv1.jpg"><small>Museo Virtual</small></a></li>
            </ul>
        </div>
    </div>
    <!-- End Carousel -->
    <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width">
                <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                    <div class="mdl-card__media">
                        <img class="article-image" src=" imagenes/11232016-01-01.jpg" border="0" alt="" style="width: 100%">
                    </div>
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Encuesta Nacional CONRICYT 2016</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Se les invita a participar en la Encuesta Nacional CONRICYT 2016 del 21 de noviembre al 16 de diciembre a todos los académicos/ investigadores; estudiantes de pre y post grado, así como a los directores de biblioteca y bibliotecarios en general.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="portfolio-example01.html" data-upgraded=",MaterialButton,MaterialRipple">Read more<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                    </div>
                </div>
                <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                    <div class="mdl-card__media">
                        <img class="article-image" src=" imagenes/receso.jpg" border="0" alt="" style="height: 160px; width: 100%;" >
                    </div>
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">RECESO ACADÉMICO Y ADMINISTRATIVO</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Del 19 de diciembre de 2016
                        <br />
                        al 2 de enero de 2017
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="portfolio-example01.html" data-upgraded=",MaterialButton,MaterialRipple">Read more<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                    </div>
                </div>
                <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card" style="padding-top: 30px;">
                   <!-- Contact Chip -->
                <span class="mdl-chip mdl-chip--contact">
                <img class="mdl-chip__contact" src="imagenes/rm2.png"></img>
                    <span class="mdl-chip__text"><a href="">Preguntas frecuentes</a></span>
                </span><br />
                <!-- Deletable Contact Chip -->
                <span class="mdl-chip mdl-chip--contact">
                <img class="mdl-chip__contact" src="imagenes/rm6.jpg"></img>
                    <span class="mdl-chip__text">Bases de Datos</span>
                </span><br />
                <span class="mdl-chip mdl-chip--contact">
                <img class="mdl-chip__contact" src="imagenes/rm5.png"></img>
                    <span class="mdl-chip__text">Boletín Biblios</span>
                </span><br />
                <span class="mdl-chip mdl-chip--contact">
                <img class="mdl-chip__contact" src="imagenes/rm-capbib.jpg"></img>
                    <span class="mdl-chip__text">Capacitación para Bibliotecarios</span>
                </span><br />
                <span class="mdl-chip mdl-chip--contact">
                <img class="mdl-chip__contact" src="imagenes/rm-bolsadetrabajo.jpg"></img>
                    <span class="mdl-chip__text">Bolsa de Trabajo</span>
                </span>
                </div>
            </div>
        </main>
</div>
