// grafico -- barra
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawEstatistica);

function drawEstatistica() {
  var data = new google.visualization.DataTable();
  // data.addColumn('date', 'Season Start Date');
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
    title: 'Quantidade de fretes cadastrados dentro de 1 ano',
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

  var chart = new google.visualization.ColumnChart(document.getElementById('estatisticas_empresariais'));
  chart.draw(data, options);
}
