<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&family=Inter:wght@400;500;700;900&family=Noto+Sans:wght@400;500;700;900"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>ระบบจัดการเช่ารถ</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <div class="main-wrapper relative flex min-h-screen flex-col bg-[#f8fcfa] group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <header class="fixed top-0 left-0 w-full z-50 bg-[#f8fcfa] flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e6f4ef] px-10 py-3 shadow-sm">

          <div class="flex items-center gap-4 text-[#0c1c17]">
            <!-- <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z"
                  fill="currentColor"
                ></path>
              </svg>
          </div> -->
            <h2 class="text-[#0c1c17] text-lg font-bold leading-tight tracking-[-0.015em] flex items-center gap-2"><i class="fa fa-car"></i>ระบบจัดการเช่ารถ</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#0c1c17] text-sm font-medium leading-normal" href="dashboard">Dashboard</a>
              <a class="text-[#0c1c17] text-sm font-medium leading-normal" href="rental">ไปเช่ารถ</a>
              <a class="text-[#0c1c17] text-sm font-medium leading-normal" href="car">ข้อมูลรถ</a>
              <a class="text-[#0c1c17] text-sm font-medium leading-normal" href="user">สมาชิก</a>
              <a class="text-[#0c1c17] text-sm font-medium leading-normal" href="rent">ค่าเช่ารถ</a>
              <a class="text-[#0c1c17] text-sm font-medium leading-normal" href="report">รายงาน</a>
            </div>
            <div class="flex gap-2">

            </div>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAb2aO0eEkp5TdPIH6pVrbf30uy9UEvi15Wt8vfuZUEecSMDN_5fBlkiPNrae5jKYf35Id_6lCgjXpEHJ-E4C3OtwCFf4JfaPNed5mphBT0Vs8OX4qN2MvdS_jMRxA3jPYM6XPfPhf0DBB07x9fdrkngGN1hTK0ziG9ls3_DZMFsDWmp7JOrygPJ10lynaDtS7scejAFiX41zSU8Bu8oVTF4X6EAhYQTSbdsOrNoTuXtBKrwfINbtzGshMoPhW7DNhIAqGIISm1Ig");'
            ></div>
          </div>
        </header>
        <div class="layout-container flex h-full grow flex-col" style="padding-top:72px;">
   