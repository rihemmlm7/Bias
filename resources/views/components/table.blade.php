
  <table class="min-w-full divide-y divide-gray-200">

    <tbody class="bg-white divide-y divide-gray-200 text-sm">
      <!-- Replace with your dynamic rows -->
      <tr>
        <td class="px-5 py-4 whitespace-nowrap">
          <p class="text-gray-900">{{ $date }}</p>
          <p class="text-gray-600">{{ $volume }}L</p>
        </td>
        <td class="px-20 py-4 whitespace-nowrap">
          <p class="non-selectable-text">nothing</p>
          <p class="text-gray-600">{{ $fuel_type }}cm</p>
        </td>
        <td class="px-5 py-4 whitespace-nowrap text-right">
          <p class="text-gray-900">{{ $hour }}</p>
          <div class="inline-block bg-green-200 text-green-900 px-3 py-1 rounded-xl flex items-center justify-center">
            <p class="mr-2">{{ $status }}</p>
            <i class="fa fa-caret-up text-green-600 custom-icon" aria-hidden="true"></i>
          </div>
        </td>
      </tr>
      <!-- Repeat the above row structure for each dynamic row -->
    </tbody>
  </table>


<style>
  .custom-icon {
    font-size: 24px; /* Adjust the size as needed */
  }

  /* Optional: Hide horizontal scrollbar on smaller screens */
  @media (max-width: 640px) {
    .overflow-x-auto {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none; /* Firefox */
      -ms-overflow-style: none; /* IE 10+ */
    }
    .overflow-x-auto::-webkit-scrollbar {
      display: none; /* Safari and Chrome */
    }
  }
 
    .non-selectable-text {
      color: transparent;
      user-select: none;
    }

</style>