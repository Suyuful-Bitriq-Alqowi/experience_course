@extends('layouts.app')

@section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="bg-white rounded-xl shadow-lg flex flex-col lg:flex-row overflow-hidden max-w-4xl w-full">
        <!-- Image Section -->
        <div class="lg:w-1/2">
            <img
                src="https://www.apple.com/v/iphone-16/d/images/overview/apple-intelligence/apple_intelligence_endframe__ewm1810mnb0i_xlarge.jpg"
                alt="Contact"
                class="h-full w-full object-cover"
            />
        </div>

        <!-- Form Section -->
        <div class="lg:w-1/2 p-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Contact</h1>
            <p class="text-gray-600 mb-6">We will answer your question and problem</p>

            <form action="#" method="POST" class="space-y-4" id="contactForm">
                <!-- First Name and Last Name -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-center border rounded-lg p-2 bg-gray-100">
                        <span class="material-icons text-gray-500 mr-2">person</span>
                        <input
                            type="text"
                            name="first_name"
                            placeholder="First Name"
                            class="bg-transparent w-full focus:outline-none"
                        />
                    </div>
                    <div class="flex items-center border rounded-lg p-2 bg-gray-100">
                        <span class="material-icons text-gray-500 mr-2">person</span>
                        <input
                            type="text"
                            name="last_name"
                            placeholder="Last Name"
                            class="bg-transparent w-full focus:outline-none"
                        />
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-center border rounded-lg p-2 bg-gray-100">
                    <span class="material-icons text-gray-500 mr-2">email</span>
                    <input
                        type="email"
                        name="email"
                        placeholder="E-mail"
                        class="bg-transparent w-full focus:outline-none"
                    />
                </div>

                <!-- Phone -->
                <div class="flex items-center border rounded-lg p-2 bg-gray-100">
                    <span class="material-icons text-gray-500 mr-2">phone</span>
                    <input
                        type="tel"
                        name="phone"
                        placeholder="Phone"
                        class="bg-transparent w-full focus:outline-none"
                    />
                </div>

                <!-- Message -->
                <div class="flex items-center border rounded-lg p-2 bg-gray-100">
                    <textarea
                        name="message"
                        rows="4"
                        placeholder="Describe your issue"
                        class="bg-transparent w-full focus:outline-none resize-none"
                    ></textarea>
                </div>

                <!-- Submit Button -->
                <div>
                    <button
                        type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition"
                    >
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Notification Toast -->
<div id="toast" class="fixed bottom-10 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-green-400 to-green-500 text-white py-3 px-6 rounded-lg shadow-lg opacity-0 pointer-events-none transition-all duration-500 ease-in-out transform scale-95">
    <div class="flex items-center space-x-3">
        <p id="toastMessage" class="text-lg">Your message has been sent successfully!</p>
    </div>
</div>

<script>
    document.getElementById('contactForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Input fields
        const firstName = this.first_name;
        const lastName = this.last_name;
        const email = this.email;
        const phone = this.phone;
        const message = this.message;

        // Flag for validation
        let isValid = true;

        // Helper function to show error
        function showError(input, message) {
            input.classList.add('border-red-500');
            input.placeholder = message;
            isValid = false;
        }

        // Reset validation state
        [firstName, lastName, email, phone, message].forEach(input => input.classList.remove('border-red-500'));

        // Validate each input
        if (!firstName.value.trim()) showError(firstName, 'First Name is required');
        if (!lastName.value.trim()) showError(lastName, 'Last Name is required');
        if (!email.value.trim()) showError(email, 'Email is required');
        if (!phone.value.trim()) showError(phone, 'Phone is required');
        if (!message.value.trim()) showError(message, 'Message is required');

        if (!isValid) return; // Stop submission if invalid

        // Show the toast notification
        const toast = document.getElementById('toast');
        toast.classList.remove('opacity-0', 'pointer-events-none', 'scale-95');
        toast.classList.add('opacity-100', 'pointer-events-auto', 'scale-100');

        // Reset the form
        this.reset();

        // Hide the toast notification after 3 seconds
        setTimeout(function () {
            toast.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
            toast.classList.remove('opacity-100', 'pointer-events-auto', 'scale-100');
        }, 3000); // Hide after 3 seconds
    });
</script>
@endsection
