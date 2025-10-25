<!-- <!DOCTYPE html>
<html>
<body>
  <h2>New User Registered</h2>
  <p><strong>Name:</strong> {{ $user->name }}</p>
  <p><strong>Email:</strong> {{ $user->email }}</p>
  <p><strong>Phone:</strong> {{ $user->phone }}</p>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to AllyVa!</title>
    <!-- Load Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Tailwind Configuration */
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'ally-primary': '#10B981', /* Emerald 500 (Used for header and links) */
                        'ally-light': '#D1FAE5',   /* Emerald 100 */
                        'ally-blue': '#288feb',    /* Custom Blue for CTA Button */
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
        /* Fallback font */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
    </style>
    <!-- Use Inter font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen p-4 sm:p-8">

    <!-- Email Container (Centered and Max Width for Email Client Simulation) -->
    <div class="max-w-xl mx-auto bg-white rounded-xl shadow-2xl overflow-hidden">

        <!-- 1. Header & Logo Section (AllyVa Green Accent) -->
        <header class="bg-ally-primary p-6 text-center">
            <!-- Logo Placeholder (Reverted to Placeholder) -->
            <img src="https://allyva.com/images/logo.png" 
                 alt="AllyVa Company Logo" 
                 class="mx-auto h-16 rounded-lg shadow-md"
                 onerror="this.onerror=null; this.src='https://placehold.co/180x60/D1FAE5/10B981?text=AllyVa';"
            >
        </header>

        <!-- 2. Main Welcome Message Content (Updated by Arup) -->
        <main class="p-8 sm:p-10 text-gray-800">
            <p class="text-lg mb-6 text-gray-700">
                Hello, {{ $user->name }}
            </p>
            
            <p class="text-lg mb-6 text-gray-700">
                I'm Arup, and I'm here to ensure you receive immediate virtual assistance. To get started right away, please email your tasks and requests directly to me at:
            </p>

            <!-- Email Address - No longer highlighted, now aligned left (text-left) -->
            <div class="mb-6 text-left">
                <a href="mailto:arupkseth@gmail.com" class="text-lg font-semibold text-ally-primary hover:underline" style="text-decoration: none;">
                    arupkseth@gmail.com
                </a>
            </div>

            <p class="text-lg mb-6 text-gray-700">
                In the meantime, I highly encourage you to **enter your WhatsApp and other contacts in the portal**. Having this information ready allows me to serve you faster and ensures better communication.
            </p>

            <p class="text-lg text-gray-700">
                We look forward to a successful partnership.
            </p>
            
            <!-- Closing Signature (Removed font-extrabold) -->
            <p class="text-xl font-medium text-ally-primary mt-6">
                Cheers!
            </p>
            <p class="text-lg font-semibold text-gray-800">
                Arup
            </p>

            <!-- Secondary Call-to-Action Button to Portal (MOVED to the end of the body) -->
            <div class="text-center mt-10 mb-2">
                <a href="#" 
                   class="inline-block px-8 py-3 bg-ally-blue text-white text-lg font-bold rounded-full shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105"
                   style="text-decoration: none;">
                    Go to AllyVa Portal
                </a>
            </div>
        </main>

        <!-- 3. Footer Section (Social Media Links) -->
        <footer class="bg-gray-800 p-6 text-center">
            <p class="text-sm text-gray-300 mb-4">Connect with us and stay updated:</p>
            
            <div class="flex justify-center space-x-4">
                <!-- Social Link 1: Twitter -->
                <a href="#" class="inline-flex items-center justify-center h-8 w-8 bg-ally-primary text-white rounded-full hover:opacity-80 transition duration-150" aria-label="Twitter">
                    <!-- Icon placeholder (using simple text) -->
                    <span class="font-bold text-lg">T</span> 
                </a>

                <!-- Social Link 2: LinkedIn -->
                <a href="#" class="inline-flex items-center justify-center h-8 w-8 bg-ally-primary text-white rounded-full hover:opacity-80 transition duration-150" aria-label="LinkedIn">
                    <!-- Icon placeholder (using simple text) -->
                    <span class="font-bold text-lg">L</span>
                </a>

                <!-- Social Link 3: Instagram -->
                <a href="#" class="inline-flex items-center justify-center h-8 w-8 bg-ally-primary text-white rounded-full hover:opacity-80 transition duration-150" aria-label="Instagram">
                    <!-- Icon placeholder (using simple text) -->
                    <span class="font-bold text-lg">I</span>
                </a>
            </div>
        </footer>

    </div>

</body>
</html>
