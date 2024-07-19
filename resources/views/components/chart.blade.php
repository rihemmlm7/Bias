<style>
  #myChart {
    width: 100%; /* Adjust width here */
    height: 100%; /* Adjust height here */
  }

  canvas {
    background-color: transparent;
  }

  .button-container {
    display: flex;
    justify-content: center;
    margin-bottom: 1rem; 
  }

  .button-container button {
    margin: 0 0.5rem; 
    padding: 0.25rem 0.5rem; 
    border-radius: 0.25rem; 
    height: 1.25rem; 
    font-size: 0.75rem; 
  }
</style>

<div class="button-container">
  <button id="btn-24h" class="rounded">24H</button>
  <button id="btn-1w" class="rounded">1 Week</button>
  <button id="btn-1m" class="rounded">1 Month</button>
  <button id="btn-1y" class="rounded">1 Year</button>
</div>
<canvas id="myChart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('myChart').getContext('2d');
    let chart;

    function createGradient(ctx, chartArea) {
      const gradient = ctx.createLinearGradient(0, 0, 0, chartArea.bottom);
      gradient.addColorStop(0, 'rgba(28, 100, 242, 0.55)');
      gradient.addColorStop(1, 'rgba(28, 100, 242, 0)');
      return gradient;
    }

    function createChart(data) {
      if (chart) {
        chart.destroy();
      }
      chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: data.labels,
          datasets: [{
            data: data.values,
            borderColor: '#0E64CB',
            backgroundColor: function (context) {
              const chart = context.chart;
              const { ctx, chartArea } = chart;

              if (!chartArea) {
                return null;
              }
              return createGradient(ctx, chartArea);
            },
            borderWidth: 3,
            fill: true,
            pointRadius: 0
          }]
        },
        options: {
          scales: {
            x: {
              beginAtZero: true,
              grid: {
                display: false
              }
            },
            y: {
              min: 0,
              suggestedMin: 0,
              beginAtZero: true,
              grid: {
                display: true,
                color: 'rgba(200, 200, 200, 0.5)'
              },
              ticks: {
                callback: function(value) {
                  return value.toFixed(0) + ' L';
                }
              }
            }
          },
          plugins: {
            legend: {
              display: false
            }
          }
        }
      });
    }

    function fetchData(range) {
      let data;
      switch (range) {
        case '24h':
          data = { labels: ['0', '4', '8', '12', '16', '20', '24'], values: [15000, 15000, 15000, 15000, 2, 3, 10] };
          break;
        case '1w':
          data = { labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], values: [15000, 15000, 15000, 15000, 15000, 18, 26] };
          break;
        case '1m':
          data = { labels: Array.from({ length: 30 }, (_, i) => i + 1), values: Array.from({ length: 30 }, () => Math.floor(Math.random() * 100)) };
          break;
        case '1y':
          data = { labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], values: Array.from({ length: 12 }, () => Math.floor(Math.random() * 100)) };
          break;
        default:
          data = { labels: [], values: [] };
      }
      createChart(data);
    }

    function updateButtonStyle(activeButtonId) {
      const buttons = ['btn-24h', 'btn-1w', 'btn-1m', 'btn-1y'];
      buttons.forEach(buttonId => {
        const button = document.getElementById(buttonId);
        if (buttonId === activeButtonId) {
          button.classList.add('bg-black', 'text-white');
        } else {
          button.classList.remove('bg-black', 'text-white');
        }
      });
    }

    document.getElementById('btn-24h').addEventListener('click', function() {
      fetchData('24h');
      updateButtonStyle('btn-24h');
    });
    document.getElementById('btn-1w').addEventListener('click', function() {
      fetchData('1w');
      updateButtonStyle('btn-1w');
    });
    document.getElementById('btn-1m').addEventListener('click', function() {
      fetchData('1m');
      updateButtonStyle('btn-1m');
    });
    document.getElementById('btn-1y').addEventListener('click', function() {
      fetchData('1y');
      updateButtonStyle('btn-1y');
    });

    fetchData('24h');
    updateButtonStyle('btn-24h');
  });
</script>
