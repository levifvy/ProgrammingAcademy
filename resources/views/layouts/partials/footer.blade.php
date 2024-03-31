<footer class="flex flex-col bg-gradient-to-r from-rose-500 to-purple-500 py-4 sm:flex-row mt-auto">
    <div class="container mx-auto flex flex-col sm:flex-row">
        <div class="flex-1 px-2 sm:px-4">
            <h3 class="text-xl font-bold text-white">Contact Us</h3>
            <a href="{{ route('contactUs.index') }}"><p class="text-gray-200 hover:text-blue-400">Leave us your message</p></a>
            <a href="https://www.google.es/maps/place/Instituto+p%C3%BAblico+Puig+Castellar/@41.4555239,2.2030018,14.59z/data=!4m14!1m7!3m6!1s0x12a4bcf3c7a3aa23:0x9711d34b7cfe4e4f!2sInstituto+p%C3%BAblico+Puig+Castellar!8m2!3d41.4554767!4d2.2015741!16s%2Fg%2F1q5ccd875!3m5!1s0x12a4bcf3c7a3aa23:0x9711d34b7cfe4e4f!8m2!3d41.4554767!4d2.2015741!16s%2Fg%2F1q5ccd875?entry=ttu" target="_blank"><p class="text-gray-200 hover:text-red-400">Instituto público Puig Castellar</p></a>
        </div>
        <div class="flex-1 px-2 sm:px-4 mt-4 sm:mt-0 text-center">
            <h3 class="text-xl font-bold text-white">Social Media</h3>
            <ul class="flex flex-col sm:flex-row mt-2 font-semibold">
                <li class="mr-4 sm:mr-8"><a href="https://www.facebook.com/TechCodeAcademy.es/" target="_blank" class="text-gray-200 hover:text-white">Facebook</a></li>
                <li class="mr-4 sm:mr-8"><a href="https://www.twitter.com/TCAcademyES" target="_blank" class="text-gray-200 hover:text-white">Twitter</a></li>
                <li class="mr-4 sm:mr-8"><a href="https://www.instagram.com/techcodeacademy.es/" target="_blank" class="text-gray-200 hover:text-white">Instagram</a></li>
                <li class="mr-4 sm:mr-8"><a href="https://www.linkedin.com/in/tech-codeacademy-0b6737301/" target="_blank" class="text-gray-200 hover:text-white">Linkedin</a></li>
                <li class="mr-4 sm:mr-8"><a href="https://www.youtube.com/your-youtube-channel" target="_blank" class="text-gray-200 hover:text-white">YouTube</a></li>
            </ul>
        </div>
        
        <div class="flex-1 px-2 sm:px-4 mt-4 sm:mt-0 flex items-center justify-center">
            <a href="https://elpuig.xeill.net/" target="_blank">
                <div class="flex items-center">
                    <img class="bg-transparent" src="{{asset('/img/puig.jpg')}}" alt="image" loading="lazy" width="50" height="50">
                    <div class="ml-4">
                        <span class="font-semibold text-xs tracking-tight text-white">Certified by:</span>
                        <span class="font-semibold text-xl tracking-tight text-white">Institute "El Puig"</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</footer>
