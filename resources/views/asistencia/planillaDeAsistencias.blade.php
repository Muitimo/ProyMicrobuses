
@extends('layouts.app')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Planilla de Asistencia</h3>
              </div>

              <!-- Buscador -->
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <!-- Tabla de datos -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_title">
                    <button type="submit" class="btn btn-success"> <a href="marcarEntrada"> Marca mueva Assitencia </a> </button>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>



                  <div class="x_content">

                      <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                          <thead> <!-- encabezado de la tabla --> 
                          <tr class="headings">
                              <th> <input type="checkbox" id="check-all" class="flat"> </th>

                              <th>Fecha</th>
                              <th>Hora de Ingreso</th>  
                              <th>Hora de Salida</th>
                              <th>Persona</th>

                              <th class="column-title no-link last"><span class="nobr">Action</span> </th>
                              <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                              </th>
                          </tr>
                        </thead>

                        <tbody> <!-- datos de la tabla -->                          
                          @foreach($listaAsistencia as $listAsistencia)
                            <tr class="even pointer">
                              <td class="a-center "> <input type="checkbox" class="flat" name="table_records"> </td>

                              <td >{{ $listAsistencia->fecha }}</td>
                              <td >{{ $listAsistencia->horaIngreso }}</td>
                              <td >{{ $listAsistencia->horaSalida }}</td>

                              @foreach($Personas as $Persona)
                                @if (  $Persona->id == $listAsistencia->id_persona )
                                  <td >{{ $Persona->nombre }}</td>
                                @endif
                              @endforeach

                              <td>
                                <a class="btn btn-success btn-sm" title="Ver"
                                   href="">  <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-primary btn-sm" title="Editar"
                                   href=""> <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" title="Eliminar"
                                   href="#" data-toggle="modal" data-target="#delete"
                                   onclick="$('#delete').modal('show')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                          @endforeach
                          </tbody>
                        </table>
                      </div>

                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>  <!-- /page content -->

@endsection

