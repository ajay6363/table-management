 <!-- Footer -->
 <footer class="content-footer footer bg-footer-theme">
   <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
     <div class="mb-2 mb-md-0">
       ©
       <script>
         document.write(new Date().getFullYear());
       </script>
       , made with ❤️ by
       <a href="#" target="_blank" class="footer-link fw-bolder">Ajay Narayanan S</a>
     </div>

   </div>
 </footer>
 <!-- / Footer -->

 <!-- Content wrapper -->
 </div>
 <!-- / Layout page -->
 </div>

 <!-- Overlay -->
 <div class="layout-overlay layout-menu-toggle"></div>
 </div>
 <!-- / Layout wrapper -->



 <!-- Core JS -->
 <!-- build:js assets/vendor/js/core.js -->
 <script src="{{url('public/assets/admin/assets/vendor/libs/jquery/jquery.js')}}"></script>
 <script src="{{url('public/assets/admin/assets/vendor/libs/popper/popper.js')}}"></script>
 <script src="{{url('public/assets/admin/assets/vendor/js/bootstrap.js')}}"></script>
 <script src="{{url('public/assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

 <script src="{{url('public/assets/admin/assets/vendor/js/menu.js')}}"></script>
 <!-- endbuild -->

 <!-- Vendors JS -->
 <script src="{{url('public/assets/admin/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

 <!-- Main JS -->
 <script src="{{url('public/assets/admin/assets/js/main.js')}}"></script>

 <!-- Page JS -->
 <script src="{{url('public/assets/admin/assets/js/dashboards-analytics.js')}}"></script>
 <script src="{{url('public/assets/admin/assets/js/pages-account-settings-account.js')}}"></script>
 <!---logout--->
 <script>
   history.pushState(null, null, document.URL);
   window.addEventListener('popstate', function() {
     history.pushState(null, null, document.URL);
   });
 </script>

 <!---Table--->
 <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
 <script>
   $(document).ready(function() {
     $('#table').DataTable();
   });
 </script>

 <!-- Place this tag in your head or just before your close body tag. -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>
     
 </body>

 </html>