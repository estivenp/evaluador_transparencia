@extends('Base.Base')
@section('content')
<div class="container">
    <h1>Evaluaciones de Plataformas Web</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Plataforma</th>
                <th>URL</th>
                <th>Fecha de Evaluación</th>
                <th>Resultado Final</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evaluaciones as $evaluacion)
            <tr>
                <td>{{ $evaluacion->plataformaWeb->nombre }}</td>
                <td>{{ $evaluacion->plataformaWeb->url }}</td>
                <td>{{ $evaluacion->fecha_evaluacion }}</td>
                <td>{{ $evaluacion->resultado_final }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection