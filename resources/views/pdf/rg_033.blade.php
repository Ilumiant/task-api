<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>RG-033</title>




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
        Código	: PRO-SIG-013-RG-033<br>
        Revisión	: 001<br>
        Fecha	: 04-09-2019<br>
        Página	: Página 1 de 1
      </td>
    </tr>
    <tr>
      
      <td style="border: black solid 1px; text-align: center;font-size: 3.5mm;">
        <b>REGISTRO <br>
          LISTA DE VERIFICACIÓN FATIGA Y SOMNOLENCIA</b> 
      </td>
      
    </tr>
    <tr>
      
      <td style="border: black solid 1px; text-align: center; font-size: 3mm;">
        Calidad, Medio Ambiente y Seguridad y Salud Ocupacional
      </td>
      
    </tr>
  </table>
  
  <table border="1" cellpadding="0" cellspacing="0" style="width: 100%;font-size: 3mm;">
    <tr>
      <td colspan="10" style="text-align: center; font-size: 4mm;"><b>CONTROL DIARIO <br>
        FATIGA O SOMNOLENCIA CONDUCTOR
        </b></td>
    </tr>
    <tr>
      <td colspan="5" style="width: 50%;">Marca: {{$document->brand}}</td>
      <td colspan="5" style="width: 50%;">Fecha: {{ date('d-m-Y', strtotime($document->date)) }}</td>
    </tr>
    <tr>
      <td colspan="5">Modelo: {{$document->model}}</td>
      <td colspan="5">Hora Inicio Turno: {{$document->start_time_shift}}</td>
    </tr>   
    <tr>
      <td colspan="5">Patente: {{$document->patent}}</td>
      <td colspan="5">Hora Término Turno: {{$document->end_time_shift}}</td>
    </tr>   
    <tr>
      <td colspan="5">Nombre Conductor: {{$document->driver_name}}</td>
      <td colspan="5">Proyecto: {{$document->project}}</td>
    </tr>
    <tr>
      <td colspan="10" style="text-align: center;"><b>Indicaciones: Marque "Si", cuando tenga síntoma, Marque "No" cuando no presente síntomas</b></td>
    </tr>
    <tr>
      <td colspan="5"><b>SÍNTOMAS</b></td>
      <td style="text-align: center;"><b>SI</b></td>
      <td style="text-align: center;"><b>NO</b></td>
      <td colspan="3" style="text-align: center;"><b>Puntaje Obtenido si respuesta es afirmativa</b></td>
    </tr>
    <tr>
      <td colspan="5">BOSTEZOS</td>
      <td style="text-align: center;">
        <b>&nbsp;
          @if($document->yawns==1)
            X
          @else
          @endif
        </b></td>
      <td style="text-align: center;">
        <b>&nbsp;
          @if(is_null($document->yawns) || $document->yawns==1)
          @else
            X
          @endif
        </b></td>
      <td colspan="3" style="text-align: center;">{{$document->yawns_score}}</td>
    </tr>
    <tr>
      <td colspan="5">OJOS PESADOS Y DOLORIDOS </td>
      <td style="text-align: center;"><b>&nbsp;
        @if($document->heavy_and_sore_eyes==1)
            X
          @else
          @endif
        </b></td>
      <td style="text-align: center;"><b>&nbsp;
        @if(is_null($document->heavy_and_sore_eyes) || $document->heavy_and_sore_eyes==1)
          @else
            X
          @endif
        </b></td>
      <td colspan="3" style="text-align: center;">{{$document->heavy_and_sore_eyes_score}}</td>
    </tr>
    <tr>
      <td colspan="5">SE SIENTE MAREADO Y LA VISTA COMIENZA A NUBLARSE</td>
      <td style="text-align: center;"><b>&nbsp;@if($document->dizziness==1)
            X
          @else
          @endif</b></td>
      <td style="text-align: center;"><b>&nbsp; @if(is_null($document->dizziness) || $document->dizziness==1)
          @else
            X
          @endif</b></td>
      <td colspan="3" style="text-align: center;">{{$document->dizziness_score}}</td>
    </tr>
    <tr>
      <td colspan="5">TIENE ALUCINACIONES </td>
      <td style="text-align: center;"><b>&nbsp;@if($document->hallucination==1)
            X
          @else
          @endif</b></td>
      <td style="text-align: center;"><b>&nbsp;@if(is_null($document->hallucination) || $document->hallucination==1)
          @else
            X
          @endif</b></td>
      <td colspan="3" style="text-align: center;">{{$document->hallucination_score}}</td>
    </tr>
    <tr>
      <td colspan="5">SIENTE SUEÑO Y FALTA DE CONCENTRACIÓN</td>
      <td style="text-align: center;"><b>&nbsp;@if($document->sleep==1)
            X
          @else
          @endif</b></td>
      <td style="text-align: center;"><b>&nbsp;@if(is_null($document->sleep) || $document->sleep==1)
          @else
            X
          @endif</b></td>
      <td colspan="3" style="text-align: center;">{{$document->sleep_score}}</td>
    </tr>
    <tr>
      <td colspan="5">SUS REACCIONES SON LENTAS	</td>
      <td style="text-align: center;"><b>&nbsp;@if($document->slow_reactions==1)
            X
          @else
          @endif</b></td>
      <td style="text-align: center;"><b>&nbsp;@if(is_null($document->slow_reactions) || $document->slow_reactions==1)
          @else
            X
          @endif</b></td>
      <td colspan="3" style="text-align: center;">{{$document->slow_reactions_score}}</td>
    </tr>
    <tr>
      <td colspan="5">SENSACIÓN DE TENSIÓN MUSCULAR O CALAMBRE</td>
      <td style="text-align: center;"><b>&nbsp; @if($document->muscle_tension==1)
            X
          @else
          @endif</b></td>
      <td style="text-align: center;"><b>&nbsp; @if(is_null($document->muscle_tension) || $document->muscle_tension==1)
          @else
            X
          @endif</b></td>
      <td colspan="3" style="text-align: center;">{{$document->muscle_tension_score}}</td>
    </tr>
    <tr>
      <td colspan="5">ALTERACIONES EN EL ESTADO DE ÁNIMO</td>
      <td style="text-align: center;"><b>&nbsp;@if($document->mood==1)
            X
          @else
          @endif</b></td>
      <td style="text-align: center;"><b>&nbsp;@if(is_null($document->mood) || $document->mood==1)
          @else
            X
          @endif</b></td>
      <td colspan="3" style="text-align: center;">{{$document->mood_score}}</td>
    </tr>
    <tr>
      <td colspan="5">DÉFICIT DE MEMORIA</td>
      <td style="text-align: center;"><b>&nbsp;@if($document->memory_deficit==1)
            X
          @else
          @endif</b></td>
      <td style="text-align: center;"><b>&nbsp;@if(is_null($document->memory_deficit) || $document->memory_deficit==1)
          @else
            X
          @endif</b></td>
      <td colspan="3" style="text-align: center;">{{$document->memory_deficit_score}}</td>
    </tr>
    <tr>
      <td colspan="5"><b>TOTAL PUNTAJE</b> </td>
      <td colspan="5" style="text-align: center;"><b>&nbsp;
        @php
          $total_puntage=0;
        @endphp

        @if($document->yawns==1)
          @php
            $total_puntage=$document->yawns_score;
          @endphp
        @endif

        @if($document->heavy_and_sore_eyes==1)
          @php
            $total_puntage=$total_puntage+$document->heavy_and_sore_eyes_score;
          @endphp
        @endif

        @if($document->dizziness==1)
          @php
            $total_puntage=$total_puntage+$document->dizziness_score;
          @endphp
        @endif

        @if($document->hallucination==1)
          @php
            $total_puntage=$total_puntage+$document->hallucination_score;
          @endphp
        @endif

        @if($document->sleep==1)
          @php
            $total_puntage=$total_puntage+$document->sleep_score;
          @endphp
        @endif

        @if($document->slow_reactions==1)
          @php
            $total_puntage=$total_puntage+$document->slow_reactions_score;
          @endphp
        @endif

        @if($document->muscle_tension==1)
          @php
            $total_puntage=$total_puntage+$document->muscle_tension_score;
          @endphp
        @endif

        @if($document->mood==1)
          @php
            $total_puntage=$total_puntage+$document->mood_score;
          @endphp
        @endif

        @if($document->memory_deficit==1)
          @php
            $total_puntage=$total_puntage+$document->memory_deficit_score;
          @endphp
        @endif
          {{$total_puntage}}

      </b></td>
    </tr>
    <tr>
      <td colspan="10" style="text-align: center; background: rgb(96, 200, 18);"><b>Sume Puntaje Obtenido, y diríjase a tabla de ESTADO Y NIVEL DE ALERTA Y DIAGRAMA DE DECISIONES</b> </td>
    </tr>
    <tr>
      <td colspan="5" style="text-align: center;"><b>ESTADO Y NIVELES DE ALERTA</b>	<br>
        <img src="{{config('app.url')}}/img/rg-033-estado-alerta.png" alt="rg-033-estado-alerta" width="340mm">
      </td>
      <td colspan="5" style="text-align: center;"><b>DIAGRAMA DE DECISIONES PARA ESTADOS DE ALERTA</b><br>
        <img src="{{config('app.url')}}/img/rg-033-diagrama-deciciones.png" alt="rg-033-diagrama-deciciones" width="340mm">
      </td>
    </tr>
    <tr>
      <td colspan="10" style="text-align: center; background: rgb(255, 255, 0);"><b>RECOMENDACIONES</b></td>
    </tr>
    <tr>
      <td colspan="2">ALIMENTACIÓN SALUDABLE</td>
      <td colspan="2">CONSUMO DE AGUA</td>
      <td colspan="3">NO BEBER CAFÉ (ANTES DE DORMIR)</td>
      <td colspan="3">DEBE DORMIR 8 HORAS DIARIAS</td>
    </tr>
    <tr>
      <td>NO FUMAR</td>
      <td colspan="4" >NO CONSUMIR ALCOHOL, DROGAS O FÁRMACOS</td>
      <td colspan="5">EVITE POSTURAS INCÓMODAS O INADECUADAS AL DORMIR</td>
    </tr>
    <tr><td colspan="10"> EVITE PREOCUPACIONES POR ASUNTOS PERSONALES O LABORALES</td></tr>
    <tr>
      <td colspan="10" style="text-align: center;">
        <b>OBSERVACIONES GENERALES (Observar cualquier anomalía detectada en el chequeo)</b>
      </td>
      <tr>
        <td colspan="10" rowspan="3">&nbsp;{{$document->general_observations}}</td>
      </tr>
      <tr>
        
      </tr>
      <tr>
        
      </tr>
    </tr>
  </table>
  <br>
  <br>
 
  <table border="1" cellpadding="0" cellspacing="0" style="width: 100%;font-size: 3mm;">
    <tr>
      <td colspan="5" style="background: rgb(220, 230, 241);width: 50%"> <b>REALIZADO POR</b> </td>
      <td colspan="5" style="background: rgb(220, 230, 241);width: 50%"> <b>REVISADO POR</b> </td>
    </tr>
    <tr>
      <td colspan="5">Nombre: {{$document->made_by_name}}</td>
      <td colspan="5">Nombre: {{$document->reviewed_by_name}}</td>
    </tr>
    <tr>
      <td colspan="5" >Cargo: {{$document->made_by_position}}</td>
      <td colspan="5" >Cargo: {{$document->reviewed_by_position}}</td>
    </tr>
    <tr>
      <td colspan="5">Fecha: {{ date('d-m-Y', strtotime($document->made_by_date)) }}</td>
      <td colspan="5">Fecha: {{ date('d-m-Y', strtotime($document->reviewed_by_date)) }}</td>
    </tr>
    <tr>
      <td colspan="5">Firma: <img src="{{config('app.url')}}/{{$document->made_by_firm}}" alt="firma" style="height: 5mm;"></td>
      <td colspan="5">Firma: <img src="{{config('app.url')}}/{{$document->reviewed_by_firm}}" alt="firma" style="height: 5mm;"></td>
    </tr>
  </table>

  
  
  
  </body>

</html>