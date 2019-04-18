
    <div class="container">
        <strong>Controles ISO 27001</strong>
    </div>

    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Id</th>
            <th scope="col">Objetivo</th>
            <th scope="col">Control</th>
            <th scope="col">Acciones de control</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach($control as $controles)
                <tr>
                    <td>{{$controles->idControlL}}</td>
                    <td>{{$controles->nombre}}</td>
                    <td>{{$controles->descripcion}}</td>
                    <td>{{$controles->acciones}}</td>
                    <td>
                    <a href="{{route('control.edit',$controles->idControl)}}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a href="{{route('control.destroy',$controles->idControl)}}" onclick="return confirm('¿Seguro que deseas eliminar el control?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
   
