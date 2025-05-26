<?php include __DIR__ . '/layout/header.php'; ?>

        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[1500px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#0c1c17] tracking-light text-[32px] font-bold leading-tight min-w-72">Dashboard</p></div>
            <div class="flex flex-wrap gap-4 p-4">
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 bg-[#e6f4ef]">
                <p class="text-[#0c1c17] text-base font-medium leading-normal">รวมสมาชิกปัจจุบัน</p>
                <p class="text-[#0c1c17] tracking-light text-2xl font-bold leading-tight">1,250</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 bg-[#e6f4ef]">
                <p class="text-[#0c1c17] text-base font-medium leading-normal">รวมการเช่ารถวันนี้</p>
                <p class="text-[#0c1c17] tracking-light text-2xl font-bold leading-tight">75</p>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 p-4">
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 bg-[#e6f4ef]">
                <p class="text-[#0c1c17] text-base font-medium leading-normal">รถที่เช่าบ่อยที่สุด</p>
                <img src="/mvc-rent-erp/assets/image/honda-accord.png" alt="Honda Accord" width="48" height="48" class="mr-2">
                <p class="text-[#0c1c17] tracking-light text-2xl font-bold leading-tight">Honda Accord</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 bg-[#e6f4ef]">
                <p class="text-[#0c1c17] text-base font-medium leading-normal">รายได้รวมในเดือนนี้</p>
                <p class="text-[#0c1c17] tracking-light text-2xl font-bold leading-tight">฿40,000</p>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 p-4">
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 bg-[#e6f4ef]">
                <p class="text-[#0c1c17] text-base font-medium leading-normal">ระยะเวลาการเช่าเฉลี่ย</p>
                <p class="text-[#0c1c17] tracking-light text-2xl font-bold leading-tight">3 วัน</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 bg-[#e6f4ef]">
                <p class="text-[#0c1c17] text-base font-medium leading-normal">สมาชิกใหม่ในเดือนนี้</p>
                <p class="text-[#0c1c17] tracking-light text-2xl font-bold leading-tight">50</p>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 px-4 py-6">
              <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-lg border border-[#cde9df] p-6">
                <p class="text-[#0c1c17] text-base font-medium leading-normal">แนวโน้มการเช่า (ปีที่แล้ว)</p>
                <p class="text-[#0c1c17] tracking-light text-[32px] font-bold leading-tight truncate">+15%</p>
                <div class="flex gap-1">
                  <p class="text-[#46a080] text-base font-normal leading-normal">ปีนี้</p>
                  <p class="text-[#07882e] text-base font-medium leading-normal">+15%</p>
                </div>
                <div class="flex min-h-[180px] flex-1 flex-col gap-8 py-4">
                  <svg width="100%" height="148" viewBox="-3 0 478 150" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path
                      d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H326.769H0V109Z"
                      fill="url(#paint0_linear_1131_5935)"
                    ></path>
                    <path
                      d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25"
                      stroke="#46a080"
                      stroke-width="3"
                      stroke-linecap="round"
                    ></path>
                    <defs>
                      <linearGradient id="paint0_linear_1131_5935" x1="236" y1="1" x2="236" y2="149" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#e6f4ef"></stop>
                        <stop offset="1" stop-color="#e6f4ef" stop-opacity="0"></stop>
                      </linearGradient>
                    </defs>
                  </svg>
                  <div class="flex justify-around">
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">ม.ค.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">ก.พ.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">มี.ค.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">เม.ย.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">พ.ค.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">มิ.ย.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">มิ.ย.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">ก.ค.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">ส.ค.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">ก.ย.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">ต.ค.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">พ.ย.</p>
                    <p class="text-[#46a080] text-[13px] font-bold leading-normal tracking-[0.015em]">ธ.ค.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


<?php include __DIR__ . '/layout/footer.php'; ?>