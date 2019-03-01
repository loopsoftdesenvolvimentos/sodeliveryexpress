// 1 grafico -- EMPRESAS
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

 function drawChart() {
   let data = google.visualization.arrayToDataTable([
     ['Empresas Novas', 'Empresas Existentes'],
     ['Empresas Novas',     1],
     ['Empresas Existentes',     1]
   ]);
   let options = {
     title: 'Empresas novas por Empresas existentes',
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


// 2 grafico -- VEÍCULOS

 google.charts.load('current', {'packages':['corechart']});
 google.charts.setOnLoadCallback(drawChart2);

  function drawChart2() {
    let data = google.visualization.arrayToDataTable([
      ['Veículos Novas', 'Veículos Existentes'],
      ['Veículos Novas',     1],
      ['Veículos Existentes',     1]
    ]);
    let options = {
      title: 'Veículos novas por Veículos existentes',
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
  data.addColumn('string', 'Mês');
  data.addColumn('number', 'Fretes Cadastrados');

  data.addRows([
    ['Janeiro', 0],
    ['Fevereiro', 10],
    ['Março', 8],
    ['Abril', 10],
    ['Maio', 2],
    ['Junho', 30],
    ['Julho', 70],
    ['Agosto', 100],
    ['Setembro', 50],
    ['Novembro', 80],
    ['Dezembro', 45],
  ]);

  var options = {
    title: 'Evolução dos cadastrados de fretes dentro de 1 ano',
    colors: ['#ff3334'],
    annotations: {
      alwaysOutside: true,
      textStyle: {
        fontSize: 14,
        color: '#000',
        auraColor: 'none'
      }
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
  data.addColumn('string', 'Mês');
  data.addColumn('number', 'Veículos Cadastrados');

  data.addRows([
    ['Janeiro', 0],
    ['Fevereiro', 10],
    ['Março', 8],
    ['Abril', 10],
    ['Maio', 2],
    ['Junho', 30],
    ['Julho', 70],
    ['Agosto', 100],
    ['Setembro', 50],
    ['Novembro', 80],
    ['Dezembro', 45],
  ]);

  var options = {
    title: 'Evolução dos cadastrados de veículos dentro de 1 ano',
    colors: ['#ff3334'],
    annotations: {
      alwaysOutside: true,
      textStyle: {
        fontSize: 14,
        color: '#000',
        auraColor: 'none'
      }
    }
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('estatistica_veiculo'));
  chart.draw(data, options);
}
