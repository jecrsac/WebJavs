<? /* Cibox Sistemas S.A. de C.V. ····································································· xION-20160101 */
define("XNYGIWFM5","America/Mexico_City");

function X111879547(){ $arguments=func_get_args();
    $XK2UT6Y01=$arguments[0];/* Funtion */
    $XY9WF538U=$arguments[1];/* Alias */
    eval("function $XY9WF538U() { \$args = func_get_args(); return call_user_func_array('$XK2UT6Y01', \$args); }");
}

class BD {
    var $CID = 0;
    var $QID = 0;
    var $rrno = 0;
    var $rror = "";
function BD($bd = "", $host = "localhost", $user = "nobody", $pass = "") {
    $this->BaseDatos = $bd;
    $this->Servidor = $host;
    $this->Usuario = $user;
    $this->Clave = $pass;
}
function cnx($bd, $host, $user, $pass){
if ($bd != "") $this->BaseDatos = $bd;
if ($host != "") $this->Servidor = $host;
if ($user != "") $this->Usuario = $user;
if ($pass != "") $this->Clave = $pass;
    $this->CID = mysql_connect($this->Servidor, $this->Usuario, $this->Clave);
if (!$this->CID) {
    $this->Error = "Ha fallado la conexión.";
    return 0;
}
if (!@mysql_select_db($this->BaseDatos, $this->CID)) {
    $this->Error = "Imposible abrir ".$this->BaseDatos ;
    return 0;
}
    return $this->CID;
}
function sql($sql = ""){
if ($sql == "") {
    $this->Error = "No ha especificado una consulta SQL";
    return 0;
}
    $this->QID = @mysql_query($sql, $this->CID);
if (!$this->QID) {
    $this->Errno = mysql_errno();
    $this->Error = mysql_error();
}
    return $this->QID;
}
function c() {
    return mysql_num_fields($this->QID);
}
function r(){
    return mysql_num_rows($this->QID);
}
function no($nupo) {
    return mysql_field_name($this->QID, $nupo);
}
function id(){
    return mysql_insert_id();
}
function q() {
    mysql_close($this->CID);
}

function BKBD($tables = '*',$nomsas = null){
    //get all of the tables
    if($tables == '*')
    {
        $tables = array();
        $result = mysql_query('SHOW TABLES');
        while($row = mysql_fetch_row($result))
        {
            $tables[] = $row[0];
        }
    }
    else
    {
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }

    foreach($tables as $table)
    {
        $sql='SELECT * FROM '.$table;
        $result = @mysql_query($sql, $this->CID);
        $num_fields = @mysql_num_fields($result);
        $return.= 'DROP TABLE '.$table.';';
        $row2 = @mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
        $return.= "\n\n".$row2[1].";\n\n";
        for ($i = 0; $i < $num_fields; $i++) 
        {
            while($row = mysql_fetch_row($result))
            {
                $return.= 'INSERT INTO '.$table.' VALUES(';
                for($j=0; $j < $num_fields; $j++) 
                {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = str_replace("\n","\\n",$row[$j]);
                    if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                    if ($j < ($num_fields-1)) { $return.= ','; }
                }
                $return.= ");\n";
            }
        }
        $return.="\n\n\n";
    }
    //save file

    $XS44170IV=3; $xT="";
    $x88091=explode("/",str_replace("//","/",$_SERVER['PHP_SELF']));
    if(count($x88091)>$XS44170IV){for($x88092=0;$x88092<=(count($x88091)-($XS44170IV+1));$x88092++){ $xT.="../"; }}

    $nomer = 'db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql';
    if ($nomsas!=null){$nomer = $nomsas;}
    $handle = fopen($xT.$nomer,'w+');
    fwrite($handle,$return);
    fclose($handle);
}
}

function x1117130550(){ $arguments=func_get_args();
    //x1117130550("String");
    $x88000=$arguments[0];/* String */
    $x88091 = ( base64_encode( $x88000 ) );
    $x88091 = str_replace( array(0=>"+",1=>"/",2=>"=") , array(0=>"-",1=>"_",2=>"~") , $x88091 );
    return $x88091;
}

function x1117130551(){ $arguments=func_get_args();
    //x1117130551("EncodeString");
    $x88000=$arguments[0];/* String */
    $x88091 = str_replace( array(0=>"-",1=>"_",2=>"~") , array(0=>"+",1=>"/",2=>"=") , $x88000 );
    $x88091 = ( base64_decode( $x88091 ) );
    return $x88091;
}


function x1117130560(){ $arguments=func_get_args();
    //x1117130560("1",5,"0");
    $x88000=$arguments[0];/* Original */
    $x88001=$arguments[1];/* Longitud */
    $x88002=$arguments[2];/* Char */
    @$x89500=$x88001-strlen($x88000);
    for($m=0;$m<$x89500;$m++){  @$x89501.=$x88002; }
    return $x89501.=$x88000;
}

function x1117130565(){ $arguments=func_get_args();
    //x1117130560("1");
    $x88000=$arguments[0];/* Original */
    return x1117130560($x88000,2,"0");
}


X111879547('x3344605425','xAKN');
function x3344605425(){ $arguments=func_get_args();
    //x3344605425("type" [ ,Prefix [ , Entropy ] ]);
    $x88000=$arguments[0];/* String */
    $x88001=$arguments[1];/* String-Prefix-$xV */
    $x88002=$arguments[2];/* String-Entropy-#  */
    $X915919618=$arguments[3];/* String-CNK-MASTER  */
    $XLUN7WF80=$arguments[4];/* String-CUSTOM TKN */
    $XLUN7WF81=$arguments[5];/* String-CUSTOM FKN */
    switch (strtolower(trim($x88000))){
        case "cnk":
            if (empty($x88001)){
                //$x89500="".x3344605425("TKN")."".x3344605425("FKN")."X".x1117130560(RAND(0,9999),4,"0");
                $x89500="".(X707008786(3,3))."".(X707008786(2,3))."".x1117130560(RAND(0,9999),4,"0");
            }else{
                if (!empty($XLUN7WF80)){ $XK8S1FVHR=$XLUN7WF80; }else{ if ($X915919618==true){ $XK8S1FVHR=$x88001['S']['MKN']; }else{ $XK8S1FVHR=$x88001['S']['TKN']; } }
                if (!empty($XLUN7WF81)){ $XK8S1FVHA=$XLUN7WF81; }else{ if ($X915919618==true){ $XK8S1FVHA=$x88001['S']['MKA']; }else{ $XK8S1FVHA=$x88001['S']['TKA']; } }
                $x89500="".$XK8S1FVHR."".$XK8S1FVHA."X".x1117130560($x88002,4,"0");
            }
        break;
        case "skn":
            if (empty($x88001)){
                $x89500="".x3344605425("TKN")."".x3344605425("FKN")."1".x1117130560(RAND(0,9999),3,"0");
            }else{
                $x89500="".$x88001['S']['TKN']."".$x88001['S']['TKA']."1".x1117130560($x88002,3,"0");
            }
        break;
        case "xtkn":case "tkn":
            $x89500=chr(rand(97,122)).date("i").date("s").rand(0,9).date("d").chr(rand(97,122)).date("H").date("y");
            $x89500.=chr(rand(48,57)).date("m").chr(rand(97,122)).date("s").chr(rand(97,122));
        break;
        case "xnkn":case "nkn":
            $x89500=RAND(1,9).x1117130560(RAND(0,date('B')),3,RAND(0,9)).date('B').x1117130560(RAND(0,date('B')),3,RAND(0,9));
        break;
        case "xdkn":case "dkn":/* Random - Año - Dia - i - s  */
            $x89500=RAND(1,9).date('y').x1117130560(date('z'),3,'0').date('i').date('s').x1117130560(RAND(0,date('B')),3,RAND(0,9));
            $x89500.=x1117130560(RAND(0,99),2,RAND(0,9));
        break;
        case "xikn":case "ikn":/* 6 CHars */
            $x89500=RAND(1,9).date('s').x1117130560(RAND(0,date('B')),3,RAND(0,9));
        break;
        case "xfkn":case "fkn":/* 5 CHars */
            $x89501=explode(" ", "s".microtime() );
            $x89502=explode(".", $x89501[0]);
            $x89500=rand(1,9).substr($x89502[1],2,4);
        break;
        default:
            $x89500=uniqid($x88001,$x88002);
        break;
    }
    return $x89500;
}

function X707008786(){ $arguments=func_get_args(); /* String.PassGenerator */
    $XYLLYPUR=$arguments[0]; /* Length of Return String */
    $XNRL1J4F=$arguments[1]; /* Complexity Level  MAX 7 */
    $XDWJMXPI="abcdefghijklmnopqrstuvwxyz";
    $XI10KSSE="1234567890";
    $XTQQIISO=-1;
    $XTQQIISO++;$XQG6BWR6[$XTQQIISO]="+_-*";
    $XTQQIISO++;$XQG6BWR6[$XTQQIISO]="%=&/@#!?";
    $XTQQIISO++;$XQG6BWR6[$XTQQIISO]=")(}{[]<>";
    $XTQQIISO++;$XQG6BWR6[$XTQQIISO]="~^|.:,;";
    $XNIVY2CY=substr(($XDWJMXPI),rand(0,strlen($XDWJMXPI)-1),1);
    for($i=($XYLLYPUR-1);$i>0;$i--) {
        $XXHO4D5Q=rand(0,$XNRL1J4F);
        switch ($XXHO4D5Q){
            case 0:case 1:
                 $XE5QG9L1=substr(($XDWJMXPI),rand(0,strlen($XDWJMXPI)-1),1);
            break;
            case 2:
                $XE5QG9L1=substr(strtoupper($XDWJMXPI),rand(0,strlen($XDWJMXPI)-1),1);
            break;
            case 3:
                $XE5QG9L1=substr(($XI10KSSE),rand(0,strlen($XI10KSSE)-1),1);
            break;
            default:
                $XXJR6DY3=$XXHO4D5Q-4;
                if (($XXJR6DY3)>=count($XQG6BWR6)){
                    $XXJR6DY3=count($XQG6BWR6)-1;
                }
                $XE5QG9L1=substr(($XQG6BWR6[$XXJR6DY3]),rand(0,strlen($XQG6BWR6[$XXJR6DY3])-1),1);
            break;
        }
        $XNIVY2CY .= $XE5QG9L1;
    }
    return $XNIVY2CY;
}

function x2006603174(){$arguments=func_get_args();
    /* x2006603174(String,Type,htmlentities,empty default,find_ARRAY); */
    $x88000=$arguments[0];/* String */
    $x88001=$arguments[1];/* Type */
    $x88002=$arguments[2];/* htmlentities */
    $x88009=$arguments[3];/* empty default */
    
    $x88011=$arguments[4][0];/* Find */
    $x88012=$arguments[4][1];/* Color */
    $x88013=$arguments[4][2];/* BackgroundColor  */
    $x88003="";
    switch(trim($x88001)){
        case "-":/* serie */
            $x88003=x1117130562("-",$x88000);
            break;
        case "$":/* Moneda */
            if ( is_numeric ( $x88000 ) ) {
                $x88003=$x88000;
            }else{
                $x88003=0;//
            }
            if (is_numeric( $x88002 ) ) {
                $x88003="$". x1117130560(number_format ( $x88003 , 2 , "." , "," ),$x88002," ");
            }else{
                $x88003="$".number_format ( $x88003 , 2 , "." , "," );
            }
            break;
        case "0.00":/* 2 decimales */
            if ( is_numeric ( $x88000 )) {
                $x88003=$x88000;
            }else{
                $x88003=0;//
            }
            $x88003=number_format ( $x88003 , 2 , "." , "," );
            break;
        case "0.0":/* 1 decimal */
            if ( is_numeric ( $x88000 )) {
                $x88003=$x88000;
            }else{
                $x88003=0;//
            }
            $x88003=number_format ( $x88003 , 1 , "." , "," );
            break;
        case "M":/* mayusculas */
            $x88003=strtoupper(trim($x88000));
            break;
        case "m":/* minusculas */
            $x88003=strtolower(trim($x88000));
            break;
        case "C":/* Parrafo */
            $x88003_A=strtolower(trim($x88000));
            $x88003_B=substr($x88003_A,1,strlen($x88003_A)-1 );
            $x88003=strtoupper($x88003_A[0]).$x88003_B;
            break;
        case "CT":/* Capital */
            $x88003_A=explode(" ",$x88000);
            if (count($x88003_A)>=1) {
                for ($qas=0;$qas<count($x88003_A);$qas++){
                    $x88003.=x2006603174($x88003_A[$qas],"C")." ";
                }
                $x88003=trim($x88003);
            }
            break;
        case "CX":/* capital exclusiva */
            //$x88003_A=split(" ",$x88000);
            $x88003_A=preg_split("/[\s,]+/",$x88000);
            if (count($x88003_A)>=1) {
                for ($qas=0;$qas<count($x88003_A);$qas++){
                    switch(strtolower($x88003_A[$qas])) {
                case "de":case "y":case "o":case "con":case "mas":case "del":case "la":case "las":case "los":
                case "lo":case "al":case "en":case "y/o":case "e":case "u":
                case "un":case "una":case "uno":case "unos":case "unas":
                case "el":case "del":case "ella":case "ellas":case "ellos":
                case "tu":case "tus":case "mi":case "mio":case "mios":
                case "a":case "ante":case "con":case "contra":case "de":
                case "desde":case "en":case "entre":case "para":case "por":
                case "segun":case "sin":case "sobre":case "tras":
                            $x88003.=strtolower($x88003_A[$qas])." ";
                            break;
                        default:
                            $x88003.=x2006603174($x88003_A[$qas],"C")." ";
                            break;

                    }
                }
                $x88003=trim($x88003);
            }
            break;
        default:
            $x88003=$x88000;
        break;
    }
    if (isset($x88009)){ if (trim($x88003)==""){ $x88003=htmlentities($x88009); } }
    if ($x88002==true){ $x88003=htmlentities($x88003); }
    if (isset($x88011)){$x88003=x2006603175($x88003,$x88011,$x88012,$x88013);}
    return $x88003;
}

function X743615815(){ $arguments=func_get_args();
    /* X743615815(String); */
    $x88000=$arguments[0];/* String */
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
    $x88000 = utf8_decode($x88000);
    $x88000 = strtr($x88000, utf8_decode($originales), $modificadas);
    $x88000 = strtolower($x88000);
    return utf8_encode($x88000);
}

function X849016873(){ $arguments=func_get_args();
    /* X849016873(typo); */
    $x88000=$arguments[0];/* Data Array */
    switch (strtoupper(trim($x88000))) {
        case 'VTON':  /* Vocales Tonicas */
            $XMBU2DADQ=array( "á","é","í","ó","ú");
            break;
        case 'VNOT':  /* Vocales No Tonicas */
            $XMBU2DADQ=array( "a","e","i","o","u");
            break;  
        case 'CONS':  /* Consonantes */
            $XMBU2DADQ=array( "b", "c", "d", "f", "g", "h", "i","j","k","l","m","n","ñ","p","q","r","s","t","v","w","x", "y", "z");
            break;  
        case 'NUTI': /* Numero */
            $XMBU2DADQ=array(0=>"singular",1=>"plaural",2=>"sin definir");
            break;  
        case 'GENE': /* Genero */
            $XMBU2DADQ=array(0=>"masculino",1=>"femenino",2=>"ambiguo",3=>"sin definir");
            break;  
        case 'TFEM': /* Termino Femenino */
            $XMBU2DADQ=array( "esa", "isa", "ina", "triz", "dad", "tad", "cion", "sion", "xion", "tud", "icie", "umbre", "sis", "ez");
            break;  
        case 'HETE': /* Heteronimos */
            $XMBU2DADQ=array("toro"=>"vaca","caballo"=>"yegua","padre"=>"madre","yerno"=>"nuera","heroe"=>"heroina","actor"=>"actriz","abad"=>"abadesa","poeta"=>"poetisa");
            break;  
        case 'INVA': /* Invariables */
            $XMBU2DADQ=array("artista","astronauta","atleta","ciclista","guia","estudiante","interprete","interprete");
            break;  
        case 'SIGN': /* Por Significado */
            $XMBU2DADQ=array("papa","orden","frente","cura","corte","cometa","capital");
            break;   
        case 'AMBI': /* Ambiguos */
            $XMBU2DADQ=array("azucar","mar","calor","margen");
            break; 
        case 'EPIC': /* Epicenos */
            $XMBU2DADQ=array("azucar","mar","calor","margen");
            break;
        case 'EXEP': /* Exepciones */
            $XMBU2DADQ=array("mano"=>1,"dinamo"=>1,"seo"=>1,"dia"=>0,"mapa"=>0,"fantasma"=>0,"estigma"=>0,"magma"=>0,"apotegma"=>0,"analisis"=>0,"enfasis"=>0,"juez"=>0,"pies"=>0);
            break;
        default:
            $XMBU2DADQ=null;
            break;
    }
    return $XMBU2DADQ;
}

function X115122020($w){
    if ($w!=null) {
        $XH9MKNYR4=X849016873('GENE');
        $XNG3IVCNX=X849016873('CONS');
        $XDZLTTFEM=X849016873('TFEM');
        $XDZLTHETE=X849016873('HETE');
        $XDZLTINVA=X849016873('INVA');
        $XDZLTSIGN=X849016873('SIGN');
        $XDZLTAMBI=X849016873('AMBI');
        $XDZLTEPIC=X849016873('EPIC');
        $XDZLTEXEP=X849016873('EXEP');

        $genero=0;
        $ptr=strtolower($w);
        $plon=strlen($ptr);
        $prtge_001=substr($ptr, $plon-1    ,1 );


        if ($prtge_001=="o" || $prtge_001=="e"  ) {
            $genero="masculino";
            $tipo="morfema de genero ".$prtge_001;
            $masc=$ptr;
            $fems=substr($ptr, 0    ,$plon-1 )."a";
        }
        if ($prtge_001=="a") {
            $genero="femenino";
            $tipo="morfema de genero";
            $masc=substr($ptr, 0    ,$plon-1 )."o";
            $fems=$ptr;
        }

        foreach ($XNG3IVCNX as $ind => $val ){ if ($prtge_001==$val) {
            $masc=$ptr;
            $fems=$ptr."a";
            $genero=$XH9MKNYR4[0];
            $tipo="consonante";
            break;
        }}
        
        foreach ($XDZLTTFEM as $ind => $val ){ if ($plon>=strlen($val)) {
            if (substr($ptr, $plon-strlen($val)    ,strlen($val) )==$val) {
                $genero=$XH9MKNYR4[1];
                $tipo="Sin morfema de genero masculino";
                $genero=1;
                break;
            }
        }}
        $cont=true;
        if ($cont!=false) { foreach ($XDZLTEXEP as $ind => $val ){
            if ($plon==strlen($ind)   ) {
                if ($ptr==$ind) {
                    if ($val==0) {
                        $genero=$XH9MKNYR4[0];
    
                        $masc="".$ind;
                        $fems="";
                    }else{
                        $genero=$XH9MKNYR4[1];
    
                        $masc="";
                        $fems="".$ind;
                    }
                    $tipo="exepcion";
                    $cont=false;
                    break;
                }
            }
        }}
        if ($cont!=false) { foreach ($XDZLTHETE as $ind => $val ){
        
            if ( $ptr==$ind || $ptr==$val ) {
                $masc=$ind;
                $fems=$val;
                $genero=$XH9MKNYR4[0];
                if ($ptr==$val) {
                    $genero=$XH9MKNYR4[1];
                }
                $tipo="heteronimos";
                $cont=false;
                break;
            }
        }}
        if ($cont!=false) { foreach ($XDZLTEPIC as $ind => $val ){
            if ($plon==strlen($ind)   ) {
                if ($ptr==$ind) {
                    if ($val==0) {
                        $genero=$XH9MKNYR4[0];
        
                        $masc="".$ind;
                        $fems="";
                    }else{
                        $genero=$XH9MKNYR4[1];
        
                        $masc="";
                        $fems="".$ind;
                    }
                    $tipo="epicenos";
                    $cont=false;
                    break;
                }
            }
        }}
        if ($cont!=false) { foreach ($XDZLTINVA as $ind => $val ){
                if ($plon==strlen($val)   ) {
                    if ($ptr==$val) {
                        $masc="el ".$val;
                        $fems="la ".$val;
                        $genero=$XH9MKNYR4[3];
                        $tipo="invariable";
                        $cont=false;
                        break;
                    }
                }
        }}
        if ($cont!=false) { foreach ($XDZLTSIGN as $ind => $val ){
                if ($plon==strlen($val)   ) {
                    if ($ptr==$val) {
                        $masc="el ".$val;
                        $fems="la ".$val;
                        $genero=$XH9MKNYR4[3];
                        $tipo="significado";
                        $cont=false;
                        break;
                    }
                }
        }}
        if ($cont!=false) { foreach ($XDZLTAMBI as $ind => $val ){
                if ($plon==strlen($val)   ) {
                    if ($ptr==$val) {
                        $masc="el ".$val;
                        $fems="la ".$val;
                        $genero=$XH9MKNYR4[2];
                        $tipo="ambiguo";
                        $cont=false;
                        break;
                    }
                }
        }}
        $rets['MAS']=$masc;
        $rets['FEM']=X743615815($fems);
        $rets['GEN']=$genero;
        $rets['TIP']=$tipo;
        return $rets;
    }
}

function X177017583(){ $arguments=func_get_args();
    /* X849016873(typo); */
    $x88000=$arguments[0];/* Data Array */
    $XH9MKNYR4=X849016873('NUTI');
    $XNG3IVCNX=X849016873('CONS');
    $XMGQE3XXY=X849016873('VNOT');
    $XDZLT29DX=X849016873('VTON');
    $XGAR06NUM=0;
    $XJ4XPYHYE=strtolower($x88000);
    $XEF3N3CUX=strlen($XJ4XPYHYE);
    $XWZWRD5LR=substr($XJ4XPYHYE,$XEF3N3CUX-1,1);
    $XAP0S0INU=true;
    if ($XAP0S0INU!=false) { foreach ($XMGQE3XXY as $ind => $val ){
        if ($XWZWRD5LR==$val) {
            $XGAR06SIN=$XJ4XPYHYE;
            $XGAR06PLU=$XJ4XPYHYE."s";
            $XGAR06NUM=$XH9MKNYR4[0];
            $XGAR06TIP="vocal no tonica";
            $XAP0S0INU=false;
            break;
        }
    }}
    if ($XAP0S0INU!=false) { foreach ($XDZLT29DX as $ind => $val ){
        if ($XWZWRD5LR==$val) {
            $XNPTIQNE6="es";
            if ($val=="é") {
                $XNPTIQNE6="s";
            }
            $XGAR06SIN=$XJ4XPYHYE;
            $XGAR06PLU=$XJ4XPYHYE.$XNPTIQNE6;
            $XGAR06NUM=$XH9MKNYR4[0];
            $XGAR06TIP="vocal tonica";
            $XAP0S0INU=false;
            break;
        }
    }}
    // exepciones
    if ($XAP0S0INU!=false) { foreach ($XNG3IVCNX as $ind => $val ){
        if ($XWZWRD5LR==$val) {
            $XNPTIQNE6="es";
            $XQOTQDI9V=$XJ4XPYHYE;
            if ($val=="z") {
                $XNPTIQNE6="ces";
                $XQOTQDI9V=substr($XJ4XPYHYE,0,$XEF3N3CUX-1 );
            }
            $XGAR06SIN=$XJ4XPYHYE;
            $XGAR06PLU=($XQOTQDI9V).$XNPTIQNE6;
            $XGAR06NUM=$XH9MKNYR4[0];
            $XGAR06TIP="consonante";
            $XAP0S0INU=false;
            break;
        }
    }}
    $XFSFOHNLO['SIN']=$XGAR06SIN;
    $XFSFOHNLO['PLU']=X743615815($XGAR06PLU);
    $XFSFOHNLO['NUM']=$XGAR06NUM;
    $XFSFOHNLO['TIP']=$XGAR06TIP;
    return $XFSFOHNLO;
}



function X868022115(){  $arguments=func_get_args();
    /* X868022115(Word); */
    $x88000=$arguments[0];/* Word */
    $x88001=$arguments[1];/* INDEX */
    $XXWQMDWYR["WORD"]=$x88000;
    $XXWQMDWYR["SINA"]=(X743615815($x88000));
    $gen=X115122020(($x88000));
    $XXWQMDWYR["GNNO"]=$gen['GEN'];
    $XXWQMDWYR["GNCL"]=substr(strtoupper($gen['GEN']),0,1);
    $X4129478231="El";$X4129478242="o";if ($XXWQMDWYR["GNCL"]=="F"){$X4129478231="La";$X4129478242="a";}
    $XXWQMDWYR["GNTM"]=$X4129478242;
    $XXWQMDWYR["GNAR"]=$X4129478231;
    $XXWQMDWYR["GNTP"]=$gen['TIP'];
    $XXWQMDWYR["GNMS"]=$gen['MAS'];
    $XXWQMDWYR["GNFM"]=$gen['FEM'];
    $num=X177017583($x88000);
    $XXWQMDWYR["NUNO"]=$num['NUM'];
    $XXWQMDWYR["NUTP"]=$num['TIP'];
    $XXWQMDWYR["NUSN"]=$num['SIN'];
    $XXWQMDWYR["NUPL"]=$num['PLU'];
    if ($x88001!=null){
        $XXWQMDXXR=$XXWQMDWYR[$x88001];
    }else{
        $XXWQMDXXR=$XXWQMDWYR;
    }
    return $XXWQMDXXR;
}

function x5790905108() { $arguments=func_get_args();
    /* x5790905108($text, $chars); */
    $text=$arguments[0];//$xV
    $chars=$arguments[1];//$xP
    $TPS=$arguments[2];//Type in the middle
    $text = $text." ";
    if (strlen($text)>=$chars){
        if ($TPS){
            $XWREWI608=floor($chars*0.35);
            $textA = substr($text,0,$XWREWI608);
            $textB = substr($text,-$XWREWI608);
            $text = trim($textA)."...".trim($textB) ;
        }else{
            $text = substr($text,0,$chars);
            $text = substr($text,0,strrpos($text,' '));
            $text = $text."...";
        }
    }
    return $text;
}

function X629496073(){$arguments=func_get_args();
    /* X629496073($text); */
    $str=$arguments[0];//$xV
    $TBR=$arguments[1]?$arguments[1]:"\n";//
   foreach (str_split($str) as $letter)
   {
       $rotatedText.=$letter.$TBR;
   }
    return $rotatedText;
}




function x8800880000(){ $arguments=func_get_args();
    //x8800880000($SQL);
    $x7202361278=$arguments[0];

    $XLOC4DFDV=FALSE;
    $XWPOE2CBD['XCIHCMLBD']=$XLOC4DFDV ? "pladmx_xsr" : "pladmx_xsr" ;
    $XWPOE2CBD['XKY0THLUS']=$XLOC4DFDV ? "root" : "w5213719y1314308" ;
    $XWPOE2CBD['XBBSK6LPW']=$XLOC4DFDV ?     "" : "x5213919t1314308e13s" ;


        

    if (!empty($x7202361278)) {
        $cDB = new BD ;
        $cDB->cnx($XWPOE2CBD['XCIHCMLBD'],"localhost",$XWPOE2CBD['XKY0THLUS'],$XWPOE2CBD['XBBSK6LPW']);
        $cDB->sql($x7202361278);
        switch(strtoupper(trim(substr(trim($x7202361278),0,6)))){
            case "SELECT":
                    $cDB->sql($x7202361278);
                    $con=0;
                    $cDBx['info']['r']=0;
                    if (@$cDB->r()>=1 ){
                        $cDBx['info']['r']=$cDB->r();
                        while ($r = mysql_fetch_array($cDB->QID, MYSQL_ASSOC)) {
                            foreach ( $r as $ix => $rx ){
                                $cDBx['data'][$con][$ix]=$rx;
                            }
                            $con++;
                        }
                    }
            break;
            case "INSERT":
                $cDBx=$cDB->id();
            break;
            default:/* UPDATE,DELETE */
                $cDBx=NULL;
            break;
        }
        $cDB->q();
        unset($cDB);
    }
    return $cDBx;
}



function x2136296001(){ $arguments=func_get_args();
    //x2136296001($x33333['BDT'],$x33333['data']);
    $x88000=$arguments[0];/* Tabla */
    $x88001=$arguments[1];/* Parametros */
    $x88099=$arguments[2];/* ifnoexist */
    if ($x88001!=null){ $x88004=true; foreach ($x88001 as $ix=>$rx){
        $x88005=",";
        if ($x88004==true){$x88004=false;$x88005="";}
        $x88002.=$x88005." `".$ix."` ";
        $x88003.=$x88005." '".$rx."' ";
    }  
    $XJ00Z8OC2="";
    if ($x88099!=null){ $XI4RNAJTP=0; foreach ($x88099 as $ix=>$rx){
        $XPYB1HFZM=" AND ";
        if ($XI4RNAJTP==0){ $XI4RNAJTP++; $XPYB1HFZM=""; }
            $XJ00Z8OC2.=" ".$XPYB1HFZM." `".$rx."`='".$x88001[$rx]."' ";
    }}
    if ($XJ00Z8OC2==""){
        $x71003="INSERT INTO `".$x88000."` (".$x88002.") VALUES (".$x88003.");";
    }else{
        $x71003="INSERT INTO `".$x88000."` (".$x88002.") 
                    SELECT ".$x88003."
                    FROM DUAL WHERE NOT EXISTS 
                    (SELECT 1 FROM `".$x88000."` WHERE ".$XJ00Z8OC2." ) 
                    LIMIT 1;
        ";
    }
    }else{
       $x71003="";
    }
    return $x71003;
}



function X888215101(){ $arguments=func_get_args();
    //X888215101(TRUE,$xV);
    $x88000=$arguments[0];/* Render */
    $x88001=$arguments[1];/* Variable */
    $x88002=$arguments[2];/* Cursor Recursivo */
    if (!isset($x88002)){$x88002=1;}
    $xT['HTML']="<table border='0px' cellspacing='4px' cellpadding='4px'>";
    if ($x88001!=null) {
    if (is_array($x88001)){
    foreach ($x88001 as $ix => $rx){
        if ($rx==null) {
            $x89900=x0002980500(FALSE, array(uniqid(),"inb s10","#888888","{NULL}"));
        }else{
            if (is_array($rx)){
                $x89900=x0002980500(FALSE, array(uniqid(),"inb s10","#888888","(Array (".count($rx)."))"))."";
                $x89900.="</td></tr><tr><td>".X888215101(FALSE,$rx,$x88002+1)."";
            }else{
                $x89900=x0002980500(FALSE, array(uniqid(),"tnn s3","#000000",$rx));
            }
        }
         $xT['HTML'].="<tr><td colspan='2' align=\"left\" >".x0002980500(FALSE, array(uniqid(),"tnb s6","#000000","".$ix.""))."</td>
                    </tr><tr>
                    <td>&nbsp;&nbsp;</td>
                    <td width='100%' align=\"left\"  >".$x89900."</td></tr>";
    }}else{
         $xT['HTML'].="<tr><td>".x0002980500(FALSE, array(uniqid(),"tnb s3","#000000",$x88001))."</td></tr>";
    }

    }else{
        $xT['HTML'].="<tr><td>".x0002980500(FALSE, array(uniqid(),"inb s10","#888888","{NULL}"))."</td></tr>";
    }
    $xT['HTML'].="</table>";

    if ($x88000==TRUE) { echo $xT['HTML']; return null; }else{  return $xT['HTML']; }
}



function x0002980500(){ $arguments=func_get_args();
    //x0002980500(TRUE, array(xAKN(),"inb s10","#005500","TEXTO","onclick") );
    $x88000=$arguments[0];/* Render */
    $x88001=$arguments[1];/* Objeto Array - Events */
    $x88002=$arguments[2];/* Font */
    $ID=$x88001[0];
    $XCDQ0M7AA="";
    if ($x88001[1]!=null) { $x88091="class='".$x88001[1]."'"; }
    if ($x88001[4]!=null) { $x88094="onclick=\"".$x88001[4]."\""; $XCDQ0M7AA="cursor:pointer;"; }
    if ($x88001[2]!=null) { $x88093="style=\"color:".$x88001[2].";".$XCDQ0M7AA."\""; }else{ $x88093="style=\"".$XCDQ0M7AA."\""; }
    $xT['HTML']="<span id='".$ID."' ".$x88091." ".$x88093." ".$x88094." >".$x88001[3]."</span>";
    if ($x88000==TRUE) { echo $xT['HTML']; return null; }else{  return $xT['HTML']; }
}





