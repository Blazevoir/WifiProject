@extends('main')
@section("content")
<div class="container">
    <div class="row justify-content-center">
         <div class="card col-md-8 ml-auto mr-auto">
             <div class="card-header">
                  <h5 class="m-0">Lista de periodos activos</h5><br>
            </div>
              <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Fecha inicial</th>
                          <th scope="col">Fecha final</th>
                          <th scope="col">Hora inicial</th>
                          <th scope="col">Hora final</th>
                          <th scope="col">Periodo minimo (minutos)</th>
                          <th scope="col">Borrar</th>
                        </tr>
                      </thead>
                      <tbody id="activoTable">
                        <tr>
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
                        </tr>
                        <tr>
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
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
              </table>
              <ul id="activoPaginator" class="pagination ml-auto mr-auto"></ul>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{url('public/assets/js/ajaxActivo.js')}}">
</script>
@endsection
