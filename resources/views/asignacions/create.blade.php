@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">NUEVA ASIGNACIÓN DE SALA</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('asignacions.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Fecha de Inicio</label>
                                                <input value="{{ old('fechaInicio') }}" id="fechaInicio"
                                                       class="form-control " name="fechaInicio" type="date">

                                                @if ($errors->has('fechaInicio'))
                                                    <span
                                                            class="errormsg">{{ $errors->first('fechaInicio') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Hora de Inicio</label>
                                                <input value="{{ old('horaInicio') }}" id="horaInicio"
                                                       class="form-control " name="horaInicio" type="time">

                                                @if ($errors->has('horaInicio'))
                                                    <span class="errormsg">{{ $errors->first('horaInicio') }}</span>
                                                @endif
                                                <p id="demo"></p>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Fecha de Fin</label>
                                                <input value="{{ old('fechaFin') }}" id="fechaFin" class="form-control"
                                                       name="fechaFin" type="date">

                                                @if ($errors->has('fechaFin'))
                                                    <span class="errormsg">{{ $errors->first('fechaFin') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Hora de Fin</label>
                                                <input value="{{ old('horaFin') }}" id="horaFin" class="form-control "
                                                       name="horaFin" type="time">

                                                @if ($errors->has('horaFin'))
                                                    <span class="errormsg">{{ $errors->first('horaFin') }}</span>
                                                @endif
                                                <p id="demo"></p>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Notificación</label>
                                                <select class="form-select" id="basicSelect" name="notificacionEnviada"
                                                        class="form-control">
                                                    <option value=""> -- Seleccione Notificación --</option>
                                                    <option value="0"
                                                            {{ old('notificacionEnviada') == 0 ? 'selected' : '' }}>
                                                        Enviada</option>
                                                    <option value="1"
                                                            {{ old('notificacionEnviada') == 1 ? 'selected' : '' }}>
                                                        No Enviada</option>
                                                </select>

                                                @if ($errors->has('notificacionEnviada'))
                                                    <span
                                                            class="errormsg">{{ $errors->first('notificacionEnviada') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Estado</label>
                                                <select class="form-select" id="basicSelect" name="estado"
                                                        class="form-control">
                                                    <option value=""> -- Seleccione Estado --</option>
                                                    <option value="1" {{ old('estado') == 1 ? 'selected' : '' }}>Activo
                                                    </option>
                                                    <option value="0" {{ old('estado') == 0 ? 'selected' : '' }}>Inactivo
                                                    </option>
                                                </select>

                                                @if ($errors->has('estado'))
                                                    <span class="errormsg">{{ $errors->first('estado') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Sala</label>
                                                <select class="form-select" id="basicSelect" name="idSalaFK"
                                                        class="form-control">
                                                    <option value=""> -- Seleccione Sala --</option>
                                                    @foreach ($asignacion_sala as $a_s)
                                                        <option value="{{ $a_s->idSala }}"
                                                                {{ old('idSalaFK') == 0 ? 'selected' : '' }}>
                                                            <strong>Número de la Sala: </strong>
                                                            {{ $a_s->numeroSala }}
                                                            {{ old('idSalaFK') == 1 ? 'selected' : '' }}-
                                                            <strong>Piso de la Sala: </strong>
                                                            {{ $a_s->pisoSala }}
                                                            {{ old('idSalaFK') == 2 ? 'selected' : '' }}-
                                                            <strong>Bloque de la Sala: </strong>
                                                            {{ $a_s->bloqueSala }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idSalaFK'))
                                                    <span class="errormsg">{{ $errors->first('idSalaFK') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">Solicitud</label>
                                                <select class="form-select" id="basicSelect" name="idSolicitudFK"
                                                        class="form-control">
                                                    <option value=""> -- Seleccione Solicitud --</option>
                                                    @foreach ($asignacion_solicitud as $a_solicitud)
                                                        <option value="{{ $a_solicitud->idSolicitud }} "
                                                                {{ old('idSolicitudFK') == 0 ? 'selected' : '' }}>
                                                            <strong>Fecha Solicitud: </strong>
                                                            {{ $a_solicitud->fechaSolicitud }}
                                                            {{ old('idSolicitudFK') == 1 ? 'selected' : '' }}-
                                                            <strong>Capacidad Requerida: </strong>
                                                            {{ $a_solicitud->capacidadRequeria }}
                                                            {{ old('idSolicitudFK') == 2 ? 'selected' : '' }}-
                                                            <strong>Prioridad: </strong>
                                                            {{ $a_solicitud->prioridadNormal }}-
                                                            {{ old('idSolicitudFK') == 3 ? 'selected' : '' }}
                                                            <strong>Estado: </strong>
                                                            {{ $a_solicitud->estado }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idSolicitudFK'))
                                                    <span
                                                            class="errormsg">{{ $errors->first('idSolicitudFK') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        const OPEN_HOUR = 7;
                                        const OPEN_MINUTE = 0;

                                        const CLOSE_HOUR = 17;
                                        const CLOSE_MINUTE = 0;

                                        const p = document.getElementById('demo');

                                        function isValidHour(hour, minute) {
                                            return hour > -1 && hour < 24 && minute > -1 && minute < 60;
                                        }

                                        function validateDates(tiempo1, tiempo2) {
                                            if (tiempo1 && tiempo2 && tiempo1.value && tiempo2.value) {

                                                const now = new Date();
                                                const time1 = new Date(now);
                                                time1.setHours(tiempo1.value.split(':')[0])
                                                time1.setMinutes(tiempo1.value.split(':')[1])
                                                const time2 = new Date(now);
                                                time2.setHours(tiempo2.value.split(':')[0])
                                                time2.setMinutes(tiempo2.value.split(':')[1])
                                                // validamos que la fecha de ingreso sea menor que la de salida
                                                if (time1 < time2) {
                                                    const open = new Date(now);
                                                    open.setHours(OPEN_HOUR)
                                                    open.setMinutes(OPEN_MINUTE);
                                                    const close = new Date(now);
                                                    close.setHours(CLOSE_HOUR);
                                                    close.setMinutes(CLOSE_MINUTE);
                                                    if (time1 >= open && time2 <= close) {
                                                        p.innerHTML += 'Éxito, hora de entrada y salida correcta';
                                                        return true;
                                                    } else {
                                                        p.innerHTML += 'Error, hora de entrada debe ser mayor que  ' + open.getHours() + ':' + open.getMinutes() + ' y la salida menor que  ' + close.getHours() + ':' + close.getMinutes();
                                                    }

                                                } else {
                                                    p.innerHTML += 'Error, la hora de ingreso debe ser menor que la de salida';
                                                }
                                            } else {
                                                p.innerHTML += 'Error, debes rellenar todos los datos';
                                            }
                                            return false;

                                        }

                                        function myFunction() {
                                            // Obtengo todos los inputs
                                            const horaInicio = document.getElementById('horaInicio');
                                            const horaFin = document.getElementById('horaFin');

                                            // valido el primer grupo
                                            const isValid1 = validateDates(horaInicio, horaFin);


                                            // Todas estas fechas están dentro del horario de apertura
                                            if (isValid1) {
                                                // valido que la hora de entrada del 2 sea mayor o igual que la hora de salida del primero, también que la hora de entrada del tercero sea mayor o igual que la salida del 3
                                                const salida1 = new Date();
                                                salida1.setHours(horaFin.value.split(':')[0]);
                                                salida1.setMinutes(horaFin.value.split(':')[1]);


                                                if (salida1) {
                                                    console.log(salida1);
                                                    p.innerHTML = 'todo correcto';
                                                } else {
                                                    p.innerHTML = '...';
                                                }
                                            }
                                        }
                                    </script>
                                    <div class="col-12 d-flex justify-content-end">
                                        <a  class="btn btn-light me-1 mb-1" href="{{ route('asignacions') }}">Volver</a>
                                        <button onclick="return confirm('Esta seguro de registrar?') ,myFunction()" type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection()
