<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>RG-003</title>




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
        Código	:  PRO-SIG-013-RG-003<br>
        Revisión	: 004<br>
        Fecha	: 13-01-2020<br>
        Página	: Página 1 de 1
      </td>
    </tr>
    <tr>
      
      <td style="border: black solid 1px; text-align: center;font-size: 3.5mm;">
        <b>REGISTRO <br>
          CHARLA DE SEGURIDAD </b> 
      </td>
      
    </tr>
    <tr>
      
      <td style="border: black solid 1px; text-align: center; font-size: 3mm;">
        Calidad, Medio Ambiente y Seguridad y Salud Ocupacional
      </td>
      
    </tr>
  </table>
  
  <table border="0" cellpadding="0" cellspacing="0" style="font-size: 4mm;border: black solid 1px;width: 95%;margin: 0 auto; margin-top: 3mm; margin-bottom: 5mm;">
    <tr>
      <td colspan="12" style="background: rgb(217, 220, 224); border: black solid 1px;text-align: center;">
        <div style="font-size: 5mm; font-weight: 900;">CHARLA DE SEGURIDAD</div>
      </td>
    </tr>
    <tr>
      <td colspan="12" style="border: black solid 1px; height: 8mm; vertical-align: top;">
        <div style="font-size: 3mm; "> <b>TEMA:</b> &nbsp;{{$document->topic}}</div>
      </td>
    </tr>
    <tr>
      <td colspan="12" style="border: black solid 1px; height: 20mm; vertical-align: top;">
        <div style="font-size: 3mm; "> <b>OBJETIVO y/o DESCRIPCIÓN DE TEMA:</b> &nbsp;{{$document->objective}}</div>
      </td>
    </tr>
    <tr>
      <td colspan="12" style="border: black solid 1px; height: 8mm; vertical-align: top;">
        <div style="font-size: 3mm; "> <b>OBRA O LUGAR DE REUNIÓN:</b> &nbsp;{{$document->place}}</div>
      </td>
    </tr>
    <tr>
      <td colspan="3" style="border: black solid 1px; height: 8mm; vertical-align: top;">
        <b>Fecha:</b> 
        {{ date('d-m-Y', strtotime($document->date)) }}
      </td>
      <td colspan="2" style="border: black solid 1px; height: 8mm; vertical-align: top;">
        <b>Hora inicio:</b>
        {{$document->time_start}}
      </td>
      <td colspan="3" rowspan="2" style="border: black solid 1px; height: 8mm;">
       <b>MATERIAL DE APOYO</b> <br>

        @if($document->material_text==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>Texto<br>
        @else
          ___Texto<br>
        @endif

        @if($document->material_handbook==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>Manual o Folleto<br>
        @else
          ___Manual o Folleto<br>
        @endif

        @if($document->material_regulation==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>Reglamento<br>
        @else
          ___Reglamento<br>
        @endif

        @if($document->material_presentation==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>Presentación<br>
        @else
          ___Presentación<br>
        @endif

        @if($document->material_pts_intructive==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>PTS o Instructivo<br>
        @else
          ___PTS o Instructivo<br>
        @endif

        @if($document->material_other==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>Otro: {{$document->material_other_text}}<br>
        @else
          ___Otro<br>
        @endif
 
      </td>
      <td colspan="4" rowspan="2" style="border: black solid 1px; height: 8mm; ">
        <b>TIPO DE CHARLA</b> <br>
        @if($document->type_talk_five_minutes==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>Charla 5 minutos<br>
        @else
          ___Charla 5 minutos<br>
        @endif

        @if($document->type_talk_integral==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>Charla Integral<br>
        @else
          ___Charla Integral<br>
        @endif
       
        @if($document->type_talk_process==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>Procedimiento de Trabajo<br>
          Seguro (PTS)/ Instructivo<br><br>
        @else
          ___Procedimiento de Trabajo<br>
          Seguro (PTS)/ Instructivo<br>
        @endif

        @if($document->type_talk_training==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>Capacitaciones<br>
        @else
          ___Capacitaciones<br>
        @endif

        
        @if($document->type_talk_site_visit==1)
          <u>&nbsp;<b> x </b>&nbsp;</u>Visita de Obra<br>
        @else
          ___Visita de Obra<br>
        @endif

      </td>
    </tr>
    <tr>
      <td colspan="3" style="border: black solid 1px; height: 8mm;vertical-align: top;"> <b>Duración:</b> <br>
      @php
        $datetime1 = new DateTime($document->time_start);
        $datetime2 = new DateTime($document->time_end);
        $interval = $datetime1->diff($datetime2);
        echo $interval->format('%h horas %i minutos');
      @endphp
      </td>
      <td colspan="2" style="border: black solid 1px; height: 8mm;vertical-align: top;"> <b>Hora Fin:</b> {{$document->time_end}} </td>
    </tr>
    <tr>
      <td colspan="12" style="background: rgb(217, 220, 224); border: black solid 1px;text-align: center;height: 12mm;">
        <div style="font-size: 4mm; font-weight: bold;">DETALLE DEL PERSONAL INSTRUIDO</div>
      </td>
    </tr>
    <tr>
      <td style="text-align: center; font-weight: bold;border: black solid 1px;">N°</td>
      <td colspan="4" style="text-align: center; font-weight: bold;border: black solid 1px;">Nombre</td>
      <td colspan="2" style="text-align: center; font-weight: bold;border: black solid 1px;">RUT</td>
      <td colspan="2" style="text-align: center; font-weight: bold;border: black solid 1px;">Cargo</td>
      <td colspan="3" style="text-align: center; font-weight: bold;border: black solid 1px;">Firma</td>
    </tr>
    
    @if(count($document->personal)=='0')
    <tr>
      <td style="text-align: center;border: black solid 1px; height: 12mm;">1</td>
      <td colspan="4" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="3" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: center;border: black solid 1px; height: 12mm;">2</td>
      <td colspan="4" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="3" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: center;border: black solid 1px; height: 12mm;">3</td>
      <td colspan="4" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="3" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: center;border: black solid 1px; height: 12mm;">4</td>
      <td colspan="4" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="3" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: center;border: black solid 1px; height: 12mm;">5</td>
      <td colspan="4" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="3" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: center;border: black solid 1px; height: 12mm;">6</td>
      <td colspan="4" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
      <td colspan="3" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;</td>
    </tr>
    @else
      @foreach($document->personal as $key => $datos)
        {{$datos->name}}
        <tr>
          <td style="text-align: center;border: black solid 1px; height: 12mm;">{{$key+1}}</td>
          <td colspan="4" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;{{$datos->name}}</td>
          <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;{{$datos->rut}}</td>
          <td colspan="2" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;{{$datos->position}}</td>
          <td colspan="3" style="text-align: center;border: black solid 1px;height: 12mm;">&nbsp;
            <img src="{{config('app.url')}}/{{$datos->firm}}" alt="firma" style="height: 5mm;">
          </td>
        </tr>
      @endforeach
    @endif
    
  </table>


  <table border="1" cellpadding="0" cellspacing="0" style="font-size: 4mm;width: 95%;margin: 0 auto;">
    <tr>
      <td colspan="5" style="background: rgb(220, 230, 241);width: 50%;height: 10mm;"> <b>REALIZADO POR</b> </td>
      <td colspan="5" style="background: rgb(220, 230, 241);width: 50%;height: 10mm;"> <b>REVISADO POR</b> </td>
    </tr>
    <tr>
      <td colspan="5" style="height: 10mm;">Nombre:&nbsp;{{$document->made_by_name}}</td>
      <td colspan="5">Nombre:&nbsp;{{$document->reviewed_by_name}}</td>
    </tr>
    <tr>
      <td colspan="5" style="height: 10mm;">Cargo:&nbsp;{{$document->made_by_position}}</td>
      <td colspan="5" >Cargo:&nbsp;{{$document->reviewed_by_position}}</td>
    </tr>
    <tr>
      <td colspan="5" style="height: 10mm;">Fecha:&nbsp;{{ date('d-m-Y', strtotime($document->made_by_date)) }}</td>
      <td colspan="5">Fecha:&nbsp;{{ date('d-m-Y', strtotime($document->reviewed_by_date)) }}</td>
    </tr>
    <tr>
      <td colspan="5" style="height: 10mm;">Firma:&nbsp;
        @if(is_null($document->made_by_firm))
        @else
          <img src="{{config('app.url')}}/{{$document->made_by_firm}}" alt="firma" style="height: 5mm;">
        @endif
        </td>
      <td colspan="5">Firma:&nbsp;
        @if(is_null($document->reviewed_by_firm))
        @else
          <img src="{{config('app.url')}}/{{$document->reviewed_by_firm}}" alt="firma" style="height: 5mm;">
        @endif
        </td>
    </tr>
  </table>

  </body>

</html>