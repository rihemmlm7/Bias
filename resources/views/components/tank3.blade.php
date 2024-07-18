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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Add Chart.js here -->
</head>

<style>
  /* Hide scrollbar for Chrome, Safari, and Opera */
  .bg-blue1::-webkit-scrollbar {
    display: none;
  }
</style>

<body class="bg-gray-100">
  <div class="min-h-screen flex flex-col lg:flex-row overflow-hidden">
    <!-- sidebar -->
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
    <!-- fin sidebar -->

    <main class="flex-2 bg-gray-100 p-1 overflow-x-auto Min-w-full m-1">
      <!-- cuve card -->
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
            'date' => Carbon::parse('2024-05-23')->format('d-m-Y '),
            'hour' => Carbon::parse('19:30')->format('H:i'),
            'alert_message' => 'Alerte rupture de stock',
            'water_color' => '#FF0000, #FF8080', // gradient from red to light red
          ])
        </div>
        <div class=" p-0 rounded">
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
        </div>
        <div class="p-0 rounded">
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
      </div>
      <!-- Fin cuve card -->

      <div class="grid grid-cols-1 lg:grid-cols-9 gap-3 m-2">
        <div class="col-span-1 lg:col-span-5">
          <div class="bg-white shadow p-4 rounded-xl mb-4">
            @include('components.chart')
          </div>

          <!-- Table -->
          <div class="bg-blue1 shadow p-2 mb-4 rounded-xl overflow-y-auto max-h-40">
            <table class="min-w-full divide-y divide-gray-200">
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
          <!-- Fin Table -->
        </div>

        <!-- Facture -->
        <div class="col-span-1 lg:col-span-4">
          <div class="bg-white shadow rounded-xl p-4 mb-4">
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
        <!-- Fin Facture -->
      </div>
    </main>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>