<?php include __DIR__ . '/layout/header.php'; ?>

        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex items-center justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#111518] tracking-light text-[32px] font-bold leading-tight">Cars</p>
                <p class="text-[#637988] text-sm font-normal leading-normal">จัดการยานพาหนะของคุณ
                </p>
              </div>
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1993e5] text-white text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">เพิ่มยานพาหนะ</span>
              </button>
            </div>
            <div class="px-4 py-3">
              <label class="flex flex-col min-w-40 h-12 w-full">
                <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                  <div
                    class="text-[#637988] flex border-none bg-[#f0f3f4] items-center justify-center pl-4 rounded-l-lg border-r-0"
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
                    placeholder="Search by registration number, brand, or model"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111518] focus:outline-0 focus:ring-0 border-none bg-[#f0f3f4] focus:border-none h-full placeholder:text-[#637988] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value=""
                  />
                </div>
              </label>
            </div>
            <div class="flex gap-3 p-3 flex-wrap pr-4">
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-green-200 pl-4 pr-4">
                <p class="text-[#111518] text-sm font-medium leading-normal">ว่าง</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-yellow-200 pl-4 pr-4">
                <p class="text-[#111518] text-sm font-medium leading-normal">จอง</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-red-200 pl-4 pr-4">
                <p class="text-[#111518] text-sm font-medium leading-normal">ไม่ใช้งาน</p>
              </div>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-lg border border-[#dce1e5] bg-white">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-white">
                      <th class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-120 px-2 py-1 text-center text-[#111518] w-[30px] text-sm font-medium leading-normal">ลำดับ</th>
                      <th class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-176 px-2 py-1 text-center text-[#111518] w-[50px] text-sm font-medium leading-normal">รูปภาพ</th>
                      <th class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-296 px-2 py-1 text-center text-[#111518] w-[400px] text-sm font-medium leading-normal">
                        ทะเบียนรถ
                      </th>
                      <th class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-416 px-2 py-1 text-center text-[#111518] w-[400px] text-sm font-medium leading-normal">ยี่ห้อ</th>
                      <th class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-536 px-2 py-1 text-center text-[#111518] w-[400px] text-sm font-medium leading-normal">รุ่น</th>
                      <th class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-656 px-2 py-1 text-center text-[#111518] w-[400px] text-sm font-medium leading-normal">
                        จำนวนที่นั่ง
                      </th>
                      <th class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-776 px-2 py-1 text-center text-[#111518] w-[100px] text-sm font-medium leading-normal">
                        สถานะการเช่า
                      </th>
                      <th class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-896 px-2 py-1 text-left text-[#111518] w-[150px] text-center text-[#637988] text-sm font-medium leading-normal">
                        จัดการ
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $i = 1;
                    foreach ($cars as $car) : 

                    // license_plate VARCHAR(20) NOT NULL,     -- ทะเบียนรถ
                    // brand VARCHAR(50) NOT NULL,             -- ยี่ห้อ
                    // model VARCHAR(50) NOT NULL,             -- รุ่น
                    // color VARCHAR(30),                      -- สีรถ
                    // year INT,                               -- ปีที่จดทะเบียน
                    // seats INT DEFAULT 4,                    -- จำนวนที่นั่ง
                    // status ENUM('available', 'booked', 'unavailable') DEFAULT 'available',
                    // image_url VARCHAR(255),                 -- ลิงก์รูปภาพ
                    // note TEXT,                              -- หมายเหตุ
                    // created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

                        
                        $car_number = $car['license_plate'];
                        $car_brand = $car['brand'];
                        $car_model = $car['model'];
                        $car_seat = $car['seats'];
                        $car_status = $car['status'];

                        if ($car_status == 'available') {
                            $car_status_color = 'bg-green-200';
                            $car_status_name = 'ว่าง';
                        } elseif ($car_status == 'booked') {
                            $car_status_color = 'bg-yellow-200';
                            $car_status_name = 'จอง';
                        } else {
                            $car_status_color = 'bg-red-200';
                            $car_status_name = 'ไม่ใช้งาน';
                        }
                        $car_image = $car['image_url'];
                        $car_note = $car['note'];

                        ?>
                        
                    <tr class="border-t border-t-[#dce1e5]">
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-120 h-[72px] px-4 py-2 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal"><?php echo $i++; ?></td>
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-176 h-[72px] px-4 py-2 w-14 text-sm font-normal leading-normal">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-20"
                          style='background-image: url("<?php echo $car_image; ?>");'
                        ></div>
                      </td>
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-296 h-[72px] px-2 py-1 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal"><?php echo $car_number; ?></td>
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-416 h-[72px] px-2 py-1 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal"><?php echo $car_brand; ?></td>
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-536 h-[72px] px-2 py-1 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal"><?php echo $car_model; ?></td>
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-656 h-[72px] px-2 py-1 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal"><?php echo $car_seat; ?></td>
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-776 h-[72px] px-2 py-1 w-[100px] text-center text-[#637988] text-sm font-normal leading-normal">
                        <span class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 <?php echo $car_status_color; ?> text-[#111518] text-sm font-medium leading-normal w-full">
                          <span class="truncate"><?php echo $car_status_name; ?></span>
                        </span>
                      </td>
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-896 h-[72px] px-2 py-1 w-[150px] text-center text-[#637988] text-sm font-bold leading-normal tracking-[0.015em]">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#f0f5f2] text-[#101814] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">ดูรายละเอียด</span>
                        </button>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <style>
                @container(max-width:120px){.table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-120{display: none;}}
                @container(max-width:176px){.table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-176{display: none;}}
                @container(max-width:296px){.table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-296{display: none;}}
                @container(max-width:416px){.table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-416{display: none;}}
                @container(max-width:536px){.table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-536{display: none;}}
                @container(max-width:656px){.table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-656{display: none;}}
                @container(max-width:776px){.table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-776{display: none;}}
                @container(max-width:896px){.table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-896{display: none;}}
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>



<?php include __DIR__ . '/layout/footer.php'; ?>