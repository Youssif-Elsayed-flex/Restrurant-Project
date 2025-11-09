<?php include 'includes/header.php'; ?>
    <div class="relative flex h-auto min-h-screen w-full flex-col bg-[#fcf9f8] group/design-root overflow-x-hidden"
        style='font-family: "Work Sans", "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f4eae7] px-10 py-3">
                <div class="flex items-center gap-4 text-[#1c110d]">
                    <div class="size-4">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#1c110d] text-lg font-bold leading-tight tracking-[-0.015em]">FlavorFusion Bistro
                    </h2>
                </div>
                <div class="flex flex-1 justify-end gap-8">
                    <div class="flex items-center gap-9">
                        <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Menu</a>
                        <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Catering</a>
                        <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">About</a>
                        <a class="text-[#1c110d] text-sm font-medium leading-normal" href="#">Contact</a>
                    </div>
                    <div class="flex gap-2">
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f4eae7] text-[#1c110d] text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Order Online</span>
                        </button>
                        <button
                            class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#f4eae7] text-[#1c110d] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
                            <div class="text-[#1c110d]" data-icon="MagnifyingGlass" data-size="20px"
                                data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <button
                            class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#f4eae7] text-[#1c110d] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
                            <div class="text-[#1c110d]" data-icon="ShoppingCart" data-size="20px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </header>
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap gap-2 p-4">
                        <a class="text-[#9c5e49] text-base font-medium leading-normal" href="#">Menu</a>
                        <span class="text-[#9c5e49] text-base font-medium leading-normal">/</span>
                        <span class="text-[#1c110d] text-base font-medium leading-normal">Spicy Salmon Delight</span>
                    </div>
                    <div class="p-4 @container">
                        <div class="flex flex-col items-stretch justify-start rounded-lg @xl:flex-row @xl:items-start">
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCz4RMJp3MBSmrkGaI_9F7ScJobkCLeEucuecVF7ARQeQpgocyVYfRYi5CK47iXRZq49FrOvXVkMDKpAX8-9LHWmpPpHS6aveVFk-II0hLibW_sLO9Q1wq1QfMlUi97Ev-XyYWhBkQM_sCxhvLkxeXEXrLqromA3iTj-Kkn2p4D8goCHQfgEAVOtmCgDWpRPbLMbphOxE7an0DZFzRfj3NQFUCalIN-QsZdXYXwQhjYQ0aN0N9w0-AQvuXlLeaoV3E39RZaiChUUC8");'>
                            </div>
                            <div
                                class="flex w-full min-w-72 grow flex-col items-stretch justify-center gap-1 py-4 @xl:px-4">
                                <p class="text-[#1c110d] text-lg font-bold leading-tight tracking-[-0.015em]">Spicy
                                    Salmon Delight</p>
                                <div class="flex items-end gap-3 justify-between">
                                    <div class="flex flex-col gap-1">
                                        <p class="text-[#9c5e49] text-base font-normal leading-normal">
                                            Freshly grilled salmon fillet, marinated in a blend of chili flakes,
                                            paprika, and a hint of lime, served with a side of roasted vegetables and
                                            quinoa.
                                        </p>
                                        <p class="text-[#9c5e49] text-base font-normal leading-normal">$18.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-[#1c110d] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                        Customer Reviews</h2>
                    <div class="flex flex-col gap-8 overflow-x-hidden bg-[#fcf9f8] p-4">
                        <div class="flex flex-col gap-3 bg-[#fcf9f8]">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDd1IoDbs92C7b2GuVtYZ6lnOAsK6JSK4K6bUgruH6jdHZcUgxmguYcfMqf_FQa0krb3rVE3KqHEr_MTThNET1xBZZO_64lzH45kd0h_hl3xNVD2-cw-zSC10rL-pg3SxLEoMDXDYCCKxtp-vUIj8YY796eBsEqL78szcHT8v-4B5SBV7r3L1bgdDESQ5lpVymSv7J4BqrLC7wxqfgwVcTyMUtXOzScD7dAhNwF9m8eBpverJTrWQpACFyn1dnQ2jKNAKXR35zmMGo");'>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[#1c110d] text-base font-medium leading-normal">Sophia Clark</p>
                                    <p class="text-[#9c5e49] text-sm font-normal leading-normal">2 weeks ago</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-[#1c110d] text-base font-normal leading-normal">
                                Absolutely loved the Spicy Salmon Delight! The salmon was perfectly cooked, and the
                                spice level was just right. The roasted vegetables were a great complement.
                                Will definitely order again!
                            </p>
                        </div>
                        <div class="flex flex-col gap-3 bg-[#fcf9f8]">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAEC-F_v5TxTGfN0eNtcDTBSBr7QhN9sQJSDg0LfL_F3p7tfSLfg0oyPKzy_VZuWKOhxA8-ZGE8CaIBqwRrWQ4uOYIBxjHUWflDYr_UXxOGfFzeVF8FvpOnxee60i5R4rVgc7MD6dDkz4arynCzSOvIyuBBlUjK3cpwQXJmZIoXFRYQjpoPw7b8STGoBR669UEtHsvgbscXvEahnhyTEQoEVJdbYxDKVP8omv-l5-G7w70IKe77ZQtvWHpp0mnbD6dlYzFe8l79Q_8");'>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[#1c110d] text-base font-medium leading-normal">Ethan Miller</p>
                                    <p class="text-[#9c5e49] text-sm font-normal leading-normal">1 month ago</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#d8b7ac]" data-icon="Star" data-size="20px" data-weight="regular">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M239.2,97.29a16,16,0,0,0-13.81-11L166,81.17,142.72,25.81h0a15.95,15.95,0,0,0-29.44,0L90.07,81.17,30.61,86.32a16,16,0,0,0-9.11,28.06L66.61,153.8,53.09,212.34a16,16,0,0,0,23.84,17.34l51-31,51.11,31a16,16,0,0,0,23.84-17.34l-13.51-58.6,45.1-39.36A16,16,0,0,0,239.2,97.29Zm-15.22,5-45.1,39.36a16,16,0,0,0-5.08,15.71L187.35,216v0l-51.07-31a15.9,15.9,0,0,0-16.54,0l-51,31h0L82.2,157.4a16,16,0,0,0-5.08-15.71L32,102.35a.37.37,0,0,1,0-.09l59.44-5.14a16,16,0,0,0,13.35-9.75L128,32.08l23.2,55.29a16,16,0,0,0,13.35,9.75L224,102.26S224,102.32,224,102.33Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-[#1c110d] text-base font-normal leading-normal">
                                The salmon was good, but I found it a bit too spicy for my taste. The vegetables and
                                quinoa were well-prepared, though. Overall, a decent dish.
                            </p>
                        </div>
                        <div class="flex flex-col gap-3 bg-[#fcf9f8]">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpPKGnXKD7cziVuzehTY15nRix5yaBzoT14x2zBhWNWWMXjtwwW_PjWTHoFZ6abW58omuFDaSZAAgyIuFF2jMGoBTgVmUJut2VjJi2UXGO_Rek0OTt6Iw_DuS2KeZtaEHAaEIKqzU9vldzofR6eqrHOaC3o92UuNoLOrYJ9dOgTPbdiyIzCRxUFDS_jxKF77dgb9ytj2_YIwG2oAgMx-ubf_leznzxq__11o5x49zK3tAWR4j7OWgJWHTlvIY9t8zsa_wsNCdNlHA");'>
                                </div>
                                <div class="flex-1">
                                    <p class="text-[#1c110d] text-base font-medium leading-normal">Olivia Davis</p>
                                    <p class="text-[#9c5e49] text-sm font-normal leading-normal">2 months ago</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[#f2460d]" data-icon="Star" data-size="20px" data-weight="fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-[#1c110d] text-base font-normal leading-normal">
                                This is my go-to dish at FlavorFusion Bistro. The salmon is always fresh and flavorful,
                                and the combination of spices is amazing. Highly recommend it!
                            </p>
                        </div>
                    </div>
                    <div class="flex px-4 py-3 justify-end">
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f2460d] text-[#fcf9f8] text-sm font-bold leading-normal tracking-[0.015em]">
                            <a href="cart.php" class="truncate">Add to Cart</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>