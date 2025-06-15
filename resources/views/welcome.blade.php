<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Newsreader%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Galileo Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
      /* Button hover effects */
      .btn {
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
      }
      .btn:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      }

      /* Card hover effects */
      .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
      }
    </style>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Newsreader, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f4f4] px-10 py-3">
          <div class="flex items-center gap-4 text-[#111718]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z"
                  fill="currentColor"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2 class="text-[#111718] text-lg font-bold leading-tight tracking-[-0.015em]">News</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <label class="flex flex-col min-w-40 !h-10 max-w-64">
              <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                <div
                  class="text-[#638688] flex border-none bg-[#f0f4f4] items-center justify-center pl-4 rounded-l-xl border-r-0"
                  data-icon="MagnifyingGlass"
                  data-size="24px"
                  data-weight="regular"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                    ></path>
                  </svg>
                </div>
                <input
                  placeholder="Search"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111718] focus:outline-0 focus:ring-0 border-none bg-[#f0f4f4] focus:border-none h-full placeholder:text-[#638688] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                  value=""
                />
              </div>
            </label>
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-[#f0f4f4] text-[#111718] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
            >
              <div class="text-[#111718]" data-icon="Bell" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                  ></path>
                </svg>
              </div>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/8fb87f7b-d1a2-434f-8d1d-16185d4ea4e0.png");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
              <div class="@[480px]:p-4">
                <div
                  class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-start justify-end px-4 pb-10 @[480px]:px-10 card"
                  style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://cdn.usegalileo.ai/sdxl10/7ab4128e-041b-4d58-8d45-4eed771d8ee9.png");'
                >
                  <h1
                    class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] text-center"
                  >
                    Stay informed, explore new ideas, and become a better you
                  </h1>
                  <div class="flex-wrap gap-3 flex">
  @guest
    <a href="{{ route('login') }}"
      class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#ccf7fa] text-[#111718] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] btn">
      <span class="truncate">Log in</span>
    </a>
    <a href="{{ route('register') }}"
      class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#f0f4f4] text-[#111718] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] btn">
      <span class="truncate">Sign up</span>
    </a>
  @else
    <a href="{{ route('dashboard') }}"
      class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#ccf7fa] text-[#111718] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] btn">
      <span class="truncate">Dashboard</span>
    </a>
  @endguest
</div>
                </div>
              </div>
            </div>
            <h2 class="text-[#111718] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Trending</h2>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-1 gap-3 rounded-lg border border-[#dce5e5] bg-white p-4 flex-col card">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                  style='background-image: url("https://cdn.usegalileo.ai/replicate/53c6e321-e780-40aa-9712-9d70b2788614.png");'
                ></div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#111718] text-base font-bold leading-tight">The world is flat</h2>
                  <p class="text-[#638688] text-sm font-normal leading-normal">Female, age 30 · 5 minutes read</p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#dce5e5] bg-white p-4 flex-col card">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/c4795afa-3061-43eb-b832-c7b41d046975.png");'
                ></div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#111718] text-base font-bold leading-tight">The world is round</h2>
                  <p class="text-[#638688] text-sm font-normal leading-normal">Male, age 30 · 5 minutes read</p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#dce5e5] bg-white p-4 flex-col card">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/ccfae0ee-1f2f-45ae-a3bf-2b67b402ce52.png");'
                ></div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#111718] text-base font-bold leading-tight">The world is a cube</h2>
                  <p class="text-[#638688] text-sm font-normal leading-normal">Female, age 30 · 5 minutes read</p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#dce5e5] bg-white p-4 flex-col card">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/c1c37e3d-118d-43e5-b614-00029bae8985.png");'
                ></div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#111718] text-base font-bold leading-tight">The world is a donut</h2>
                  <p class="text-[#638688] text-sm font-normal leading-normal">Male, age 30 · 5 minutes read</p>
                </div>
              </div>
            </div>
            <h2 class="text-[#111718] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Popular on News</h2>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-1 gap-3 rounded-lg border border-[#dce5e5] bg-white p-4 flex-col card">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/8fb87f7b-d1a2-434f-8d1d-16185d4ea4e0.png");'
                ></div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#111718] text-base font-bold leading-tight">The world is flat</h2>
                  <p class="text-[#638688] text-sm font-normal leading-normal">Female, age 30 · 5 minutes read</p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#dce5e5] bg-white p-4 flex-col card">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/e1380923-5c1e-4cce-8786-7f12ce5d9125.png");'
                ></div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#111718] text-base font-bold leading-tight">The world is round</h2>
                  <p class="text-[#638688] text-sm font-normal leading-normal">Male, age 30 · 5 minutes read</p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#dce5e5] bg-white p-4 flex-col card">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                  style='background-image: url("https://cdn.usegalileo.ai/replicate/1c1b0b5b-c3e8-4a68-9672-5c62563ab07c.png");'
                ></div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#111718] text-base font-bold leading-tight">The world is a cube</h2>
                  <p class="text-[#638688] text-sm font-normal leading-normal">Female, age 30 · 5 minutes read</p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#dce5e5] bg-white p-4 flex-col card">
                <div
                  class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/64f49b85-694c-4044-9bac-61c550d6125c.png");'
                ></div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#111718] text-base font-bold leading-tight">The world is a donut</h2>
                  <p class="text-[#638688] text-sm font-normal leading-normal">Male, age 30 · 5 minutes read</p>
                </div>
              </div>
            </div>
            <h2 class="text-[#111718]