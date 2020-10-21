<html>

<head>

    <meta charset="UTF-8">

</head>

<body>

    <style>

        .height-20{
            height: 20px;
        }

        .height-100{
            height: 100px;
        }

 
        div.row{
            width: 100%;
            margin-bottom: 50px;
        }

        div.col-6{
            width: 50%;
            float: left;
            /*border: 1px solid black;*/
        }

        div.col-4{
            width: 33.33%;
            float: left;
        }

        div.col-12{
            width: 100%;
        }

        label{
            font-size: 18px;
            font-weight: 600;
        }

        div.header{
            height: 40px;
        }


        h5{
            font-size:22px;
        }

        .center{
            display: block;
            text-align: center;
            margin: 0 auto;
        }

        .firma{
            border-top: 1px solid black;
            width: 70%;
            padding-top: 4px;
        }

        .firma.second{
            width: 200px;
        }

        .folio{
            font-size: 16px;
            color:red;
            font-weight: 800;
        }

        .mb-20{
            margin-bottom: 20px;
        }

        .mt-20{
            margin-top:20px;
        }

        h4{
            font-size: 22px;
        }
    
    </style>

    <div class="header"></div>

    <div class="row mb-20">

        <img class="center mb-20" src="http://romberries.store/public/img/report/header_report.jpg">
        <strong><p class="center">Carretera Los Reyes-Jacona Km 1, Módulo #5</p></strong>
        <strong><p class="center">Colonia San Juan de Dios. Los Reyes, Michoacán.</p></strong>
        <strong><p class="center">Tel: 354 118 34 44. Correo: romberries.productores@gmail.com</p></strong>
        <hr style="width:700px;">
    </div>

    </br></br>

    <div class="row height-20">

        <div class="col-4 center">
            <label>Fecha:</label>
            <p>{{$nota->date}}</p>
        </div>
        <div class="col-4 center">
            <label>Lugar:</label>
            <p>{{$nota->lugar}}</p>
        </div>
        <div class="col-4 center">
            <label>C.P.:</label>
            <p>{{$nota->cp}}</p>
        </div>

    </div>

    <div class="row height-20">
        <div class="col-4 center">
           
            <p>  <label>Nombre:</label> {{$nota->nombre}}</p>

        </div>
        <div class="col-4"></div>
        <div class="col-4"></div>
    </div>
    


    <div class="row height-20">
        <div class="col-4 center">
            <label>Estado</label>
            <p>{{$nota->estado}}</p>

        </div>
        <div class="col-4 center">
            <label >Tipo de fruta</label>
            <p>{{$nota->tipo_fruta}}</p>

        </div>
        <div class="col-4 center">
            <label>Cantidad</label>
            <p>{{$nota->cantidad}}</p>

        </div>
    </div>

    </br>

    <h4 class="center">Calidad de fruta</h4>

    <div class="row">
        <div class="col-6 center">
            <label>Buena</label>
            <p>{{$nota->buena}}</p>

        </div>
        <div class="col-6 center">
            <label>Pendiente</label>
            <p>{{$nota->pendiente}}</p>

        </div>
    </div>

    <div class="row height-100">

        <div class="col-6 center">
            <label>Cantidad rechazada</label>
            <p>{{$nota->cantidad_rechazada}}</p>

        </div>

        <div class="col-6 center">
            <label>Total recibida</label>
            <p>{{$nota->total_recibida}}</p>

        </div>
    </div>

    </br></br></br>

    <div class="row height-100">
        <div class="col-6">
            <p class="firma center">Nombre encargado</p>
            <p class="center"> {{$nota->encargado}} </p>
        </div>
        <div class="col-6"> 
            <p style="width:200px;" class="firma center"> Firma </p>
        </div>

    </div>

    <div class="row">
        <div class="col-4"> 
            <p class="folio"> FOLIO N°. {{ $nota->id }} </p>
        </div>
        <div class="col-4"></div>
        <div class="col-4"></div>

    </div>
 
</body>

</html>