<tr>
  <td class="px-5 py-2 whitespace-nowrap">
    <p class="text-gr text-xs font-light mb-3">{{ $date }}</p>
    <p class="text-gr text-xs font-light">{{ $volume }}L</p>
  </td>
  <td class="px-20 py-2 whitespace-nowrap">
    <p class="non-selectable-text mb-3 text-white text-xs font-light">nothing</p>
    <p class="text-gr text-xs font-light">{{ $dimensions }}cm</p>
  </td>
  <td class="px-5 py-2 whitespace-nowrap text-right">
    <p class="text-gr text-xs font-light mr-2 mb-3">{{ $hour }}</p>
    <div class="inline-block bg-green-200 text-green-900 px-1 py-0 rounded flex items-center justify-center">
      <p class="mr-2 text-green-900 text-xs font-light">{{ $status }}</p>
      <i class="fa fa-caret-up text-green-600 custom-icon" aria-hidden="true"></i>
    </div>
  </td>
</tr>
<style>
  .custom-icon {
    font-size: 17px; /* Adjust the size as needed */
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