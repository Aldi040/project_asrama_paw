<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   TailAdmin Dashboard
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Inter', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <div class="flex">
   <!-- Sidebar -->
   <div class="bg-gray-900 text-white w-64 min-h-screen">
    <div class="p-6">
     <div class="flex items-center space-x-2">
      <div class="bg-blue-600 p-2 rounded">
       <i class="fas fa-chart-bar text-white">
       </i>
      </div>
      <span class="text-xl font-semibold">
       Asrama
      </span>
     </div>
    </div>
    <nav class="mt-6">
     <div class="px-6 py-2 text-gray-400">
      MENU
     </div>
     <a class="flex items-center px-6 py-2 text-gray-200" href="dashboard.php">
      <i class="fas fa-tachometer-alt mr-3">
      </i>
      <span>
       Dashboard
      </span>
     </a>
     <a class="flex items-center px-6 py-2 text-gray-400" href="data_user.php">
      <i class="fas fa-users mr-3">
      </i>
      <span>
       Data User
      </span>
     </a>
     <div class="px-6 py-2 text-gray-200 bg-gray-800 cursor-pointer" id="ekstrakulikulerMenuButton">
      <div class="flex items-center justify-between">
       <div class="flex items-center">
        <i class="fas fa-futbol mr-3">
        </i>
        <span>
         Ekstrakulikuler
        </span>
       </div>
       <i class="fas fa-chevron-down">
       </i>
      </div>
     </div>
     <div class="hidden" id="ekstrakulikulerMenu">
      <a class="flex items-center px-6 py-2 text-gray-400" href="bahasa_arab.php">
       <span>
        Bahasa Arab
       </span>
      </a>
      <a class="flex items-center px-6 py-2 text-gray-400" href="bahasa_inggris.php">
       <span>
        Bahasa Inggris
       </span>
      </a>
      <a class="flex items-center px-6 py-2 text-gray-400" href="arduino.php">
       <span>
        Arduino
       </span>
      </a>
      <a class="flex items-center px-6 py-2 text-gray-400" href="sholawat.php">
       <span>
        Sholawat
       </span>
      </a>
      <a class="flex items-center px-6 py-2 text-gray-400" href="qiroah_alquran.php">
       <span>
        Qiroah Alquran
       </span>
      </a>
     </div>
     <a class="flex items-center px-6 py-2 text-gray-400" href="#">
      <i class="fas fa-bed mr-3">
      </i>
      <span>
       Kamar
      </span>
     </a>
     <a class="flex items-center px-6 py-2 text-gray-400" href="kamar.php">
      <i class="fas fa-concierge-bell mr-3">
      </i>
      <span>
       Fasilitas
      </span>
     </a>
     <a class="flex items-center px-6 py-2 text-gray-400" href="fasilitas.php">
      <i class="fas fa-user mr-3">
      </i>
      <span>
       Profil
      </span>
     </a>
    </nav>
   </div>
   <!-- Main Content -->
   <div class="flex-1 p-6">
    <!-- Top Bar -->
    <div class="flex justify-between items-center mb-6 bg-white p-4 rounded-lg shadow w-full">
     <div class="flex items-center space-x-4">
      <button class="bg-gray-200 text-gray-600 rounded-full p-2" id="themeSwitcher">
       <i class="fas fa-adjust">
       </i>
      </button>
     </div>
     <div class="flex items-center space-x-4 relative">
      <i class="fas fa-bell text-gray-500 relative">
      </i>
      <i class="fas fa-comment-dots text-gray-500">
      </i>
      <div class="flex items-center space-x-2">
       <img alt="User profile picture" class="rounded-full w-10 h-10" height="40" src="https://storage.googleapis.com/a1aa/image/i1eWJhfqylsCfotUL0HeeGoG0SxXnjBPUm14ZUAN0u8TvL0dC.jpg" width="40"/>
       <div>
        <div class="text-gray-800 font-semibold">
         Thomas Anree
        </div>
        <div class="text-gray-500 text-sm">
         Admin
        </div>
       </div>
       <i class="fas fa-chevron-down text-gray-500 cursor-pointer" id="profileMenuButton">
       </i>
       <div class="absolute right-0 mt-12 w-48 bg-white rounded-lg shadow-lg py-2 hidden" id="profileMenu">
        <a class="block px-4 py-2 text-gray-800 hover:bg-gray-100" href="#">
         <i class="fas fa-sign-out-alt mr-2">
         </i>
         Logout
        </a>
       </div>
      </div>
     </div>
    </div>
    <!-- Data User Table -->
    <div class="bg-white p-6 rounded-lg shadow">
     <div class="text-gray-800 font-semibold mb-4">
      Data User
     </div>
     <div class="overflow-x-auto">
      <table class="min-w-full bg-white">
       <thead>
        <tr>
         <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">
          Name
         </th>
         <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">
          Email
         </th>
         <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">
          Role
         </th>
         <th class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">
          Actions
         </th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td class="py-2 px-4 border-b border-gray-200">
          John Doe
         </td>
         <td class="py-2 px-4 border-b border-gray-200">
          john@example.com
         </td>
         <td class="py-2 px-4 border-b border-gray-200">
          Admin
         </td>
         <td class="py-2 px-4 border-b border-gray-200">
          <button class="bg-blue-500 text-white px-2 py-1 rounded">
           Edit
          </button>
          <button class="bg-red-500 text-white px-2 py-1 rounded">
           Delete
          </button>
         </td>
        </tr>
        <tr>
         <td class="py-2 px-4 border-b border-gray-200">
          Jane Smith
         </td>
         <td class="py-2 px-4 border-b border-gray-200">
          jane@example.com
         </td>
         <td class="py-2 px-4 border-b border-gray-200">
          User
         </td>
         <td class="py-2 px-4 border-b border-gray-200">
          <button class="bg-blue-500 text-white px-2 py-1 rounded">
           Edit
          </button>
          <button class="bg-red-500 text-white px-2 py-1 rounded">
           Delete
          </button>
         </td>
        </tr>
        <tr>
         <td class="py-2 px-4 border-b border-gray-200">
          Alice Johnson
         </td>
         <td class="py-2 px-4 border-b border-gray-200">
          alice@example.com
         </td>
         <td class="py-2 px-4 border-b border-gray-200">
          Moderator
         </td>
         <td class="py-2 px-4 border-b border-gray-200">
          <button class="bg-blue-500 text-white px-2 py-1 rounded">
           Edit
          </button>
          <button class="bg-red-500 text-white px-2 py-1 rounded">
           Delete
          </button>
         </td>
        </tr>
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
  <script>
   document.getElementById('themeSwitcher').addEventListener('click', function() {
            document.body.classList.toggle('bg-gray-100');
            document.body.classList.toggle('bg-gray-900');
            document.querySelectorAll('.bg-white').forEach(el => el.classList.toggle('bg-gray-800'));
            document.querySelectorAll('.text-gray-800').forEach(el => el.classList.toggle('text-gray-200'));
            document.querySelectorAll('.text-gray-500').forEach(el => el.classList.toggle('text-gray-400'));
            document.querySelectorAll('.text-gray-600').forEach(el => el.classList.toggle('text-gray-300'));
        });

        document.getElementById('profileMenuButton').addEventListener('click', function() {
            document.getElementById('profileMenu').classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            const profileMenu = document.getElementById('profileMenu');
            const profileMenuButton = document.getElementById('profileMenuButton');
            if (!profileMenu.contains(event.target) && !profileMenuButton.contains(event.target)) {
                profileMenu.classList.add('hidden');
            }
        });
        document.getElementById('ekstrakulikulerMenuButton').addEventListener('click', function() {
            document.getElementById('ekstrakulikulerMenu').classList.toggle('hidden');
        });
  </script>
 </body>
</html>