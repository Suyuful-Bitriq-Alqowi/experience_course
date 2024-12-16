<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 via-blue-500 to-blue-700 py-20 text-white text-center">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl sm:text-6xl font-extrabold mb-6">Welcome to Experience</h1>
            <p class="text-xl sm:text-2xl mb-8">Discover new skills, grow professionally, and connect with an inspiring community.</p>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-blue-50 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-12">What People Are Saying</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm">
                    <img src="https://i.pinimg.com/736x/ca/61/0a/ca610a941e1ad4f5a12a0f06f1a5769c.jpg" alt="John Doe" class="h-16 w-16 rounded-full mx-auto mb-4">
                    <p class="text-gray-600 mb-4">"An incredible platform! I learned so much, and it really helped me in my career."</p>
                    <p class="font-semibold">Bang Boi</p>
                    <p class="text-gray-500">Web Developer</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm">
                    <img src="https://i.pinimg.com/736x/6d/55/51/6d55517801227de65f781cc0c0a056ca.jpg" alt="Jane Smith" class="h-16 w-16 rounded-full mx-auto mb-4">
                    <p class="text-gray-600 mb-4">"The content is top-notch, and the community is so supportive. Highly recommend it!"</p>
                    <p class="font-semibold">Caesar kaf</p>
                    <p class="text-gray-500">UX/UI Designer</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm">
                    <img src="https://i.pinimg.com/736x/1a/e5/5a/1ae55acedbbd4c5c10dab81fbefe1e56.jpg" alt="Mark Lee" class="h-16 w-16 rounded-full mx-auto mb-4">
                    <p class="text-gray-600 mb-4">"Learning made easy with interactive lessons. The best part is the real-world applications!"</p>
                    <p class="font-semibold">Miqdam Raffi</p>
                    <p class="text-gray-500">Product Manager</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm">
                    <img src="https://i.pinimg.com/736x/e0/5a/46/e05a467e9af0d3dc9e3b95273e481c6c.jpg" alt="Mark Lee" class="h-16 w-16 rounded-full mx-auto mb-4">
                    <p class="text-gray-600 mb-4">"The learning experience at Experience is very satisfying, because each course is designed to meet the needs of participants with innovative methods and full support from the instructor."</p>
                    <p class="font-semibold">Rayhan FR</p>
                    <p class="text-gray-500">Student</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm">
                    <img src="https://i.pinimg.com/736x/ac/77/2c/ac772cd709336c8b9bcaf19bc280c293.jpg" alt="Mark Lee" class="h-16 w-16 rounded-full mx-auto mb-4">
                    <p class="text-gray-600 mb-4">"The Experience for Android Developers course provides in-depth insight into Android app development, with comprehensive material and practical exercises that help build real apps."</p>
                    <p class="font-semibold">Yusuf Mubrikz</p>
                    <p class="text-gray-500">Android Developer</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm">
                    <img src="https://i.pinimg.com/736x/a0/5b/82/a05b822d710b155987cbf666e7608a93.jpg" alt="Mark Lee" class="h-16 w-16 rounded-full mx-auto mb-4">
                    <p class="text-gray-600 mb-4">"The IoT Developer course at Experience features structured learning that combines theory and practice, enabling participants to develop innovative solutions in the world of the Internet of Things."</p>
                    <p class="font-semibold">Andhika Eka</p>
                    <p class="text-gray-500">IoT Developer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Code Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-12">Coding News</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Code Example 1 -->
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://awsimages.detik.net.id/visual/2024/06/06/presiden-dan-ceo-nvidia-corporation-jensen-huang-menyampaikan-pidato-saat-pameran-computex-2024-di-taipei-taiwan-minggu-2-juni-2_169.jpeg?w=650" alt="Code Example One" class="mx-auto mb-4 rounded-lg h-48 w-full object-cover">
                    <h3 class="text-2xl font-semibold mb-4">IDR 1,700 Trillion Man Says It's Useless to Study Computer Science</h3>
                    <p class="text-gray-700 mb-4">A billionaire worth $1.7 trillion claiming that studying computer science is pointless likely seeks to provoke thought about success through entrepreneurship and practical experience, rather than relying solely on formal education in specific fields.</p>
                </div>

                <!-- Code Example 2 -->
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://img.pikbest.com/origin/10/10/69/922pIkbEsT3nB.jpg!w700wp" alt="Code Example Two" class="mx-auto mb-4 rounded-lg h-48 w-full object-cover">
                    <h3 class="text-2xl font-semibold mb-4">AI Makes Banks More Productive, But Can't Make Money Yet</h3>
                    <p class="text-gray-700 mb-4">AI helps banks become more productive by automating routine tasks, improving decision-making, and enhancing customer service. However, it still hasn't proven to be a direct source of profit, as its value lies in supporting operations rather than generating revenue on its own.</p>
                </div>

                <!-- Code Example 3 -->
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="https://asset.kompas.com/crops/x8oHk94oVvYb0QTBqtSeWaBe9tc=/0x0:0x0/1200x800/data/photo/2024/06/23/6677e2e6425e4.jpeg" alt="Code Example Three" class="mx-auto mb-4 rounded-lg h-48 w-full object-cover">
                    <h3 class="text-2xl font-semibold mb-4">Elementary and Middle School Children Learn Coding, Meutya Hafid Starts Preparing Curriculum</h3>
                    <p class="text-gray-700 mb-4">Meutya Hafid is working on developing a curriculum to teach coding to elementary and middle school children, aiming to equip young learners with essential programming skills for the future.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
