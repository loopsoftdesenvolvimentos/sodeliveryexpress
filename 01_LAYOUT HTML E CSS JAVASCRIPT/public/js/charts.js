// class creatorChart {
//   constructor(type, data, options, container) {
//     this.type = type;
//     this.data = data;
//     this.options = options;
//     this.container = container;
//   }
//   load(){
//   }
//   drawChart(){
//     google.charts.load('current', {'packages':['corechart', this.type]});
//     google.charts.setOnLoadCallback(this.drawChart());
//     let data =  google.visualization.arrayToDataTable(this.data);
//     // if (this.type == '') {
//       let chart = new google.visualization.PieChart(document.getElementById(this.container));
//     // }else{
//       // let chart = new google.visualization.ColumnChart(document.getElementById(this.container));
//     // }
//     chart.draw(data, this.options);
//   }
// }
// let dataUser = [
//   ['Usuário Online', 'Usuário Ofline'],
//   ['Usuário Online',     5],
//   ['Usuário Ofline',     5]
// ];
// let optionsUser = {
//   colors: ['#9dbbff', '#ff3334'],
//   annotations: {
//     textStyle: {
//       fontName: 'Raleway',
//       fontSize: 18,
//     }
//   }
// };
// var criadorGrafico = new creatorChart('',dataUser, optionsUser, '#estatistica_usuario').load();
// // var criadorGrafico = new creatorChart('',dataUser, optionsUser, '#estatistica_vendas').load();


// 1 grafico -- pizza
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

 function drawChart() {
   let data = google.visualization.arrayToDataTable([
     ['Usuário Online', 'Usuário Ofline'],
     ['Usuário Online',     5],
     ['Usuário Ofline',     5]
   ]);
   let options = {
     colors: ['#9dbbff', '#ff3334'],
     annotations: {
       textStyle: {
         fontName: 'Raleway',
         fontSize: 18,
       }
     }
   };
   var chart = new google.visualization.PieChart(document.getElementById('estatistica_usuario'));

  chart.draw(data, options);
 }


// 2 grafico -- pizza

 google.charts.load('current', {'packages':['corechart']});
 google.charts.setOnLoadCallback(drawChart2);

  function drawChart2() {
    let data = google.visualization.arrayToDataTable([
      ['Usuário Online', 'Usuário Ofline'],
      ['Usuário Online',     5],
      ['Usuário Ofline',     5]
    ]);
    let options = {
      colors: ['#9dbbff', '#ff3334'],
      annotations: {
        textStyle: {
          fontName: 'Raleway',
          fontSize: 18,
        }
      }
    };
    var chart = new google.visualization.PieChart(document.getElementById('estatistica_vendas'));
   chart.draw(data, options);
  }

// 3 grafico -- barra
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAnnotations);

function drawAnnotations() {
  var data = new google.visualization.DataTable();
  data.addColumn('timeofday', 'Time of Day');
  data.addColumn('number', 'Motivation Level');
  data.addColumn({type: 'string', role: 'annotation'});
  data.addColumn('number', 'Energy Level');
  data.addColumn({type: 'string', role: 'annotation'});

  data.addRows([
    [{v: [8, 0, 0], f: '8 am'},   1, '1',  .25, '.2'],
    [{v: [9, 0, 0], f: '9 am'},   2, '2',   .5, '.5'],
    [{v: [10, 0, 0], f:'10 am'},  3, '3',    1,  '1'],
    [{v: [11, 0, 0], f: '11 am'}, 4, '4', 2.25,  '2'],
    [{v: [12, 0, 0], f: '12 pm'}, 5, '5', 2.25,  '2'],
    [{v: [13, 0, 0], f: '1 pm'},  6, '6',    3,  '3'],
    [{v: [14, 0, 0], f: '2 pm'},  7, '7', 3.25,  '3'],
    [{v: [15, 0, 0], f: '3 pm'},  8, '8',    5,  '5'],
    [{v: [16, 0, 0], f: '4 pm'},  9, '9',  6.5,  '6'],
    [{v: [17, 0, 0], f: '5 pm'}, 10, '10',  10, '10'],
  ]);

  var options = {
    title: 'Motivation and Energy Level Throughout the Day',
    colors: ['#9dbbff', '#ff3334'],
    annotations: {
      alwaysOutside: true,
      textStyle: {
        fontSize: 14,
        color: '#000',
        auraColor: 'none'
      }
    },
    hAxis: {
      title: 'Time of Day',
      format: 'h:mm a',
      viewWindow: {
        min: [7, 30, 0],
        max: [17, 30, 0]
      }
    },
    vAxis: {
      title: 'Rating (scale of 1-10)'
    }
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('estatistica_carga'));
  chart.draw(data, options);
}

// 4 grafico -- barra
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAnnotations2);

function drawAnnotations2() {
  var data = new google.visualization.DataTable();
  data.addColumn('timeofday', 'Time of Day');
  data.addColumn('number', 'Motivation Level');
  data.addColumn({type: 'string', role: 'annotation'});
  data.addColumn('number', 'Energy Level');
  data.addColumn({type: 'string', role: 'annotation'});

  data.addRows([
    [{v: [8, 0, 0], f: '8 am'},   1, '1',  .25, '.2'],
    [{v: [9, 0, 0], f: '9 am'},   2, '2',   .5, '.5'],
    [{v: [10, 0, 0], f:'10 am'},  3, '3',    1,  '1'],
    [{v: [11, 0, 0], f: '11 am'}, 4, '4', 2.25,  '2'],
    [{v: [12, 0, 0], f: '12 pm'}, 5, '5', 2.25,  '2'],
    [{v: [13, 0, 0], f: '1 pm'},  6, '6',    3,  '3'],
    [{v: [14, 0, 0], f: '2 pm'},  7, '7', 3.25,  '3'],
    [{v: [15, 0, 0], f: '3 pm'},  8, '8',    5,  '5'],
    [{v: [16, 0, 0], f: '4 pm'},  9, '9',  6.5,  '6'],
    [{v: [17, 0, 0], f: '5 pm'}, 10, '10',  10, '10'],
  ]);

  var options = {
    title: 'Motivation and Energy Level Throughout the Day',
    colors: ['#9dbbff', '#ff3334'],
    annotations: {
      alwaysOutside: true,
      textStyle: {
        fontSize: 14,
        color: '#000',
        auraColor: 'none'
      }
    },
    hAxis: {
      title: 'Time of Day',
      format: 'h:mm a',
      viewWindow: {
        min: [7, 30, 0],
        max: [17, 30, 0]
      }
    },
    vAxis: {
      title: 'Rating (scale of 1-10)'
    }
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('estatistica_veiculo'));
  chart.draw(data, options);
}


// 5 grafico -- pizza
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart55);

 function drawChart55() {
   let data = google.visualization.arrayToDataTable([
     ['Usuário Online', 'Usuário Ofline'],
     ['Usuário Online',     5],
     ['Usuário Ofline',     5]
   ]);
   let options = {
     colors: ['#9dbbff', '#ff3334'],
     annotations: {
       textStyle: {
         fontName: 'Raleway',
         fontSize: 18,
       }
     }
   };
   var chart = new google.visualization.PieChart(document.getElementById('footer_estatistica'));

  chart.draw(data, options);
 }
