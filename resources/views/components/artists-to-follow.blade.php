<!-- Artists to follow -->
<div class="border-eyes-care-light/10 mt-10 border p-4">
  <h2 class="text-eyes-care-light/60 text-sm">Artists to follow</h2>
  <ol class="mt-4 flex flex-col gap-4">

    @foreach($artists as $artist)
    <li class="flex items-center justify-between gap-4">
      <div class="flex items-center gap-2.5">
        <img src="/images/{{ $artist['img'] }}" alt="Avatar of {{ $artist['name'] }}" class="size-8 object-cover" />
        <p class="truncate text-sm">{{ $artist['name'] }}</p>
      </div>
      <button
        class="bg-eyes-care-dark/50 hover:bg-eyes-care-dark/60 active:bg-eyes-care-dark/75 border-eyes-care/50 hover:border-eyes-care/60 active:border-eyes-care/75 text-eyes-care border px-2 py-1 text-sm">
        Follow
      </button>
    </li>
    @endforeach
  </ol>
  <a href="#" class="text-eyes-care-light/60 mt-4 inline-block text-sm">Show more</a>
</div>
