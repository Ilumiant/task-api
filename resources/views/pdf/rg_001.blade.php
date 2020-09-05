<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>RG-001</title>




</head>
<body>
  
  <table border="0" cellpadding="0" cellspacing="0" style="border: black solid 1px; width: 100%;">
    <tr>
      <td rowspan="3" style="border: black solid 1px; width: 25%; text-align: center; ">
        <img src="{{config('app.url')}}/img/chiamedrano.png" alt="chiamedrano" width="140mm">
      </td>
      <td style="border: black solid 1px; width: 50%; text-align: center; font-size: 3.5mm;">
        <b>SISTEMA INTEGRADO DE GESTIÓN</b> 
      </td>
      <td rowspan="3" style="border: black solid 1px; width: 25%; font-size: 3mm;">
        Código	:  PRO-SIG-006-RG-001<br>
        Revisión	: 001<br>
        Fecha	: 01-09-2019<br>
        Página	: Página 1 de 2
      </td>
    </tr>
    <tr>
      
      <td style="border: black solid 1px; text-align: center;font-size: 3.5mm;">
        <b>REGISTRO <br>
          ACTA DE REUNIÓN CHIAMEDRANO LTDA. </b> 
      </td>
      
    </tr>
    <tr>
      
      <td style="border: black solid 1px; text-align: center; font-size: 3mm;">
        Calidad, Medio Ambiente y Seguridad y Salud Ocupacional
      </td>
      
    </tr>
  </table>
  
  <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;font-size: 4mm;border: black solid 1px;margin: 0 auto;">
    <tr>
      <td colspan="12" style="background: rgb(220, 230, 242);border: black solid 1px;">
        <div style="font-size: 4mm; font-weight: 800;text-align: center;">ACTA DE REUNIÓN DE PLANIFICACIÓN Y COORDIANCIÓN (RPC)</div> 
        <div style="font-size: 3mm; font-weight: bold; text-align: center;">CHIAMEDRANO LTDA.</div> 
        </td>
      <td colspan="3" style="background: rgb(220, 230, 242);border: black solid 1px;text-align: center;font-weight: bold;">N°…………</td>
    </tr>
    <tr>
      <td colspan="3" style="border: black solid 1px;font-size: 3mm;">TEMA</td>
      <td colspan="12" style="border: black solid 1px;">: {{$document->topic}}</td>
    </tr>
    <tr>
      <td colspan="3" style="border: black solid 1px;font-size: 3mm;">OBRA O PROYECTO</td>
      <td colspan="12" style="border: black solid 1px;">: {{$document->project}}</td>
    </tr>
    <tr>
      <td colspan="3" style="border: black solid 1px;font-size: 3mm;">LUGAR</td>
      <td colspan="12" style="border: black solid 1px;">: {{$document->place}}</td>
    </tr>
    <tr>
      <td colspan="3" style="border: black solid 1px;font-size: 3mm;">FECHA DE REUNIÓN </td>
      <td colspan="4" style="border: black solid 1px;">: {{ date('d-m-Y', strtotime($document->date)) }}</td>
      <td colspan="4" style="border: black solid 1px;font-size: 3mm;">PRÓXIMA REUNIÓN </td>
      <td colspan="4" style="border: black solid 1px;">: {{ date('d-m-Y', strtotime($document->date_next_metting)) }}</td>
    </tr>
    <tr>
      <td colspan="3" style="border: black solid 1px;font-size: 3mm;">HORA INICIO </td>
      <td colspan="4" style="border: black solid 1px;">: {{$document->time_start}}</td>
      <td colspan="4" style="border: black solid 1px;font-size: 3mm;">HORA DE TÉRMINO </td>
      <td colspan="4" style="border: black solid 1px;">: {{$document->time_end}}</td>
    </tr>
    <tr>
      <td colspan="15" style="text-align: center; font-weight: bold;background: rgb(217, 220, 224);border: black solid 1px;">ASISTENTES</td>
    </tr>
    <tr>
      <td colspan="7" style="text-align: center; border: black solid 1px;font-size: 3mm;">NOMBRE</td>
      <td colspan="4" style="text-align: center; border: black solid 1px;font-size: 3mm;">CARGO</td>
      <td colspan="4" style="text-align: center; border: black solid 1px;font-size: 3mm;">FIRMA</td>
    </tr>
    @if(count($document->asistants)=='0')
    <tr>
      <td colspan="7" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
      <td colspan="4" style="border: black solid 1px;">&nbsp;</td>
    </tr>
    @else
      @foreach($document->asistants as $key => $datos)
        <tr>
          <td colspan="7" style="border: black solid 1px;">&nbsp;{{$datos->name}}</td>
          <td colspan="4" style="border: black solid 1px;">&nbsp;{{$datos->position}}</td>
          <td colspan="4" style="border: black solid 1px;">&nbsp;
            <img src="{{config('app.url')}}/{{$datos->firm}}" alt="firma" style="height: 5mm;"></td>
        </tr>
      @endforeach
    @endif
    
    <tr>
      <td colspan="15" style="text-align: center; font-weight: bold;background: rgb(217, 220, 224);border: black solid 1px;">TEMAS Y ACUERDOS</td>
    </tr>
    <tr>
      <td colspan="5" rowspan="2" style="border: black solid 1px; text-align: center; font-size: 3mm;">DESCRIPCIÓN DEL TEMA </td> 
      <td colspan="4" rowspan="2" style="border: black solid 1px; text-align: center;font-size: 3mm;">ACUERDO</td>
      <td colspan="3" rowspan="2" style="border: black solid 1px; text-align: center;font-size: 3mm;">RESPONSABLE</td>
      <td rowspan="2" style="border: black solid 1px; text-align: center;font-size: 3mm;">FECHA DE <br>EJECUCIÓN</td>
      <td colspan="2" style="border: black solid 1px; text-align: center;font-size: 3mm;">LOGRADO</td>
    </tr>
    <tr>
      <td style="border: black solid 1px; text-align: center;font-size: 3mm;">SI</td>
      <td style="border: black solid 1px; text-align: center;font-size: 3mm;">NO</td>
    </tr>
    @if(count($document->topicMetting)=='0')
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    @else
      @foreach($document->topicMetting as $key => $datos)
        <tr>
          <td colspan="5" style="border: black solid 1px; ">&nbsp;{{$datos->description}}</td> 
          <td colspan="4" style="border: black solid 1px; ">&nbsp;{{$datos->agreement}}</td>
          <td colspan="3" style="border: black solid 1px; ">&nbsp;{{$datos->responsable}}</td>
          <td style="border: black solid 1px; ">&nbsp;{{ date('d-m-Y', strtotime($datos->date)) }}</td>
          <td style="border: black solid 1px; text-align: center;">
            @if($datos->achivement==1)
              X
            @else
            @endif
          </td>
          <td style="border: black solid 1px; text-align: center;">
            @if(is_null($datos->achivement) || $datos->achivement==1)
            @else
              X
            @endif
          </td>
        </tr>
      @endforeach
    @endif
    
  </table>


<div style="page-break-after: always;"></div>

<table border="0" cellpadding="0" cellspacing="0" style="border: black solid 1px; width: 100%;">
  <tr>
    <td rowspan="3" style="border: black solid 1px; width: 25%; text-align: center; ">
      <img src="{{config('app.url')}}/img/chiamedrano.png" alt="chiamedrano" width="140mm">
    </td>
    <td style="border: black solid 1px; width: 50%; text-align: center; font-size: 3.5mm;">
      <b>SISTEMA INTEGRADO DE GESTIÓN</b> 
    </td>
    <td rowspan="3" style="border: black solid 1px; width: 25%; font-size: 3mm;">
      Código	:  PRO-SIG-006-RG-001<br>
      Revisión	: 001<br>
      Fecha	: 01-09-2019<br>
      Página	: Página 2 de 2
    </td>
  </tr>
  <tr>
    
    <td style="border: black solid 1px; text-align: center;font-size: 3.5mm;">
      <b>REGISTRO <br>
        ACTA DE REUNIÓN CHIAMEDRANO LTDA. </b> 
    </td>
    
  </tr>
  <tr>
    
    <td style="border: black solid 1px; text-align: center; font-size: 3mm;">
      Calidad, Medio Ambiente y Seguridad y Salud Ocupacional
    </td>
    
  </tr>
</table>

  <table border="0" cellpadding="0" cellspacing="0" style="border: black solid 1px; width: 100%;">
    <tr>
      <td colspan="15" style="text-align: center; font-weight: bold;background: rgb(217, 220, 224);border: black solid 1px;">PENDIENTES</td>
    </tr>
    <tr>
      <td colspan="5" rowspan="2" style="border: black solid 1px; text-align: center; font-size: 3mm;">DESCRIPCIÓN DEL TEMA </td> 
      <td colspan="4" rowspan="2" style="border: black solid 1px; text-align: center;font-size: 3mm;">ACUERDO</td>
      <td colspan="3" rowspan="2" style="border: black solid 1px; text-align: center;font-size: 3mm;">RESPONSABLE</td>
      <td rowspan="2" style="border: black solid 1px; text-align: center;font-size: 3mm;">FECHA DE <br>EJECUCIÓN</td>
      <td colspan="2" style="border: black solid 1px; text-align: center;font-size: 3mm;">LOGRADO</td>
    </tr>
    <tr>
      <td style="border: black solid 1px; text-align: center;font-size: 3mm;">SI</td>
      <td style="border: black solid 1px; text-align: center;font-size: 3mm;">NO</td>
    </tr>
    @if(count($document->pending)=='0')
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" style="border: black solid 1px; ">&nbsp;</td> 
      <td colspan="4" style="border: black solid 1px; ">&nbsp;</td>
      <td colspan="3" style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
      <td style="border: black solid 1px; ">&nbsp;</td>
    </tr>
    @else
      @foreach($document->pending as $key => $datos)
        <tr>
          <td colspan="5" style="border: black solid 1px; ">&nbsp;{{$datos->description}}</td> 
          <td colspan="4" style="border: black solid 1px; ">&nbsp;{{$datos->agreement}}</td>
          <td colspan="3" style="border: black solid 1px; ">&nbsp;{{$datos->responsable}}</td>
          <td style="border: black solid 1px; ">&nbsp;{{ date('d-m-Y', strtotime($datos->date)) }}</td>
          <td style="border: black solid 1px; text-align: center; ">
            @if($datos->achivement==1)
              X
            @else
            @endif
          </td>
          <td style="border: black solid 1px; text-align: center;">
            @if(is_null($datos->achivement) || $datos->achivement==1)
            @else
              X
            @endif
          </td>
        </tr>
      @endforeach
    @endif
    

    
  </table>
  </body>

</html>