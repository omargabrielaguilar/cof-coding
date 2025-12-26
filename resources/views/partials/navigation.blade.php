<!-- Navigation -->
<header class="my-4 hidden w-48 shrink-0 flex-col justify-between gap-8 pl-4 sm:flex xl:ml-32">
  <div class="overflow-y-auto flex-1 flex flex-col">
    <!-- Logo -->
    <a href="/feed">
      <svg width="220" height="60" viewBox="0 0 220 60" fill="none" xmlns="http://www.w3.org/2000/svg"
        aria-label="Eyes Care logo">
        <!-- EYES -->
        <text x="0" y="39" font-family="monospace, sans-serif" font-size="34" font-weight="bold" fill="#EEE"
          letter-spacing="1.5">
          EYES
        </text>
        <!-- CARE, con la C y la E en lila -->
        <text x="91" y="39" font-family="monospace, sans-serif" font-size="34" font-weight="bold"
          fill="#b347ed">CARE</text>
      </svg>
    </a>
    <!-- Navigation -->
    <nav class="mt-10 flex-1 flex flex-col justify-between">
      <div>
        <ul class="flex flex-col gap-3.5">
          <li><a class="hover:underline" href="#">Home</a></li>
          <li><a class="hover:underline" href="#">Explore</a></li>
          <!-- Active item -->
          <li class="-ml-4 flex items-center gap-2">
            <div class="bg-eyes-care size-2 shrink-0"></div>
            <a class="hover:underline" href="#">Notifications</a>
          </li>
          <li><a class="hover:underline" href="#">Lists</a></li>
          <li><a class="hover:underline" href="#">Bookmarks</a></li>
          <li><a class="hover:underline" href="#">Jobs</a></li>
          <li><a class="hover:underline" href="#">Communities</a></li>
          <li><a class="hover:underline" href="#">Premium</a></li>
          <li><a class="hover:underline" href="#">Profile</a></li>
          <li><a class="hover:underline" href="#">More</a></li>
        </ul>
        @isset($showPostButton)
        <div class="flex flex-col gap-6 mt-6">
          <button
            class="bg-eyes-care hover:bg-eyes-care/90 active:bg-eyes-care/95 text-eyes-care-dark border border-transparent px-4 py-3 text-sm">
            Post
          </button>
        </div>
        @endisset
      </div>
      <div class="flex gap-3.5 mt-8">
        <a href="/profile" class="shrink-0">
          <img src="/images/adrian.png" alt="Avatar for Adrian" class="size-11 object-cover" />
        </a>
        <div class="flex flex-col gap-1 text-sm">
          <p>_adrian</p>
          <p class="text-eyes-care-light/60">@tudssss</p>
        </div>
        <button class="group flex gap-[3px] py-2" aria-label="Post options">
          <span class="bg-eyes-care-light/40 group-hover:bg-eyes-care-light/60 size-1"></span>
          <span class="bg-eyes-care-light/40 group-hover:bg-eyes-care-light/60 size-1"></span>
          <span class="bg-eyes-care-light/40 group-hover:bg-eyes-care-light/60 size-1"></span>
        </button>
      </div>
    </nav>
  </div>
</header>
