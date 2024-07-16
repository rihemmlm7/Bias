<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your App Title</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>

  </style>
</head>

<body>
  <div>
    <div class="flex flex-col ">

      <div class="flex overflow-x-scroll pb-10 hide-scroll-bar">
        <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10 ">
          <div class="inline-block px-3">
            @php
        $data = [
          'fuel_type' => 'Diesel',
          'volume' => '40000',
          'dimensions' => '1467',
          'percentage' => 10,
          'last_sync' => \Carbon\Carbon::parse('2024-05-23 18:16')->format('d-m-Y H:i'),
          'alert_message' => 'Alerte rupture de stock',
        ];
        @endphp
            @include('components.tank', ['data' => $data])
          </div>
          <div class="inline-block px-3">
            @php
        $data = [
          'fuel_type' => 'Diesel',
          'volume' => '40000',
          'dimensions' => '1467',
          'percentage' => 10,
          'last_sync' => \Carbon\Carbon::parse('2024-05-23 18:16')->format('d-m-Y H:i'),
          'alert_message' => 'Alerte rupture de stock',
        ];
        @endphp
            @include('components.tank2', ['data' => $data])
          </div>
          <div class="inline-block px-3">
            @php
        $data = [
          'fuel_type' => 'Diesel',
          'volume' => '40000',
          'dimensions' => '1467',
          'percentage' => 10,
          'last_sync' => \Carbon\Carbon::parse('2024-05-23 18:16')->format('d-m-Y H:i'),
          'alert_message' => 'Alerte rupture de stock',
        ];
        @endphp
            @include('components.tank3', ['data' => $data])
          </div>



        </div>
      </div>
    </div>
  </div>

  <style>
    .hide-scroll-bar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    .hide-scroll-bar::-webkit-scrollbar {
      display: none;
    }
  </style>




  <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>