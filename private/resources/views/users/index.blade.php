@extends('main')
@section("content")
<div class="container">
    <div class="row justify-content-center">
         <div class="card col-md-8 ml-auto mr-auto">
             <div class="card-header">
                  <h5 class="m-0">User list</h5><br>
            </div>
              <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Type</th>
                          <th scope="col">Borrar</th>
                        </tr>
                      </thead>
                      <tbody id="userTable">
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
              <ul id="userPaginator" class="pagination ml-auto mr-auto"></ul>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{url('public/assets/js/ajaxUser.js')}}">
</script>
@endsection
