@extends('main')
@section("content")
<div class="container">
    <div class="row justify-content-center">
         <div class="card col-md-8 ml-auto mr-auto">
             <div class="card-header">
                  <h5 class="m-0">Lista de puntos de acceso</h5><br>
            </div>
              <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">ID tecnico</th>
                          <th scope="col">Modelo</th>
                          <th scope="col">Ubicacion</th>
                          <th scope="col">Latitud</th>
                          <th scope="col">Longitud</th>
                          <th scope="col">Fecha de instalacion</th>
                          <th scope="col">Borrar</th>
                        </tr>
                      </thead>
                      <tbody id="puntoAccesoTable">
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td> 
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>                           
                        </tr>
                         <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td> 
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>                           
                        </tr>
                         <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td> 
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>                           
                        </tr>
                         <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td> 
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>                           
                        </tr>
                         <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td> 
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>                           
                        </tr>
                       
                      </tbody>
              </table>
              <ul id="puntoAccesoPaginator" class="pagination ml-auto mr-auto"></ul>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{url('public/assets/js/ajaxPuntoAcceso.js')}}">
</script>
@endsection
