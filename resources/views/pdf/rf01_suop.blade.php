<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>CEN-GG-RF01-SUOP-v.2.2 Pérdida de Control de Vehículo</title>


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
      <td colspan="2" style="height: 22mm;background: rgba(0, 118, 141, 0.40);">
        <div class="trebuchet" style="color: #00748d; font-size: 6mm; margin-left: 8mm; padding-top: 2mm;"
        >Herramienta de Verificación de Controles Críticos</div>
        <div class="verdana" style="color: #ffffff; font-weight: 800; font-size: 7mm;margin-left: 8mm; padding-top: -2mm;"
        >Supervisor y Operador</div> 
      </td>
    </tr>
    <tr>
      <td colspan="2" style="background: rgba(0, 118, 141, 0.70);height: 16mm;">
        <div style="color: #ffffff; padding-left: 8mm;">
          <img src="{{config('app.url')}}/img/arrow1.png" height="45px" alt="arrow1" style="position: absolute; top: 21mm; left: 8mm;">
        </div>
        <div class="verdana" style="padding-left: 22mm;color: #ffffff; font-size: 5mm;padding-top: -1mm;" 
        >Riesgo de Fatalidad</div> 
        <div class="verdana" style="padding-left: 22mm;color: #ffffff; font-weight: 800;font-size: 7mm; padding-top: -1mm;" 
        >Pérdida de Control de Vehículo</div> 
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <img src="{{config('app.url')}}/img/tool.png"  alt="tool" height="130px" style="position: absolute; top: 3mm; left: 166mm;">
      </td>
    </tr>
  </table>
  <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; padding-top: 2mm;">
    <tr>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;width: 20%; ">
        <div 
          style="
          background: #00748d; 
          border-radius: 10px; 
          width: 50%; 
          color: #ffffff;
          text-align: center; 
          margin-left: 15px;
          padding: 12px 30px 12px 30px;
          font-size: 4mm;
          font-weight: bold;
          ">
          Controles Críticos
        </div> 
        <div style="color: #ffffff; padding-left: 8mm;">
          <img src="{{config('app.url')}}/img/tool1.png" height="64px" alt="tool1" style="position: absolute; top: 57mm; left: 4mm;">
        </div>
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold; font-size: 3mm;padding-top: 5mm;" 
        >Competencias
         </div> 
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold;font-size: 3mm; padding-bottom: 7mm;" 
        >del Personal</div>
      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;width: 30%;">
        <div
          style="
          background: #db292d; 
          border-radius: 10px;  
          color: #ffffff;
          text-align: center; 
          margin-left: 5px;
          margin-right: 5px;
          padding: 8px 4px 8px 6px;
          font-size: 4mm;
          font-weight: bold;
          "
        >Preguntas de verificación del 
        <div style="font-size: 6mm; font-weight:800; padding-top: -3px;">SUPERVISOR</div></div> 
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 2mm; 
          padding-bottom: 3mm;" 
        >¿Mis cuadrillas tienen las
        competencias para la<br>
        actividad según<br>
        procedimiento o estándar?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 62mm; left: 90mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 62mm; left: 96mm;">
           NO
         </div>

         @if($document->supervisor_competence==1)
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 67mm; left: 90mm; vertical-align: middle;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 67mm; left: 90mm;">
            </div>
          @endif

          @if(is_null($document->supervisor_competence) || $document->supervisor_competence==1)
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 67mm; left: 96mm;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 67mm; left: 96mm; vertical-align: middle;">
            </div>
          @endif

      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;width: 30%;">
        <div
          style="
          background: #f3a800; 
          border-radius: 10px;  
          color: #ffffff;
          text-align: center; 
          margin-left: 5px;
          margin-right: 5px;
          padding: 8px 4px 8px 6px;
          font-size: 4mm;
          font-weight: bold;
          "
        >Preguntas de verificación del 
        <div style="font-size: 6mm; font-weight:800; padding-top: -3px;">OPERADOR</div></div> 
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 2mm; 
          padding-bottom: 7mm;" 
        >¿Estoy autorizado,<br>
        capacitado y apto para<br>
        conducir?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 62mm; left: 150mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 62mm; left: 156mm;">
           NO
         </div>


         @if($document->operator_competence==1)
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 67mm; left: 150mm; vertical-align: middle;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 67mm; left: 150mm;">
            </div>
          @endif

          @if(is_null($document->operator_competence) || $document->operator_competence==1)
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 67mm; left: 156mm;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 67mm; left: 156mm; vertical-align: middle;">
            </div>
          @endif

       
      </td>
      <td style="border-bottom: rgb(104, 104, 104) dashed 2px;width: 20%;">
        <div 
          style="
          background: #62c6c3; 
          border-radius: 10px; 
          width: 50%; 
          color: #ffffff;
          text-align: center; 
          margin-left: 5px;
          padding: 20px 30px 20px 30px;
          font-size: 4mm;
          font-weight: bold;
          margin-bottom: 20mm;
          ">
          Observaciones
        </div> 
        <div 
          class="verdana" 
          style="
          position: absolute;  
          color: rgb(58, 58, 58); 
          font-size: 3mm;
          top: 57.5mm;
          left: 170mm;
          text-align: justify;
          width: 36mm;
          " 
        >{{$document->competence_observations}}</div>
        
      </td>
    </tr>



    <tr>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px; ">
        <div style="color: #ffffff; padding-left: 8mm;">
          <img src="{{config('app.url')}}/img/tool2.png" height="64px" alt="tool2" style="position: absolute; top: 77mm; left: 4mm;">
        </div>
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold; font-size: 3mm;padding-top: 5mm;" 
        >Dispositivos
         </div> 
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold;font-size: 3mm; padding-bottom: 7mm;" 
        >de Seguridad</div>
      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 0mm; 
          padding-bottom: 0mm;" 
        >¿La flota de vehículos de mi<br>
          cuadrilla cuenta con<br>
          dispositivos de seguridad<br>
          operativos (Cinturón de 3<br>
          puntas, bocina, alarma<br>
          retroceso, seguro para tuercas,<br>
          barra protección antivuelco,<br>
          frenos ABS, Airbag frontales y<br>
          separación personas/cargas)?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 87mm; left: 90mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 87mm; left: 96mm;">
           NO
         </div>


         @if($document->supervisor_device==1)
         <div>
           <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 92mm; left: 90mm; vertical-align: middle;">
         </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 92mm; left: 90mm;">
          </div>
        @endif

        @if(is_null($document->supervisor_device) || $document->supervisor_device==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 92mm; left: 96mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 92mm; left: 96mm; vertical-align: middle;">
          </div>
        @endif


      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 0mm; 
          padding-bottom: 0mm;" 
        >¿Mi vehículo cuenta con<br>
          dispositivos de seguridad<br>
          operativos (Cinturón de 3<br>
          puntas, bocina, alarma<br>
          retroceso, seguro para<br>
          tuercas, barra protección<br>
          antivuelco, frenos ABS,<br>
          Airbag frontales y separación<br>
          personas/cargas)?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 87mm; left: 150mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 87mm; left: 156mm;">
           NO
         </div>


         @if($document->operator_device==1)
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 92mm; left: 150mm; vertical-align: middle;">
          </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 92mm; left: 150mm;">
            </div>
          @endif

          @if(is_null($document->operator_device) || $document->operator_device==1)
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 92mm; left: 156mm;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 92mm; left: 156mm; vertical-align: middle;">
            </div>
          @endif



      </td>
      <td style="border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="
           
          color: rgb(58, 58, 58); 
          font-size: 3mm;
          margin-left: 2mm;
          text-align: justify;
          width: 36mm;
          " 
        >{{$document->device_observations}}</div>
      </td>
    </tr>



    <tr>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px; ">
        <div style="color: #ffffff; padding-left: 8mm;">
          <img src="{{config('app.url')}}/img/tool3.png" height="64px" alt="tool3" style="position: absolute; top: 110mm; left: 4mm;">
        </div>
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold; font-size: 3mm;padding-top: 5mm;" 
        >Procedimiento<br>
        de Fatiga y
         </div> 
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold;font-size: 3mm; padding-bottom: 7mm;" 
        >Somnolencia</div>
      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 0mm; 
          padding-bottom: 0mm;" 
        >¿Consulté a mi personal a<br>
        cargo si se encuentra en<br>
        condiciones de conducir y<br>
        libres de consumo de<br>
        fármacos que provoquen<br>
        somnolencia?
         </div>
         <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 1mm; 
          padding-bottom: 0mm;" 
        >En caso de conducir, ¿me<br>
          encuentro en condiciones<br>
          aptas y libre del consumo de<br>
          fármacos que me provoque<br>
          somnolencia?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 117mm; left: 90mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 117mm; left: 96mm;">
           NO
         </div>


          @if($document->supervisor_process1==1)
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 122mm; left: 90mm; vertical-align: middle;">
          </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 122mm; left: 90mm;">
            </div>
          @endif

          @if(is_null($document->supervisor_process1) || $document->supervisor_process1==1)
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 122mm; left: 96mm;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 122mm; left: 96mm; vertical-align: middle;">
            </div>
          @endif


         <div style="font-weight: bold; color: #29db38; position: absolute; top: 135mm; left: 90mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 135mm; left: 96mm;">
          NO
        </div>


        @if($document->supervisor_process2==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 140mm; left: 90mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 140mm; left: 90mm;">
          </div>
        @endif

        @if(is_null($document->supervisor_process2) || $document->supervisor_process2==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 140mm; left: 96mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 140mm; left: 96mm; vertical-align: middle;">
          </div>
        @endif


      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: -5mm; 
          padding-bottom: 0mm;" 
        >¿Estoy en condiciones aptas<br>
        para conducir?
         </div>
         <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 4mm; 
          padding-bottom: 0mm;" 
        >¿Me encuentro libre de<br>
        consumo de fármacos que<br>
        generan somnolencia?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 117mm; left: 150mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 117mm; left: 156mm;">
           NO
         </div>

         @if($document->operator_process1==1)
         <div>
           <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 110mm; left: 150mm; vertical-align: middle;">
         </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 110mm; left: 150mm;">
           </div>
         @endif
 
         @if(is_null($document->operator_process1) || $document->operator_process1==1)
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 110mm; left: 156mm;">
           </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 110mm; left: 156mm; vertical-align: middle;">
           </div>
         @endif

         <div style="font-weight: bold; color: #29db38; position: absolute; top: 130mm; left: 150mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 130mm; left: 156mm;">
          NO
        </div>


        @if($document->operator_process2==1)
         <div>
           <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 123mm; left: 150mm; vertical-align: middle;">
         </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 123mm; left: 150mm;">
           </div>
         @endif
 
         @if(is_null($document->operator_process2) || $document->operator_process2==1)
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 123mm; left: 156mm;">
           </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 123mm; left: 156mm; vertical-align: middle;">
           </div>
         @endif



      </td>
      <td style="border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="
           
          color: rgb(58, 58, 58); 
          font-size: 3mm;
          margin-left: 2mm;
          text-align: justify;
          width: 36mm;
          " 
        >{{$document->process_observations}}</div>
      </td>
    </tr>



    <tr>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px; ">
        <div style="color: #ffffff; padding-left: 8mm;">
          <img src="{{config('app.url')}}/img/tool4.png" height="64px" alt="tool4" style="position: absolute; top: 152mm; left: 4mm;">
        </div>
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold; font-size: 3mm;padding-top: 5mm;" 
        >Mantenimiento<br>
        de Elementos
         </div> 
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold;font-size: 3mm; padding-bottom: 7mm;" 
        >Críticos</div>
      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 0mm; 
          padding-bottom: 0mm;" 
        >¿El programa de<br>
        mantenimiento está al día y se<br>
        realiza en talleres certificados y<br>
        autorizados por los<br>
        representantes de la marca;<br>
        dentro de los km o antigüedad<br>
        para ser utilizado?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 159mm; left: 90mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 159mm; left: 96mm;">
           NO
         </div>


         @if($document->supervisor_maintenance==1)
         <div>
           <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 164mm; left: 90mm; vertical-align: middle;">
         </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 164mm; left: 90mm;">
           </div>
         @endif
 
         @if(is_null($document->supervisor_maintenance) || $document->supervisor_maintenance==1)
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 164mm; left: 96mm;">
           </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 164mm; left: 96mm; vertical-align: middle;">
           </div>
         @endif


      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 0mm; 
          padding-bottom: 0mm;" 
        >¿La mantención del vehículo<br>
        está al día y se realiza en talleres<br>
        certificados y autorizados por<br>
        los representantes de la marca;<br>
        dentro de los km o antigüedad<br>
        establecida?
         </div>
         <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 1mm; 
          padding-bottom: 0mm;" 
        >¿Realicé el Check List?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 153mm; left: 150mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 153mm; left: 156mm;">
           NO
         </div>


         @if($document->operator_maintenance1==1)
         <div>
           <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 158mm; left: 150mm; vertical-align: middle;">
         </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 158mm; left: 150mm;">
           </div>
         @endif
 
         @if(is_null($document->operator_maintenance1) || $document->operator_maintenance1==1)
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 158mm; left: 156mm;">
           </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 158mm; left: 156mm; vertical-align: middle;">
           </div>
         @endif


         <div style="font-weight: bold; color: #29db38; position: absolute; top: 164mm; left: 150mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 164mm; left: 156mm;">
          NO
        </div>

        @if($document->operator_maintenance2==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 169mm; left: 150mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 169mm; left: 150mm;">
          </div>
        @endif

        @if(is_null($document->operator_maintenance2) || $document->operator_maintenance2==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 169mm; left: 156mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 169mm; left: 156mm; vertical-align: middle;">
          </div>
        @endif


      </td>
      <td style="border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="
           
          color: rgb(58, 58, 58); 
          font-size: 3mm;
          margin-left: 2mm;
          text-align: justify;
          width: 36mm;
          " 
        >{{$document->maintenance_observations}}</div>
      </td>
    </tr>



    <tr>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px; ">
        <div style="color: #ffffff; padding-left: 8mm;">
          <img src="{{config('app.url')}}/img/tool5.png" height="64px" alt="tool5" style="position: absolute; top: 177mm; left: 4mm;">
        </div>
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold; font-size: 3mm;padding-top: 5mm;" 
        >Estándar
         </div> 
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold;font-size: 3mm; padding-bottom: 7mm;" 
        >de Ruta</div>
      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 0mm; 
          padding-bottom: 0mm;" 
        >¿Para los trabajos se utilizará<br>
        rutas autorizadas para<br>
        conducir?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 181mm; left: 90mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 181mm; left: 96mm;">
           NO
         </div>

         @if($document->supervisor_route==1)
         <div>
           <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 182mm; left: 90mm; vertical-align: middle;">
         </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 182mm; left: 90mm;">
           </div>
         @endif
 
         @if(is_null($document->supervisor_route) || $document->supervisor_route==1)
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 182mm; left: 96mm;">
           </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 182mm; left: 96mm; vertical-align: middle;">
           </div>
         @endif


      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 0mm; 
          padding-bottom: 0mm;" 
        >¿Está autorizada la ruta que<br>
        utilizaré?
         </div>
         <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 2mm; 
          padding-bottom: 0mm;" 
        >¿Conozco la ruta en que voy<br>
        a transitar?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 176mm; left: 150mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 176mm; left: 156mm;">
           NO
         </div>

         @if($document->operator_route1==1)
         <div>
           <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 179mm; left: 150mm; vertical-align: middle;">
         </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 179mm; left: 150mm;">
           </div>
         @endif
 
         @if(is_null($document->operator_route1) || $document->operator_route1==1)
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 179mm; left: 156mm;">
           </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 179mm; left: 156mm; vertical-align: middle;">
           </div>
         @endif

         <div style="font-weight: bold; color: #29db38; position: absolute; top: 186mm; left: 150mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 186mm; left: 156mm;">
          NO
        </div>

        @if($document->operator_route2==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 189mm; left: 150mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 189mm; left: 150mm;">
          </div>
        @endif

        @if(is_null($document->operator_route2) || $document->operator_route2==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 189mm; left: 156mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 189mm; left: 156mm; vertical-align: middle;">
          </div>
        @endif


      </td>
      <td style="border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div 
          class="verdana" 
          style="
           
          color: rgb(58, 58, 58); 
          font-size: 3mm;
          margin-left: 2mm;
          text-align: justify;
          width: 36mm;
          " 
        >{{$document->route_observations}}</div>
      </td>
    </tr>



    <tr>
      <td style="border-right: rgb(104, 104, 104) dashed 2px;  ">
        <div style="color: #ffffff; padding-left: 8mm;">
          <img src="{{config('app.url')}}/img/tool6.png" height="64px" alt="tool6" style="position: absolute; top: 199mm; left: 4mm;">
        </div>
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold; font-size: 3mm;padding-top: 5mm;" 
        >Control y<br>
        Gestión de
         </div> 
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold;font-size: 3mm; padding-bottom: 7mm;" 
        >Velocidad</div>
      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; ">
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 15mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 0mm; 
          padding-bottom: 0mm;" 
        >¿Mi personal sabe las velocidades<br>
        máximas donde transitará?
         </div>
         <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 15mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 1mm; 
          padding-bottom: 0mm;" 
        >En caso de conducir, ¿sé las<br>
        velocidades máximas donde voy a<br>
        conducir y me comprometo a<br>
        respetarlas siempre?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 196mm; left: 90mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 196mm; left: 96mm;">
           NO
         </div>

         @if($document->supervisor_speed1==1)
         <div>
           <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 201mm; left: 90mm; vertical-align: middle;">
         </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 201mm; left: 90mm;">
           </div>
         @endif
 
         @if(is_null($document->supervisor_speed1) || $document->supervisor_speed1==1)
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 201mm; left: 96mm;">
           </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 201mm; left: 96mm; vertical-align: middle;">
           </div>
         @endif



         <div style="font-weight: bold; color: #29db38; position: absolute; top: 206mm; left: 90mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 206mm; left: 96mm;">
          NO
        </div>

        @if($document->supervisor_speed2==1)
        <div>
          <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 211mm; left: 90mm; vertical-align: middle;">
        </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 211mm; left: 90mm;">
          </div>
        @endif

        @if(is_null($document->supervisor_speed2) || $document->supervisor_speed2==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 211mm; left: 96mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 211mm; left: 96mm; vertical-align: middle;">
          </div>
        @endif



      </td>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; ">
        <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 0mm; 
          padding-bottom: 0mm;" 
        >¿Conozco las velocidades<br>
        máximas donde voy a<br>
        transitar y sé que debo<br>
        respetarlas siempre?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 203mm; left: 150mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 203mm; left: 156mm;">
           NO
         </div>

         
         @if($document->operator_speed==1)
         <div>
           <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 204mm; left: 150mm; vertical-align: middle;">
         </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 204mm; left: 150mm;">
           </div>
         @endif
 
         @if(is_null($document->operator_speed) || $document->operator_speed==1)
           <div>
             <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 204mm; left: 156mm;">
           </div>
         @else
           <div>
             <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 204mm; left: 156mm; vertical-align: middle;">
           </div>
         @endif


      </td>
      <td >
        <div 
          class="verdana" 
          style="
           
          color: rgb(58, 58, 58); 
          font-size: 3mm;
          margin-left: 2mm;
          text-align: justify;
          width: 36mm;
          " 
        >{{$document->speed_observations}}</div>
      </td>
    </tr>
  </table>
  <div style="
        position: absolute; 
        top: 221mm; 
        left: 4mm;
        background: rgb(0, 117, 141);
        border-radius: 10px;
        color: #ffffff;
        width: 350px;
        height: 250px;
        padding: 6px;
        ">
        <table style="width: 100%;">
          <tr>
            <td colspan="2" >
              <div style="text-align: center; font-size: 3mm; font-weight: bold;">Identificación de los miembros de la cuadrilla</div>
            </td>
            <td >
              <div style="text-align: center; font-size: 3mm;font-weight: bold;">Firma</div>
            </td>
          </tr>
          @if (count($document->lostSuopGangMembers)==0 )
            @for( $i=1; $i < 8; $i++ )
            <tr>
              <td style="width: 5%;"><div style=" font-size: 3mm;font-weight: bold;">{{$i}}</div></td>
              <td style="width: 65%;"><div style="border: 1px solid white; background-color: white; border-radius: 10px; height: 20px; "></div></td>
              <td style="width: 30%;"><div style="border: 1px solid white; background-color: white; border-radius: 10px; height: 20px; "></div></td>
            </tr>
            @endfor
          @endif
          @foreach($document->lostSuopGangMembers as $key => $members)
          @if($key < 7)
            <tr>
              <td style="width: 5%;"><div style=" font-size: 3mm;font-weight: bold;">{{$key+1}}.</div></td>
              <td style="width: 65%;"><div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black;padding-left: 1mm;">{{$members->name}}</div></td>
              <td style="width: 30%;">
                <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; ">
                  <img src="{{config('app.url')}}/{{$members->firm}}" height="20" alt="signature" style="vertical-align: middle;">
                </div>
              </td>
            </tr>
         @endif
        @endforeach
          <tr>
            <td colspan="2">
             <div style="text-align: center; font-size: 3mm;font-weight: bold;">Nombre del supervisor</div> 
            </td>
            <td>

            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <div style="border: 1px solid white; background-color: white; border-radius: 10px; height: 20px; color: black;padding-left: 1mm;">{{$document->name_supervisor}}</div>
            </td>
            <td>
              <div style="border: 1px solid white; background-color: white; border-radius: 10px; height: 20px; ">
                @if($document->firm=='')

                @else
                <img src="{{config('app.url')}}/{{$document->firm}}" height="20" alt="signature" style="vertical-align: middle;">
                @endif
              </div>
            </td>
          </tr>
        </table>
  </div>

  <div style="
        position: absolute; 
        top: 221mm; 
        left: 102mm;
        background: rgb(0, 117, 141);
        border-radius: 10px;
        color: #ffffff;
        width: 250px;
        height: 180px;
        padding: 6px;
        ">
        <table style="width: 100%;">
          <tr>
            <td style="width: 30%;">
              <div style="font-size: 3mm;font-weight: bold;">Identificación<br> 
                de la tarea:
              </div>
            </td>
            <td style="width: 70%;">
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 40px; color: black; padding-left: 1mm;">{{$document->task_identification}}</div>
            </td>
          </tr>
          <tr>
            <td>
              <div style=" font-size: 3mm;font-weight: bold;">
                Gerencia:
              </div>
            </td>
            <td>
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black; padding-left: 1mm;">{{$document->management}}</div>
            </td>
          </tr>
          <tr>
            <td>
              <div style=" font-size: 3mm;font-weight: bold;">
                Área:
              </div>
            </td>
            <td>
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black; padding-left: 1mm;">{{$document->area}}</div>
            </td>
          </tr>
          <tr>
            <td>
              <div style=" font-size: 3mm;font-weight: bold;">
                Empresa:
              </div>
            </td>
            <td>
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black; padding-left: 1mm;">{{$document->enterprise}}</div>
            </td>
          </tr>
          <tr>
            <td>
              <div style=" font-size: 3mm;font-weight: bold;">
                Fecha:
              </div>
            </td>
            <td>
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black; padding-left: 1mm;">{{ date('d-m-Y', strtotime($document->date)) }}</div>
            </td>
          </tr>
          <tr>
            <td>
              <div style="font-size: 3mm;font-weight: bold;">
                Hora:
              </div>
            </td>
            <td>
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black; padding-left: 1mm;">{{$document->time}}</div>
            </td>
          </tr>
        </table>     
  </div>
  <img src="{{config('app.url')}}/img/tool8.png" alt="tool8" height="135px" style="position: absolute; top: 220mm; left: 172mm;">
  <img src="{{config('app.url')}}/img/tool9.png" alt="tool9" width="110px" style="position: absolute;top: 260mm; left: 172mm">
  <img src="{{config('app.url')}}/img/tool-stop.png" alt="stop" height="50px" style="position: absolute;top: 276mm; left: 105mm">
      <div style="
            background: rgb(251, 176, 64, 0.50); 
            border-radius: 10px;  
            color: #000000; 
            padding-top: 3mm;
            padding-bottom: 3mm;
            padding-left: 20mm;
            font-size: 4mm;
            font-weight: bold;
            width: 306px;
            margin-left: 102mm;
            margin-top: 56mm;
            ">
        En caso de respuesta <span style="color: #db292d;">NO</span>, detén la tarea, 
        <div style="font-size: 4mm; font-weight:bold; padding-top: -3px;">corrige el control crítico y luego reporta.</div></div> 
  <div style="position: absolute; top: 290mm; left: 124mm;font-size: 3mm;"><b>VERSIÓN ERFT:</b> CEN-GG-RF01-SU/OP-v2.2</div>
  <img src="{{config('app.url')}}/img/tool7.png" alt="tool7" width="830px" style="position: absolute; top: 294mm; left: -1mm; ">
</body>
</html>



