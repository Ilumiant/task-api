<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>CEN-GG-RF03-SUOP-v1 Interacción Personas, Equipos y Vehículos</title>


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
        <div 
          style="
          color: #db292d; 
          position: absolute; 
          top: 0mm; 
          left: 125mm; 
          font-size: 6mm; 
          width: 200px; 
          text-align: center;
          ">Última Versión Centinela</div>

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
        >Segregación y
        Control de</div> 
        <div class="verdana" style="padding-left: 22mm;color: #ffffff; font-weight: 800;font-size: 7mm; padding-top: -1mm;" 
        >Acceso </div> 
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <img src="{{config('app.url')}}/img/interaction-suop-warning-logo2.png"  alt="tool" height="130px" style="position: absolute; top: 3mm; left: 166mm;">
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
          <img src="{{config('app.url')}}/img/tool10.png" height="64px" alt="tool10" style="position: absolute; top: 62mm; left: 4mm;">
        </div>
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold; font-size: 3mm;padding-top: 10mm;" 
        >Segregación y
        Control de 
         </div> 
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold;font-size: 3mm; padding-bottom: 17mm;" 
        >Acceso</div>
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
          " 
        >¿La segregación impide el<br>
          acceso a toda el área de<br>
          influencia de la actividad y<br>
          se utilizan elementos<br>
          permitidos?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 62mm; left: 90mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 62mm; left: 96mm;">
           NO
         </div>
          @if($document->supervisor_segregation1==1)
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 67mm; left: 90mm; vertical-align: middle;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 67mm; left: 90mm;">
            </div>
          @endif

          @if(is_null($document->supervisor_segregation1) || $document->supervisor_segregation1==1)
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 67mm; left: 96mm;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 67mm; left: 96mm; vertical-align: middle;">
            </div>
          @endif
         <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 1mm; 
          padding-bottom: 3mm;" 
          >¿La segregación incluye<br>
          letrero con información<br>
          según procedimiento o<br>
          estándar?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 80mm; left: 90mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 80mm; left: 96mm;">
          NO
        </div>
          @if($document->supervisor_segregation2==1)
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 85mm; left: 90mm; vertical-align: middle;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 85mm; left: 90mm;">
            </div>
          @endif

          @if(is_null($document->supervisor_segregation2) || $document->supervisor_segregation2==1)
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 85mm; left: 96mm;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 85mm; left: 96mm; vertical-align: middle;">
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
          " 
        >¿Esta segregada mi área<br>
          de trabajo, se encuentra<br>
          señalizada y se utilizan<br>
          elementos permitidos?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 62mm; left: 150mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 62mm; left: 156mm;">
           NO
         </div>

         @if($document->operator_segregation1==1)
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 67mm; left: 150mm; vertical-align: middle;">
          </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 67mm; left: 150mm;">
            </div>
          @endif

          @if(is_null($document->operator_segregation1) || $document->operator_segregation1==1)
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 67mm; left: 156mm;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 67mm; left: 156mm; vertical-align: middle;">
            </div>
          @endif
         <div 
          class="verdana" 
          style="padding-left: 2mm; 
          padding-right: 20mm; 
          color: rgb(58, 58, 58); 
          font-size: 3mm; 
          padding-top: 2mm; 
          padding-bottom: 6mm;" 
        >¿La segregación incluye<br>
          letrero con información<br>
          según procedimiento o<br>
          estándar?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 80mm; left: 150mm;">
          SI
        </div>
        <div style="font-weight: bold; color: #db292d; position: absolute; top: 80mm; left: 156mm;">
          NO
        </div>
          @if($document->operator_segregation2==1)
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 85mm; left: 150mm; vertical-align: middle;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 85mm; left: 150mm;">
            </div>
          @endif

          @if(is_null($document->operator_segregation2) || $document->operator_segregation2==1)
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 85mm; left: 156mm;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 85mm; left: 156mm; vertical-align: middle;">
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
          position: absolute;
          top: 0mm;
          ">
          Observaciones
        </div> 
        <div style="
        padding-top: 12mm;
        padding-left: 4mm;
        padding-right: 4mm;
        color: rgb(58, 58, 58); 
        font-size: 3mm; 
        ">{{$document->segregation_observations}}</div>
      </td>
    </tr>



    <tr>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px; ">
        <div style="color: #ffffff; padding-left: 8mm;">
          <img src="{{config('app.url')}}/img/tool11.png" height="64px" alt="tool2" style="position: absolute; top: 96mm; left: 4mm;">
        </div>
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold; font-size: 3mm;padding-top: 7mm;" 
        >Plan de
         </div> 
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold;font-size: 3mm; padding-bottom: 7mm;" 
        >Tránsito</div>
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
        >¿Se encuentran las áreas<br>
          de tránsito señalizadas y<br>
          segregadas?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 102mm; left: 90mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 102mm; left: 96mm;">
           NO
         </div>
         @if($document->supervisor_traffic==1)
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 102mm; left: 90mm; vertical-align: middle;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 102mm; left: 90mm;">
          </div>
        @endif

        @if(is_null($document->supervisor_traffic) || $document->supervisor_traffic==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 102mm; left: 96mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 102mm; left: 96mm; vertical-align: middle;">
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
        >¿Se encuentran las áreas<br>
          de tránsito señalizadas y<br>
          segregadas?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 102mm; left: 150mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 102mm; left: 156mm;">
           NO
         </div>
        @if($document->operator_traffic==1)
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 102mm; left: 150mm; vertical-align: middle;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 102mm; left: 150mm;">
          </div>
        @endif

        @if(is_null($document->operator_traffic) || $document->operator_traffic==1)
          <div>
            <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 102mm; left: 156mm;">
          </div>
        @else
          <div>
            <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 102mm; left: 156mm; vertical-align: middle;">
          </div>
        @endif
      </td>
      <td style="border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div style="
        padding-top: 2mm;
        padding-left: 4mm;
        padding-right: 4mm;
        color: rgb(58, 58, 58); 
        font-size: 3mm; 
        ">{{$document->traffic_observations}}</div>
      </td>
    </tr>



    <tr>
      <td style="border-right: rgb(104, 104, 104) dashed 2px; border-bottom: rgb(104, 104, 104) dashed 2px; ">
        <div style="color: #ffffff; padding-left: 8mm;">
          <img src="{{config('app.url')}}/img/tool12.png" height="64px" alt="tool3" style="position: absolute; top: 118mm; left: 4mm;">
        </div>
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold; font-size: 3mm;padding-top: 7mm;" 
        >Protocolo de<br>
         </div> 
        <div class="verdana" style="padding-left: 22mm;color: #000; font-weight: bold;font-size: 3mm; padding-bottom: 7mm;" 
        >Comunicación</div>
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
        >¿Cuenta mi cuadrilla con<br>
          equipos de<br>
          comunicación y conocen<br>
          protocolo asociado?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 122mm; left: 90mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 122mm; left: 96mm;">
           NO
         </div>
          @if($document->supervisor_communication==1)
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 124mm; left: 90mm; vertical-align: middle;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 124mm; left: 90mm;">
            </div>
          @endif

          @if(is_null($document->supervisor_communication) || $document->supervisor_communication==1)
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 124mm; left: 96mm;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 124mm; left: 96mm; vertical-align: middle;">
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
        >¿Los equipos de<br>
          comunicación están<br>
          operativos y comprendo<br>
          protocolo asociado?
         </div>
         <div style="font-weight: bold; color: #29db38; position: absolute; top: 122mm; left: 150mm;">
           SI
         </div>
         <div style="font-weight: bold; color: #db292d; position: absolute; top: 122mm; left: 156mm;">
           NO
         </div>
          @if($document->operator_communication==1)
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 124mm; left: 150mm; vertical-align: middle;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 124mm; left: 150mm;">
            </div>
          @endif

          @if(is_null($document->operator_communication) || $document->operator_communication==1)
            <div>
              <img src="{{config('app.url')}}/img/uncheckedblue.png" alt="uncheck" style="height: 5mm; position: absolute; top: 124mm; left: 156mm;">
            </div>
          @else
            <div>
              <img src="{{config('app.url')}}/img/checkedblue.png" alt="check" style="height: 5mm; position: absolute; top: 124mm; left: 156mm; vertical-align: middle;">
            </div>
          @endif
      </td>
      <td style="border-bottom: rgb(104, 104, 104) dashed 2px;">
        <div style="
        padding-top: 2mm;
        padding-left: 4mm;
        padding-right: 4mm;
        color: rgb(58, 58, 58); 
        font-size: 3mm; 
        ">{{$document->communication_observations}}</div>
      </td>
    </tr>   
  </table>
  <div style="
        position: absolute; 
        top: 215mm; 
        left: 4mm;
        background: rgb(0, 117, 141);
        border-radius: 10px;
        color: #ffffff;
        width: 350px;
        height: 270px;
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
        @if (count($document->interactionSuopGangMembers)==0 )
          @for( $i=1; $i < 9; $i++ )
          <tr>
            <td style="width: 5%;"><div style=" font-size: 3mm;font-weight: bold;">{{$i}}</div></td>
            <td style="width: 65%;"><div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black;padding-left: 1mm;"></div></td>
            <td style="width: 30%;"><div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; "></div></td>
          </tr>
          @endfor
        @endif
        @foreach($document->interactionSuopGangMembers as $key => $members)
          @if($key < 8)
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
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black;padding-left: 1mm;">{{$document->name_supervisor}}</div>
            </td>
            <td>
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; ">
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
        top: 215mm; 
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
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black;padding-left: 1mm;">{{$document->management}}</div>
            </td>
          </tr>
          <tr>
            <td>
              <div style=" font-size: 3mm;font-weight: bold;">
                Área:
              </div>
            </td>
            <td>
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black;padding-left: 1mm;">{{$document->area}}</div>
            </td>
          </tr>
          <tr>
            <td>
              <div style=" font-size: 3mm;font-weight: bold;">
                Empresa:
              </div>
            </td>
            <td>
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black;padding-left: 1mm;">{{$document->enterprise}}</div>
            </td>
          </tr>
          <tr>
            <td>
              <div style=" font-size: 3mm;font-weight: bold;">
                Fecha:
              </div>
            </td>
            <td>
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black;padding-left: 1mm;">{{ date('d-m-Y', strtotime($document->date)) }}</div>
            </td>
          </tr>
          <tr>
            <td>
              <div style="font-size: 3mm;font-weight: bold;">
                Hora:
              </div>
            </td>
            <td>
              <div style="border: 1px solid white; background: white; border-radius: 10px; height: 20px; color: black;padding-left: 1mm;">{{$document->time}}</div>
            </td>
          </tr>
        </table>     
  </div>
  <img src="{{config('app.url')}}/img/tool8.png" alt="tool8" height="135px" style="position: absolute; top: 214mm; left: 172mm;">
  <img src="{{config('app.url')}}/img/tool9.png" alt="tool9" width="110px" style="position: absolute;top: 257mm; left: 172mm">
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
            height: 51px;
            position: absolute; 
            top: 270mm; 
            left: 102mm;
            ">
        En caso de respuesta <span style="color: #db292d;">NO</span>, detén la tarea, 
        <div style="font-size: 4mm; font-weight:bold; padding-top: -3px;">corrige el control crítico y luego reporta.</div></div> 
        <img src="{{config('app.url')}}/img/tool-stop.png" alt="stop" height="50px" style="position: absolute;top: 272mm; left: 105mm">
  <div style="position: absolute; top: 290mm; left: 124mm;font-size: 3mm;"><b>VERSIÓN ERFT:</b> CEN-GG-RF03-SU/OP-v1</div>
  <img src="{{config('app.url')}}/img/tool7.png" alt="tool7" width="830px" style="position: absolute; top: 294mm; left: -1mm; ">
</body>
</html>



