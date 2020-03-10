(function () {

    /* global jQuery */
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
    
     genericAjax('rellenarUser',null,'get',function(res, pagenumber, history = true){
        var tabla = jQuery('#userTable');
        var users = res.user.data;
        tabla.empty();
        tabla.append(getUserTr(res.authenticated, users));
        
        jQuery('#deleteuserbutton').on('click', function() {
            var clase = this.className.split('-');
            console.log(clase);
            userAjax('borrarUser',{id:clase[clase.length-1]},function(){
            console.log('borrando user');
            });
        });    
        
        jQuery('#userPaginator').empty();
        jQuery('#userPaginator').append(getPaginator(res.user));
    });
    
    var requestUser = function(pagenumber, history = true){
        genericAjax('rellenarUser', { page: pagenumber }, 'get', function(res, pagenumber, history = true) {
          jQuery('#userTable').empty();
          jQuery('#userPaginator').empty();
          
          jQuery('#userTable').append(getUserTr(res.authenticated,res.user.data));
          jQuery('#userPaginator').append(getPaginator(res.user));
          
        jQuery('*#deleteuserbutton').on('click', function() {
            var clase = this.className.split('-');
            console.log(clase);
            userAjax('borraruser',{id:clase[clase.length-1]},function(){
            console.log('borrando user');
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
    
    jQuery('#userPaginator').on('click', '.active-page', function(event) {
        event.preventDefault();
        console.log(jQuery(this).attr('data-page'));
        var page = jQuery(this).attr('data-page');
        requestUser(page);
    });

    var getUserTr = function(authenticated, items) {
        var content='';
        items.forEach(function(item, index){
            content += '<tr>';
            content += '<td>' + item.id + '</td>';
            content += '<td>' + item.name + '</td>';
            content += '<td>' + item.email + '</td>';
            content += '<td>' + item.tipo + '</td>';
            if(authenticated) {
                content += '<td id="deleteuserbutton" class="delete-' + item.id +'">delete</td>';
            }
            content += '</tr>';            
        })
        return content;
    };
    
    // data {nacho:1,miguel:2};
    var userAjax = function (ruta,data,nachoCallBack){
        genericAjax('token',null,'get',function(res){
            data._token = res.token;
            // data {nacho:1,miguel:2,_token:92568925958}
          genericAjax(ruta,data,'post',nachoCallBack);
        });
        genericAjax('rellenaruser',null,'get',function(res){
        jQuery('#userTable').empty();
        jQuery('#userPaginator').empty();
        jQuery('#userTable').append(getUserTr(res.authenticated,res.user.data));
        jQuery('#userPaginator').append(getPaginator(res.user));
        });
    };
    
})();

   