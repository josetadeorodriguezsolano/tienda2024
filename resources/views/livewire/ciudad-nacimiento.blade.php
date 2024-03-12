<div>
    Pais:
    <select>
        @foreach ($paises as $pais)
            <option value="{{$pais -> id}}">{{pais->nombre}}</option>
        @endforeach
    </select><br>
    Estado:
    <select>
        @foreach ($estados as $estado)
            <option value="{{$estado -> id}}">{{estado->nombre}}</option>
        @endforeach
    </select><br>
    Municipio:
    <select>
        @foreach ($municipios as $municipio)
            <option value="{{$municipio -> id}}">{{municipio->nombre}}</option>
        @endforeach
    </select><br>
    Ciudad:
    <select>
        @foreach ($ciudades as $ciudad)
            <option value="{{$ciudad -> id}}">{{ciudad->nombre}}</option>
        @endforeach
    </select><br>
</div>
