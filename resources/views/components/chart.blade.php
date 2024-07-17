<style>
  #myChart {
    width: 100px; /* Adjust width here */
    height: 100px; /* Adjust height here */
  }

  canvas {
    background-color: transparent;
  }
</style>
<div class="flex space-x-11 mb-2 mr-20 ml-20 items-center">
  <button id="btn-24h" class="pr-1 pl-1  rounded h-5 text-xs">24H</button>
  <button id="btn-1w" class="pr-1 pl-1  rounded h-5 text-xs">1 Week</button>
  <button id="btn-1m" class="pr-1 pl-1  rounded h-5 text-xs">1 Month</button>
  <button id="btn-1y" class="pr-1 pl-1  rounded h-5 text-xs">1 Year</button>
</div>
<canvas id="myChart" width="800" height="250"></canvas>

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
            // This case happens on initial chart load
            return null;
          }
          return createGradient(ctx, chartArea);
        },
        borderWidth: 3, // Adjust line width here
        fill: true,
        pointRadius: 0 // Remove points (markers)
      }]
    },
    options: {
      scales: {
        x: {
          beginAtZero: true,
          grid: {
            display: false // Hide vertical grid lines
          }
        },
        y: {
          min: 0,
          suggestedMin: 0,
          beginAtZero: true,
          grid: {
            display: true, // Show horizontal grid lines
            color: 'rgba(200, 200, 200, 0.5)' // Customize the color if needed
          },
          ticks: {
            callback: function(value) {
              return value.toFixed(2); // Customize tick labels if needed
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
      // Replace this with your actual data fetching logic
      // Here we just create some dummy data for demonstration
      let data;
      switch (range) {
        case '24h':
          data = { labels: ['0', '4', '8', '12', '16', '20', '24'], values: [12, 19, 3, 5, 2, 3, 10] };
          break;
        case '1w':
          data = { labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], values: [20, 15, 25, 30, 22, 18, 26] };
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

    // Initialize chart with default range
    fetchData('24h');
    updateButtonStyle('btn-24h');
  });
</script>
