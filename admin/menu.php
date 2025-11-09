<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900" />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
    <div class="relative flex h-auto min-h-screen w-full flex-col bg-[#fcf9f8] group/design-root overflow-x-hidden"
        style='font-family: "Work Sans", "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f4eae7] px-10 py-3">
                <div class="flex items-center gap-4 text-[#1c110d]">
                    <div class="size-4">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#1c110d] text-lg font-bold leading-tight tracking-[-0.015em]">Gourmet Admin</h2>
                </div>
                <div class="flex flex-1 justify-end gap-8">
                    <div class="flex items-center gap-9">
                        <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Dashboard</a>
                        <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Orders</a>
                        <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Menu</a>
                        <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Reservations</a>
                        <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Customers</a>
                    </div>
                    <button
                        class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#f4eae7] text-[#1c110d] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
                        <div class="text-[#1c110d]" data-icon="Bell" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAYxLXn5m095SRlJlxOTouz3ortoXZQrk6ShmbGY-K5tO0r9LFlnYBQcF9VoYFBiU0_60fwa26D2NOwIt7YJk04EYT-Y6RFrFXClhcVgXNpzBZtJSSDlTMPt7oKkTjvdycsiTdAbmuWKuqz3WrplyLuag65CyrxXsPJTm3WPl0IrfNMOfXKdX6VC5fDaj2jZJf3XFbQRMIbG3_wrfwLR8dYoYEpksgW5bPGQtMvZSCq9sFam4NnSltrYdygbq02CrmyerkiZUSK7Vo");'>
                    </div>
                </div>
            </header>
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <p class="text-[#1c110d] tracking-light text-[32px] font-bold leading-tight min-w-72">Menu
                            Management</p>
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal">
                            <span class="truncate">Add New Dish</span>
                        </button>
                    </div>
                    <div class="px-4 py-3 @container">
                        <div class="flex overflow-hidden rounded-lg border border-[#e8d5ce] bg-[#fcf9f8]">
                            <table class="flex-1">
                                <thead>
                                    <tr class="bg-[#fcf9f8]">
                                        <th
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-56 px-4 py-3 text-left text-[#1c110d] w-14 text-sm font-medium leading-normal">
                                            Image</th>
                                        <th
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-176 px-4 py-3 text-left text-[#1c110d] w-[400px] text-sm font-medium leading-normal">
                                            Name</th>
                                        <th
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-296 px-4 py-3 text-left text-[#1c110d] w-[400px] text-sm font-medium leading-normal">
                                            Price</th>
                                        <th
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-416 px-4 py-3 text-left text-[#1c110d] w-[400px] text-sm font-medium leading-normal">
                                            Description
                                        </th>
                                        <th
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-536 px-4 py-3 text-left text-[#1c110d] w-60 text-sm font-medium leading-normal">
                                            Category</th>
                                        <th
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-656 px-4 py-3 text-left text-[#1c110d] w-60 text-[#9c5e49] text-sm font-medium leading-normal">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-t-[#e8d5ce]">
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-56 h-[72px] px-4 py-2 w-14 text-sm font-normal leading-normal">
                                            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXSGh_BZ-0JfUdcvqW0YgX8W-H5nAT0VU2DajlGoEgJqP9AyAZP4w4wFGFnlbPQrYOqWFesUHIGr7GFo-QgpMG23bxMnDoG4qMWRdAlOwH2MLFzd_j9V2flqTVou3Hcd2gXS8li2E3Us_44p6sPH2wVo3FFvEebRCKoaUvxQdZ-N9Epc3wOzl6GBy49mZKXa0pfDmk0Pr2a7JuIMjHyRPldG11h6oR7TL7AyO0RXZPbxy2bCaz4ZUpdVqH15dZqHp59qxObDXRS1A");'>
                                            </div>
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-176 h-[72px] px-4 py-2 w-[400px] text-[#1c110d] text-sm font-normal leading-normal">
                                            Pasta Carbonara
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-296 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                                            $18.99</td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-416 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                                            Classic Italian pasta with creamy sauce and bacon.
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-536 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Pasta</span>
                                            </button>
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-656 h-[72px] px-4 py-2 w-60 text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">
                                            Edit | Delete
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#e8d5ce]">
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-56 h-[72px] px-4 py-2 w-14 text-sm font-normal leading-normal">
                                            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMJyCcsGFyLR7yDL1z8PO-hQgGFUfu7qRCpks-lPpYrFGY3p5ZwcThjKVMUtXzTkgJ5KcAuLmI79A4dpCg2N-90YrigsEuJvAkOcE0b5Xty94xtIZMQnUQGQ1zePDOH3zfktQQSY6ITyezebikQZJQuin1buW9y9wsJVT6jfF8gHqgQ5RTKH3RnJJ4LIX7OsQnMs1xHIYYg5bz5iTMqyTrXytJsWH2yKZ_yQvqKrOkXNgAj0P4arUILK2Z9PG4zWV4rzoQO1I9vOU");'>
                                            </div>
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-176 h-[72px] px-4 py-2 w-[400px] text-[#1c110d] text-sm font-normal leading-normal">
                                            Grilled Ribeye
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-296 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                                            $29.99</td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-416 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                                            Juicy ribeye steak grilled to perfection.
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-536 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Steaks</span>
                                            </button>
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-656 h-[72px] px-4 py-2 w-60 text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">
                                            Edit | Delete
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#e8d5ce]">
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-56 h-[72px] px-4 py-2 w-14 text-sm font-normal leading-normal">
                                            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuADvW1zojV35zZpxQnjQKwRT5WSEhd1uoDjOIZsssdPIyIRzYuzfu1prHPYYBsUprzNSM4AWBTSbChuGdXJpHCSF0Q4PHgg5mjD4r2hgPL5sb2n8mTvfRkyuXcTMTi_Lq_jvr0sKpHMZ6ERMRWvvAVAy6xZ5uJ1zhAFuwbtcUu7URZTyyJ4oFJ1hd6YOY-MpOmKWEij8YrkwIHPsTGIkO20cwo4xjE7QARKkHM-i6_53vJf31GytnDcDzVvK52Njzy6tB1q53SA71M");'>
                                            </div>
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-176 h-[72px] px-4 py-2 w-[400px] text-[#1c110d] text-sm font-normal leading-normal">
                                            Caesar Salad
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-296 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                                            $12.99</td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-416 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                                            Fresh romaine lettuce with Caesar dressing and croutons.
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-536 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Salads</span>
                                            </button>
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-656 h-[72px] px-4 py-2 w-60 text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">
                                            Edit | Delete
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#e8d5ce]">
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-56 h-[72px] px-4 py-2 w-14 text-sm font-normal leading-normal">
                                            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBhFRyX0P3zyB04dv0QFqIrWJ7iKC0TxP788zMqTNCtuEaVTqmDC8j6Brzq32rXUdQAXTThg5niadXna0b8Ojh30ikFuET_L-hyPzUm6kO2gSKvzf7PGRKQ46X4VZYiWzbMO8KvR6Q49xbLdRKlck7b8YL9VL1sAZ-aSUHmTReyByhEVWtQeYWtnWcugShCRl1xOOlRHreazUEvU6QYkAia1il8Cz64ac7iclYftO5xK1-QjWYniOIXZM_NeEtZAHxWawHflotFwM");'>
                                            </div>
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-176 h-[72px] px-4 py-2 w-[400px] text-[#1c110d] text-sm font-normal leading-normal">
                                            Chocolate Lava Cake
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-296 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                                            $9.99</td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-416 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                                            Warm chocolate cake with a molten chocolate center.
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-536 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Desserts</span>
                                            </button>
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-656 h-[72px] px-4 py-2 w-60 text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">
                                            Edit | Delete
                                        </td>
                                    </tr>
                                    <tr class="border-t border-t-[#e8d5ce]">
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-56 h-[72px] px-4 py-2 w-14 text-sm font-normal leading-normal">
                                            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD2fhQ18nz_3uVN7f-VPMFfRJQnY7nSw25k-XK_Htq5gFkwo2X5WitWPZr90d5bFHuaSD81JoQnVDpjywcf3NB_9F4xKyj5u1Wp9M4aVI2CKO4H3i3yZpBfT70q_Cc0B3xOCzhYZmU3tNF3Lyf_xIz-ic8550mNGXtyg1LMtn5gMI-fSUC2Dwxq8Ivf6zm6mH70QeQyy_kpB1w5kWadeGHQ7fd6iHtBMn5ZUVgjaoI_XPP0BUB7VgdBrsIHNEZw0e0MBbsQRl78uYo");'>
                                            </div>
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-176 h-[72px] px-4 py-2 w-[400px] text-[#1c110d] text-sm font-normal leading-normal">
                                            Salmon with Asparagus
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-296 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                                            $24.99</td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-416 h-[72px] px-4 py-2 w-[400px] text-[#9c5e49] text-sm font-normal leading-normal">
                                            Pan-seared salmon served with fresh asparagus.
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-536 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                            <button
                                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-medium leading-normal w-full">
                                                <span class="truncate">Seafood</span>
                                            </button>
                                        </td>
                                        <td
                                            class="table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-656 h-[72px] px-4 py-2 w-60 text-[#9c5e49] text-sm font-bold leading-normal tracking-[0.015em]">
                                            Edit | Delete
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <style>
                            @container(max-width:56px) {
                                .table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-56 {
                                    display: none;
                                }
                            }

                            @container(max-width:176px) {
                                .table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-176 {
                                    display: none;
                                }
                            }

                            @container(max-width:296px) {
                                .table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-296 {
                                    display: none;
                                }
                            }

                            @container(max-width:416px) {
                                .table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-416 {
                                    display: none;
                                }
                            }

                            @container(max-width:536px) {
                                .table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-536 {
                                    display: none;
                                }
                            }

                            @container(max-width:656px) {
                                .table-65a9ed1e-fa11-49fe-8eb2-1f4f55b4c333-column-656 {
                                    display: none;
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>