<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>RG_DD-ESFP</title>




</head>
<body>
  <table border="0" cellpadding="0" cellspacing="0" style="border: black solid 1px; width: 100%;">
    <tr>
      <td rowspan="3" style="border: black solid 1px; width: 25%; text-align: center; ">
        <img src="{{config('app.url')}}/img/chiamedrano.png" alt="chiamedrano" width="140mm">
      </td>
      <td colspan="2" style="border: black solid 1px; width: 50%; text-align: center; font-size: 3.5mm;">
        <b>SISTEMA INTEGRADO DE GESTIÓN</b> 
      </td>
      
    </tr>
    <tr>
      
      <td colspan="2" style="border: black solid 1px; text-align: center;font-size: 3.5mm;">
        <b>REGISTRO <br>
        DECLARACIÓN DE ESTADO DE SALUD FÍSICA Y PSICOLÓGICA</b> 
      </td>
      
    </tr>
    <tr>
      
      <td colspan="2" style="border: black solid 1px; text-align: center; font-size: 3mm;">
        Calidad, Medio Ambiente y Seguridad y Salud Ocupacional
      </td>
      
    </tr>
  </table>
  
  <table border="0" cellpadding="0" cellspacing="0" style="width: 90%;font-size: 4mm;border: black solid 1px;margin: 0 auto;">
    <tr>
      <td  style="width: 15%; border: black solid 1px; font-weight: bold;">Nombre:</td>
      <td  style="width: 65%;border-left: black solid 1px;border-top: black solid 1px; border-bottom: black solid 1px;">&nbsp;{{$document->name}}</td>
      <td  style="width: 5%;border-top: black solid 1px; border-bottom: black solid 1px;">&nbsp;</td>
      <td  style="width: 5%;border-top: black solid 1px; border-bottom: black solid 1px;border-right: black solid 1px;">&nbsp;</td>
    </tr>
    <tr>
      <td style="border: black solid 1px;font-weight: bold;">Rut:</td>
      <td colspan="3" style="border: black solid 1px;">&nbsp;{{$document->rut}}</td>
    </tr>
    <tr>
      <td style="border: black solid 1px;font-weight: bold;">Fecha:</td>
      <td colspan="3" style="border: black solid 1px;">&nbsp;{{ date('d-m-Y', strtotime($document->date)) }}</td>
    </tr>
    <tr>
      <td colspan="4" style="text-align: justify; font-weight: bold; border: black solid 1px; ">
        El trabajador declara ingresar a dependencias de CHIAMEDRANO y/o Faenas Mineras con 
        empresas clientes en el siguiente estado de salud:
      </td>
    </tr>
    <tr>
      <td style="text-align: center; font-weight: bold; border: black solid 1px;">
        N°
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        CRITERIO
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        SI
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        NO
      </td>
    </tr>
    <tr>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; height: 15mm;">
        1
      </td>
      <td style="text-align: justify; font-weight: bold; border: black solid 1px; ">
        Presenta algún tipo de dolencia física
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        &nbsp;  
        @if($document->criterion_1==1)
          X
        @else
        @endif
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        &nbsp;
        @if(is_null($document->criterion_1) || $document->criterion_1==1)
        @else
          X
        @endif
      </td>
    </tr>
    <tr>
      <td style="text-align: center; font-weight: bold; border: black solid 1px;  height: 15mm;">
        2
      </td>
      <td style="text-align: justify; font-weight: bold; border: black solid 1px; ">
        Presenta algún problema que le afecte psocológica o emocionalmente
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        &nbsp;
        @if($document->criterion_2==1)
          X
        @else
        @endif
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        &nbsp;
        @if(is_null($document->criterion_2) || $document->criterion_2==1)
        @else
          X
        @endif
      </td>
    </tr>
    <tr>
      <td style="text-align: center; font-weight: bold; border: black solid 1px;  height: 15mm;">
        3
      </td>
      <td style="text-align: justify; font-weight: bold; border: black solid 1px; ">
        En las últimas 12 horas ha consumido drogas o sustancias psicotrópicas
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        &nbsp;
        @if($document->criterion_3==1)
          X
        @else
        @endif
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        &nbsp;
        @if(is_null($document->criterion_3) || $document->criterion_3==1)
        @else
          X
        @endif
      </td>
    </tr>
    <tr>
      <td style="text-align: center; font-weight: bold; border: black solid 1px;  height: 15mm;">
        4
      </td>
      <td style="text-align: justify; font-weight: bold; border: black solid 1px; ">
        En las últimas 12 horas ha consumido alcohol
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        &nbsp;
        @if($document->criterion_4==1)
          X
        @else
        @endif
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        &nbsp;
        @if(is_null($document->criterion_4) || $document->criterion_4==1)
        @else
          X
        @endif
      </td>
    </tr>
    <tr>
      <td style="text-align: center; font-weight: bold; border: black solid 1px;  height: 15mm;">
        5
      </td>
      <td style="text-align: justify; font-weight: bold; border: black solid 1px; ">
        Se encuentra tomando algún medicamente que le produzca sueño, somnolencia o alteración sicomotriz 
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        &nbsp;
        @if($document->criterion_5==1)
          X
        @else
        @endif
      </td>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; ">
        &nbsp;
        @if(is_null($document->criterion_5) || $document->criterion_5==1)
        @else
          X
        @endif
      </td>
    </tr>
    <tr>
      <td style="text-align: center; font-weight: bold; border: black solid 1px; height: 8mm;">Firma:</td>
      <td colspan="3" style="border: black solid 1px;">&nbsp;
        <img src="{{config('app.url')}}/{{$document->firm}}" alt="firma" style="height: 5mm;">
        
      </td>
    </tr>
  </table>
  </body>

</html>