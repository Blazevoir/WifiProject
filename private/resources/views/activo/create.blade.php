@extends('main')
@section('content')
<div class="card col-md-8 ml-auto mr-auto">
    <div class="card-header">
       <h5 class="m-0">Crear periodo activo</h5><br>
       <form method="POST" action="{{url('activo')}}">
          @csrf
          <div class="row">
             <div class="col-md-6">
                <div class="form-group">
            @error('fechainicial')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror                    
             <input type="date" name="fechainicial" class="form-control" placeholder="fechainicial" />
                </div>
             </div>
             <div class="col-md-6">
                <div class="form-group">
            @error('fechafinal')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror                       
                   <input type="date" name="fechafinal" class="form-control" placeholder="fechafinal" />
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-4">
                <div class="form-group">
            @error('horainicial')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror                       
                   <input type="time" name="horainicial" class="form-control" step=1 placeholder="horainicial"/>
                </div>
             </div>
             <div class="col-md-4">
                <div class="form-group">
            @error('horafinal')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror                       
                   <input type="time" name="horafinal" class="form-control" step=1 placeholder="horafinal"/>
                </div>
             </div>
             <div class="col-md-4">
                <div class="form-group">
            @error('periodominimo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror                       
                   <input type="number" name="periodominimo" class="form-control" placeholder="Periodo minimo"/>
                </div>
             </div>             
          </div>
          <div class="form-group">
             <input class="btn btn-primary" type="submit" />
          </div>
       </form>
    
 </div>
</div>
@endsection