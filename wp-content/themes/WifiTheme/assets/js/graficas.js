function graficas (CpuntosAcceso,Cfechas,Cmonths,Cmacs,Clocations) {
    
    var nConexiones=[];
    
    var puntosDeAcceso = Object.keys(CpuntosAcceso);

    for(a=0 ; a<puntosDeAcceso.length; a++) {
        nConexiones.push(CpuntosAcceso[puntosDeAcceso[a]].length);
    }
    
    if(document.getElementById('myChart0') !== null){
        var ctx = document.getElementById('myChart0').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: puntosDeAcceso,
                datasets: [{
                    label: 'Connections per access point',
                    data: nConexiones,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }
    // Conexiones por dia
    var nConexiones=[];
    var fechas = Object.keys(Cfechas);
    
        for(a=0 ; a<fechas.length; a++) {
        nConexiones.push(Cfechas[fechas[a]].length);
    }
  
 if(document.getElementById('myChart1') !== null){            
        var ctx = document.getElementById('myChart1').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: fechas,
                datasets: [{
                    label: 'Connections per day (last 16 days)',
                    data: nConexiones,
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive:true,
                 maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            maxTicksLimit: 20,
                        }
                    }],
                    xAxes: [{
                            
                            ticks: {
                                autoSkip: true,
                                maxTicksLimit: 25
                            }
                        }]
                }
            }
        });
        
 }
 
 
    var nConexiones=[];
    var meses = Object.keys(Cmonths);
    for(a=0 ; a<meses.length; a++) {
        nConexiones.push(Cmonths[meses[a]].length);
    }
  
 if(document.getElementById('myChart2') !== null){            
        var ctx = document.getElementById('myChart2').getContext('2d');
        var arrayMeses = ['January','February','March','April','May','June','July','August','September','October','November','December'];
        var realMonths = [];
        
        for(a=0 ; a<meses.length; a++) {
            realMonths.push(arrayMeses[meses[a]-1]);
        }
        
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: realMonths,
                datasets: [{
                    label: 'Connections per month (2020)',
                    data: nConexiones,
                    backgroundColor: [
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive:true,
                 maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            maxTicksLimit: 20,
                        }
                    }],
                    xAxes: [{
                            
                            ticks: {
                                autoSkip: true,
                                maxTicksLimit: 25
                            }
                        }]
                }
            }
        });        
 }        
 
    var nConexiones=[];
    var macs = [];
    for(a=0 ; a<Cmacs.length; a++) {
        macs.push(Cmacs[a].mac);
    }
    for(a=0 ; a<Cmacs.length; a++) {
        nConexiones.push(Cmacs[a].nmac);
    }
  if(document.getElementById('myChart3') !== null){            
        var ctx = document.getElementById('myChart3').getContext('2d');
        
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: macs,
                datasets: [{
                    label: 'Connections per MAC',
                    data: nConexiones,
                    backgroundColor: [
                         'rgba(75, 192, 192, 0.2)',
                    ],
                    borderColor: [
                         'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive:true,
                 maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            maxTicksLimit: 10,
                        }
                    }],
                    xAxes: [{
                            
                            ticks: {
                                autoSkip: true,
                                maxTicksLimit: 10
                            }
                        }]
                }
            }
        });        
 }  
 
    var nConexiones=[];
    var locations = [];
    for(a=0 ; a<Clocations.length; a++) {
        locations.push(Clocations[a].ubicacion);
    }
    console.log(Clocations);
    for(a=0 ; a<Clocations.length; a++) {
        nConexiones.push(Clocations[a].npa);
    }
  if(document.getElementById('myChart4') !== null){            
        var ctx = document.getElementById('myChart4').getContext('2d');
        
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: locations,
                datasets: [{
                    label: 'Connections per location',
                    data: nConexiones,
                    backgroundColor: [
                         'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                         'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive:true,
                 maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            maxTicksLimit: 10,
                        }
                    }],
                    xAxes: [{
                            
                            ticks: {
                                autoSkip: true,
                                maxTicksLimit: 10
                            }
                        }]
                }
            }
        });        
 }  
        
       
}


