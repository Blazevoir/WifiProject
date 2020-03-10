@extends('main')
@section("content")
   <div class="card col-md-8 ml-auto mr-auto">
      <div class="card-header">
         <h5 class="m-0">Crear Punto de acceso</h5><br>

         <form method="post" action="{{url('puntoacceso')}}">
            @csrf
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     @error('iduser')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror                      
                     <select class="form-control" name="iduser">
                     <option value="-1">Selecciona el tecnico</option>
                           @foreach ($users as $user)
                            <option value="{{ $user->id }}"> ID User -> {{ $user->id }}  -> {{ $user->name }} </option>
                           @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     @error('modelo')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror                        
                     <input type="text" name="modelo" class="form-control" placeholder="Modelo" value="{{ old('modelo') }}">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     @error('ubicacion')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror                        
                     <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación" value="{{ old('ubicacion') }}">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     @error('latitud')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror                        
                     <input type="text" name="latitud" class="form-control" placeholder="Latitud" value="{{ old('latitud') }}">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     @error('longitud')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror                        
                     <input type="text" name="longitud" class="form-control" placeholder="Longitud" value="{{ old('longitud') }}">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     @error('fechaalta')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror                        
                     <input type="date" name="fechaalta" class="form-control"  placeholder="fechaalta" value="{{ old('fechaalta') }}">
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