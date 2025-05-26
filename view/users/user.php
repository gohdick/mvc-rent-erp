<?php include __DIR__ . '/../layout/header.php'; ?>

    <?php if (isset($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <p class="text-[#101814] tracking-light text-[32px] font-bold leading-tight min-w-72">การจัดการผู้ใช้</p>
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#f0f5f2] text-[#101814] text-sm font-medium leading-normal"
              >
                <span class="truncate">เพิ่มผู้ใช้</span>
              </button>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-xl border border-[#dae7e0] bg-white">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-white">
                      <th class="table-9663089d-cedc-4805-9bda-6ef73195d631-column-120 px-4 py-3 text-center text-[#101814] w-[400px] text-sm font-medium leading-normal">
                        ชื่อผู้ใช้
                      </th>
                      <th class="table-9663089d-cedc-4805-9bda-6ef73195d631-column-240 px-4 py-3 text-center text-[#101814] w-[400px] text-sm font-medium leading-normal">อีเมล</th>
                      <th class="table-9663089d-cedc-4805-9bda-6ef73195d631-column-360 px-4 py-3 text-center text-[#101814] w-60 text-sm font-medium leading-normal">บทบาท</th>
                      <th class="table-9663089d-cedc-4805-9bda-6ef73195d631-column-480 px-4 py-3 text-center text-[#101814] w-60 text-sm font-medium leading-normal">สถานะ</th>
                      <th class="table-9663089d-cedc-4805-9bda-6ef73195d631-column-600 px-4 py-3 text-center text-[#101814] w-60 text-[#5e8d75] text-sm font-medium leading-normal">
                        จัดการ
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $user): 
                      
                      $name = $user['first_name'] . ' ' . $user['last_name'];
                      $level = $user['user_level_id'];
                      $status = $user['status'];
                      $email = $user['email'];

                      if ($level == 1) {
                        $level_name = "ผู้ดูแลระบบ";
                        $level_color = "bg-green-200";
                      } elseif ($level == 2) {
                        $level_name = "ผู้บริหาร";
                        $level_color = "bg-blue-200";
                      } elseif ($level == 3) {
                        $level_name = "พนักงาน";
                        $level_color = "bg-yellow-200";
                      }elseif ($level == 4) {
                        $level_name = "ลูกค้า";
                        $level_color = "bg-red-200";
                      }else{
                        $level_name = "ไม่ทราบ";
                        $level_color = "bg-gray-200";
                      }

                      if($status == "active"){
                        $status_name = "ใช้งาน";
                        $status_color = "bg-green-200";
                      }else{
                        $status_name = "ไม่ใช้งาน";
                        $status_color = "bg-red-200";
                      }

                      ?>
                    <tr class="border-t border-t-[#dae7e0]">
                      <td class="table-9663089d-cedc-4805-9bda-6ef73195d631-column-120 h-[72px] px-4 py-2 w-[400px] text-[#101814] text-sm font-normal leading-normal">
                        <?php echo $name; ?>
                      </td>
                      <td class="table-9663089d-cedc-4805-9bda-6ef73195d631-column-240 h-[72px] px-4 py-2 w-[400px] text-[#5e8d75] text-sm font-normal leading-normal">
                        <?php echo $email; ?>
                      </td>
                      <td class="table-9663089d-cedc-4805-9bda-6ef73195d631-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal text-center">
                        <span class="truncate <?php echo $level_color; ?> rounded-full px-2 py-1"><?php echo $level_name; ?></span>
                      </td>
                      <td class="table-9663089d-cedc-4805-9bda-6ef73195d631-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal text-center">
                        <span class="truncate <?php echo $status_color; ?> rounded-full px-2 py-1"> <?php echo $status_name; ?></span>
                      </td>
                      <td class="table-9663089d-cedc-4805-9bda-6ef73195d631-column-600 h-[72px] px-4 py-2 w-60 text-[#5e8d75] text-sm font-bold leading-normal tracking-[0.015em] text-center">
                        <i class="fa fa-edit mr-2 cursor-pointer"></i>
                        <i class="fa fa-trash text-red-500 cursor-pointer"></i>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-9663089d-cedc-4805-9bda-6ef73195d631-column-120{display: none;}}
                @container(max-width:240px){.table-9663089d-cedc-4805-9bda-6ef73195d631-column-240{display: none;}}
                @container(max-width:360px){.table-9663089d-cedc-4805-9bda-6ef73195d631-column-360{display: none;}}
                @container(max-width:480px){.table-9663089d-cedc-4805-9bda-6ef73195d631-column-480{display: none;}}
                @container(max-width:600px){.table-9663089d-cedc-4805-9bda-6ef73195d631-column-600{display: none;}}
              </style>
            </div>
          </div>
        </div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
