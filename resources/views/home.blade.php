@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{  route('nota.store') }}" method="post">

                @csrf
                
                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">Fecha</label>
                            <input class="form-control" type="date" name="date" id="date" required>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">Lugar</label>
                            <input class="form-control" type="text" name="lugar" required>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">C.P.</label>
                            <input class="form-control" type="text" name="cp" required>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="w-100 form-control" type="text" name="nombre" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">N° de productor</label>
                            <input class="w-100 form-control" type="text" name="numero_productor" required>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">
                            <label class="w-100">Estado</label>
                            <select class="form-control" name="estado" required>
                                <option value="1">Entregadas</option>
                                <option value="2">Recibidas</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label>Tipo de fruta</label>
                            <select class="form-control" name="tipo_fruta" id="tipodefruta" required>
                                <option value="1">Arandano</option>
                                <option value="2">Zarzamora</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Cantidad</label>
                            <input class="form-control" name="cantidad" type="number" placeholder="Cantidad" maxlength="5" size="20" required />
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5>
                            Calidad de fruta
                        </h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Buena</label>
                            <textarea  class="form-control" name="buena" id="" cols="30" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Pendiente</label>
                            <textarea  class="form-control" name="pendiente" id="" cols="30" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Cantidad Rechazada</label>
                            <input class="form-control" type="number" name="cantidad_rechazada" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Total Recibida</label>
                            <input class="form-control" type="number" name="total_recibida" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nombre del encargado</label>
                            <input class="w-100 form-control" type="text" name="encargado" required>
                        </div>
                    </div>
                </div>

                <input class="btn btn-primary" type="submit" value="Imprimir">

            </form>

        </div>
    </div>
</div>
@endsection
