<table class="table table-hover table-condensed table-striped table-bordered" id="exTable"">
        <thead class="tableThead">
            <th scope="col">Riesgo</th>
            <th scope="col">Opcion de tratamiento</th>
            <th scope="col">Accion</th>
            <th scope="col">Responsable</th>
            <th scope="col">Duracion</th>
            <th scope="col">Criterio de exito </th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach($plan as $planes)
                <tr>
                    <td>{{$planes->riesgo}}</td>
                    <td>{{$planes->opcion}}</td>
                    <td>-{{$planes->accion}}</td>
                    <td>{{$planes->responsable}}</td>
                    <td>{{$planes->duracion}}</td>
                    <td>{{$planes->criterio}}</td>
                    <td>
                    <a href="{{route('plan.edit',$planes->idPlan)}}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a href="{{route('plan.destroy',$planes->idPlan)}}" onclick="return confirm('¿Seguro que deseas eliminar el plan?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>