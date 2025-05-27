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
                id="addCarBtn"
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
                    id="searchInput"
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
                        $car_id = $car['id'];

                        ?>
                        
                    <tr class="border-t border-t-[#dce1e5]">
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-120 h-[72px] px-4 py-2 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal"><?php echo $i++; ?></td>
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-176 h-[72px] px-4 py-2 w-14 text-sm font-normal leading-normal">
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-20 cursor-pointer view-car-image"
                          style='background-image: url("<?php echo $car_image; ?>");'
                          data-image-url="<?php echo $car_image; ?>"
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
                      <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-896 h-[72px] px-2 py-1 w-[200px] text-center text-[#637988] text-sm font-bold leading-normal tracking-[0.015em]">
                        <i class="fa fa-edit mr-2 cursor-pointer edit-car-btn" data-car-id="<?php echo $car_id; ?>"></i>
                        <i class="fa fa-trash text-red-500 cursor-pointer delete-car-btn" data-car-id="<?php echo $car_id; ?>"></i>

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

<!-- Modal เพิ่ม/แก้ไขข้อมูลรถ -->
<div id="editCarModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-40 flex items-center justify-center">
  <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl p-6 relative">
    <button id="closeEditCarModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">&times;</button>
    <h2 id="modalTitle" class="text-xl font-bold mb-4">เพิ่มข้อมูลรถ</h2>
    <form id="editCarForm">
      <input type="hidden" id="edit_car_id" name="car_id">
      <div class="grid grid-cols-2 gap-4">
        <div class="space-y-4">
          <div>
            <label class="block text-sm font-medium mb-1">ทะเบียนรถ</label>
            <input type="text" id="edit_car_number" name="car_number" class="form-input w-full border rounded px-3 py-2" required>
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">ยี่ห้อ</label>
            <input type="text" id="edit_car_brand" name="car_brand" class="form-input w-full border rounded px-3 py-2" required>
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">รุ่น</label>
            <input type="text" id="edit_car_model" name="car_model" class="form-input w-full border rounded px-3 py-2" required>
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">จำนวนที่นั่ง</label>
            <input type="number" id="edit_car_seat" name="car_seat" class="form-input w-full border rounded px-3 py-2" value="4" required>
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">สี</label>
            <input type="text" id="edit_car_color" name="car_color" class="form-input w-full border rounded px-3 py-2">
          </div>
        </div>
        <div class="space-y-4">
          <div>
            <label class="block text-sm font-medium mb-1">ปีที่จดทะเบียน</label>
            <input type="number" id="edit_car_year" name="car_year" class="form-input w-full border rounded px-3 py-2">
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">สถานะ</label>
            <select id="edit_car_status" name="car_status" class="form-select w-full border rounded px-3 py-2" required>
              <option value="available">ว่าง</option>
              <option value="booked">จอง</option>
              <option value="unavailable">ไม่ใช้งาน</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">รูปภาพ URL</label>
            <input type="text" id="edit_car_image" name="car_image" class="form-input w-full border rounded px-3 py-2">
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">หมายเหตุ</label>
            <textarea id="edit_car_note" name="car_note" class="form-input w-full border rounded px-3 py-2 h-20 resize-none"></textarea>
          </div>
        </div>
      </div>
      <div class="flex justify-center space-x-4 mt-6">
        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg">บันทึก</button>
        <button type="button" id="cancelEditCarBtn" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-lg">ยกเลิก</button>
      </div>
    </form>
  </div>
</div>

<script>
let isEditMode = false;

// ปิด modal
$('#closeEditCarModal, #cancelEditCarBtn').on('click', function() {
    $('#editCarModal').addClass('hidden');
    resetForm();
});

// เปิด modal เพิ่มข้อมูล
$('#addCarBtn').on('click', function() {
    isEditMode = false;
    $('#modalTitle').text('เพิ่มข้อมูลรถ');
    resetForm();
    $('#editCarModal').removeClass('hidden');
});

// เปิด modal แก้ไขข้อมูล
$('.edit-car-btn').on('click', function() {
    isEditMode = true;
    $('#modalTitle').text('แก้ไขข้อมูลรถ');
    var carId = $(this).data('car-id');
    
    $.ajax({
        url: 'index.php?action=getCar',
        type: 'GET',
        data: { car_id: carId },
        success: function(response) {
            const car = JSON.parse(response);
            if (car) {
                $('#edit_car_id').val(car.id);
                $('#edit_car_number').val(car.license_plate);
                $('#edit_car_brand').val(car.brand);
                $('#edit_car_model').val(car.model);
                $('#edit_car_seat').val(car.seats);
                $('#edit_car_color').val(car.color);
                $('#edit_car_year').val(car.year);
                $('#edit_car_status').val(car.status);
                $('#edit_car_image').val(car.image_url);
                $('#edit_car_note').val(car.note);
                $('#editCarModal').removeClass('hidden');
            }
        }
    });
});

// รีเซ็ตฟอร์ม
function resetForm() {
    $('#edit_car_id').val('');
    $('#edit_car_number').val('');
    $('#edit_car_brand').val('');
    $('#edit_car_model').val('');
    $('#edit_car_seat').val('4');
    $('#edit_car_color').val('');
    $('#edit_car_year').val('');
    $('#edit_car_status').val('available');
    $('#edit_car_image').val('');
    $('#edit_car_note').val('');
}

// บันทึกข้อมูล
$('#editCarForm').on('submit', function(e) {
    e.preventDefault();
    
    const formData = {
        car_id: $('#edit_car_id').val(),
        car_number: $('#edit_car_number').val(),
        car_brand: $('#edit_car_brand').val(),
        car_model: $('#edit_car_model').val(),
        car_seat: $('#edit_car_seat').val(),
        car_color: $('#edit_car_color').val(),
        car_year: $('#edit_car_year').val(),
        car_status: $('#edit_car_status').val(),
        car_image: $('#edit_car_image').val(),
        car_note: $('#edit_car_note').val()
    };

    const action = isEditMode ? 'updateCar' : 'addCar';
    const successMessage = isEditMode ? 'แก้ไขข้อมูลรถเรียบร้อยแล้ว' : 'เพิ่มข้อมูลรถเรียบร้อยแล้ว';

    $.ajax({
        url: 'index.php?action=' + action,
        type: 'POST',
        data: formData,
        success: function(response) {
            const result = JSON.parse(response);
            if (result.success) {
                Swal.fire(
                    'สำเร็จ!',
                    successMessage,
                    'success'
                ).then(() => {
                    location.reload();
                });
            } else {
                Swal.fire(
                    'ผิดพลาด!',
                    'ไม่สามารถบันทึกข้อมูลได้',
                    'error'
                );
            }
        },
        error: function() {
            Swal.fire(
                'ผิดพลาด!',
                'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ได้',
                'error'
            );
        }
    });
});

// Delete car functionality
$('.delete-car-btn').on('click', function() {
    var carId = $(this).data('car-id');
    
    Swal.fire({
        title: 'คุณแน่ใจหรือไม่?',
        text: 'การลบข้อมูลไม่สามารถกู้คืนได้',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'ใช่, ลบเลย!',
        cancelButtonText: 'ยกเลิก',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'index.php?action=deleteCar',
                type: 'POST',
                data: { car_id: carId },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'ลบข้อมูลสำเร็จ',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: 'ไม่สามารถลบข้อมูลได้',
                            showConfirmButton: true
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์',
                        showConfirmButton: true
                    });
                }
            });
        }
    });
});
</script>

<!-- Modal แสดงรูปภาพ -->
<div id="imageViewerModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-75 flex items-center justify-center">
    <div class="relative">
        <button id="closeImageModal" class="absolute top-0 right-0 m-4 text-white text-xl font-bold">&times;</button>
        <img id="modalImage" src="" alt="Car Image" class="max-w-4xl max-h-[80vh] object-contain">
    </div>
</div>

<script>
// เปิด modal รูปภาพ
$('.view-car-image').on('click', function() {
    var imageUrl = $(this).data('image-url');
    if (imageUrl) {
        $('#modalImage').attr('src', imageUrl);
        $('#imageViewerModal').removeClass('hidden');
    }
});

// ปิด modal รูปภาพ
$('#closeImageModal, #imageViewerModal').on('click', function(e) {
    if (e.target === this) {
        $('#imageViewerModal').addClass('hidden');
    }
});
</script>

<script>
// ฟังก์ชันสำหรับสร้างแถวข้อมูลรถ
 function createCarRow(car, index) {
    return `
        <tr class="border-t border-t-[#dce1e5]">
            <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-120 h-[72px] px-4 py-2 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal">${index}</td>
            <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-176 h-[72px] px-4 py-2 w-14 text-sm font-normal leading-normal">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-20 cursor-pointer view-car-image"
                    style='background-image: url("${car.image_url}");'
                    data-image-url="${car.image_url}"
                ></div>
            </td>
            <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-296 h-[72px] px-2 py-1 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal">${car.license_plate}</td>
            <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-416 h-[72px] px-2 py-1 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal">${car.brand}</td>
            <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-536 h-[72px] px-2 py-1 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal">${car.model}</td>
            <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-656 h-[72px] px-2 py-1 w-[400px] text-center text-[#637988] text-sm font-normal leading-normal">${car.seats}</td>
            <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-776 h-[72px] px-2 py-1 w-[100px] text-center text-[#637988] text-sm font-normal leading-normal">
                <span class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 ${car.status_color} text-[#111518] text-sm font-medium leading-normal w-full">
                    <span class="truncate">${car.status_name}</span>
                </span>
            </td>
            <td class="table-af9c11ba-61e2-44fe-a013-03d81b2bf9b0-column-896 h-[72px] px-2 py-1 w-[200px] text-center text-[#637988] text-sm font-bold leading-normal tracking-[0.015em]">
                <i class="fa fa-edit mr-2 cursor-pointer edit-car-btn" data-car-id="${car.id}"></i>
                <i class="fa fa-trash text-red-500 cursor-pointer delete-car-btn" data-car-id="${car.id}"></i>
            </td>
        </tr>
    `;
}

// ฟังก์ชันสำหรับค้นหารถ
 let searchTimeout;
 $('#searchInput').on('input', function() {
    clearTimeout(searchTimeout);
    const keyword = $(this).val();

    // ถ้าไม่มีคำค้นหา ให้โหลดหน้าใหม่
    if (!keyword.trim()) {
        location.reload();
        return;
    }

    // รอ 300ms ก่อนส่งคำค้นหา
    searchTimeout = setTimeout(() => {
        $.ajax({
            url: 'index.php?action=searchCars',
            type: 'GET',
            data: { keyword: keyword },
            success: function(response) {
                const result = JSON.parse(response);
                if (result.success) {
                    const tbody = $('tbody');
                    tbody.empty();
                    
                    if (result.cars.length === 0) {
                        tbody.append('<tr><td colspan="8" class="text-center py-4">ไม่พบข้อมูล</td></tr>');
                    } else {
                        result.cars.forEach((car, index) => {
                            tbody.append(createCarRow(car, index + 1));
                        });
                    }

                    // เพิ่ม event listeners ใหม่สำหรับปุ่มต่างๆ
                    $('.edit-car-btn').off('click').on('click', function() {
                        var carId = $(this).data('car-id');
                        // โค้ดเดิมของปุ่มแก้ไข
                    });

                    $('.delete-car-btn').off('click').on('click', function() {
                        var carId = $(this).data('car-id');
                        Swal.fire({
                            title: 'ยืนยันการลบ',
                            text: 'คุณต้องการลบข้อมูลรถคันนี้ใช่หรือไม่?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'ใช่, ลบเลย',
                            cancelButtonText: 'ยกเลิก'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    url: 'index.php?action=deleteCar',
                                    type: 'POST',
                                    data: { car_id: carId },
                                    success: function(response) {
                                        const result = JSON.parse(response);
                                        if (result.success) {
                                            Swal.fire(
                                                'สำเร็จ!',
                                                'ลบข้อมูลรถเรียบร้อยแล้ว',
                                                'success'
                                            ).then(() => {
                                                // รีโหลดผลการค้นหา
                                                $('#searchInput').trigger('input');
                                            });
                                        } else {
                                            Swal.fire(
                                                'ผิดพลาด!',
                                                'ไม่สามารถลบข้อมูลได้',
                                                'error'
                                            );
                                        }
                                    },
                                    error: function() {
                                        Swal.fire(
                                            'ผิดพลาด!',
                                            'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ได้',
                                            'error'
                                        );
                                    }
                                });
                            }
                        });
                    });

                    $('.view-car-image').off('click').on('click', function() {
                        var imageUrl = $(this).data('image-url');
                        // โค้ดเดิมของการดูรูป
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ไม่สามารถค้นหาข้อมูลได้',
                    showConfirmButton: true
                });
            }
        });
    }, 300);
});
</script>

<?php include __DIR__ . '/layout/footer.php'; ?>