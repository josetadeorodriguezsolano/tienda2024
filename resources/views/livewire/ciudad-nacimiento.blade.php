<div>
    Pais:
    <select >
        @foreach ($paises as $pais)
            <option value="{{$pais->id}}">{{$pais->nombre}}</option>
        @endforeach
    </select><br>
    <select >
        @foreach ($estados as $estado)
            <option value="{{$estado->id}}">{{$estado->nombre}}</option>
        @endforeach
    </select>
    <select >
        @foreach ($municipios as $municipio)
            <option value="{{$municipio->id}}">{{$municipio->nombre}}</option>
        @endforeach
    </select>
    <select >
        @foreach ($ciudades as $ciudad)
            <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
        @endforeach
    </select>
</div>
