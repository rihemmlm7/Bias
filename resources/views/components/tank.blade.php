<!-- resources/views/components/tank.blade.php -->
<link href="{{ asset('css/card-style.css') }}" rel="stylesheet">
<div class="card relative">
    <div class="header">
        <div class="header-content flex justify-between items-center w-full space-x-14">
            <div class="left flex space-x-2">
                <h1 class="card-title">{{ $type }}</h1>
                <p class="volume">{{ $volume }}L</p>
            </div>
            <div class="right flex space-x-1">
                <h1 class="card-title2">Dernier synchro</h1>
                <p class="volume2">{{ $date }}</p>
                <p class="volume2">{{ $hour }}</p>
            </div>
        </div>
        
        @if ($percentage < 50 && !empty($alert_message))
        <div class="alert flex items-center">
            <i class="fa fa-exclamation-triangle text-red" aria-hidden="true"></i>
            <p class="textalert font-thin text-red ml-1">{{ $alert_message}}</p>
        </div>
        @else
        <div class="alert2 flex items-center">
            <!-- You can add content here if needed -->
        </div>
        @endif
    </div>
    <!-- Pulse animation -->
    <div class="pulse"></div>

    <div class="tank-container">
        <div class="circle-tank"></div>
        <div class="vertical-line"></div>
        <div class="horizontal-line"></div>
        <div class="rectangle-border">
            <div class="text-xs font-semibold text-center text-gray-500">{{ $volume }} L</div>
            <div class="text-xs font-semibold text-center text-gray-500">{{ $dimensions }} cm</div>
        </div>

        <div class="tank">
            <div class="water"
            style="--water-height: {{ $percentage / 100 }}; background: linear-gradient(to top, {{ $water_color }});">

            </div>
            <div class="percentage-container">
                <div class="percentage">{{ $percentage }}%</div>
            </div>
        </div>
    </div>

    <div class="btn">
        <button class="btn-show-more justify-between items-center w-full flex space-x-2">
            <span class="text-xs font-semibold text-gray-900">Afficher plus</span>
            <i class="fa fa-caret-right gray-900" aria-hidden="true"></i>
        </button>
    </div>
</div>
