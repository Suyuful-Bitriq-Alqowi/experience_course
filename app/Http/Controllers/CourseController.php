<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Method untuk menampilkan daftar kursus
    public function index(Request $request)
    {
        // Ambil query pencarian dari input pengguna (jika ada)
        $searchQuery = $request->input('search');

        // Data kursus (dummy data)
        $courses = [
            (object) ['id' => 1, 'title' => 'Internet of Things for Beginner', 'image' => 'https://p3k.uma.ac.id/wp-content/uploads/2022/02/iot-l-min.jpg', 'level' => 'Beginner', 'price' => 'Free'],
            (object) ['id' => 2, 'title' => 'JavaScript Essentials', 'image' => 'https://img.bytebloggerbase.com/uploads//1718693266020.jpg', 'level' => 'Intermediate', 'price' => 'Free'],
            (object) ['id' => 3, 'title' => 'Advanced CSS Animations', 'image' => 'https://blog.pixelfreestudio.com/wp-content/uploads/2024/07/maxresdefault-46-1-1024x576.jpg', 'level' => 'Advanced', 'price' => 'Free'],
            (object) ['id' => 4, 'title' => 'HTML Basics', 'image' => 'https://i.ytimg.com/vi/7M9JSPKAbvk/maxresdefault.jpg', 'level' => 'Beginner', 'price' => 'Free'],
            (object) ['id' => 5, 'title' => 'React.js for Intermediate Developers', 'image' => 'https://miro.medium.com/v2/resize:fit:1400/1*x0d41ns8PTQZz4a3VbMrBg.png', 'level' => 'Intermediate', 'price' => 'Free'],
            (object) ['id' => 6, 'title' => 'Python for Data Science', 'image' => 'https://infycletechnologies.com/wp-content/uploads/2023/07/Python-Data-Science.webp', 'level' => 'Advanced', 'price' => 'Free'],
            (object) ['id' => 7, 'title' => 'Beginner’s Guide to Cybersecurity', 'image' => 'https://www.linknet.id/files/photos/shares/article/cyber%20security.jpg', 'level' => 'Beginner', 'price' => 'Free'],
            (object) ['id' => 8, 'title' => 'Node.js and Express Essentials', 'image' => 'https://d1uxiwmpc9j4yg.cloudfront.net/images/all/71302-express.js-chrome-javascript-system-node.js-v8-runtime_1687631713.png', 'level' => 'Intermediate', 'price' => 'Free'],
            (object) ['id' => 9, 'title' => 'Machine Learning Masterclass', 'image' => 'https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/MSFT-Large-futuristic-computer-on-a-desk?scl=1&fmt=png-alpha', 'level' => 'Advanced', 'price' => 'Free'],
        ];

        // Jika ada query pencarian, filter berdasarkan judul kursus
        if ($searchQuery) {
            $courses = collect($courses)->filter(function ($course) use ($searchQuery) {
                return str_contains(strtolower($course->title), strtolower($searchQuery));
            });
        }

        // Kirimkan data kursus ke tampilan
        return view('courses.index', compact('courses'));
    }

    // Method untuk menampilkan detail kursus
    public function show($id)
    {
        // Data kursus
        $courses = [
            (object) ['id' => 1, 'title' => 'Internet of Things for Beginner', 'image' => 'https://p3k.uma.ac.id/wp-content/uploads/2022/02/iot-l-min.jpg', 'level' => 'Beginner', 'price' => 'Free'],
            (object) ['id' => 2, 'title' => 'JavaScript Essentials', 'image' => 'https://img.bytebloggerbase.com/uploads//1718693266020.jpg', 'level' => 'Intermediate', 'price' => 'Free'],
            (object) ['id' => 3, 'title' => 'Advanced CSS Animations', 'image' => 'https://blog.pixelfreestudio.com/wp-content/uploads/2024/07/maxresdefault-46-1-1024x576.jpg', 'level' => 'Advanced', 'price' => 'Free'],
            (object) ['id' => 4, 'title' => 'HTML Basics', 'image' => 'https://i.ytimg.com/vi/7M9JSPKAbvk/maxresdefault.jpg', 'level' => 'Beginner', 'price' => 'Free'],
            (object) ['id' => 5, 'title' => 'React.js for Intermediate Developers', 'image' => 'https://miro.medium.com/v2/resize:fit:1400/1*x0d41ns8PTQZz4a3VbMrBg.png', 'level' => 'Intermediate', 'price' => 'Free'],
            (object) ['id' => 6, 'title' => 'Python for Data Science', 'image' => 'https://infycletechnologies.com/wp-content/uploads/2023/07/Python-Data-Science.webp', 'level' => 'Advanced', 'price' => 'Free'],
            (object) ['id' => 7, 'title' => 'Beginner’s Guide to Cybersecurity', 'image' => 'https://www.linknet.id/files/photos/shares/article/cyber%20security.jpg', 'level' => 'Beginner', 'price' => 'Free'],
            (object) ['id' => 8, 'title' => 'Node.js and Express Essentials', 'image' => 'https://d1uxiwmpc9j4yg.cloudfront.net/images/all/71302-express.js-chrome-javascript-system-node.js-v8-runtime_1687631713.png', 'level' => 'Intermediate', 'price' => 'Free'],
            (object) ['id' => 9, 'title' => 'Machine Learning Masterclass', 'image' => 'https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/MSFT-Large-futuristic-computer-on-a-desk?scl=1&fmt=png-alpha', 'level' => 'Advanced', 'price' => 'Free'],
        ];

        // Temukan kursus berdasarkan ID
        $course = collect($courses)->firstWhere('id', $id);

        // Jika kursus tidak ditemukan, tampilkan halaman 404
        if (!$course) {
            abort(404, 'Course not found');
        }

        // Kirimkan detail kursus ke tampilan
        return view('courses.show', compact('course'));
    }
}
