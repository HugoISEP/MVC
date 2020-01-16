$(document).ready(function(){
  $.ajax({
    url: "./data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var date = [];
      var score = [];

      for(var i in data) {
        date.push(data[i].date_and_time);
        score.push(data[i].measure_value);
      }

      var chartdata = {
        labels: date,
        datasets : [
          {
            label: 'User Score',
            backgroundColor: 'rgba(41, 119, 196, 0.75)',
            borderColor: 'rgba(41, 119, 196, 0.75)',
            hoverBackgroundColor: 'rgba(41, 119, 196, 1)',
            hoverBorderColor: 'rgba(41, 119, 196, 1)',
            data: score
          }
        ]
      };

      var ctx = $("#mygraph");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});