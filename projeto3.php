<?php
include "header.php";
?>
    
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="text-center img-responsive"></div>
            </div>
        </div>
    </header>
    <section id="projetos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>PROJETO 3</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive projeto" src="img/portfolio/3.jpg">
                </div>
                <div class="col-md-6">
                    <h3>Como foi feito:</h3>
                    <p> Este trabalho foi feito seguindo as normas internas de desenvolvimento, visando necessariamente os conceitos mais basicos do mundo web, sem dúvidas é algo a se pensar, e se estudar, podemos levar em conta varias coisas como por exemplo o exesso de confiança entre outros, porem é algo assim que precisamos.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive projeto" src="img/portfolio/3.jpg">
                </div>
                <div class="col-md-6">
                    <h3>Técnicas Utilizadas</h3>
                    <p> Este trabalho foi feito seguindo as normas internas de desenvolvimento, visando necessariamente os conceitos mais basicos do mundo web, sem dúvidas é algo a se pensar, e se estudar, podemos levar em conta varias coisas como por exemplo o exesso de confiança entre outros, porem é algo assim que precisamos.</p>
                </div>
            </div>
            <div id="desc">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="list-inline">
                            <li><strong>Cliente: </strong><a class="projetos" href="http://cliente.com">Fulano de Tal</a></li>
                            <li><strong>Data: </strong>21/13/2016</li>
                            <li><strong>Serviço: </strong>Diagramação/impressão</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="next">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a class="btn btn-proj" href="projeto2.php"><i class="fa fa-arrow-left"></i></a>
                        <a class="btn bt-proj" href="projeto4.php"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        
        </div>
    </section>


<?php include "footer.php";?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a href="#header">
            <img class="subir" src="images/subir.png">
        </a>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery.mixitup.js" type="text/javascript"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script type="text/javascript">
        // Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});
    </script>
  </body>
</html>