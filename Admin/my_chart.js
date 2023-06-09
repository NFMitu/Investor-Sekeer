const ctx = document.getElementById('myChart');
const investing = document.getElementById('invest');
const visits = document.getElementById('visits');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Investor', 'Entreprenure'],
      datasets: [{
        label: 'Ratio of Investor and Entreprenure',
        data: [12, 19],
        backgroundColor: [
          'rgb(243, 61, 60)',
          'rgb(127, 242, 61)'
          ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });

  new Chart(investing, {
     type: 'line',
    data: {
      labels: ['January', 'Fabruary', 'March'],
      datasets: [{
        label: 'Investing Rate Per Month',
        data: [1255, 1922,456],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)'
          ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });

  new Chart(visits, {
     type: 'bar',
    data: {
      labels: ['January', 'Fabruary', 'March'],
      datasets: [{
        label: 'Website Traffic Per Month',
        data: [1255, 1922,456],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)'
          ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });