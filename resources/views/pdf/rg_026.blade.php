<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>RG-026</title>




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
        Código	: PRO-SIG-013-RG-026<br>
        Revisión	: 002<br>
        Fecha	: 04-09-2019<br>
        Página	: Página 1 de 1
      </td>
    </tr>
    <tr>
      
      <td style="border: black solid 1px; text-align: center;font-size: 4mm;">
        <b>REGISTRO <br>
          LISTA DE VERIFICACIÓN VEHÍCULOS</b> 
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
    <td colspan="10"><div style="text-align: center; font-size: 5mm;">CHECK LIST VEHÍCULOS</div> </td>
  </tr>
  <tr>
    <td colspan="2"><div >Fecha</div> </td>
    <td colspan="3">&nbsp;{{ date('d-m-Y', strtotime($document->date)) }}</td>
    <td colspan="2">Kilometraje</td>
    <td colspan="3">&nbsp;{{$document->mileage}}</td>
  </tr>
  <tr>
    <td colspan="2">Placa Patente</td>
    <td colspan="3">&nbsp;{{$document->patent_plate}}</td>
    <td colspan="2">Prox. Mantención</td>
    <td colspan="3">&nbsp;{{$document->next_maintenance}}</td>
  </tr>
  <tr>
    <td colspan="2">Número Interno</td>
    <td colspan="8">&nbsp;{{$document->internal_number}}</td>
  </tr>
  <tr>
    <td style="background: rgb(220, 230, 241);"><b>ITEM</b> </td>
    <td colspan="3" style="background: rgb(220, 230, 241);"><b>ESTADO</b> </td>
    <td></td>
    <td style="background: rgb(220, 230, 241);"><b>ITEM</b> </td>
    <td colspan="3" style="background: rgb(220, 230, 241);"><b>ESTADO</b></td>
    <td></td>
  </tr>
  <tr>
    <td style="background: rgb(220, 230, 241);"><b>LUCES</b> </td>
    <td style="background: rgb(220, 230, 241);"><b>Bueno</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Malo</b></td>
    <td style="background: rgb(220, 230, 241);"><b>N/A</b></td>
    <td style="background: rgb(220, 230, 241);"><b>OBSERVACIONES</b> </td>
    <td style="background: rgb(220, 230, 241);"><b>SIST. DIRECCIÓN</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Bueno</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Malo</b></td>
    <td style="background: rgb(220, 230, 241);"><b>N/A</b></td>
    <td style="background: rgb(220, 230, 241);"><b>OBSERVACIONES</b> </td>
  </tr>
  <tr>
    <td>Luz baja</td>
    <td style="text-align: center;">
      @if($document->low_light==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->low_light==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->low_light) || $document->low_light==2 || $document->low_light==1 )
        &nbsp;
      @endif
      @if($document->low_light=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->low_light_observations}}</td>

    <td>Reg. Volante</td>
    <td style="text-align: center;">
      @if($document->reg_steering_wheel==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->reg_steering_wheel==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->reg_steering_wheel) || $document->reg_steering_wheel==2 || $document->reg_steering_wheel==1 )
        &nbsp;
      @endif
      @if($document->reg_steering_wheel=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->reg_steering_wheel_observations}}</td>
    
  </tr>
  <tr>

    <td>Luz alta</td>
    <td style="text-align: center;">
      @if($document->high_light==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->high_light==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->high_light) || $document->high_light==2 || $document->high_light==1 )
        &nbsp;
      @endif
      @if($document->high_light=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->high_light_observations}}</td>

    <td>Prueba Giros</td>

    <td style="text-align: center;">
      @if($document->test_spins==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->test_spins==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->test_spins) || $document->test_spins==2 || $document->test_spins==1 )
        &nbsp;
      @endif
      @if($document->test_spins=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->test_spins_observations}}</td>

  </tr>
  <tr>

    <td>Luz retroceso</td>
    <td style="text-align: center;">
      @if($document->recoil_light==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->recoil_light==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->recoil_light) || $document->recoil_light==2 || $document->recoil_light==1 )
        &nbsp;
      @endif
      @if($document->recoil_light=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->recoil_light_observations}}</td>

    <td style="background: rgb(220, 230, 241);"><b>SIST. FRENOS</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Bueno</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Malo</b></td>
    <td style="background: rgb(220, 230, 241);"><b>N/A</b></td>
    <td style="background: rgb(220, 230, 241);"><b>OBSERVACIONES</b></td>
  </tr>
  <tr>
    
    
    <td>Luz freno</td>
    <td style="text-align: center;">
      @if($document->brake_light==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->brake_light==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->brake_light) || $document->brake_light==2 || $document->brake_light==1 )
        &nbsp;
      @endif
      @if($document->brake_light=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->brake_light_observations}}</td>

    <td>Freno de Servicio</td>

    <td style="text-align: center;">
      @if($document->service_brake==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->service_brake==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->service_brake) || $document->service_brake==2 || $document->service_brake==1 )
        &nbsp;
      @endif
      @if($document->service_brake=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->service_brake_observations}}</td>
  </tr>
  <tr>

    <td>Luz Freno Tracera</td>
    <td style="text-align: center;">
      @if($document->rear_brake_light==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->rear_brake_light==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->rear_brake_light) || $document->rear_brake_light==2 || $document->rear_brake_light==1 )
        &nbsp;
      @endif
      @if($document->rear_brake_light=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->rear_brake_light_observations}}</td>

    <td>Freno Mano</td>

    <td style="text-align: center;">
      @if($document->hand_brake==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->hand_brake==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->hand_brake) || $document->hand_brake==2 || $document->hand_brake==1 )
        &nbsp;
      @endif
      @if($document->hand_brake=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->hand_brake_observations}}</td>
  </tr>
  <tr>
    <td>Intermitentes</td>
    <td style="text-align: center;">
      @if($document->flashing==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->flashing==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->flashing) || $document->flashing==2 || $document->flashing==1 )
        &nbsp;
      @endif
      @if($document->flashing=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->flashing_observations}}</td>

    <td style="background: rgb(220, 230, 241);"><b>NIVELES</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Bueno</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Malo</b></td>
    <td style="background: rgb(220, 230, 241);"><b>N/A</b></td>
    <td style="background: rgb(220, 230, 241);"><b>OBSERVACIONES</b></td>
  </tr>
  <tr>
    <td>Luz patente</td>
    <td style="text-align: center;">
      @if($document->patent_light==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->patent_light==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->patent_light) || $document->patent_light==2 || $document->patent_light==1 )
        &nbsp;
      @endif
      @if($document->patent_light=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->patent_light_observations}}</td>

    <td>Agua Radiador</td>

    <td style="text-align: center;">
      @if($document->radiator_water==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->radiator_water==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->radiator_water) || $document->radiator_water==2 || $document->radiator_water==1 )
        &nbsp;
      @endif
      @if($document->radiator_water=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->radiator_water_observations}}</td>
  </tr>
  <tr>
    <td>Luz Interior</td>
    <td style="text-align: center;">
      @if($document->interior_light==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->interior_light==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->interior_light) || $document->interior_light==2 || $document->interior_light==1 )
        &nbsp;
      @endif
      @if($document->interior_light=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->interior_light_observations}}</td>

    <td>Agua Plumillas</td>

    <td style="text-align: center;">
      @if($document->water_nibs==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->water_nibs==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->water_nibs) || $document->water_nibs==2 || $document->water_nibs==1 )
        &nbsp;
      @endif
      @if($document->water_nibs=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->water_nibs_observations}}</td>
  </tr>
  <tr>
    <td>Baliza</td>
    <td style="text-align: center;">
      @if($document->beacon==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->beacon==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->beacon) || $document->beacon==2 || $document->beacon==1 )
        &nbsp;
      @endif
      @if($document->beacon=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->beacon_observations}}</td>

    <td>Aceite Motor</td>

    <td style="text-align: center;">
      @if($document->engine_oil==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->engine_oil==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->engine_oil) || $document->engine_oil==2 || $document->engine_oil==1 )
        &nbsp;
      @endif
      @if($document->engine_oil=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->engine_oil_observations}}</td>
  </tr>
  <tr>
    <td>Pertiga</td>
    <td style="text-align: center;">
      @if($document->pole==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->pole==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->pole) || $document->pole==2 || $document->pole==1 )
        &nbsp;
      @endif
      @if($document->pole=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->pole_observations}}</td>

    <td>Aceite Caja</td>

    <td style="text-align: center;">
      @if($document->oil_box==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->oil_box==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->oil_box) || $document->oil_box==2 || $document->oil_box==1 )
        &nbsp;
      @endif
      @if($document->oil_box=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->oil_box_observations}}</td>
  </tr>
  <tr>
    <td style="background: rgb(220, 230, 241);"><b>NEUMÁTICOS</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Bueno</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Malo</b></td>
    <td style="background: rgb(220, 230, 241);"><b>N/A</b></td>
    <td style="background: rgb(220, 230, 241);"><b>OBSERVACIONES</b></td>
    <td>Líquido de Frenos</td>

    <td style="text-align: center;">
      @if($document->brake_fluid==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->brake_fluid==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->brake_fluid) || $document->brake_fluid==2 || $document->brake_fluid==1 )
        &nbsp;
      @endif
      @if($document->brake_fluid=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->brake_fluid_observations}}</td>
  </tr>
  <tr>

    <td>Delanteros</td>
    <td style="text-align: center;">
      @if($document->front_tires==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->front_tires==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->front_tires) || $document->front_tires==2 || $document->front_tires==1 )
        &nbsp;
      @endif
      @if($document->front_tires=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->front_tires_observations}}</td>
    
    <td>Sistema Hidráulico</td>

    <td style="text-align: center;">
      @if($document->hydraulic_system==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->hydraulic_system==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->hydraulic_system) || $document->hydraulic_system==2 || $document->hydraulic_system==1 )
        &nbsp;
      @endif
      @if($document->hydraulic_system=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->hydraulic_system_observations}}</td>
  </tr>
  <tr>

    <td>Traceros</td>
    <td style="text-align: center;">
      @if($document->rear_tires==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->rear_tires==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->rear_tires) || $document->rear_tires==2 || $document->rear_tires==1 )
        &nbsp;
      @endif
      @if($document->rear_tires=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->rear_tires_observations}}</td>

    <td>Batería</td>

    <td style="text-align: center;">
      @if($document->battery==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->battery==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->battery) || $document->battery==2 || $document->battery==1 )
        &nbsp;
      @endif
      @if($document->battery=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->battery_observations}}</td>
  </tr>
  <tr>

    <td>Repuesto</td>
    <td style="text-align: center;">
      @if($document->spare_tires==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->spare_tires==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->spare_tires) || $document->spare_tires==2 || $document->spare_tires==1 )
        &nbsp;
      @endif
      @if($document->spare_tires=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->spare_tires_observations}}</td>

    <td>Correas</td>

    <td style="text-align: center;">
      @if($document->straps==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->straps==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->straps) || $document->straps==2 || $document->straps==1 )
        &nbsp;
      @endif
      @if($document->straps=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->straps_observations}}</td>
  </tr>
  <tr>
    <td>Presión Aire</td>
    <td style="text-align: center;">
      @if($document->air_pressure_tires==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->air_pressure_tires==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->air_pressure_tires) || $document->air_pressure_tires==2 || $document->air_pressure_tires==1 )
        &nbsp;
      @endif
      @if($document->air_pressure_tires=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->air_pressure_tires_observations}}</td>

    <td style="background: rgb(220, 230, 241);"><b>ACCESORIOS</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Bueno</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Malo</b></td>
    <td style="background: rgb(220, 230, 241);"><b>N/A</b></td>
    <td style="background: rgb(220, 230, 241);"><b>OBSERVACIONES</b></td>
  </tr>
  <tr>

    <td>Revisión tuercas</td>
    <td style="text-align: center;">
      @if($document->review_nuts_tires==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->review_nuts_tires==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->review_nuts_tires) || $document->review_nuts_tires==2 || $document->review_nuts_tires==1 )
        &nbsp;
      @endif
      @if($document->review_nuts_tires=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->review_nuts_tires_observations}}</td>

    <td>Extintor</td>
    
    <td style="text-align: center;">
      @if($document->extinguisher==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->extinguisher==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->extinguisher) || $document->extinguisher==2 || $document->extinguisher==1 )
        &nbsp;
      @endif
      @if($document->extinguisher=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->extinguisher_observations}}</td>
  </tr>
  <tr>
    <td style="background: rgb(220, 230, 241);"><b>DOCUMENTACIÓN</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Bueno</b></td>
    <td style="background: rgb(220, 230, 241);"><b>Malo</b></td>
    <td style="background: rgb(220, 230, 241);"><b>N/A</b></td>
    <td style="background: rgb(220, 230, 241);"><b>OBSERVACIONES</b></td>
    <td>Botiquín</td>

    <td style="text-align: center;">
      @if($document->first_aid_kit==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->first_aid_kit==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->first_aid_kit) || $document->first_aid_kit==2 || $document->first_aid_kit==1 )
        &nbsp;
      @endif
      @if($document->first_aid_kit=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->first_aid_kit_observations}}</td>
  </tr>
  <tr>

    <td>Revisión técnica</td>
    <td style="text-align: center;">
      @if($document->doc_technical_review==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->doc_technical_review==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->doc_technical_review) || $document->doc_technical_review==2 || $document->doc_technical_review==1 )
        &nbsp;
      @endif
      @if($document->doc_technical_review=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->doc_technical_review_observations}}</td>

    <td>Triángulos</td>

    <td style="text-align: center;">
      @if($document->triangles==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->triangles==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->triangles) || $document->triangles==2 || $document->triangles==1 )
        &nbsp;
      @endif
      @if($document->triangles=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->triangles_observations}}</td>
  </tr>
  <tr>

    <td>Permiso circulación</td>
    <td style="text-align: center;">
      @if($document->doc_circulation_permit==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->doc_circulation_permit==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->doc_circulation_permit) || $document->doc_circulation_permit==2 || $document->doc_circulation_permit==1 )
        &nbsp;
      @endif
      @if($document->doc_circulation_permit=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->doc_circulation_permit_observations}}</td>

    <td>bocina</td>

    <td style="text-align: center;">
      @if($document->horn==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->horn==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->horn) || $document->horn==2 || $document->horn==1 )
        &nbsp;
      @endif
      @if($document->horn=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->horn_observations}}</td>
  </tr>
  <tr>

    <td>Seguro obligatorio</td>
    <td style="text-align: center;">
      @if($document->doc_mandatory_insurance==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->doc_mandatory_insurance==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->doc_mandatory_insurance) || $document->doc_mandatory_insurance==2 || $document->doc_mandatory_insurance==1 )
        &nbsp;
      @endif
      @if($document->doc_mandatory_insurance=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->doc_mandatory_insurance_observations}}</td>

    <td>Alzavidrios</td>

    <td style="text-align: center;">
      @if($document->glass_lift==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->glass_lift==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->glass_lift) || $document->glass_lift==2 || $document->glass_lift==1 )
        &nbsp;
      @endif
      @if($document->glass_lift=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->glass_lift_observations}}</td>
  </tr>
  <tr>

    <td>Padrón</td>
    <td style="text-align: center;">
      @if($document->doc_census==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->doc_census==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->doc_census) || $document->doc_census==2 || $document->doc_census==1 )
        &nbsp;
      @endif
      @if($document->doc_census=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->doc_census_observations}}</td>

    <td>Puertas Correderas</td>

    <td style="text-align: center;">
      @if($document->sliding_doors==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->sliding_doors==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->sliding_doors) || $document->sliding_doors==2 || $document->sliding_doors==1 )
        &nbsp;
      @endif
      @if($document->sliding_doors=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->sliding_doors_observations}}</td>
  </tr>
  <tr>

    <td>Cartilla ministerio</td>
    <td style="text-align: center;">
      @if($document->doc_record_ministry==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->doc_record_ministry==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->doc_record_ministry) || $document->doc_record_ministry==2 || $document->doc_record_ministry==1 )
        &nbsp;
      @endif
      @if($document->doc_record_ministry=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->doc_record_ministry_observations}}</td>

    <td>Espejos retrovisores</td>

    <td style="text-align: center;">
      @if($document->rear_view_mirrors==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->rear_view_mirrors==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->rear_view_mirrors) || $document->rear_view_mirrors==2 || $document->rear_view_mirrors==1 )
        &nbsp;
      @endif
      @if($document->rear_view_mirrors=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->rear_view_mirrors_observations}}</td>
  </tr>
  <tr>

    <td>Licencia conducir</td>
    <td style="text-align: center;">
      @if($document->doc_driver_license==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->doc_driver_license==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->doc_driver_license) || $document->doc_driver_license==2 || $document->doc_driver_license==1 )
        &nbsp;
      @endif
      @if($document->doc_driver_license=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->doc_driver_license_observations}}</td>

    <td>Plumillas</td>

    <td style="text-align: center;">
      @if($document->nibs==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->nibs==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->nibs) || $document->nibs==2 || $document->nibs==1 )
        &nbsp;
      @endif
      @if($document->nibs=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->nibs_observations}}</td>
  </tr>
  <tr>

    <td>Licencia Conducir Interna</td>
    <td style="text-align: center;">
      @if($document->doc_internal_driver_license==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->doc_internal_driver_license==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->doc_internal_driver_license) || $document->doc_internal_driver_license==2 || $document->doc_internal_driver_license==1 )
        &nbsp;
      @endif
      @if($document->doc_internal_driver_license=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->doc_internal_driver_license_observations}}</td>

    <td>Cuñas</td>

    <td style="text-align: center;">
      @if($document->wedges==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->wedges==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->wedges) || $document->wedges==2 || $document->wedges==1 )
        &nbsp;
      @endif
      @if($document->wedges=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->wedges_observations}}</td>
  </tr>
  <tr>

    <td>Pasavante aduana</td>
    <td style="text-align: center;">
      @if($document->doc_customs_passport==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->doc_customs_passport==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->doc_customs_passport) || $document->doc_customs_passport==2 || $document->doc_customs_passport==1 )
        &nbsp;
      @endif
      @if($document->doc_customs_passport=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->doc_customs_passport_observations}}</td>

    <td>Llave de rueda</td>

    <td style="text-align: center;">
      @if($document->wheel_wrench==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->wheel_wrench==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->wheel_wrench) || $document->wheel_wrench==2 || $document->wheel_wrench==1 )
        &nbsp;
      @endif
      @if($document->wheel_wrench=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->wheel_wrench_observations}}</td>
  </tr>
  <tr>

    <td>Libro Bitácora</td>
    <td style="text-align: center;">
      @if($document->doc_logbook==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->doc_logbook==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->doc_logbook) || $document->doc_logbook==2 || $document->doc_logbook==1 )
        &nbsp;
      @endif
      @if($document->doc_logbook=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->doc_logbook_observations}}</td>

    <td>Gata</td>

    <td style="text-align: center;">
      @if($document->hydraulic_jack==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->hydraulic_jack==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->hydraulic_jack) || $document->hydraulic_jack==2 || $document->hydraulic_jack==1 )
        &nbsp;
      @endif
      @if($document->hydraulic_jack=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->hydraulic_jack_observations}}</td>
  </tr>
  <tr>
    <td colspan="5" rowspan="2" style="text-align: center; background: rgb(220, 230, 241);"><b>OBSERVACIONES ANEXAS</b></td>
    <td>Parabrisas</td>

    <td style="text-align: center;">
      @if($document->windshield==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->windshield==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->windshield) || $document->windshield==2 || $document->windshield==1 )
        &nbsp;
      @endif
      @if($document->windshield=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->windshield_observations}}</td>
  </tr>
  <tr>
    <td>Cinturones de Seguridad</td>

    <td style="text-align: center;">
      @if($document->seatbelts==1)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if($document->seatbelts==2)
        X
      @else
        &nbsp;
      @endif
    </td>
    <td style="text-align: center;">
      @if(is_null($document->seatbelts) || $document->seatbelts==2 || $document->seatbelts==1 )
        &nbsp;
      @endif
      @if($document->seatbelts=='0')
        X
      @endif
    </td>
    <td>&nbsp;{{$document->seatbelts_observations}}</td>
  </tr>
  <tr>
    <td colspan="10" rowspan="3" style="text-align: justify;">&nbsp;  {{$document->attached_observations}} </td>
  </tr>
  <tr>
    
  </tr>
  <tr>
    
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    <td colspan="6" rowspan="11" style="text-align: center;"> <img src="{{config('app.url')}}/img/car.png" width="400px" alt="car"></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" style="background: rgb(220, 230, 241);">REALIZADO POR</td>
    <td colspan="5" style="background: rgb(220, 230, 241);">REVISADO POR</td>
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