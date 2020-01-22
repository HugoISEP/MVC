$(document).ready(function(){
  $.ajax({
    url: "http://localhost/MVC/view/data.php",
    method: "GET",
    fonctionGraph: function(data) {
      console.log(data);
      var date = [];
      var score = [];

      for(var i in data) {
        date.push(data[i].date_and_time);
        score.push(data[i].measure_value);
      }

      var contenuGraph = {
        labels: date,
        datasets : [
          {
            label: 'User Score',
            backgroundColor: 'rgba(41, 119, 196, 0.75)',
            borderColor: 'rgba(41, 119, 196, 0.75)',
            hoverBorderColor: 'rgba(41, 119, 196, 1)',
            data: score
          }
        ]
      };

      var ctx = $("#graphique");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: contenuGraph
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});