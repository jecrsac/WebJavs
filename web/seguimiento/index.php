<? /* Cibox Sistemas S.A. de C.V. ····································································· xION-20160101 */ 
$XPOKX02VT="web/cbx.php";
if (file_exists($XPOKX02VT)) { include($XPOKX02VT); }

$EDICION=" ";

if ($_GET['X']=="XDY60AUWVXCMK58SOKXN6RDRO8UXGQRYWL5QXH97JXC7KXQHC25JV3"){
$EDICION=" contentEditable=true ";
}


?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLAD | Seguimiento</title>

    <!-- Bootstrap -->
  <link href="web/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="web/css/style.css">
  <link rel="stylesheet" type="text/css" href="web/css/contenidos.css">
  <link rel="stylesheet" type="text/css" href="web/css/formularios.css">
  <link rel="stylesheet" type="text/css" href="web/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="web/css/animations/animations.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="web/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="web/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




  </head>
  <body id='XHTBGIMSUXYUIE0B71' > <!--data-spy="scroll" data-target=".navbar" data-offset="190"-->

    <nav id="navegacion" class="navbar navbar-default navbar-fixed-top navBar-Height" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="navbar-header" id="menu">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="http://developers.cbx.mx/airy/cibox_plad/index.php" ><img src="web/img/Unknown.png" alt="" class="animate-in wdt-Logo " data-anim-type="fade-in-right"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
      <input type="hidden" id="currentItem" value="0">
      <!--<input type="hidden" id="currentId" value="">-->
      <input type="hidden" id="posicionFFF" value="0">
      <input type="hidden" id="anchoPagina" value="0">

    </div>
  </nav>










  <div class="container-fluid"><br><br><br><br><br><br><br><br>
    <!--VIDA Y AHORRO +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ INI-->
    <div class="row bkg-1 sectionSpy" data-menu="1" id="vidaAhorro"> 
      <div class="col-sm-6 col-md-6 col-lg-6 paddingLeft-0 animate-in" data-anim-type="fade-in-right" data-anim-delay="0">
        <div class="panel panel-default borderLeftRadius-none bkg-panel height-Row bkg-1">
          <div class="panel-heading borderBottom-None bkg-1"><h1 class="clr-White ">Seguimiento Orden de Compra</h1></div>
          <div class="panel-body paddingTop-0">
            <p class="formatText" <? echo $EDICION ?> >

<form method="post" action="index.php" name="formulario">
  <input type="hidden" name="servicio" value="4">
  <input type="hidden" name="operacion" value="8734897689">
  <input type="hidden" id="nombreServicio" name="nombreServicio" value="">
  <div class="form-group">
    <input type="text" id="nombre" name="nombre" value="<? echo $_POST['nombre']; ?>" class="form-control formBrdRdsNone borderColor-blue" placeholder="Numero de Orden*">
  </div>
  <div class="form-group">
    <input type="submit" value="CONSULTAR" class="btn btn-primary formBrdRdsNone">
  </div>
</form>




<?
/*

`xS_pld_pd_pd`.`id` as 'pdid', `xS_pld_pd_pd`.`ix` as 'pdix', `xS_pld_pd_pd`.`sx` as 'pdsx', 
`xS_pld_pd_pd`.`ct` as 'pdct', `xS_pld_pd_pd`.`sn` as 'pdsn', `xS_pld_pd_pd`.`po` as 'pdpo', 
`xS_pld_pd_pd`.`fd` as 'pdfd', `xS_pld_pd_pd`.`fe` as 'pdfe', `xS_pld_pd_pd`.`ff` as 'pdff', 
`xS_pld_pd_pd`.`cl` as 'pdcl', `xS_pld_pd_pd`.`no` as 'pdno', `xS_pld_pd_pd`.`ds` as 'pdds', 
`xS_pld_pd_pd`.`pl` as 'pdpl', `xS_pld_pd_pd`.`pu` as 'pdpu', `xS_pld_pd_pd`.`pi` as 'pdpi', 
`xS_pld_pd_pd`.`rp` as 'pdrp', `xS_pld_pd_pd`.`fv` as 'pdfv', `xS_pld_pd_pd`.`nv` as 'pdnv', 
`xS_pld_ct_sg`.`ix` as 'sgix', `xS_pld_ct_sg`.`cl` as 'sgcl', `xS_pld_ct_sg`.`no` as 'sgno', 
`xS_pld_ct_tl`.`no` as 'tlno', `xS_pld_ct_tl`.`ct` as 'tlct', `xS_pld_ct_tl`.`te` as 'tlte', 
`xS_pld_ct_tl`.`mv` as 'tlmv', `xS_pld_ct_tl`.`dr` as 'tldr', `xS_pld_ct_tl`.`ce` as 'tlce', 
`xS_pld_ct_co`.`no` as 'cono', `xS_pld_ct_co`.`cl` as 'coco', `xS_pld_ct_mr`.`no` as 'mrno', 
`xS_pld_ct_mr`.`ix` as 'mrix', `xS_pld_ct_ms`.`no` as 'msno', `xS_pld_ct_ms`.`ix` as 'msix', 
`xS_pld_ct_vh`.`md` as 'mdmd', `xS_pld_ct_vh`.`ix` as 'mdix', `xS_pld_ct_sc`.`cl` as 'sccl' 

*/

if (trim($_POST['nombre'])!=""){

    $TB="xHPweb_WB_PRCT";
      /* ************************************************************* xQuery INI * */
      $CXT="1234567"; $CXA["BD80J".$CXT]=$CXI; $CXI=$CXT;
      /* -------------------------------------------------------------------------- */
$SQL[$CXI]=" 
SELECT 
`xS_pld_pd_pd`.`sx` as 'Status', 
`xS_pld_pd_pd`.`ct` as 'Consecutivo', 
`xS_pld_pd_pd`.`sn` as 'Numero_de_Siniestro', 
`xS_pld_pd_pd`.`fd` as 'Fecha_Registro', 
`xS_pld_pd_pd`.`fe` as 'Fecha_Promesa', 
`xS_pld_pd_pd`.`ff` as 'Fecha_Entrega', 
`xS_pld_pd_pd`.`po` as 'Numero_de_Poliza',
`xS_pld_ct_sg`.`no` as 'Aseguradora', 
`xS_pld_ct_tl`.`no` as 'Taller',
`xS_pld_ct_mr`.`no` as 'Marca', 
`xS_pld_ct_ms`.`no` as 'Submarca', 
`xS_pld_ct_vh`.`md` as 'Modelo',
`xS_pld_ct_co`.`no` as 'Color',
`xS_pld_pd_pd`.`pl` as 'Placas'

FROM 
`xS_pld_ct_sc`, `xS_pld_pd_pd`, `xS_pld_ct_tl`, `xS_pld_ct_sg`, `xS_pld_ct_mr`, `xS_pld_ct_ms`, `xS_pld_ct_co`, `xS_pld_ct_vh` 
WHERE 
`xS_pld_pd_pd`.`tl`=`xS_pld_ct_tl`.`ix` AND `xS_pld_pd_pd`.`sg`=`xS_pld_ct_sg`.`ix` AND `xS_pld_pd_pd`.`mr`=`xS_pld_ct_mr`.`ix` 
AND `xS_pld_pd_pd`.`ms`=`xS_pld_ct_ms`.`ix` AND `xS_pld_pd_pd`.`co`=`xS_pld_ct_co`.`ix` AND `xS_pld_pd_pd`.`sc`=`xS_pld_ct_sc`.`ix` 
AND `xS_pld_pd_pd`.`vh`=`xS_pld_ct_vh`.`ix` AND 
( `xS_pld_pd_pd`.`ix`='".trim($_POST['nombre'])."' OR `xS_pld_pd_pd`.`sn` LIKE '".trim($_POST['nombre'])."' ) 

ORDER BY `xS_pld_pd_pd`.`pu` DESC, `xS_pld_pd_pd`.`pi` DESC, `xS_pld_pd_pd`.`id` DESC 
LIMIT 1

      ;";
      /* -------------------------------------------------------------------------- */
      $dx[$CXI]=x8800880000($SQL[$CXI]);
      if($dx[$CXI]['data']!=null){ 
    echo "

<p class='justify'>El Estatus de la Orden '".trim($_POST['nombre'])."' es:</p>
    <ul type='a'>

    ";

//        foreach ($dx[$CXI]['data'] as $ix[$CXI] => $rx[$CXI]) {
//
//
//    echo "
//
//       <li class='negrita'>".$rx[$CXI]['no']."</li>
//        <p class='justify'>
//        </p>
//    ";
//
//      }

  X888215101(TRUE,$dx[$CXI]['data'][0]);



    echo "

        </ul>
    ";


    }else{ /* No se encontraron datos */
      

    echo "
       <h3 style='color:#AA0000' >No existen registros vinculados a la Orden '".trim($_POST['nombre'])."'.</h3>
    ";

      }
      /* -------------------------------------------------------------------------- */
      unset($SQL[$CXI]); unset($dx[$CXI]); $CXI=$CXA["BD80J".$CXI];
      /* ************************************************************* xQuery FIN * */

      }
?>











            </div>
        </div>
      </div>
      <div class="hidden-xs col-sm-6 col-md-6 col-lg-6 animate-in marginTop-10" data-anim-type="fade-in-left" data-anim-delay="0">

        <img class="img-responsive paddingLeft-90" src="web/img/imgHome/SA/<? echo rand(0,3).".png"; ?>">
      </div>
    </div>
    <div class="arrow-Botttom1"></div>
    <!--VIDA Y AHORRO +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ FIN-->

 
    <!--LEGALES ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ INI-->
    <footer class="footer" >
        <table width='100%' border='0px'><tr>
        <td align='center' valign='middle'><br><br><br><br>&copy; <? echo date("Y"); ?> PLAD | Todos los derechos reservados |<a type="button" data-toggle="modal" data-target="#myModalLegales" data-contenido="legales" data-title="Términos y Condiciones" class="legales btnLegales">Términos y Condiciones</a></td>
        </tr>
        </table><br><br>
    </footer>
    <!--LEGALES ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ FIN-->

    <!-- Modal CONTENIDO COMPLETO +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ INI -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title formatTitle" id="myModalLabel"></h4>
          </div>
          <div class="modal-body">
            <div class="row" id="imgPrincipal"></div>
            <div class="row">
              <div class="col-lg-8 paddingTop-20" id="modalContent" <? echo $EDICION ?>  ></div>
              <div class="col-lg-4" id="modalForm"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal CONTENIDO COMPLETO +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ FIN -->

    <!-- Modal LEGALES ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ INI -->
    <div class="modal fade" id="myModalLegales" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLegal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title formatTitle" id="myModalLabelLegal"></h4>
          </div>
          <div class="modal-body justify" id="modalContenidoLegal">
            <!---->
          </div>
        </div>
      </div>
    </div>
    <!-- Modal LEGALES ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ FIN -->

  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="web/js/jquery.min.js"></script>
    <script src="web/js/animations/jquery-ui.min.js"></script>
    <script src="web/js/animations/smoothscroll.min.js"></script>
    <script src="web/js/animations/appear.min.js"></script>
    <script src="web/js/animations/animations.min.js"></script>
    <script src="web/js/animations/backbone.js"></script>
    <script src="web/js/script.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="web/js/bootstrap.min.js"></script>
  </body>
</html>
