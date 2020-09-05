<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>CHECK-LIST AUDITORIA HVCC y HCR 360</title>


</head>
<body>
  <img src="{{config('app.url')}}/img/tool9.png" alt="tool9">

<table border="1" cellpadding="0" cellspacing="0" style="border: black solid 1px; width: 100%; font-size: 3mm;">
	<tr>
    <td colspan="12" style="text-align: center; font-size: 4mm; font-weight: bold; background: rgb(216, 216, 216);">
      AUDITORIA HERRAMIENTA DE VERIFICIACION DEL OPERADOR / MANTENEDOR  y HCR 360°
    </td>
  </tr>
  <tr>
    <td colspan="2" style="background: rgb(216, 216, 216);">ACTIVIDAD OBSERVADA:</td>
    <td colspan="4">&nbsp;{{$document->observed_activity}}</td>
    <td colspan="2" style="background: rgb(216, 216, 216);">FECHA/HORA:</td>
    <td colspan="4">&nbsp;{{ date('d-m-Y', strtotime($document->date)) }}</td>
  </tr>
  <tr>
    <td colspan="2" style="background: rgb(216, 216, 216);">EMPRESA EJECUTANTE:</td>
    <td colspan="4">&nbsp;{{$document->executing_company}}</td>
    <td colspan="2" rowspan="3" style="background: rgb(216, 216, 216);">PARTICIANTE(S) DE REVISION DE HCR 360°</td>
    <td colspan="4" rowspan="3" style="text-align: justify;">
      {{$document->participants}}
    </td>
  </tr>
  <tr>
    <td colspan="2" style="background: rgb(216, 216, 216);">AREA Y/O EQUIPO:</td>
    <td colspan="4">&nbsp;{{$document->area_or_equipment}}</td>
    
  </tr>
  <tr>
    <td colspan="2" style="background: rgb(216, 216, 216);">GERENCIA/SUPERINTENDENCIA:</td>
    <td colspan="4">&nbsp;{{$document->management}}</td>
    
  </tr>
  <tr>
    <td colspan="2" style="background: rgb(216, 216, 216);">INDIQUE EL ALCANCE DE LA TAREA:</td>
    <td colspan="10">&nbsp;{{$document->scope_of_task}}</td>
  </tr>
</table>

<br>

<table border="1" cellpadding="0" cellspacing="0" style="border: black solid 1px; width: 100%; font-size: 2.5mm;">
<tr>
  <td colspan="12" style="text-align: center; font-size: 4mm; font-weight: bold; background: rgb(216, 216, 216);">
    Auditoria Herramienta de Verificación de Riesgo de Fatalidad
  </td>
</tr>
<tr>
  <td rowspan="2" style="text-align: center;font-weight: bold;">ITEM 1</td>
  <td colspan="3" rowspan="2"style="text-align: center;font-weight: bold;">DESCRIPCIÓN</td>
  <td colspan="3" style="text-align: center;font-weight: bold;">ESTADO</td>
  <td colspan="3" rowspan="2" style="text-align: center;font-weight: bold;">FEEDBACK - ACCIÓN CORRECTIVA / PREVENTIVA INMEDIATA</td>
  <td colspan="2" style="text-align: center;font-weight: bold;">REGISTRO  DEL (LOS) OBSERVADOS</td>
</tr>
<tr>
  <td style="text-align: center;font-weight: bold;">SI</td>
  <td style="text-align: center;font-weight: bold;">NO</td>
  <td style="text-align: center;font-weight: bold;">N/A</td>
  <td style="text-align: center;font-weight: bold;">Nombre Apellido </td>
  <td style="text-align: center;font-weight: bold;"> Firma</td>
</tr>
<tr>
  <td rowspan="2" style="text-align: center;">1.1</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">En la actividad que se está realizando,
    representa algún Riesgo  de Fatalidad y el 
    personal realizo  la(s) herramienta(a) de 
    verificación de los controles críticos que 
    aplican.</td>
    
  <td rowspan="2" style="text-align: center;font-weight: bold;">
    @if($document->item1_1_state==2)
      X
    @else
    @endif
  </td>
  <td rowspan="2" style="text-align: center;font-weight: bold;">
    @if($document->item1_1_state==1)
      X
    @else
    @endif
  </td>
  <td rowspan="2" style="text-align: center;font-weight: bold;">
    @if(is_null($document->item1_1_state) || $document->item1_1_state==1 || $document->item1_1_state==2 )
    @endif
    @if($document->item1_1_state=='0')
      X
    @endif
  </td>
  <td colspan="3" rowspan="2">&nbsp; {{$document->item1_1_feedback}}</td>
  <td >&nbsp; {{$document->item1_1_name1}}</td>
  <td >&nbsp; 
    @if(is_null($document->item1_1_firm1))
    @else
    <img src="{{config('app.url')}}/{{$document->item1_1_firm1}}" alt="firma" style="height: 5mm;">
    @endif
  </td>
</tr>
<tr>
  <td >&nbsp; {{$document->item1_1_name2}}</td>
  <td >&nbsp; 
    @if(is_null($document->item1_1_firm2))
    @else
    <img src="{{config('app.url')}}/{{$document->item1_1_firm2}}" alt="firma" style="height: 5mm;">
    @endif
  </td>
</tr>
<tr>
  <td rowspan="2" style="text-align: center;">1.2</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    En la actividad que  está auditando, se cumple 
    con todos los controles críticos que aplica a la tarea. </td>
  
    
  <td rowspan="2" style="text-align: center;font-weight: bold;">
    @if($document->item1_2_state==2)
      X
    @else
    @endif
  </td>
  <td rowspan="2" style="text-align: center;font-weight: bold;">
    @if($document->item1_2_state==1)
      X
    @else
    @endif
  </td>
  <td rowspan="2" style="text-align: center;font-weight: bold;">
    @if(is_null($document->item1_2_state) || $document->item1_2_state==1 || $document->item1_2_state==2 )
    @endif
    @if($document->item1_2_state=='0')
      X
    @endif
  </td>
  <td colspan="3" rowspan="2">&nbsp; {{$document->item1_2_feedback}}</td>
  <td rowspan="2">&nbsp; {{$document->item1_2_name}}</td>
  <td rowspan="2">&nbsp; 
    @if(is_null($document->item1_2_firm))
    @else
    <img src="{{config('app.url')}}/{{$document->item1_2_firm}}" alt="firma" style="height: 5mm;">
    @endif
  </td>

</tr>
<tr></tr>
<tr>
  <td rowspan="2" style="text-align: center;">1.3</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    La fecha de la herramienta de verificación, corresponde 
    al día en que efectivamente se realiza  la actividad. </td>
  

    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item1_3_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item1_3_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item1_3_state) || $document->item1_3_state==1 || $document->item1_3_state==2 )
      @endif
      @if($document->item1_3_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item1_3_feedback}}</td>
    <td rowspan="2">&nbsp; {{$document->item1_3_name}}</td>
    <td rowspan="2">&nbsp; 
      @if(is_null($document->item1_3_firm))
      @else
      <img src="{{config('app.url')}}/{{$document->item1_3_firm}}" alt="firma" style="height: 5mm;">
      @endif
    </td>


</tr>
<tr></tr>
<tr>
  <td rowspan="2" style="text-align: center;">1.4</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    Se encuentran  todas las personas que ejecutan el trabajo 
    anotadas en la herramienta de verificación de los controles críticos. </td>
  

    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item1_4_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item1_4_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item1_4_state) || $document->item1_4_state==1 || $document->item1_4_state==2 )
      @endif
      @if($document->item1_4_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item1_4_feedback}}</td>
    <td rowspan="2">&nbsp; {{$document->item1_4_name}}</td>
    <td rowspan="2">&nbsp; 
      @if(is_null($document->item1_4_firm))
      @else
      <img src="{{config('app.url')}}/{{$document->item1_4_firm}}" alt="firma" style="height: 5mm;">
      @endif
    </td>



</tr>
<tr></tr>
<tr>
  <td rowspan="2" style="text-align: center;">1.5</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    Al finalizar  la revisión  de la herramienta de 
    verificación de los controles críticos    ¿Considera  
    que  el personal comprende esta herramienta  
    de gestión de seguridad? </td>
  

    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item1_5_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item1_1_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item1_1_state) || $document->item1_1_state==1 || $document->item1_1_state==2 )
      @endif
      @if($document->item1_1_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item1_5_feedback}}</td>
    <td >&nbsp; {{$document->item1_5_name1}}</td>
    <td >&nbsp; 
      @if(is_null($document->item1_5_firm1))
      @else
      <img src="{{config('app.url')}}/{{$document->item1_5_firm1}}" alt="firma" style="height: 5mm;">
      @endif
    </td>
  </tr>
  <tr>
    <td >&nbsp; {{$document->item1_5_name2}}</td>
    <td >&nbsp; 
      @if(is_null($document->item1_5_firm2))
      @else
      <img src="{{config('app.url')}}/{{$document->item1_5_firm2}}" alt="firma" style="height: 5mm;">
      @endif
    </td>
  </tr>



<tr>
  <td colspan="12" style="background: rgb(127, 127, 127);">&nbsp;</td>
</tr>
<tr>
  <td colspan="12" style="text-align: center; font-size: 4mm; font-weight: bold; background: rgb(216, 216, 216);">
    Auditoria HCR360°
  </td>
</tr>
<tr>
  <td rowspan="2" style="text-align: center;font-weight: bold;">ITEM 2</td>
  <td colspan="3" rowspan="2"style="text-align: center;font-weight: bold;">DESCRIPCIÓN</td>
  <td colspan="3" style="text-align: center;font-weight: bold;">ESTADO</td>
  <td colspan="3" rowspan="2" style="text-align: center;font-weight: bold;">FEEDBACK - ACCIÓN CORRECTIVA / PREVENTIVA INMEDIATA</td>
  <td colspan="2" style="text-align: center;font-weight: bold;">REGISTRO  DEL (LOS) OBSERVADOS</td>
</tr>
<tr>
  <td style="text-align: center;font-weight: bold;">SI</td>
  <td style="text-align: center;font-weight: bold;">NO</td>
  <td style="text-align: center;font-weight: bold;">N/A</td>
  <td style="text-align: center;font-weight: bold;">Nombre Apellido </td>
  <td style="text-align: center;font-weight: bold;"> Firma</td>
</tr>
<tr>
  <td rowspan="2" style="text-align: center;">2.1</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    La actividad que se está verificando,  
    se desarrolló el  HCR 360° y está identificado 
    el nombre del trabajo que se está realizando.</td>
  
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_1_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_1_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item2_1_state) || $document->item2_1_state==1 || $document->item2_1_state==2 )
      @endif
      @if($document->item2_1_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item2_1_feedback}}</td>
    <td rowspan="2">&nbsp; {{$document->item2_1_name}}</td>
    <td rowspan="2">&nbsp; 
      @if(is_null($document->item2_1_firm))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_1_firm}}" alt="firma" style="height: 5mm;">
      @endif
    </td>


</tr>
<tr></tr>
<tr>
  <td rowspan="2" style="text-align: center;">2.2</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    La fecha de la HCR 360° corresponde al día 
    en que efectivamente se hace la Actividad? </td>
  
    
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_2_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_2_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item2_2_state) || $document->item2_2_state==1 || $document->item2_2_state==2 )
      @endif
      @if($document->item2_2_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item2_2_feedback}}</td>
    <td rowspan="2">&nbsp; {{$document->item2_2_name}}</td>
    <td rowspan="2">&nbsp; 
      @if(is_null($document->item2_2_firm))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_2_firm}}" alt="firma" style="height: 5mm;">
      @endif
    </td>



</tr>
<tr></tr>
<tr>
  <td rowspan="2" style="text-align: center;">2.3</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    Se encuentran  todas las personas que ejecutan 
    el trabajo anotadas en el HCR360°. </td>
  
    
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_3_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_3_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item2_3_state) || $document->item2_3_state==1 || $document->item2_3_state==2 )
      @endif
      @if($document->item2_3_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item2_3_feedback}}</td>
    <td rowspan="2">&nbsp; {{$document->item2_3_name}}</td>
    <td rowspan="2">&nbsp; 
      @if(is_null($document->item2_3_firm))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_3_firm}}" alt="firma" style="height: 5mm;">
      @endif
    </td>



</tr>
<tr></tr>
<tr>
  <td rowspan="2" style="text-align: center;">2.4</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    La actividad que se está realizando tiene 
    procedimiento de trabajo y el personal fue capacitado. </td>
  
    
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_4_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_4_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item2_4_state) || $document->item2_4_state==1 || $document->item2_4_state==2 )
      @endif
      @if($document->item2_4_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item2_4_feedback}}</td>
    <td rowspan="2">&nbsp; {{$document->item2_4_name}}</td>
    <td rowspan="2">&nbsp; 
      @if(is_null($document->item2_4_firm))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_4_firm}}" alt="firma" style="height: 5mm;">
      @endif
    </td>


</tr>
<tr></tr>
<tr>
  <td rowspan="2" style="text-align: center;">2.5</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    Si la actividad, no tiene procedimiento de 
    trabajo, se encuentra realizado el paso a 
    paso de la tarea que se esta desarrollando. </td>
  
    
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_5_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_5_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item2_5_state) || $document->item2_5_state==1 || $document->item2_5_state==2 )
      @endif
      @if($document->item2_5_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item2_5_feedback}}</td>
    <td rowspan="2">&nbsp; {{$document->item2_5_name}}</td>
    <td rowspan="2">&nbsp; 
      @if(is_null($document->item2_5_firm))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_5_firm}}" alt="firma" style="height: 5mm;">
      @endif
    </td>



</tr>
<tr></tr>
<tr>
  <td rowspan="2" style="text-align: center;">2.6</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    El personal que participa en la actividad, 
    conocen cuales son los tipos de energías 
    que están presentes en el equipo o tarea 
    que se está realizando.</td>
  
    
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_6_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_6_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item2_6_state) || $document->item2_6_state==1 || $document->item2_6_state==2 )
      @endif
      @if($document->item2_6_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item2_6_feedback}}</td>
    <td rowspan="2">&nbsp; {{$document->item2_6_name}}</td>
    <td rowspan="2">&nbsp; 
      @if(is_null($document->item2_6_firm))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_6_firm}}" alt="firma" style="height: 5mm;">
      @endif
    </td>



</tr>
<tr></tr>
<tr>
  <td rowspan="2" style="text-align: center;">2.7</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    El personal que realiza la actividad, verifico 
    el potencial de energía cero antes de iniciar 
    la actividad. </td>
  
    
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_7_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_7_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item2_7_state) || $document->item2_7_state==1 || $document->item2_7_state==2 )
      @endif
      @if($document->item2_7_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item2_7_feedback}}</td>
    <td rowspan="2">&nbsp; {{$document->item2_7_name}}</td>
    <td rowspan="2">&nbsp; 
      @if(is_null($document->item2_7_firm))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_7_firm}}" alt="firma" style="height: 5mm;">
      @endif
    </td>



</tr>
<tr></tr>
<tr>
  <td rowspan="2" style="text-align: center;">2.8</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    En el HCR360°, se encuentra identificado 
    ¿Qué nos podría lesionar y los controles 
    definidos por los trabajadores son 
    consecuentes a la actividad a realizar. </td>
  
    
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_8_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item1_1_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item1_1_state) || $document->item1_1_state==1 || $document->item1_1_state==2 )
      @endif
      @if($document->item1_1_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item2_8_feedback}}</td>
    <td >&nbsp; {{$document->item2_8_name1}}</td>
    <td >&nbsp; 
      @if(is_null($document->item2_8_firm1))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_8_firm1}}" alt="firma" style="height: 5mm;">
      @endif
    </td>
  </tr>
  <tr>
    <td >&nbsp; {{$document->item2_8_name2}}</td>
    <td >&nbsp; 
      @if(is_null($document->item2_8_firm2))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_8_firm2}}" alt="firma" style="height: 5mm;">
      @endif
    </td>
  </tr>



<tr>
  <td rowspan="2" style="text-align: center;">2.9</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    Si hubiese trabajos cruzados, HCR 360° está 
    firmada por el supervisor de la otra Empresa </td>
  
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_9_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_9_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item2_9_state) || $document->item2_9_state==1 || $document->item2_9_state==2 )
      @endif
      @if($document->item2_9_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item2_9_feedback}}</td>
    <td >&nbsp; {{$document->item2_9_name1}}</td>
    <td >&nbsp; 
      @if(is_null($document->item2_9_firm1))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_9_firm1}}" alt="firma" style="height: 5mm;">
      @endif
    </td>
  </tr>
  <tr>
    <td >&nbsp; {{$document->item2_9_name2}}</td>
    <td >&nbsp; 
      @if(is_null($document->item2_9_firm2))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_9_firm2}}" alt="firma" style="height: 5mm;">
      @endif
    </td>
  </tr>




<tr>
  <td rowspan="2" style="text-align: center;">2.10</td>
  <td colspan="3" rowspan="2" style="text-align: justify;">
    Al finalizar  la revisión  del HCR 360° 
    ¿ Considera  que  el personal comprende 
    esta herramienta  de gestión de Seguridad? </td>
  
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_10_state==2)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if($document->item2_10_state==1)
        X
      @else
      @endif
    </td>
    <td rowspan="2" style="text-align: center;font-weight: bold;">
      @if(is_null($document->item2_10_state) || $document->item2_10_state==1 || $document->item2_10_state==2 )
      @endif
      @if($document->item2_10_state=='0')
        X
      @endif
    </td>
    <td colspan="3" rowspan="2">&nbsp; {{$document->item2_10_feedback}}</td>
    <td rowspan="2">&nbsp; {{$document->item2_10_name}}</td>
    <td rowspan="2">&nbsp; 
      @if(is_null($document->item2_10_firm))
      @else
      <img src="{{config('app.url')}}/{{$document->item2_10_firm}}" alt="firma" style="height: 5mm;">
      @endif
    </td>



</tr>
<tr></tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" style="border: black solid 1px; width: 100%; font-size: 2.5mm;">
  <tr>
    <td colspan="12" rowspan="2" >FEEDBACK: <div style="text-align: justify;">{{$document->feedback}}</div></td>
  </tr>
  <tr>
    
  </tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" style="border: black solid 1px; width: 100%; font-size: 3mm;">
<tr>
  <td colspan="4" style="font-size: 4mm; background: rgb(184, 204, 228);font-weight: bold;width: 40%;text-align: center;border: black solid 1px;">IMPORTANTE</td>
  <td  style="width: 5%;">&nbsp;</td>
  <td colspan="2" style="width: 20%;">&nbsp;</td>
  <td style="width: 5%;">&nbsp;</td>
  <td style="width: 5%;">&nbsp;</td>
  <td colspan="2" style="width: 20%;">&nbsp;</td>
  <td style="width: 5%;">&nbsp;</td>
</tr>
<tr>
  <td colspan="4" style="background: rgb(219, 229, 241);font-weight: bold;width: 40%;border: black solid 1px;">
    Si en el ítem 1, todas las preguntas son Sí, pasar al ítem 2
  </td>
  <td>&nbsp;</td>
  <td colspan="2" style="border-bottom: black solid 1px; text-align: center;">&nbsp;{{$document->supervisor_name}}&nbsp;
      @if(is_null($document->supervisor_firm))
      @else
        <img src="{{config('app.url')}}/{{$document->supervisor_firm}}" alt="firma" style="height: 5mm;">
      @endif
  </td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td colspan="2" style="border-bottom: black solid 1px; text-align: center;">&nbsp;{{$document->auditor_name}}&nbsp;
      @if(is_null($document->auditor_firm))
      @else
        <img src="{{config('app.url')}}/{{$document->auditor_firm}}" alt="firma" style="height: 5mm;">
      @endif
  </td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="4" style="background: rgb(219, 229, 241);font-weight: bold;width: 40%; text-align: justify;border: black solid 1px;">
    Si en ítem 1, dentro de las preguntas se encuentra 
    un NO, se debe detener la actividad en forma inmediata 
    y contactar al Supervisor a cargo de la actividad, 
    para generar los controles correspondientes
  </td>
  <td>&nbsp;</td>
  <td colspan="2" style="text-align: center; vertical-align: top;">Nombre /  Firma <br>
    Supervisor Responsable de la Actividad</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td colspan="2" style="text-align: center; vertical-align: top;">Nombre / Firma <br> 
    Auditor </td>
  <td>&nbsp;</td>
</tr>
</table>

</body>
</html>
