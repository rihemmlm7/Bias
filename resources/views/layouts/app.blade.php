<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DZBias</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @vite('resources/css/app.css')

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



  <style>
    .scrolling-section {
      overflow-x: hidden; 
      overflow-y: auto; 
      white-space: nowrap; 
      padding: 5px; 
      display: flex; 
      
    }

    .scrolling-section .card {
      min-width: 300px;
      margin-right: 10px; 
    }

    .grid {
      flex: 1; 
    }

    @media (max-width: 1223px) {
      .scrolling-section {
        overflow-x: auto; 
        overflow-y: hidden; 
      }
    }

    table {
    width: 100%;
    border-collapse: collapse;
  }

  table th, table td {
    padding: 10px; 
    border-bottom: 1px solid #ccc;
  }

  table th {
    text-align: left;
    background-color: #f7f7f7;
  }

  table tr:last-child td {
    border-bottom: none;
  }
  </style>
</head>

<body class="bg-gray-100">

  <div class="min-h-screen flex flex-col lg:flex-row  overflow-hidden">
    <aside class="bg-bleu text-white w-full lg:w-1/6 p-4">
      <h1 class="text-2xl font-bold">DZBias</h1>
      <nav class="mt-6">
        <ul>
          <li class="mb-2"><a href="#" class="block p-2 bg-gray-700 rounded">1</a></li>
          <li class="mb-2"><a href="#" class="block p-2 bg-gray-700 rounded">2</a></li>
          <li class="mb-2"><a href="#" class="block p-2 bg-gray-700 rounded">3</a></li>
        </ul>
      </nav>
    </aside>
    <main class="flex-2 bg-gray-100 p-1 overflow-x-auto w-full m-6">
      <div class="scrolling-section w-full space-x-2">
        <div class="  ">
        @php
              use Carbon\Carbon;
        @endphp
          @include('components.tank', [
                  'type' => 'Diesel',
                  'volume' => '40000',
                  'dimensions' => '1467',
                  'percentage' => 10,
                  'last_sync' => Carbon::parse('2024-05-23 18:16')->format('d-m-Y H:i'),
                  'alert_message' => 'Alerte rupture de stock',
                  'water_color' => '#FF0000, #FF8080', // gradient from red to light red
          ])
        </div>
        <div class=" p-0 rounded">
        @include('components.tank', [
'type' => 'Diesel',
'volume' => '40000',
'dimensions' => '1467',
'percentage' => 40,
'last_sync' => Carbon::parse('2024-05-23 18:16')->format('d-m-Y H:i'),
'alert_message' => '',
'water_color' => ' #E6AC10, #FFECB9', // gradient from yellow to light yellow
])
        </div>
        <div class="p-0 rounded">
        @include('components.tank', [
'type' => 'Diesel',
'volume' => '40000',
'dimensions' => '1467',
'percentage' => 10,
'last_sync' => Carbon::parse('2024-05-23 18:16')->format('d-m-Y H:i'),
'alert_message' => 'Alerte rupture de stock',
'water_color' => '#FF0000, #FF8080', // gradient from red to light red
])
        </div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-3 mb-3 mt-4">
        <div class="lg:col-span-2">
          <div class="bg-white shadow p-4 rounded-xl mb-4">Chart</div>
          <div class=" bg-white shadow p-2  mb-4 rounded-xl overflow-x-auto">
          @include('components.table', [
    'date' => '25.05.2024',
    'volume' => '2500',
    'fuel_type' => '1080',
    'hour' => '07:00',
    'status' => '40'
  ])
          </div>
        </div>
        <div class="bg-white shadow p-4 rounded-xl lg:col-span-2 mb-4">
        @include('components.facture')
        </div>
      </div>
    </main>
  </div>

</body>

</html>
