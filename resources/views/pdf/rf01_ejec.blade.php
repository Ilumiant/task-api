<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>CEN-GG-RF01-EJEC-v2 - Pérdida de Control del Vehículo</title>


<style>
html {
  margin: 0;
}
body {
  font-family: "Open Sans", "Helvetica Neue", sans-serif;
  font-size: 14px;
  color: #333333;
  background-color: #ffffff;
  margin: 0mm 0mm 0mm 0mm;
  padding: 0;
  top: 0px;
  min-height: 100%;
  -webkit-font-smoothing: antialiased; 
  padding: 0px;
}
hr {
border: 0;
margin: 0;
padding: 0;
}
.verdana{
  font-family: Verdana;
}
.trebuchet{
  font-family: 'Trebuchet MS';
}
</style>
</head>

<body>
  <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; top: 0mm;">
    <tr>
      <td style="height: 16mm;background: rgb(217, 39, 46); width: 80%;">
        <div class="trebuchet" style="color: #ffffff; font-size: 6mm; margin-left: 20mm; padding-top: 2mm;"
        >Herramienta de Verificación <b>- EJECUTIVO</b></div>
        <div 
          style="
          color: #ffffff; 
          position: absolute; 
          top: 4mm; 
          left: 130mm; 
          font-size: 6mm; 
          width: 160px; 
          text-align: center;
          font-size: 4mm;
          ">Última Versión Centinela</div>
      </td>
      <td style="width: 20%; background: rgba(237, 170, 0, 0.1);">
        <img src="{{config('app.url')}}/img/tool9.png"  alt="tool9" width="110px" style="margin-left: 4mm;">
      </td>
    </tr>
  </table>
  <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; top: 0mm;">
    <tr>
      <td >
        <div style="color: #ffffff; padding-left: 8mm; width: 25%;">
          <img src="{{config('app.url')}}/img/tool.png" height="130px" alt="tool" style="position: absolute; top: 24mm; left: 7mm;">
        </div>
      </td>
      <td style="width: 35%;">
        <div class="verdana" style="margin-left: 1mm;font-size: 3mm;padding-top: 1mm;padding-bottom: 1mm; color: #706f6f;" 
        ><b>Nombre del Ejecutivo</b> </div>
      </td>
      <td style="width: 15%;">
        <div class="verdana" style="margin-left: 1mm;font-size: 3mm;padding-top: 1mm;padding-bottom: 1mm; color: #706f6f;" 
        ><b>Fecha</b> </div>
      </td>
      <td style="width: 25%;">
        <div class="verdana" style="margin-left: 1mm; font-size: 3mm;padding-top: 1mm;padding-bottom: 1mm; color: #706f6f;" 
        ><b>Área verificada</b> </div>
      </td>
    </tr>
    <tr>
      <td >
      </td>
      <td >
        <div class="verdana" style="height: 25px; border-radius: 5px;background: rgba(237, 170, 0, 0.3);">
          <div style="padding-left: 1mm; padding-top: 1mm;">{{$document->executive_name}}</div>
        </div>
      </td>
      <td >
        <div class="verdana" style="margin: 1mm;height: 25px; border-radius: 5px;background: rgba(237, 170, 0, 0.3);" >
          <div style="padding-left: 1mm; padding-top: 1mm;">{{ date('d-m-Y', strtotime($document->date)) }}</div>
        </div>
      </td>
      <td >
        <div class="verdana" style="margin: 1mm; margin-right: 6mm;height: 25px; border-radius: 5px;background: rgba(237, 170, 0, 0.3);">
          <div style="padding-left: 1mm; padding-top: 1mm;">{{$document->checked_area}}</div>
        </div>
      </td>
    </tr>
    <tr>
      <td >
        
      </td>
      <td colspan="3">
        <div 
          class="verdana" 
          style="margin: 1mm; 
            margin-right: 6mm;
            height: 20px; 
            border-radius: 5px;
            background: rgb(112, 111, 111); 
            padding-left: 3mm; 
            padding-top: 1mm; 
            color: #ffffff; 
            font-size: 3mm;" 
        > <b>PASO 1 - PREGUNTAS POR CONTROL CRÍTICO</b> </div>
      </td>
    </tr>
  </table>
  <table border="0" cellpadding="0" cellspacing="0" style="width: 210mm; padding-top: 2mm;">
    <tr>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;width: 70mm;">
          <img src="{{config('app.url')}}/img/tool1.png" height="64px" alt="tool1" style="margin-left: 58mm; margin-top: 4mm;">
        <div 
          class="verdana" 
          style="
                 margin-top: -1mm;
                 margin-left: 6mm;
                 color: #000; 
                 font-weight:800; 
                 font-size: 3mm;
                 width: 140px; 
                 text-align: center;
                  
                 " 
          > 
         PÉRDIDA DE CONTROL
         DEL VEHÍCULO 
         </div> 
         <div 
          class="verdana" 
          style="
            margin-right: 0mm;
            margin-left: 57mm;
            margin-top: -10mm;
            color: #000; 
            font-weight: bold;
            font-size: 3mm; 
            text-align: center;
            width: 20mm;
             
            " 
        >Competencias 
        del 
        Personal</div>
        <img src="{{config('app.url')}}/img/diseño.png" height="100px" alt="diseño" style="margin-top: 3mm; margin-left: 8mm;" >
        <div 
          class="verdana" 
          style=" 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
           
          width: 30mm;
          margin-left: 19mm;
          margin-top: -27mm;
          ">
          ¿En terreno se cumplen
          todos los requisitos
          definidos para el control
          crítico? (Reglamento -
          Procedimiento -<br>
          Estándar) 
        </div>
        <div style="font-weight: bold; color: #29db38; position: absolute; top: 77mm; left: 62mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 77mm; left: 68mm;">
          NO
        </div>


        @if($document->competence_design==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 83mm; left: 62mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 83mm; left: 62mm;">
          </div>
        @endif

        @if(is_null($document->competence_design) || $document->competence_design==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 83mm; left: 68mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 83mm; left: 68mm; vertical-align: middle;">
          </div>
        @endif


      </td>

      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;width: 10mm;">
        <img src="{{config('app.url')}}/img/tool2.png" height="64px" alt="tool2" style="margin-top: -10.3mm; margin-left: 3mm;">
        <div 
          class="verdana" 
          style="
            margin-top: -11.3mm; 
            margin-left: 2mm;
            color: #000; 
            font-weight: bold;
            font-size: 3mm; 
            text-align: center;
            width: 70px;
             
            " 
        >Dispositivos
        de Seguridad</div>

        <div style="font-weight: bold; color: #29db38;position: absolute; top: 77mm; left: 92mm; ">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 77mm; left: 98mm;">
          NO
        </div>

        @if($document->device_design==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 57mm; left: 92mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 57mm; left: 92mm;">
          </div>
        @endif

        @if(is_null($document->device_design) || $document->device_design==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 57mm; left: 98mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 57mm; left: 98mm; vertical-align: middle;">
          </div>
        @endif


      </td>

      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;width: 10mm;">
        <img src="{{config('app.url')}}/img/tool3.png" height="64px" alt="tool3" style="margin-top: -10.3mm; margin-left: 4mm;">
        <div 
          class="verdana" 
          style="
            margin-top: -11.3mm; 
            margin-left: 2mm;
            color: #000; 
            font-weight: bold;
            font-size: 3mm; 
            text-align: center;
            width: 80px;
             
            " 
        >Procedimiento
        de Fatiga y
        Somnolencia </div>

        <div style="font-weight: bold; color: #29db38; position: absolute; top: 77mm; left: 117mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 77mm; left: 123mm;">
          NO
        </div>

        @if($document->process_design==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 57mm; left: 117mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 57mm; left: 117mm;">
          </div>
        @endif

        @if(is_null($document->process_design) || $document->process_design==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 57mm; left: 123mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 57mm; left: 123mm; vertical-align: middle;">
          </div>
        @endif


      </td>

      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;width: 10mm;">
        <img src="{{config('app.url')}}/img/tool4.png" height="64px" alt="tool4" style="margin-top: -10.3mm; margin-left: 4mm;">
        <div 
          class="verdana" 
          style="
            margin-top: -11.3mm; 
            margin-left: 2mm;
            color: #000; 
            font-weight: bold;
            font-size: 3mm; 
            text-align: center;
            width: 80px;
             
            " 
        >Mantenimiento
        de Elementos
        Críticos</div>

        <div style="font-weight: bold; color: #29db38; position: absolute; top: 77mm; left: 142mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 77mm; left: 148mm;">
          NO
        </div>

        @if($document->maintenance_design==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 57mm; left: 142mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 57mm; left: 142mm;">
          </div>
        @endif

        @if(is_null($document->maintenance_design) || $document->maintenance_design==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 57mm; left: 148mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 57mm; left: 148mm; vertical-align: middle;">
          </div>
        @endif

      </td>

      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;width: 10mm;">
        <img src="{{config('app.url')}}/img/tool5.png" height="64px" alt="tool5" style="margin-top: -10.3mm; margin-left: 2mm;">
        <div 
          class="verdana" 
          style="
            margin-top: -11.3mm; 
            margin-left: 2mm;
            color: #000; 
            font-weight: bold;
            font-size: 3mm; 
            text-align: center;
            width: 60px;
             
            " 
        >Estándar
        de Ruta</div>

        <div style="font-weight: bold; color: #29db38; position: absolute; top: 77mm; left: 167mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 77mm; left: 173mm;">
          NO
        </div>

        @if($document->route_design==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 57mm; left: 167mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 57mm; left: 167mm;">
          </div>
        @endif

        @if(is_null($document->route_design) || $document->route_design==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 57mm; left: 173mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 57mm; left: 173mm; vertical-align: middle;">
          </div>
        @endif


      </td>

      <td style="border-bottom: rgb(104, 104, 104) dashed 2px;width: 10mm;">
        <img src="{{config('app.url')}}/img/tool6.png" height="64px" alt="tool6" style="margin-top: -10.3mm; margin-left: 4mm;">
        <div 
          class="verdana" 
          style="
            margin-top: -11.3mm; 
            margin-left: 2mm;
            color: #000; 
            font-weight: bold;
            font-size: 3mm; 
            text-align: center;
            width: 80px;
             
            " 
        >Control y
        Gestión de
        Velocidad
        </div>
        <div style="font-weight: bold; color: #29db38; position: absolute; top: 77mm; left: 190mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 77mm; left: 196mm;">
          NO
        </div>

        @if($document->speed_design==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 57mm; left: 190mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 57mm; left: 190mm;">
          </div>
        @endif

        @if(is_null($document->speed_design) || $document->speed_design==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 57mm; left: 196mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 57mm; left: 196mm; vertical-align: middle;">
          </div>
        @endif

      </td>

    </tr>


    <tr>
      <td style="border-right: rgb(104, 104, 104) dashed 2px;">
        <img src="{{config('app.url')}}/img/operatividad.png" height="100px" alt="operatividad" style="margin-top: 5mm; margin-left: 8mm;" >
          <div 
            class="verdana" 
            style=" 
            color: rgb(58, 58, 58); 
            font-size: 3mm; 
            width: 40mm;
            margin-left: 19mm;
            margin-top: -30mm;
            "> ¿En terreno se cumple con el
          método (Plan de mantención,
          stock mínimo, presupuesto,
          recursos, contrato, memoria <br>
          de cálculo, disponibilidad de
          formularios), que define y
          permite el correcto
          funcionamiento del control
          crítico?
        </div>
        <div style="font-weight: bold; color: #29db38; position: absolute; top: 107mm; left: 62mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 107mm; left: 68mm;">
          NO
        </div>


        @if($document->competence_operability==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 113.5mm; left: 62mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 113.5mm; left: 62mm;">
          </div>
        @endif

        @if(is_null($document->competence_operability) || $document->competence_operability==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 113.5mm; left: 68mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 113.5mm; left: 68mm; vertical-align: middle;">
          </div>
        @endif



      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px;">
        <div style="font-weight: bold; color: #29db38;position: absolute; top: 107mm; left: 92mm; ">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 107mm; left: 98mm;">
          NO
        </div>

        @if($document->device_operability==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 97mm; left: 92mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 97mm; left: 92mm;">
          </div>
        @endif

        @if(is_null($document->device_operability) || $document->device_operability==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 97mm; left: 98mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 97mm; left: 98mm; vertical-align: middle;">
          </div>
        @endif

      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px;">
        <div style="font-weight: bold; color: #29db38; position: absolute; top: 107mm; left: 117mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 107mm; left: 123mm;">
          NO
        </div>

        @if($document->process_operability==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 97mm; left: 117mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 97mm; left: 117mm;">
          </div>
        @endif

        @if(is_null($document->process_operability) || $document->process_operability==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 97mm; left: 123mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 97mm; left: 123mm; vertical-align: middle;">
          </div>
        @endif


      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px;">
        <div style="font-weight: bold; color: #29db38; position: absolute; top: 107mm; left: 142mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 107mm; left: 148mm;">
          NO
        </div>

        @if($document->maintenance_operability==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 97mm; left: 142mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 97mm; left: 142mm;">
          </div>
        @endif

        @if(is_null($document->maintenance_operability) || $document->maintenance_operability==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 97mm; left: 148mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 97mm; left: 148mm; vertical-align: middle;">
          </div>
        @endif

      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px;">
        <div style="font-weight: bold; color: #29db38; position: absolute; top: 107mm; left: 167mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 107mm; left: 173mm;">
          NO
        </div>

        @if($document->route_operability==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 97mm; left: 167mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 97mm; left: 167mm;">
          </div>
        @endif

        @if(is_null($document->route_operability) || $document->route_operability==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 97mm; left: 173mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 97mm; left: 173mm; vertical-align: middle;">
          </div>
        @endif


      </td>
      <td >
        <div style="font-weight: bold; color: #29db38; position: absolute; top: 107mm; left: 190mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 107mm; left: 196mm;">
          NO
        </div>

        @if($document->speed_operability==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 97mm; left: 190mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 97mm; left: 190mm;">
          </div>
        @endif

        @if(is_null($document->speed_operability) || $document->speed_operability==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 97mm; left: 196mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 97mm; left: 196mm; vertical-align: middle;">
          </div>
        @endif


      </td>
    </tr>
  </table>
  <table style="width: 100%;">
    <tr>
      <td>
        <div 
    class="verdana" 
    style="margin: 1mm; 
      margin-right: 6mm;
      margin-left: 7mm;
      height: 20px; 
      border-radius: 5px;
      background: rgb(112, 111, 111); 
      padding-left: 3mm; 
      padding-top: 1mm; 
      color: #ffffff; 
      font-size: 3mm;" 
  > <b>PASO 2 - PREGUNTAS PARA EL RIESGO DE FATALIDAD</b> </div>
      </td>
    </tr>
  </table>
    

<table border="0" cellpadding="0" cellspacing="0" style="width: 210mm;">
  <tr>
    <td style="border-bottom: rgb(104, 104, 104) dashed 2px;">
      <img src="{{config('app.url')}}/img/capacitacion-difusion.png" height="110px" alt="capacitacion-difusion" style="margin-top: 5mm; margin-left: 8mm;" >
          <div 
            class="verdana" 
            style=" 
            color: rgb(58, 58, 58); 
            font-size: 4mm; 
            width: 140mm;
            margin-left: 19mm;
            margin-top: -26mm;
            ">
            ¿Se verifica en terreno que el personal cuenta con capacitación y evaluación de los<br>
            contenidos mínimos definidos para el riesgo de fatalidad?<br>
            <div style="font-size: 3mm;"><b>Nota: Para responder "SI", exige el registro de aprobación de los contenidos mínimos<br>
            definidos para el riesgo de fatalidad.</b></div>
          </div>
    
      <div style="font-weight: bold; color: #29db38; position: absolute; top: 157mm; left: 160mm;">
        SI
      </div>
      <div style="font-weight: bold; color: #db292d; position: absolute; top: 157mm; left: 175mm;">
        NO
      </div>

      @if($document->training==1)
      <div>
        <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 156.5mm; left: 165mm; vertical-align: middle;">
      </div>
      @else
        <div>
          <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 156.5mm; left: 165mm;">
        </div>
      @endif

      @if(is_null($document->training) || $document->training==1)
        <div>
          <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 156.5mm; left: 182mm;">
        </div>
      @else
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 156.5mm; left: 182mm; vertical-align: middle;">
        </div>
      @endif

    </td>
  </tr>
  <tr>
    <td >
      <img src="{{config('app.url')}}/img/verificacion-reportabilidad.png" height="110px" alt="verificacion-reportabilidad" style="margin-top: 5mm; margin-left: 8mm;" >
          <div 
            class="verdana" 
            style=" 
            color: rgb(58, 58, 58); 
            font-size: 4mm; 
            width: 140mm;
            margin-left: 19mm;
            margin-top: -26mm;
            ">
            ¿Si en los últimos seis meses en la faena se ha registrado un accidente P1 ó P2<br>
            relacionado con el riesgo de fatalidad, están implementadas las acciones<br>
            correctivas/preventivas, según plazos?<br>
            <div style="font-size: 3mm;"><b>(N/A: Corresponde si no ocurrieron P1 ó P2 relacionados con el riesgo de fatalidad en los<br>
              últimos seis meses)</b></div>
          </div>
    
      <div style="font-weight: bold; color: #29db38; position: absolute; top: 187mm; left: 150mm;">
        SI
      </div>
      <div style="font-weight: bold; color: #db292d; position: absolute; top: 187mm; left: 165mm;">
        NO
      </div>
      <div style="font-weight: bold; color: #706f6f; position: absolute; top: 187mm; left: 180mm;">
        NA
      </div>

      
      @if($document->check_reportability==1)
      <div>
        <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 186.5mm; left: 155mm; vertical-align: middle;">
      </div>
      @else
        <div>
          <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 186.5mm; left: 155mm;">
        </div>
      @endif

      @if($document->check_reportability==2)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 186.5mm; left: 172mm; vertical-align: middle;">
        </div>
      @else
        <div>
          <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 186.5mm; left: 172mm;">
        </div>
      @endif
 
      @if(is_null($document->training) || $document->check_reportability==1 || $document->check_reportability==2 )
        <div>
          <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 186.5mm; left: 187mm;">
        </div>
      @endif
      @if($document->check_reportability=='0')
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 186.5mm; left: 187mm; vertical-align: middle;">
        </div>
      @endif


    </td>
  </tr>
</table>
<table style="width: 100%;">
  <tr>
    <td>
      <div 
    class="verdana" 
    style="margin: 1mm; 
      margin-right: 6mm;
      margin-left: 7mm;
      height: 20px; 
      border-radius: 5px;
      background: rgb(112, 111, 111); 
      padding-left: 3mm; 
      padding-top: 1mm; 
      color: #ffffff; 
      font-size: 3mm;
      
      " 
  > <b>PASO 3 – RESULTADOS DE LA VERIFICACIÓN</b> </div>
    </td>
  </tr>
</table>
  

<table>
  <tr>
    <td>

      <div style="
        background: #29db38;
        border-radius: 10px;
        color: #ffffff;
        padding: 1mm;
        padding-left: 3mm;
        margin-left: 8mm;
        width: 14%;
        text-align: center;
        margin-bottom: 1mm;
        ">Satisfactoria
      </div>

      <div style="
        background: #db292d;
        border-radius: 10px;
        color: #ffffff;
        padding: 1mm;
        padding-left: 3mm;
        margin-left: 8mm;
        width: 14%;
        text-align: center;
        ">Insatisfactoria
      </div>

      @if($document->satisfactory==1)
        <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" 
        style="height: 5mm; position: absolute; top: 222mm; left: 43mm;">
      @else
        <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" 
        style="height: 5mm; position: absolute; top: 222mm; left: 43mm;">
      @endif

      @if(is_null($document->satisfactory) || $document->satisfactory==1)
        <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" 
        style="height: 5mm; position: absolute; top: 229mm; left: 43mm;">
      @else
        <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" 
        style="height: 5mm; position: absolute; top: 229mm; left: 43mm;">
      @endif

      <div style="margin-left: 50mm; margin-top: -12mm; color: rgb(58, 58, 58); ">
        <b>Con un <span style="color: #db292d;">NO</span>  la verificación es insatisfactoria</b> 
        (Implica la generación de un plan de acción <br>
        formal, el cual debe ser gestionado por el responsable)
      </div>
    </td>
  </tr>
</table>
<table style="width: 100%; margin-top: 2mm; ">
<tr>
  <td colspan="3">
    <div style="
      background: rgba(237, 170, 0, 0.3);
      border-radius: 10px;
      color: rgb(58, 58, 58); 
      padding: 6px;
      padding-left: 3mm;
      margin-left: 8mm; 
      margin-right: 6mm;
      height: 20mm;
      font-size: 3mm;
      ">
    <b>Conclusiones:</b>
    <div style="text-align: justify;">{{$document->conclusions}}</div>
    </div>
  </td>
</tr>
<tr>
  <td style="width: 45%;">
    <div style="
      background: rgba(237, 170, 0, 0.3);
      border-radius: 10px;
      color: rgb(58, 58, 58); 
      padding: 6px;
      padding-left: 3mm;
      margin-left: 8mm; 
      height: 20mm;
      font-size: 3mm;
      ">
    <b>Acciones:</b>
    <div style="text-align: justify;">{{$document->actions}}</div>
    </div>
  </td>
  <td style="width: 15%;">
    <div style="
      background: rgba(237, 170, 0, 0.3);
      border-radius: 10px;
      color: rgb(58, 58, 58); 
      padding: 6px;
      padding-left: 3mm;
      margin-left: 1mm; 
      height: 20mm;
      text-align: center;
      font-size: 3mm;
      ">
    <b>Responsable:</b>
    <div style="text-align: justify;">{{$document->responsable}}</div>
    </div>
  </td>
  <td style="width: 20%;">
    <div style="
      background: rgba(237, 170, 0, 0.3);
      border-radius: 10px;
      color: rgb(58, 58, 58); 
      padding: 6px;
      padding-left: 3mm;
      margin-left: 1mm; 
      height: 20mm;
      text-align: center;
      font-size: 3mm;
      margin-right: 6mm;
      ">
    <b>Fecha Cumplimiento:</b>
    <div style="text-align: justify;">{{ date('d-m-Y', strtotime($document->compliance_date)) }}</div>
    </div>
  </td>
</tr>
</table>
  <img src="{{config('app.url')}}/img/tool7.png" alt="tool7" width="830px" style="position: absolute; top: 294mm; left: -1mm; ">
</body>
</html>



