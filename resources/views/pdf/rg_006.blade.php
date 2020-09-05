<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>RG-006</title>




</head>
<body>
  <table border="0" cellpadding="0" cellspacing="0" style="border: black solid 1px; width: 100%;">
    <tr>
      <td rowspan="3" style="border: black solid 1px; width: 25%; text-align: center; ">
        <img src="{{config('app.url')}}/img/chiamedrano.png" alt="chiamedrano" width="140mm">
      </td>
      <td style="border: black solid 1px; width: 50%; text-align: center; font-size: 4mm;">
        <b>SISTEMA INTEGRADO DE GESTIÓN</b> 
      </td>
      <td rowspan="3" style="border: black solid 1px; width: 25%; font-size: 3mm;">
        Código	: PRO-SIG-013-RG-006<br>
        Revisión	: 001<br>
        Fecha	: 01-09-2018<br>
        Página	: Página 1 de 2
      </td>
    </tr>
    <tr>
      
      <td style="border: black solid 1px; text-align: center;font-size: 4mm;">
        <b>REGISTRO <br>
        OBSERVACIONES PLANEADAS</b> 
      </td>
      
    </tr>
    <tr>
      
      <td style="border: black solid 1px; text-align: center; font-size: 3mm;">
        Calidad, Medio Ambiente y Seguridad y Salud Ocupacional
      </td>
      
    </tr>
  </table>


  
  <table border=0 cellpadding=0 cellspacing=0 width=640 style='border-collapse:
   collapse;table-layout:fixed;width:480pt;margin: 0 auto;'>
   <col width=80 span=8 style='width:60pt'>
   <tr height=36 style='height:27.0pt'>
    <td colspan=8 height=36 width=640 style='border:1.0pt solid black;
    height:27.0pt;width:480pt;background: rgb(242, 242, 242);text-align: center;'><span lang=ES-CL><a name="RANGE!A1"><b>OBSERVACIONES
    PLANEADAS</b> </a></span></td>
   </tr>
   <tr height=41 style='height:30.75pt;mso-yfti-irow:1'>
    <td height=41 colspan=2 width=90 style='border:1.0pt solid black;height:30.75pt;width:80pt; text-align: center;'><span
    lang=ES-CL> <b>Obra, lugar o Área:</b> </span></td>
    <td colspan=3  width=240 style='border:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->area}}</span></td>
    <td  width=80 style='border:1.0pt solid black;width:60pt; text-align: center;'><span lang=ES-CL> <b>Fecha:</b> </span></td>
    <td colspan=2 width=240 style='border:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp; {{ date('d-m-Y', strtotime($document->date)) }}</span></td>
   </tr>
   <tr height=41 style='height:30.75pt;mso-yfti-irow:2'>
    <td height=41 colspan=2 width=90 style='border:1.0pt solid black;height:30.75pt;width:80pt; text-align: center;'><span
    lang=ES-CL> <b>Trabajo observado:</b> </span></td>
    <td colspan=6 width=560 style='border:1.0pt solid black;
    border-left:none;width:420pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->observed_work}}</span></td>
   </tr>





   <tr height=20 style='mso-height-source:userset;height:15.0pt;mso-yfti-irow:
    3'>
    <td rowspan=5 colspan=2 height=101 width=80 style='border:1.0pt solid black;
    height:75.75pt;border-top:none;width:80pt; text-align: center;'><span lang=ES-CL><b>Trabajadores Observado:</b> </span></td>
    <td colspan=6 width=560 rowspan="5" style='border:1.0pt solid black;vertical-align: top;
    border-left:none;width:420pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin;  '>
    
      &nbsp;1. {{$document->planned_worker1}} <br>
      &nbsp;2. {{$document->planned_worker2}} <br>
      &nbsp;3. {{$document->planned_worker3}} <br>
      &nbsp;4. {{$document->planned_worker4}} <br>
      &nbsp;5. {{$document->planned_worker5}} <br>
    </span></td>
   </tr>
   <tr height=20 style='mso-height-source:userset;height:15.0pt'>
    
   </tr>
   <tr height=20 style='mso-height-source:userset;height:15.0pt'>

   </tr>
   <tr height=20 style='mso-height-source:userset;height:15.0pt'>

   </tr>
   <tr height=21 style='height:15.75pt'>

   </tr>



   <tr height=22 style='height:16.5pt;mso-yfti-irow:4'>
    <td colspan=8 height=22 width=640 style='border:1.0pt solid black;
    height:16.5pt;width:480pt;background: rgb(242, 242, 242);'><span lang=ES-CL> <b>MOTIVO DE LA OBSERVACIÓN:</b> </span></td>
   </tr>
   <tr height=20 style='mso-height-source:userset;height:15.0pt;mso-yfti-irow:
    5'>
    <td colspan=2 height=20  width=160 style='border-left:1.0pt solid black;
    height:15.0pt;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin; '>1. Verificación conducta</span> </td>
    <td style="border-right: 1.0pt solid black;"> 
      @if($document->conduct_verification==1)
        <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;">X</div>
      @else
        <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;"></div>
      @endif
    </td>
    <td colspan=5 rowspan="6"  width=480 style='width:360pt;border-right: 1.0pt solid black;vertical-align: top;'><span lang=ES-CL
    style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;  margin-top: -20mm;'>Observaciones:<br>
    <u><div style="text-align: justify; padding: 1mm;">{{$document->observations}}</div></u>
 
    <span
    style='mso-spacerun:yes'> </span></span></td>
   </tr>
   <tr height=20 style='mso-height-source:userset;height:15.0pt'>
    <td colspan=2 height=20  width=160 style='border-left: 1.0pt solid black;
    height:15.0pt;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin; '>2. Trabajador Nuevo</span> </td>
    <td style="border-right: 1.0pt solid black;">
      @if($document->new_worker==1)
        <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;">X</div>
      @else
        <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;"></div>
      @endif
    </td>
    <span lang=ES-CL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:
    minor-latin'>
    
   </tr>
   </span>
   <tr height=20 style='mso-height-source:userset;height:15.0pt'>
    <td colspan=2 height=20 width=160 style='border-left: 1.0pt solid black;
    height:15.0pt;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin; '>3. Trabajo Crítico</span> </td><td style="border-right: 1.0pt solid black;">
    @if($document->critical_work==1)
      <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;">X</div>
    @else
      <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;"></div>
    @endif
    </td>

   </tr>
   <tr height=20 style='mso-height-source:userset;height:15.0pt'>
    <td colspan=2 height=20  width=160 style='border-left: 1.0pt solid black;
    height:15.0pt;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin;'>4. Procedimiento</span> </td><td style="border-right: 1.0pt solid black;">
    @if($document->process==1)
      <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;">X</div>
    @else
      <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;"></div>
    @endif
    </td>
    
   </tr>
   <tr height=40 style='mso-height-source:userset;height:30.0pt'>
    <td colspan=2 height=40 width=160 style='border-left: 1.0pt solid black;
    height:30.0pt;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin;'>5. Procedimiento Actualizado</span> </td><td style="border-right: 1.0pt solid black;">
    @if($document->updated_process==1)
      <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;">X</div>
    @else
      <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;"></div>
    @endif
    </td>
   </tr>
   <tr height=40 style='mso-height-source:userset;height:30.0pt'>
    <td colspan=2 height=40  width=160 style='border-bottom: 1.0pt solid black;border-left: 1.0pt solid black;
    height:30.0pt;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin; '>6. Otros: <u>{{$document->other_description}}</u> </span></td>
    <td style="border-right: 1.0pt solid black;">
      @if($document->other==1)
        <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;">X</div>
      @else
        <div style="width: 3mm; height: 3mm; border: 1pt solid black;font-size: 3mm; text-align: center;"></div>
      @endif
      </td>

   </tr>
   <tr height=22 style='height:16.5pt;mso-yfti-irow:6'>
    <td colspan=6 height=22  width=480 style='border:1.0pt solid black;background: rgb(242, 242, 242);
    height:16.5pt;width:360pt'><span lang=ES-CL> <b>OBSERVACIONES ENCONTRADAS:</b> </span></td>
    <td  width=80 style='width:60pt;border:1.0pt solid black;text-align: center;background: rgb(242, 242, 242);'><span lang=ES-CL> <b>SI</b></span></td>
    <td  width=80 style='width:60pt;border:1.0pt solid black;text-align: center;background: rgb(242, 242, 242);'><span lang=ES-CL> <b>NO</b></span></td>
   </tr>
   <tr height=40 style='mso-height-source:userset;height:30.0pt;mso-yfti-irow:
    7'>
    <td colspan=6 height=40  width=480 style='border-right:1.0pt solid black;border-left:1.0pt solid black;
    height:30.0pt;width:360pt'><span lang=ES-CL>1.El trabajo observado contaba con un
    Procedimiento documentado. (Indicar procedimiento aplicable)</span></td>
    <td rowspan=5  width=80 style='border-bottom:1.0pt solid black;border-right:1.0pt solid black;
    border-top:none;width:60pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;
    @if($document->found_observations1==1)
      <div style="font-size: 5mm; text-align: center;">X</div>
    @else
      <div style="font-size: 5mm; text-align: center;"></div>
    @endif
  </span></td>
    <td rowspan=5 width=80 style='border-bottom:1.0pt solid black;border-right:1.0pt solid black;
    border-top:none;width:60pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;
    @if($document->found_observations1=='0')
      <div style="font-size: 5mm; text-align: center;">X</div>
    @endif
    @if(is_null($document->found_observations1))
      <div style="font-size: 5mm; text-align: center;"></div>
    @endif
  </span></td>
   </tr>
   <tr height=20 style='mso-height-source:userset;height:15.0pt'>
    <td colspan=6 height=20 rowspan="3" width=480 style='border-right:1.0pt solid black;border-left:1.0pt solid black;
    height:15.0pt;width:360pt'><span lang=ES-CL><b>Comentario:</b> {{$document->found_observations1_commentary}}.<span
    style='mso-spacerun:yes'> </span></span></td>
   </tr>
   <tr height=20 style='height:15.0pt'>
    
   </tr>
   <tr height=20 style='height:15.0pt'>
    
   </tr>
   <tr height=21 style='height:15.75pt'>
    <td colspan=6 style="height: 5mm;border-right:1.0pt solid black;border-left:1.0pt solid black;border-bottom:1.0pt solid black;">&nbsp;</td>
   </tr>
   <tr height=40 style='mso-height-source:userset;height:30.0pt;mso-yfti-irow:
    8'>
    <td colspan=6 height=40  width=480 style='border-right:1.0pt solid black;border-left:1.0pt solid black;
    height:30.0pt;width:360pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin'>2.En el desarrollo de este trabajo se detectó
    la probabilidad de ocurrencia de un incidente con potencial de causar
    perdida. (A las personas o material)</span></td>
    <td rowspan=5  width=80 style='border-bottom:1.0pt solid black;border-right:1.0pt solid black;
    border-top:none;width:60pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp; 
    @if($document->found_observations2==1)
      <div style="font-size: 5mm; text-align: center;">X</div>
    @else
      <div style="font-size: 5mm; text-align: center;"></div>
    @endif
    </span></td>
    <td rowspan=5 width=80 style='border-bottom:1.0pt solid black;border-right:1.0pt solid black;
    border-top:none;width:60pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp; 
    @if($document->found_observations2=='0')
      <div style="font-size: 5mm; text-align: center;">X</div>
    @endif
    @if(is_null($document->found_observations2))
      <div style="font-size: 5mm; text-align: center;"></div>
    @endif

    </span></td>
   </tr>
   <tr height=20 style='mso-height-source:userset;height:15.0pt'>
    <td colspan=6 height=20 rowspan="3" width=480 style='border-right:1.0pt solid black;border-left:1.0pt solid black;
    height:15.0pt;width:360pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin'><b>Comentario:</b> {{$document->found_observations2_commentary}}.</span></td>
   </tr>
   <tr height=20 style='height:15.0pt'>
    
   </tr>
   <tr height=20 style='height:15.0pt'>
    
   </tr>
   <tr height=21 style='height:15.75pt'>
    <td colspan=6 style="height: 5mm;border-right:1.0pt solid black;border-left:1.0pt solid black;border-bottom:1.0pt solid black;">&nbsp;</td>
   </tr>
   <tr height=20 style='mso-height-source:userset;height:15.0pt;mso-yfti-irow:
    9'>
    <td colspan=6 height=20  width=480 style='border-right:1.0pt solid black; border-left:1.0pt solid black;
    height:15.0pt;width:360pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin'>3. Se sigue con el procedimiento adecuado.</span></td>
    <td rowspan=5  width=80 style='border-bottom:1.0pt solid black;border-right:1.0pt solid black;
    border-top:none;width:60pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;
    @if($document->found_observations3==1)
      <div style="font-size: 5mm; text-align: center;">X</div>
    @else
      <div style="font-size: 5mm; text-align: center;"></div>
    @endif
    </span></td>
    <td rowspan=5  width=80 style='border-bottom:1.0pt solid black;border-right:1.0pt solid black;
    border-top:none;width:60pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;
    @if($document->found_observations3=='0')
      <div style="font-size: 5mm; text-align: center;">X</div>
    @endif
    @if(is_null($document->found_observations3))
      <div style="font-size: 5mm; text-align: center;"></div>
    @endif
    </span></td>
   </tr>
   <tr height=20 style='mso-height-source:userset;height:15.0pt'>
    <td colspan=6 height=20 rowspan="3" width=480 style='border-right:1.0pt solid black;border-left:1.0pt solid black;
    height:15.0pt;width:360pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin'><b>Comentario:</b>{{$document->found_observations3_commentary}}.</span></td>
   </tr>
   <tr height=20 style='height:15.0pt'>
    
   </tr>
   <tr height=20 style='height:15.0pt'>
    
   </tr>
   <tr height=21 style='height:15.75pt'>
    <td colspan=6 style="height: 5mm;border-right:1.0pt solid black;border-left:1.0pt solid black;border-bottom:1.0pt solid black;">&nbsp;</td>
   </tr>
  </table>
</div>


<div style="page-break-after: always;" ></div>





<table border="0" cellpadding="0" cellspacing="0" style="border: black solid 1px; width: 100%;">
  <tr>
    <td rowspan="3" style="border: black solid 1px; width: 25%; text-align: center; ">
      <img src="{{config('app.url')}}/img/chiamedrano.png" alt="chiamedrano" width="140mm">
    </td>
    <td style="border: black solid 1px; width: 50%; text-align: center; font-size: 4mm;">
      <b>SISTEMA INTEGRADO DE GESTIÓN</b> 
    </td>
    <td rowspan="3" style="border: black solid 1px; width: 25%; font-size: 3mm;">
      Código	: PRO-SIG-013-RG-006<br>
      Revisión	: 001<br>
      Fecha	: 01-09-2018<br>
      Página	: Página 2 de 2
    </td>
  </tr>
  <tr>
    
    <td style="border: black solid 1px; text-align: center;font-size: 4mm;">
      <b>REGISTRO <br>
      OBSERVACIONES PLANEADAS</b> 
    </td>
    
  </tr>
  <tr>
    
    <td style="border: black solid 1px; text-align: center; font-size: 3mm;">
      Calidad, Medio Ambiente y Seguridad y Salud Ocupacional
    </td>
    
  </tr>
</table>
<table border=1 cellpadding=0 cellspacing=0 width=640 style='border-collapse:
collapse;table-layout:fixed;width:480pt;margin: 0 auto;'>
   <tr height=41 style='mso-height-source:userset;height:30.75pt;mso-yfti-irow:
    10'>
    <td colspan=4 rowspan=2 height=63  width=320
    style='border-right:1.0pt solid black;border-bottom:1.0pt solid black;
    height:47.25pt;width:240pt;background: rgb(242, 242, 242); text-align: center; font-size: 4mm;'><span lang=ES-CL> <b>Medidas de Control para las
    Observaciones encontradas (Marcar el control a aplicar)</b> </span></td>
    <td colspan=2 rowspan=2 width=160 style='border-right:1.0pt solid black;
    border-bottom:1.0pt solid black;width:120pt;background: rgb(242, 242, 242); text-align: center; font-size: 4mm;'><span lang=ES-CL> <b>Responsable</b> </span></td>
    <td colspan=2 rowspan=2 width=160 style='border-right:1.0pt solid black;background: rgb(242, 242, 242); text-align: center; font-size: 4mm;
    border-left:none;width:120pt'><span lang=ES-CL> <b>Fecha de ejecución</b> </span></td>
   </tr>
   
   <tr height=22 style='height:16.5pt'>
  
   </tr>
  
   <tr height=21 style='height:15.75pt;mso-yfti-irow:11'>
    <td colspan=4 height=21  width=240 style='border-right:1.0pt solid black;
    height:15.75pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>1. Confeccionar Procedimiento.</span></td>
    <td colspan=2  width=240 style='border-right:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures1_responsable}}</span></td>
    <td colspan=2  width=160 style='border-right:1.0pt solid black;
    border-left:none;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures1_date}}</span></td>
   </tr>
   <tr height=21 style='height:15.75pt;mso-yfti-irow:12'>
    <td colspan=4 height=21  width=240 style='border-right:1.0pt solid black;
    height:15.75pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>2. Modificar Procedimiento</span></td>
    <td colspan=2  width=240 style='border-right:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures2_responsable}}</span></td>
    <td colspan=2  width=160 style='border-right:1.0pt solid black;
    border-left:none;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures2_date}}</span></td>
   </tr>
   <tr height=21 style='height:15.75pt;mso-yfti-irow:13'>
    <td colspan=4 height=21  width=240 style='border-right:1.0pt solid black;
    height:15.75pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>3. Actualizar el Procedimiento</span></td>
    <td colspan=2  width=240 style='border-right:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures3_responsable}}</span></td>
    <td colspan=2  width=160 style='border-right:1.0pt solid black;
    border-left:none;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures3_date}}</span></td>
   </tr>
   <tr height=21 style='height:15.75pt;mso-yfti-irow:14'>
    <td colspan=4 height=21 width=240 style='border-right:1.0pt solid black;
    height:15.75pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>4. Reevaluar E.P.P.</span></td>
    <td colspan=2 width=240 style='border-right:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures4_responsable}}</span></td>
    <td colspan=2 width=160 style='border-right:1.0pt solid black;
    border-left:none;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures4_date}}</span></td>
   </tr>
   <tr height=20 style='height:15.0pt;mso-yfti-irow:15'>
    <td colspan=4 rowspan=2 height=41  width=240
    style='border-right:1.0pt solid black;border-bottom:1.0pt solid black;
    height:30.75pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>5. Reevaluar herramienta de trabajo.</span></td>
    <td colspan=2 rowspan=2  width=240 style='border-right:1.0pt solid black;
    border-bottom:1.0pt solid black;width:180pt'><span lang=ES-CL
    style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures5_responsable}}</span></td>
    <td colspan=2 rowspan=2  width=160 style='border-right:1.0pt solid black;
    border-bottom:1.0pt solid black;width:120pt'><span lang=ES-CL
    style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures5_date}}</span></td>
   </tr>
   <tr height=21 style='height:15.75pt'>
   </tr>
   <tr height=20 style='height:15.0pt;mso-yfti-irow:16'>
    <td colspan=4 rowspan=2 height=41 width=240
    style='border-right:1.0pt solid black;border-bottom:1.0pt solid black;
    height:30.75pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>6. Mejorar postura de trabajo.
    (Capacitar)</span></td>
    <td colspan=2 rowspan=2  width=240 style='border-right:1.0pt solid black;
    border-bottom:1.0pt solid black;width:180pt'><span lang=ES-CL
    style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures6_responsable}}</span></td>
    <td colspan=2 rowspan=2  width=160 style='border-right:1.0pt solid black;
    border-bottom:1.0pt solid black;width:120pt'><span lang=ES-CL
    style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures6_date}}</span></td>
   </tr>
   <tr height=21 style='height:15.75pt'>
   </tr>
   <tr height=40 style='mso-height-source:userset;height:30.0pt;mso-yfti-irow:
    17'>
    <td colspan=4 height=40  width=240 style='border-right:1.0pt solid black;
    height:30.0pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin'>7. Mejorar coordinación del trabajo.
    (Capacitar)</span></td>
    <td colspan=2  width=240 style='border-right:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures7_responsable}}</span></td>
    <td colspan=2  width=160 style='border-right:1.0pt solid black;
    border-left:none;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures7_date}}</span></td>
   </tr>
   <tr height=40 style='mso-height-source:userset;height:30.0pt;mso-yfti-irow:
    18'>
    <td colspan=4 height=40 width=240 style='border-right:1.0pt solid black;
    height:30.0pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:Calibri;
    mso-bidi-theme-font:minor-latin'>8. Aumentar período de entrenamiento y
    evaluar</span></td>
    <td colspan=2  width=240 style='border-right:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures8_responsable}}</span></td>
    <td colspan=2  width=160 style='border-right:1.0pt solid black;
    border-left:none;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures8_date}}</span></td>
   </tr>
   <tr height=21 style='height:15.75pt;mso-yfti-irow:19'>
    <td colspan=4 height=21  width=240 style='border-right:1.0pt solid black;
    height:15.75pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>9. Corregir hábito de trabajo</span></td>
    <td colspan=2  width=240 style='border-right:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures9_responsable}}</span></td>
    <td colspan=2  width=160 style='border-right:1.0pt solid black;
    border-left:none;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures9_date}}</span></td>
   </tr>
   <tr height=21 style='height:15.75pt;mso-yfti-irow:20'>
    <td colspan=4 height=21 width=240 style='border-right:1.0pt solid black;
    height:15.75pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>10. Volver a observar este trabajo.</span></td>
    <td colspan=2  width=240 style='border-right:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures10_responsable}}</span></td>
    <td colspan=2  width=160 style='border-right:1.0pt solid black;
    border-left:none;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures10_date}}</span></td>
   </tr>
   <tr height=21 style='height:15.75pt;mso-yfti-irow:21'>
    <td colspan=4 height=21 width=240 style='border-right:1.0pt solid black;
    height:15.75pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>11. Detener el trabajo.</span></td>
    <td colspan=2 width=240 style='border-right:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures11_responsable}}</span></td>
    <td colspan=2  width=160 style='border-right:1.0pt solid black;
    border-left:none;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures11_date}}</span></td>
   </tr>
   <tr height=21 style='height:15.75pt;mso-yfti-irow:22;mso-yfti-lastrow:yes'>
    <td colspan=4 height=21 width=240 style='border-right:1.0pt solid black;
    height:15.75pt;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>12. Entregar reconocimiento verbal.</span></td>
    <td colspan=2  width=240 style='border-right:1.0pt solid black;
    border-left:none;width:180pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures12_responsable}}</span></td>
    <td colspan=2  width=160 style='border-right:1.0pt solid black;
    border-left:none;width:120pt'><span lang=ES-CL style='mso-bidi-font-family:
    Calibri;mso-bidi-theme-font:minor-latin'>&nbsp;{{$document->control_measures12_date}}</span></td>
   </tr>
  </table>
  
  <br>
  <br>

  <table border=1 cellpadding=0 cellspacing=0 width=640 style='border-collapse:
  collapse;table-layout:fixed;width:480pt;margin: 0 auto;'>
    <tr height=43 style='mso-height-source:userset;height:32.25pt'>
      <td colspan=4 height=43  width=320 style='border-right:1.0pt solid black;background: rgb(242, 242, 242); text-align: center; font-size: 4mm;
      height:32.25pt;width:240pt'><span lang=ES-CL> <b>Realizado por</b> </span></td>
      <td colspan=4  width=320 style='border-right:1.0pt solid black;background: rgb(242, 242, 242); text-align: center; font-size: 4mm;
      border-left:none;width:240pt'><span lang=ES-CL> <b>Revisado por</b> </span></td>
     </tr>
     <tr height=20 style='height:15.0pt;mso-yfti-irow:1'>
      <td colspan=4 rowspan=2 height=41  width=320
      style='border-right:1.0pt solid black;border-bottom:1.0pt solid black;
      height:30.75pt;width:240pt'><span lang=ES-CL style='mso-bidi-font-family:
      Calibri;mso-bidi-theme-font:minor-latin'>Nombre: {{$document->made_by_name}}</span></td>
      <td colspan=4 rowspan=2  width=320 style='border-right:1.0pt solid black;
      border-bottom:1.0pt solid black;width:240pt'><span lang=ES-CL
      style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>Nombre: {{$document->reviewed_by_name}}</span></td>
     </tr>
     <tr height=21 style='height:15.75pt'>
     </tr>
     <tr height=20 style='height:15.0pt;mso-yfti-irow:2'>
      <td colspan=4 rowspan=2 height=41  width=320
      style='border-right:1.0pt solid black;border-bottom:1.0pt solid black;
      height:30.75pt;width:240pt'><span lang=ES-CL style='mso-bidi-font-family:
      Calibri;mso-bidi-theme-font:minor-latin'>Cargo: {{$document->made_by_position}}</span></td>
      <td colspan=4 rowspan=2  width=320 style='border-right:1.0pt solid black;
      border-bottom:1.0pt solid black;width:240pt'><span lang=ES-CL
      style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>Cargo: {{$document->reviewed_by_position}}</span></td>
     </tr>
     <tr height=21 style='height:15.75pt'>
     </tr>
     <tr height=20 style='height:15.0pt;mso-yfti-irow:3'>
      <td colspan=4 rowspan=2 height=41  width=320
      style='border-right:1.0pt solid black;border-bottom:1.0pt solid black;
      height:30.75pt;width:240pt'><span lang=ES-CL style='mso-bidi-font-family:
      Calibri;mso-bidi-theme-font:minor-latin'>Fecha: {{ date('d-m-Y', strtotime($document->made_by_date)) }}</span></td>
      <td colspan=4 rowspan=2  width=320 style='border-right:1.0pt solid black;
      border-bottom:1.0pt solid black;width:240pt'><span lang=ES-CL
      style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>Fecha: {{ date('d-m-Y', strtotime($document->reviewed_by_date)) }}</span></td>
     </tr>
     <tr height=21 style='height:15.75pt'>
     </tr>
     <tr height=20 style='height:15.0pt;mso-yfti-irow:4;mso-yfti-lastrow:yes'>
      <td colspan=4 rowspan=2 height=41  width=320
      style='border-right:1.0pt solid black;border-bottom:1.0pt solid black;
      height:30.75pt;width:240pt'><span lang=ES-CL style='mso-bidi-font-family:
      Calibri;mso-bidi-theme-font:minor-latin'>Firma: <img src="{{config('app.url')}}/{{$document->made_by_firm}}" alt="firma" style="height: 5mm;"></span></td>
      <td colspan=4 rowspan=2  width=320 style='border-right:1.0pt solid black;
      border-bottom:1.0pt solid black;width:240pt'><span lang=ES-CL
      style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'>Firma: <img src="{{config('app.url')}}/{{$document->reviewed_by_firm}}" alt="firma" style="height: 5mm;"></span></td>
     </tr>
     <tr height=21 style='height:15.75pt'>
    </tr>

  </table>
  
  </body>

</html>