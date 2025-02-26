 <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

 <!-- Contact Section -->
 <section id="contact" class="py-5 bg-light">
     <div class="container">
         <h2 class="text-center mb-4">যোগাযোগ</h2>
         <div class="row">
             <div class="col-md-6">
                 <div class="contact-info">
                     <p><strong>ফোন:</strong> +৮৮-০১২৩৪৫৬৭৮৯</p>
                     <p><strong>ইমেইল:</strong> info@modinaonlinemadrasah.com</p>
                     <p><strong>ঠিকানা:</strong> ঢাকা, বাংলাদেশ</p>
                 </div>
             </div>
             <div class="col-md-6">
                 @if (session('success'))
                     <div class="alert alert-success">
                         {{ session('success') }}
                     </div>
                 @endif

                 <div class="contact-form">
                     <form action="{{ route('feedback.store') }}" method="POST">
                         @csrf
                         <div class="mb-3">
                             <input type="text" class="form-control" name="name" placeholder="নাম" required>
                         </div>
                         <div class="mb-3">
                             <input type="email" class="form-control" name="email" placeholder="ইমেইল">
                         </div>
                         <div class="mb-3">
                             <textarea class="form-control" name="message" rows="5" placeholder="বার্তা" required></textarea>
                         </div>
                         <button type="submit" class="btn btn-dark">পাঠান</button>
                     </form>

                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Footer Section -->
 <footer class="py-5">
     <div class="container">
         <div class="row">
             <!-- About -->
             <div class="col-md-4 mb-4">
                 <h5>মদিনা অনলাইন মাদরাসা</h5>
                 <p>ইসলামী শিক্ষার উৎকর্ষ সাধনে নিবেদিত।</p>
             </div>
             <!-- Quick Links -->
             <div class="col-md-4 mb-4">
                 <h5>দ্রুত লিঙ্ক</h5>
                 <ul class="list-unstyled">
                     <li><a href="#" class="text-decoration-none">হোম</a></li>
                     <li><a href="#courses" class="text-decoration-none">কোর্স</a></li>
                     <li><a href="#about" class="text-decoration-none">আমাদের সম্পর্কে</a></li>
                     <li><a href="#contact" class="text-decoration-none">যোগাযোগ</a></li>
                     <li><a href="#" class="text-decoration-none">প্রাইভেসি পলিসি</a></li>
                     <li><a href="#" class="text-decoration-none">টার্মস অব সার্ভিস</a></li>
                 </ul>
             </div>
             <!-- Contact Info -->
             <div class="col-md-4 mb-4">
                 <h5>যোগাযোগ</h5>
                 <p>ঢাকা, বাংলাদেশ</p>
                 <p>ফোন: +৮৮-০১২৩৪৫৬৭৮৯</p>
                 <p>ইমেইল: info@modinaonlinemadrasah.com</p>
             </div>
         </div>

         <!-- Social Media -->
         <div class="row mt-4">
             <div class="col text-center social-icons">
                 <a href="#"><i class="fab fa-facebook-f text-white"></i></a>
                 <a href="#"><i class="fab fa-twitter text-white"></i></a>
                 <a href="#"><i class="fab fa-instagram text-white"></i></a>
                 <a href="#"><i class="fab fa-youtube text-white"></i></a>
             </div>
         </div>

         <!-- Bottom Footer -->
         <div class="row mt-4 footer-bottom text-center">
             <div class="col">
                 <p class="mb-0">© ২০২৫ মদিনা অনলাইন মাদরাসা. সকল স্বত্ব সংরক্ষিত।</p>
                 <p class="mb-0">Developed by <a href="mailto:msrnayeem@gmail.com" class="text-decoration-none">Msr
                         Nayeem</a></p>
             </div>
         </div>
     </div>
 </footer>
