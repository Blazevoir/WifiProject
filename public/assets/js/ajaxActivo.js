(function () {

    /* global $ */
    var genericAjax = function (url, data, type, callBack) {
        jQuery.ajax({
            url: url,
            data: data,
            type: type,
            dataType : 'json',
        })
        .done(function( json ) {
            console.log('ajax done');
            console.log(json);
            callBack(json);
        })
        .fail(function( xhr, status, errorThrown ) {
            console.log('ajax fail');
            console.log(xhr.responseJSON.message);
        })
        .always(function( xhr, status ) {
            console.log('ajax always');
        });
    };

    var getPageLink = function(page) {
        return `<li class="page-item">
            <a class="page-link active-page" data-page="${page}" href="#">${page}</a>
        </li>`;
    }

    var getPaginator = function (data) {
        let previousOn = 
            `<li class="page-item"  aria-label="Â« Anterior">
                <a class="page-link active-page" href="#" data-page="${data.current_page-1}" rel="previous" aria-label="Anterior"><</a>
            </li>`;
        let previousOff = 
            `<li class="page-item disabled" aria-disabled="true" aria-label="Anterior">
                <span class="page-link" aria-hidden="true"><</span>
            </li>`;
        let nextOn =
            `<li class="page-item">
                <a class="page-link active-page" data-page="${data.current_page+1}" href="#" rel="next" aria-label="Siguiente">></a>
            </li>`;
        let nextOff =
            `<li class="page-item disabled" aria-disabled="true" aria-label="Siguiente">
                <span class="page-link" aria-hidden="true">></span>
            </li>`;
        let current = 
            `<li class="page-item active" aria-current="page">
                <span class="page-link">${data.current_page}</span>
            </li>`;
        let between =
            `<li class="page-item disabled" aria-disabled="true">
                <span class="page-link">...</span>
            </li>`;
            
        var result = '';
        if(data.current_page == 1){
            result += previousOff;
        } else {
            result += previousOn;
        }
        if(data.current_page > 2){
            result += between;
        } 
        
        for (var i = data.current_page-2; i <= data.current_page+2; i++ ){
            if( i < 1 ){
                
            } else if( i > data.last_page ){
                
            } else if( i == data.current_page ){
              result += current;
            } else{
                result += getPageLink(i);
            }
        }
        
        if(data.current_page < data.last_page-1){
            result += between;
        } 
        if(data.current_page == data.last_page){
            result += nextOff;
        } else {
            result += nextOn;
        }
        return result;
    }
    
    
    genericAjax('rellenarActivo',null,'get',function(res, pagenumber, history = true){
        var tabla = jQuery('#activoTable');
        var activos = res.activo.data;
        tabla.empty();
        tabla.append(getActivoTr(res.authenticated, activos));
        
        jQuery('#deleteactivobutton').on('click', function() {
            var clase = this.className.split('-');
            console.log(clase);
            activoAjax('borraractivo',{id:clase[clase.length-1]},function(){
            console.log('borrando activo');
            });
        });    
        
        jQuery('#activoPaginator').empty();
        jQuery('#activoPaginator').append(getPaginator(res.activo));

    });
    
    var requestActivo = function(pagenumber, history = true){
        genericAjax('rellenarActivo', { page: pagenumber }, 'get', function(res, pagenumber, history = true) {
          jQuery('#activoTable').empty();
          jQuery('#activoPaginator').empty();
          
          jQuery('#activoTable').append(getActivoTr(res.authenticated,res.activo.data));
          jQuery('#activoPaginator').append(getPaginator(res.activo));
          
        jQuery('*#deleteactivobutton').on('click', function() {
            var clase = this.className.split('-');
            console.log(clase);
            activoAjax('borraractivo',{id:clase[clase.length-1]},function(){
            console.log('borrando activo');
            });
        }); 

          if (res.authenticated) {
              jQuery("#userName").removeClass('d-none');
          } else {
              jQuery("#userName").addClass('d-none');
          }
          var csrf = res.csrf;
        });
    }
    
    jQuery('#activoPaginator').on('click', '.active-page', function(event) {
        event.preventDefault();
        console.log(jQuery(this).attr('data-page'));
        var page = jQuery(this).attr('data-page');
        requestActivo(page);
    });

    var getActivoTr = function(authenticated, items) {
        var content='';
        items.forEach(function(item, index){
            content += '<tr>';
            content += '<td>' + item.id + '</td>';
            content += '<td>' + item.fechainicial + '</td>';
            content += '<td>' + item.fechafinal + '</td>';
            content += '<td>' + item.horainicial + '</td>';
            content += '<td>' + item.horafinal + '</td>';
            content += '<td>' + item.periodominimo + '</td>';
            if(authenticated) {
                content += '<td id="deleteactivobutton" class="delete-' + item.id +'">Borrar</td>';
            }
            content += '</tr>';            
        })
        return content;
    };
    
    var activoAjax = function (ruta,data,nachoCallBack){
        genericAjax('token',null,'get',function(res){
            data._token = res.token;
          genericAjax(ruta,data,'post',nachoCallBack);
        });
        genericAjax('rellenaractivo',null,'get',function(res){
        jQuery('#activoTable').empty();
        jQuery('#activoPaginator').empty();
        jQuery('#activoTable').append(getActivoTr(res.authenticated,res.activo.data));
        jQuery('#activoPaginator').append(getPaginator(res.activo));
        });
    };
    
})();