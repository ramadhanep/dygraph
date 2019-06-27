var d_category_1 = $('#d_category_1').html();
var d_category_2 = $('#d_category_2').html();
var d_category_3 = $('#d_category_3').html();
var d_category_4 = $('#d_category_4').html();
var d_category_5 = $('#d_category_5').html();
var d_category_6 = $('#d_category_6').html();
var d_category_7 = $('#d_category_7').html();

var d_count_1 = $('#d_count_1').html();
var d_count_2 = $('#d_count_2').html();
var d_count_3 = $('#d_count_3').html();
var d_count_4 = $('#d_count_4').html();
var d_count_5 = $('#d_count_5').html();
var d_count_6 = $('#d_count_6').html();
var d_count_7 = $('#d_count_7').html();

var ctx = document.getElementById("myChart3").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [
        d_count_1,
        d_count_2,
        d_count_3,
        d_count_4,
        d_count_5,
        d_count_6,
        d_count_7,
      ],
      backgroundColor: [
        '#3abaf4',
        '#63ed7a',
        '#ffa426',
        '#dc3545',
        '#6777ef',
        '#f5365c',
        '#FF0000',
      ],
      label: 'Dataset 1'
    }],
    labels: [
      d_category_1,
      d_category_2,
      d_category_3,
      d_category_4,
      d_category_5,
      d_category_6,
      d_category_7,
    ],
  },
  options: {
    responsive: true,
    legend: {
      position: 'bottom',
    },
  }
});




var r_month_1 = $('#r_month_1').html();
var r_month_2 = $('#r_month_2').html();
var r_month_3 = $('#r_month_3').html();
var r_month_4 = $('#r_month_4').html();
var r_month_5 = $('#r_month_5').html();
var r_month_6 = $('#r_month_6').html();
var r_month_7 = $('#r_month_7').html();


var r_count_1 = $('#r_count_1').html();
var r_count_2 = $('#r_count_2').html();
var r_count_3 = $('#r_count_3').html();
var r_count_4 = $('#r_count_4').html();
var r_count_5 = $('#r_count_5').html();
var r_count_6 = $('#r_count_6').html();
var r_count_7 = $('#r_count_7').html();

var statistics_chart = document.getElementById("myChart").getContext('2d');

var myChart = new Chart(statistics_chart, {
type: 'line',
data: {
    labels: [r_month_1, r_month_2, r_month_3, r_month_4, r_month_5, r_month_6, r_month_7],
    datasets: [{
    label: 'Total',
    data: [r_count_1, r_count_2, r_count_3, r_count_4, r_count_5, r_count_6, r_count_7],
    borderWidth: 5,
    borderColor: '#faab1a',
    backgroundColor: 'transparent',
    pointBackgroundColor: '#fff',
    pointBorderColor: '#faab1a',
    pointRadius: 4
    }]
},
options: {
    legend: {
    display: false
    },
    scales: {
    yAxes: [{
        gridLines: {
        display: false,
        drawBorder: false,
        },
        ticks: {
        stepSize: 150
        }
    }],
    xAxes: [{
        gridLines: {
        color: '#fbfbfb',
        lineWidth: 2
        }
    }]
    },
}
});