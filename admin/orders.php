<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex h-auto min-h-screen w-full flex-col bg-[#fcf9f8] group/design-root overflow-x-hidden" style='font-family: "Work Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f4eae7] px-10 py-3">
          <div class="flex items-center gap-4 text-[#1c110d]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M44 4H30.6666V17.3334H17.3334V30.6666H4V44H44V4Z" fill="currentColor"></path></svg>
            </div>
            <h2 class="text-[#1c110d] text-lg font-bold leading-tight tracking-[-0.015em]">Gourmet Eats</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Menu</a>
              <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Reservations</a>
              <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">About</a>
              <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Contact</a>
            </div>
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#f4eae7] text-[#1c110d] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
            >
              <div class="text-[#1c110d]" data-icon="Bell" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                  ></path>
                </svg>
              </div>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAlUTMctaaa1zUxhtLbqA8YXavTSV2ftJPbywGqHTEVMClN30c_stBIcxg-2zIZY4uz0VOIuxA1pxvDXRxd_PClTtEd2QZIjwvxiDafrnt6uKatTIp7JWljJS_wUK80Ff1nQrW09v1UDyIY2S-6Ydv7vB1Sn3ExBNqag7dz3tzAQD1sSCxrLhlZpnLvLxJktBAozfLBMofrEcDgQahoQqycVPT8j_5VbPMTPLWwx4OEm7051UaSjnjdnOnKwdQ-6DuJb_moaomIyS0");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#1c110d] tracking-light text-[32px] font-bold leading-tight">Orders</p>
                <p class="text-[#9c5e49] text-sm font-normal leading-normal">Manage all customer orders</p>
              </div>
            </div>
            <div class="pb-3">
              <div class="flex border-b border-[#e8d5ce] px-4 gap-8">
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-[#f2460d] text-[#1c110d] pb-[13px] pt-4" href="#">
                  <p class="text-[#1c110d] text-sm font-bold leading-normal tracking-[0.015em]">Current Orders</p>
                </a>
                <a class="flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#9c5e49] pb-[13px] pt-4" href="#">
                  <p class="text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">Past Orders</p>
                </a>
              </div>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#e8d5ce] bg-[#fcf9f8]">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-[#fcf9f8]">
                      <th class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-120 px-4 py-3 text-left text-[#1c110d] w-[400px] text-sm font-medium leading-normal">
                        Order ID
                      </th>
                      <th class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-240 px-4 py-3 text-left text-[#1c110d] w-[400px] text-sm font-medium leading-normal">
                        Customer Name
                      </th>
                      <th class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-360 px-4 py-3 text-left text-[#1c110d] w-[400px] text-sm font-medium leading-normal">
                        Order Date
                      </th>
                      <th class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-480 px-4 py-3 text-left text-[#1c110d] w-[400px] text-sm font-medium leading-normal">
                        Total Amount
                      </th>
                      <th class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-600 px-4 py-3 text-left text-[#1c110d] w-60 text-sm font-medium leading-normal">Status</th>
                      <th class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-720 px-4 py-3 text-left text-[#1c110d] w-60 text-[#9c5e49] text-sm font-medium leading-normal">
                        Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#e8d5ce]">
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-120 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">#12345</td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-240 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                        Sophia Clark
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-360 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                        2024-07-26
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-480 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">$55.00</td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Pending</span>
                        </button>
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-720 h-[72px] px-4 py-2 w-60 text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">
                        Update
                      </td>
                    </tr>
                    <tr class="border-t border-t-[#e8d5ce]">
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-120 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">#12346</td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-240 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                        Ethan Miller
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-360 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                        2024-07-26
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-480 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">$72.50</td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Preparing</span>
                        </button>
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-720 h-[72px] px-4 py-2 w-60 text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">
                        Update
                      </td>
                    </tr>
                    <tr class="border-t border-t-[#e8d5ce]">
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-120 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">#12347</td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-240 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                        Olivia Davis
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-360 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                        2024-07-25
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-480 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">$48.75</td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Ready for Pickup</span>
                        </button>
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-720 h-[72px] px-4 py-2 w-60 text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">
                        Update
                      </td>
                    </tr>
                    <tr class="border-t border-t-[#e8d5ce]">
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-120 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">#12348</td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-240 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                        Liam Wilson
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-360 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                        2024-07-25
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-480 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">$60.20</td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Delivered</span>
                        </button>
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-720 h-[72px] px-4 py-2 w-60 text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">
                        Update
                      </td>
                    </tr>
                    <tr class="border-t border-t-[#e8d5ce]">
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-120 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">#12349</td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-240 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                        Ava Martinez
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-360 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                        2024-07-24
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-480 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">$35.90</td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-600 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Cancelled</span>
                        </button>
                      </td>
                      <td class="table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-720 h-[72px] px-4 py-2 w-60 text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">
                        Update
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-120{display: none;}}
                @container(max-width:240px){.table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-240{display: none;}}
                @container(max-width:360px){.table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-360{display: none;}}
                @container(max-width:480px){.table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-480{display: none;}}
                @container(max-width:600px){.table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-600{display: none;}}
                @container(max-width:720px){.table-4d3d22eb-9e87-4f63-9b44-38a0368c3398-column-720{display: none;}}
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
