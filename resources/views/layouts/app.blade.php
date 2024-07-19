<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DZBias</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    body {}

    .fixed-header {
      height: 145px;
      overflow-x: auto;
      overflow-y: hidden;
    }

    .main-content {
      flex: 1;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    .content-grid {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 8px;
      overflow-y: hidden;
    }

    @media (min-width: 768px) {
      .content-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 8px;
      }
    }

    .content-grid>div {
      overflow: hidden;
    }


    /* Hide scrollbar for Chrome, Safari, and Opera */
    .bg-blue1::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>

<body class="bg-gray-100">
  <div class="min-h-screen flex flex-col lg:flex-row overflow-hidden">
    <!-- Sidebar -->
    <aside class="bg-bleu text-white w-full lg:w-1/6 p-4">
      <h1 class="text-2xl font-bold">DZBias</h1>
      <nav class="mt-6">
        <ul>
          <li class="mb-2"><a href="#" class="block p-2 bg-gray-700 rounded">Link 1</a></li>
          <li class="mb-2"><a href="#" class="block p-2 bg-gray-700 rounded">Link 2</a></li>
          <li class="mb-2"><a href="#" class="block p-2 bg-gray-700 rounded">Link 3</a></li>
        </ul>
      </nav>
    </aside>
    <!-- End Sidebar -->

    <!-- Main Content -->
    <div class="main-content">
      <!-- Header -->
      <header class="fixed-header flex items-center">
        <div class="scrolling-section w-full space-x-2 flex overflow-x-auto">
          @php
          use Carbon\Carbon;
          @endphp

          @include('components.tank', [
          'type' => 'Diesel',
          'volume' => '40000',
          'dimensions' => '1467',
          'percentage' => 10,
          'date' => Carbon::parse('2024-05-23')->format('d-m-Y '),
          'hour' => Carbon::parse('19:30')->format('H:i'),
          'alert_message' => 'Alerte rupture de stock',
          'water_color' => '#FF0000, #FF8080',
          ])

          @include('components.tank', [
          'type' => 'Diesel',
          'volume' => '40000',
          'dimensions' => '1467',
          'percentage' => 60,
          'date' => Carbon::parse('2024-05-23')->format('d-m-Y '),
          'hour' => Carbon::parse('19:30')->format('H:i'),
          'alert_message' => '',
          'water_color' => '#E6AC10, #FFECB9',
          ])

          @include('components.tank', [
          'type' => 'Ess',
          'volume' => '40000',
          'dimensions' => '1467',
          'percentage' => 10,
          'date' => Carbon::parse('2024-05-23')->format('d-m-Y '),
          'hour' => Carbon::parse('19:30')->format('H:i'),
          'alert_message' => 'Alerte rupture de stock',
          'water_color' => '#E6AC10, #FFECB9',
          ])
        </div>
      </header>
      <!-- End Header -->

      <div class="content-grid m-2">
        <div class="col-span-1 row-span-1 row-start-1 col-start-1 bg-white shadow rounded-xl chart-container">
        @include('components.chart')
        </div>

        <div class="col-span-1 row-span-1 col-start-1 row-start-2 ">
          <div class="bg-blue1 shadow p-2 rounded-xl overflow-auto h-full">
            <table class="min-w-full divide-y overflow-auto divide-gray-200">
              <tbody class="bg-blue1 divide-y divide-gray-200 text-sm">
                @include('components.table', [
                'date' => '25.05.2024',
                'volume' => '2500',
                'dimensions' => '1080',
                'hour' => '07:00',
                'status' => '40'
                ])
                @include('components.table', [
                'date' => '25.05.2024',
                'volume' => '2500',
                'dimensions' => '1080',
                'hour' => '07:00',
                'status' => '40'
                ])
                @include('components.table', [
                'date' => '25.05.2024',
                'volume' => '2500',
                'dimensions' => '1080',
                'hour' => '07:00',
                'status' => '40'
                ])
                @include('components.table', [
                'date' => '25.05.2024',
                'volume' => '2500',
                'dimensions' => '1080',
                'hour' => '07:00',
                'status' => '40'
                ])
                @include('components.table', [
                'date' => '25.05.2024',
                'volume' => '2500',
                'dimensions' => '1080',
                'hour' => '07:00',
                'status' => '40'
                ])
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-span-1 row-span-1 col-start-2 row-start-1 row-end-3">
          <div class="bg-white shadow rounded-xl p-4 mb-4 h-full">
            @include('components.facture', [
            'date' => '25.05.2024',
            'volume' => '2500',
            'hour' => '07:00',
            'nv_litre' => '15000',
            'min' => '15000',
            'max' => '15000',
            'comnce_par' => '15000',
            'terminer' => '15000',
            'difirance' => '15000',
            'achat' => '15000',
            'vente' => '15000',
            'percentage' => 10,
            'water_color' => '#E6AC10, #FFECB9',
            ])
          </div>
        </div>
      </div>
    </div>
    <!-- End Main Content -->
  </div>


</body>

</html>
