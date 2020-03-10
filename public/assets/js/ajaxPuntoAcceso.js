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

     genericAjax('rellenarPuntoAcceso',null,'get',function(res, pagenumber, history = true){
        var tabla = jQuery('#puntoAccesoTable');
        var puntos = res.puntoAcceso.data;
        tabla.empty();
        tabla.append(getPuntoAccesoTr(res.authenticated, puntos));
        
        jQuery('#deletepuntoAccesobutton').on('click', function() {
            var clase = this.className.split('-');
            puntoAccesoAjax('borrarpuntoAcceso',{id:clase[clase.length-1]},function(){
            console.log('borrando puntoAcceso');
            });
        });    
        jQuery('#puntoAccesoPaginator').empty();
        jQuery('#puntoAccesoPaginator').append(getPaginator(res.puntoAcceso));
    });

    
    var requestPuntoAcceso = function(pagenumber, history = true){
        genericAjax('rellenarPuntoAcceso', { page: pagenumber }, 'get', function(res, pagenumber, history = true) {
          jQuery('#puntoAccesoTable').empty();
          jQuery('#puntoAccesoPaginator').empty();
          
          jQuery('#puntoAccesoTable').append(getPuntoAccesoTr(res.authenticated,res.puntoAcceso.data));
          jQuery('#puntoAccesoPaginator').append(getPaginator(res.puntoAcceso));
          
        jQuery('*#deleteactivobutton').on('click', function() {
            var clase = this.className.split('-');
            puntoAccesoAjax('borrarpuntoAcceso',{id:clase[clase.length-1]},function(){
            console.log('borrando puntoAcceso');
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
    
    jQuery('#puntoAccesoPaginator').on('click', '.active-page', function(event) {
        event.preventDefault();
        console.log(jQuery(this).attr('data-page'));
        var page = jQuery(this).attr('data-page');
        requestPuntoAcceso(page);
    });

    var getPuntoAccesoTr = function(authenticated, items) {
        var content='';
        items.forEach(function(item, index){
            content += '<tr>';
            content += '<td>' + item.id + '</td>';
            content += '<td>' + item.iduser + '</td>';
            content += '<td>' + item.modelo + '</td>';
            content += '<td>' + item.ubicacion + '</td>';
            content += '<td>' + item.latitud + '</td>';
            content += '<td>' + item.longitud + '</td>';
            content += '<td>' + item.fechaalta + '</td>';
            if(authenticated) {
                content += '<td id="deletepuntoaccesobutton" class="delete-' + item.id +' ">Borrar</td>';
            }
            content += '</tr>';            
        })
        return content;
    };
    
    var puntoAccesoAjax = function (ruta,data,nachoCallBack){
        genericAjax('token',null,'get',function(res){
            data._token = res.token;
          genericAjax(ruta,data,'post',nachoCallBack);
        });
        
        genericAjax('rellenarpuntoAcceso',null,'get',function(res){
            jQuery('#puntoAccesoTable').empty();
            jQuery('#puntoAccesoPaginator').empty();
            jQuery('#puntoAccesoTable').append(getPuntoAccesoTr(res.authenticated,res.puntoAcceso.data));
            jQuery('#puntoAccesoPaginator').append(getPaginator(res.puntoAcceso));
        });
    };
})();