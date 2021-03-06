@extends('Pacientes.mantenimiento_pacientes')
//warren
@section('Titulo')
<i class="fa fa-gear fa-fw"></i>
<a1>Mantenimiento de Pacientes<a1>
@endsection
@section('Contenido')
      <form role="form" method="post" action="/pacientes" autocomplete="off">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>

            <div class="text-center"><h2 align="center">Agregar Paciente</h2>
            </div></br>


            <div class="form-group">
                  <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                  <div class="col-md-6 col-xs-10">
                      <select onclick="MostrarFormulario()" id="Tipo_Paciente" name="Tipo_Paciente" placeholder="Tipo Paciente" class="form-control" required>
                        <option value="ESTUDIANTE">ESTUDIANTE</option>
                        <option value="PERSONA EXTERNA">PERSONA EXTERNA</option>
                      </select>
                  </div>
            </div></br></br>


            <div id='Seccion_Estudiante' style="display:none">
                <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="Codigo" name="Codigo" placeholder="Código" class="form-control">
                    </div>
                </div></br></br>

                <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <select id="Escuela" name="Escuela" placeholder="Escuela Profesional" class="form-control">
                          @foreach($escuelas as $escuela)
                            <option>{{$escuela->nombre}}</option>
                          @endforeach
                        </select>
                    </div>
                </div></br></br>
            </div>

            <div id="Seccion_General">
                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="dni" name="dni" placeholder="DNI" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-lock bigicon"></i></span>
                      <div class="col-md-6 col-xs-10">
                          <input id="Password" type="Password" name="Password" placeholder="Password" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Nombres" name="Nombres" placeholder="Nombres" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Apellidos" name="Apellidos" placeholder="Apellidos" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Fecha_Nacimiento" name="Fecha_Nacimiento" placeholder="Fecha de Nacimiento" class="form-control" required>
                      </div>
                </div></br></br>

               <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <select class="form-control" id="Sexo">
                          <option>MASCULINO</option>
                          <option>FEMENINO</option>
                        </select>
                    </div>
              </div></br></br>


              <div class="form-group">
                    <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-phone bigicon"></i></span>

                    <div class="col-md-6 col-xs-10">
                        <input id="Telefono" name="Telefono" placeholder="Teléfono" class="form-control" required>
                    </div>
              </div></br></br>

                 <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="E_mail" name="E_mail" placeholder="E-Mail" class="form-control" required>
                      </div>
                </div></br></br>


                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <input id="Direccion" name="Direccion" placeholder="Dirección" class="form-control" required>
                      </div>
                </div></br></br>

                <div class="form-group">
                      <span class="col-md-1 col-xs-1 col-md-offset-2 text-center"><i class="fa fa-home bigicon"></i></span>

                      <div class="col-md-6 col-xs-10">
                          <select id="Estado" name="Estado" placeholder="Estado" class="form-control">
                              <option>Habilitado</option>
                              <option>Deshabilitado</option>
                          </select>

                      </div>
                </div></br></br>


                <div class="form-group">
                      <div class="col-md-12 text-center">
                          <input type="submit" style="width:80px" class="btn btn-success" align="center" class="form-control" value="Guardar">
                          <button type="reset" style="width:80px" class="btn btn-primary" align="center" class="form-control" >Limpiar</button>

                      </div>
                </div></br></br>
            </div>
            </fieldset>


       </form>
@endsection
@section('js_scripts')
<script>
  function MostrarFormulario()
  {
    var Seleccionado = document.getElementById('Tipo_Paciente').value;


    if(Seleccionado=='ESTUDIANTE')
    {
      document.getElementById('Seccion_Estudiante').style="display:visible";
    }
    else
    {
      document.getElementById('Seccion_Estudiante').style="display:none";
    }
  }
</script>

@endsection
